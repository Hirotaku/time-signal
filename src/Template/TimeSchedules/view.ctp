<?php
use App\Model\Entity\TimeSchedule;
?>
<div class="row">
  <div class="col-md-12">
    <div class="card">
      <div class="card-header">
        <h4 class="title">Time Schedule</h4>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table">
            <thead>
            <tr>
              <th scope="col"></th>
              <th scope="col"></th>
            </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row"><?= __('日付') ?></th>
                <td><?= h($timeSchedule->day) ?></td>
              </tr>
              <tr>
                <th scope="row"><?= __('曜日') ?></th>
                <td><?= h(TimeSchedule::DAY_OF_WEEK_OPTIONS[$timeSchedule->day_of_week]) ?></td>
              </tr>
              <tr>
                <th scope="row"><?= __('時刻') ?></th>
                <td><?= h($timeSchedule->time) ?></td>
              </tr>
              <tr>
                <th scope="row"><?= __('曲名') ?></th>
                <td><?= h($timeSchedule->track) ?></td>
              </tr>
              <tr>
                <th scope="row"><?= __('再生開始時間(s)') ?></th>
                <td><?= h($timeSchedule->start_track_time) ?></td>
              </tr>
              <tr>
                <th scope="row"><?= __('再生終了時間(s)') ?></th>
                <td><?= h($timeSchedule->end_track_time) ?></td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>

    </div>

  </div>

</div>
