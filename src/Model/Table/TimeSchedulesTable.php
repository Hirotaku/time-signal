<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * TimeSchedules Model
 *
 * @method \App\Model\Entity\TimeSchedule get($primaryKey, $options = [])
 * @method \App\Model\Entity\TimeSchedule newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\TimeSchedule[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\TimeSchedule|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\TimeSchedule patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\TimeSchedule[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\TimeSchedule findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class TimeSchedulesTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('time_schedules');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->date('day')
            ->allowEmpty('day');

        $validator
            ->integer('day_of_week')
            ->notEmpty('day_of_week');

        $validator
            ->time('time')
            ->notEmpty('time');

        $validator
            ->scalar('track')
            ->allowEmpty('track');

        $validator
            ->integer('start_track_time')
            ->allowEmpty('start_track_time');

        $validator
            ->integer('end_track_time')
            ->allowEmpty('end_track_time');

        return $validator;
    }

    /**
     * isUniqueRegularSignal
     * 重複したデータが存在しないかチェック
     *
     */
    public function isUniqueRegularSignal($saveData, $type)
    {
        //dayを指定しているか
        $query = $this->find()
            ->where([
                'day_of_week' => $saveData->day_of_week,
                'time' => $saveData->time
            ]);

        if ($type == 'edit') {
            $query->where(['id IS NOT' => $saveData->id]);
        }

        if (isset($saveData->day) && !is_null($saveData->day)) {
            $query->where(['day' => $saveData->day]);
        }

        $signal = $query->all();

        if ($signal->isEmpty()) {
            //ユニークなし
            return true;
        }

        return false;
    }
}
