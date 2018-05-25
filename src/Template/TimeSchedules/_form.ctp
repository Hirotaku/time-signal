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