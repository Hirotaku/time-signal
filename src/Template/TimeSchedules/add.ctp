<?= $this->Html->css('build/jquery.datetimepicker.min.css') ?>

<div class="row">
  <div class="col-lg-8 col-lg-offset-2">
    <div class="card">
      <div class="header">
        <h4 class="title">New Signal</h4>
      </div>
      <div class="content">
          <?= $this->Form->create($timeSchedule) ?>
        <div class="row">
          <div class="col-lg-4">
            <?= $this->Form->input('day', ['type' => 'text', 'class' => 'form-control datepicker datetime']); ?>
          </div>
          <div class="col-lg-4">
              <?= $this->Form->input('day_of_week', ['type' => 'select', 'options' => $dayOfWeekOptions, 'class' => 'form-control']); ?>
          </div>
          <div class="col-lg-4">
              <?= $this->Form->input('time', ['type' => 'text', 'class' => 'form-control time']); ?>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4">
              <?= $this->Form->input('track', ['type' => 'text', 'class' => 'form-control']); ?>
          </div>
          <div class="col-lg-4">
              <?= $this->Form->input('start_track_time', ['type' => 'number', 'class' => 'form-control']); ?>
          </div>
          <div class="col-lg-4">
              <?= $this->Form->input('end_track_time', ['type' => 'number', 'class' => 'form-control']); ?>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-4 col-lg-offset-4">
            <?= $this->Form->button(__('Submit'), ['class' => 'btn btn-info btn-fill btn-wd']) ?>
          </div>
        </div>
          <?= $this->Form->end() ?>
      </div>
    </div>
  </div>
</div>

<?= $this->Html->css('datetime/bootstrap-material-datetimepicker.css',['block' => true]) ?>
<?= $this->Html->script('//code.jquery.com/jquery-1.12.4.js',['block' => true]) ?>
<?= $this->Html->script('moment/moment.js',['block' => true]) ?>
<?= $this->Html->script('datetime/bootstrap-material-datetimepicker.js',['block' => true]) ?>
<?= $this->Html->scriptStart(['block' => true]) ?>
  $( function() {
  $('.datetime').bootstrapMaterialDatePicker({ weekStart : 0, time: false });
  $('.time').bootstrapMaterialDatePicker({ date: false, time: true, format: 'HH:mm' });
  } );
<?= $this->Html->scriptEnd() ?>