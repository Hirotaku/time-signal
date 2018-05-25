<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TimeSchedulesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TimeSchedulesTable Test Case
 */
class TimeSchedulesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\TimeSchedulesTable
     */
    public $TimeSchedules;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.time_schedules'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('TimeSchedules') ? [] : ['className' => TimeSchedulesTable::class];
        $this->TimeSchedules = TableRegistry::get('TimeSchedules', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->TimeSchedules);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
