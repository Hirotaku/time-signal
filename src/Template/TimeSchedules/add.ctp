<div class="row">
  <div class="col-lg-8 col-lg-offset-2">
    <div class="card">
      <div class="header">
        <h4 class="title">New Signal</h4>
      </div>
      <div class="content">
          <?= $this->Form->create($timeSchedule, ['validate' => false]) ?>
          <?= $this->partial('form'); ?>
        <div class="row">
          <div class="col-lg-4 col-lg-offset-4">
            <?= $this->Form->button(__('登録'), ['class' => 'btn btn-info btn-fill btn-wd']) ?>
          </div>
        </div>
          <?= $this->Form->end() ?>
      </div>
    </div>
  </div>
</div>

<?= $this->partial('datetimepicker'); ?>
