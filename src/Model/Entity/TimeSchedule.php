<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * TimeSchedule Entity
 *
 * @property int $id
 * @property string $day
 * @property string $day_of_week
 * @property \Cake\I18n\FrozenTime $time
 * @property string $track
 * @property \Cake\I18n\FrozenTime $start_track_time
 * @property \Cake\I18n\FrozenTime $end_track_time
 * @property \Cake\I18n\FrozenTime $deleted
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 */
class TimeSchedule extends Entity
{
    const SUNDAY_NUMBER    = 0;
    const MONDAY_NUMBER    = 1;
    const TUESDAY_NUMBER   = 2;
    const WEDNESDAY_NUMBER = 3;
    const THURSDAY_NUMBER  = 4;
    const FRIDAY_NUMBER    = 5;
    const SATURDAY_NUMBER  = 6;

    const DAY_OF_WEEK_OPTIONS = [
        self::MONDAY_NUMBER    => '月',
        self::TUESDAY_NUMBER   => '火',
        self::WEDNESDAY_NUMBER => '水',
        self::THURSDAY_NUMBER  => '木',
        self::FRIDAY_NUMBER    => '金',
        self::SATURDAY_NUMBER  => '土',
        self::SUNDAY_NUMBER    => '日',
    ];

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'day' => true,
        'day_of_week' => true,
        'time' => true,
        'track' => true,
        'start_track_time' => true,
        'end_track_time' => true,
        'deleted' => true,
        'created' => true,
        'modified' => true
    ];
}
