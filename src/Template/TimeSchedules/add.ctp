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
            <?= $this->Form->input('day', ['type' => 'text', 'class' => 'form-control datepicker']); ?>
          </div>
          <div class="col-lg-4">
              <?= $this->Form->input('day_of_week', ['type' => 'select', 'options' => $dayOfWeekOptions, 'class' => 'form-control']); ?>
          </div>
          <div class="col-lg-4">
              <?= $this->Form->input('time', ['type' => 'text', 'class' => 'form-control']); ?>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4">
              <?= $this->Form->input('track', ['type' => 'text', 'class' => 'form-control']); ?>
          </div>
          <div class="col-lg-4">
              <?= $this->Form->input('start_track_time', ['type' => 'text', 'class' => 'form-control']); ?>
          </div>
          <div class="col-lg-4">
              <?= $this->Form->input('end_track_time', ['type' => 'text', 'class' => 'form-control']); ?>
          </div>
        </div>


          <?= $this->Form->button(__('Submit'), ['class' => 'btn btn-info btn-fill btn-wd']) ?>
          <?= $this->Form->end() ?>
      </div>
    </div>
  </div>
</div>

<?= $this->Html->css('//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css',['block' => true]) ?>
<?= $this->Html->script('//code.jquery.com/jquery-1.12.4.js',['block' => true]) ?>
<?= $this->Html->script('//code.jquery.com/ui/1.12.1/jquery-ui.js',['block' => true]) ?>
<?= $this->Html->scriptStart(['block' => true]) ?>
  $( function() {
  $( ".datepicker" ).datepicker();
  } );
<?= $this->Html->scriptEnd() ?>