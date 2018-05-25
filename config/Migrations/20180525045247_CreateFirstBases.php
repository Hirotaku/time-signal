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
        $table->addColumn('day', 'text', [
            'null' => false,
        ]);
        $table->addColumn('day_of_week', 'text', [
            'null' => false,
        ]);
        $table->addColumn('time', 'datetime', [
            'null' => false,
        ]);
        $table->addColumn('track', 'text', [
            'null' => false,
        ]);
        $table->addColumn('start_track_time', 'time', [
            'null' => false,
        ]);
        $table->addColumn('end_track_time', 'time', [
            'null' => false,
        ]);
        $table->addColumn('deleted', 'datetime', [
            'null' => false,
        ]);
        $table->addColumn('created', 'datetime', [
            'null' => false,
        ]);
        $table->addColumn('modified', 'datetime', [
            'null' => false,
        ]);
        $table->create();
    }
}
