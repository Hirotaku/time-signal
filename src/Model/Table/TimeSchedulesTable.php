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
            ->requirePresence('day', 'create');

        $validator
            ->integer('day_of_week')
            ->requirePresence('day_of_week', 'create')
            ->notEmpty('day_of_week');

        $validator
            ->time('time')
            ->requirePresence('time', 'create')
            ->notEmpty('time');

        $validator
            ->scalar('track')
            ->requirePresence('track', 'create');

        $validator
            ->integer('start_track_time')
            ->requirePresence('start_track_time', 'create');

        $validator
            ->integer('end_track_time')
            ->requirePresence('end_track_time', 'create');

        return $validator;
    }
}
