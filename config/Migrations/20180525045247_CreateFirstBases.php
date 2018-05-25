<?php
use Migrations\AbstractMigration;

class CreateFirstBases extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-change-method
     * @return void
     */
    public function change()
    {
        $table = $this->table('time_schedules');
        $table->addColumn('day', 'date', [
            'null' => true,
        ]);
        $table->addColumn('day_of_week', 'integer', [
            'null' => true,
        ]);
        $table->addColumn('time', 'time', [
            'null' => true,
        ]);
        $table->addColumn('track', 'text', [
            'null' => true,
        ]);
        $table->addColumn('start_track_time', 'integer', [
            'null' => true,
        ]);
        $table->addColumn('end_track_time', 'integer', [
            'null' => true,
        ]);
        $table->addColumn('deleted', 'datetime', [
            'null' => true,
        ]);
        $table->addColumn('created', 'datetime', [
            'null' => true,
        ]);
        $table->addColumn('modified', 'datetime', [
            'null' => true,
        ]);
        $table->create();
    }
}
