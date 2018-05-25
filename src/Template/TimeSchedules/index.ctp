<?php
use App\Model\Entity\TimeSchedule;
?>
<div class="row">
  <div class="col-md-12">
    <div class="card">
      <div class="card-header">
        <h4 class="title">Time Schedules</h4>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table">
            <thead>
            <tr>
              <th scope="col"><?= $this->Paginator->sort('day', '日付') ?></th>
              <th scope="col"><?= $this->Paginator->sort('day_of_week', '曜日') ?></th>
              <th scope="col"><?= $this->Paginator->sort('time', '時刻') ?></th>
              <th scope="col"><?= $this->Paginator->sort('track', '曲名') ?></th>
              <th scope="col"><?= $this->Paginator->sort('start_track_time', '再生開始時間(s)') ?></th>
              <th scope="col"><?= $this->Paginator->sort('end_track_time', '再生終了時刻(s)') ?></th>
              <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($timeSchedules as $timeSchedule): ?>
              <tr>
                <td><?= h($timeSchedule->day) ?></td>
                <td><?= h(TimeSchedule::DAY_OF_WEEK_OPTIONS[$timeSchedule->day_of_week]) ?></td>
                <td><?= h($timeSchedule->time) ?></td>
                <td><?= h($timeSchedule->track) ?></td>
                <td><?= h($timeSchedule->start_track_time) ?></td>
                <td><?= h($timeSchedule->end_track_time) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $timeSchedule->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $timeSchedule->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $timeSchedule->id], ['confirm' => __('Are you sure you want to delete # {0}?', $timeSchedule->id)]) ?>
                </td>
              </tr>
            <?php endforeach; ?>
            </tbody>
          </table>
        </div>
      </div>

    </div>

  </div>

</div>

