<div class="row">
    <div class="col-lg-4">
        <label>日付</label>
        <?= $this->Form->input('day', [
            'label' => false, 'type' => 'text', 'class' => 'form-control datetime', 'required' => false
            ]); ?>
    </div>
    <div class="col-lg-4">
        <label>曜日<label style="color: red">*</label></label>
        <?= $this->Form->input('day_of_week', [
            'label' => false, 'type' => 'select', 'options' => $dayOfWeekOptions, 'class' => 'form-control'
        ]); ?>
    </div>
    <div class="col-lg-4">
        <label>時刻<label style="color: red">*</label></label>
        <?= $this->Form->input('time', [
            'label' => false, 'type' => 'text', 'class' => 'form-control time'
        ]); ?>
    </div>
</div>
<div class="row">
    <div class="col-lg-4">
        <label>曲名（ファイル名）</label>
        <?= $this->Form->input('track', [
            'label' => false, 'type' => 'text', 'class' => 'form-control', 'required' => false
        ]); ?>
    </div>
    <div class="col-lg-4">
        <label>再生開始時間</label>
        <?= $this->Form->input('start_track_time', [
            'label' => false, 'type' => 'number', 'class' => 'form-control', 'required' => false
        ]); ?>
    </div>
    <div class="col-lg-4">
        <label>再生終了時間</label>
        <?= $this->Form->input('end_track_time', [
            'label' => false, 'type' => 'number', 'class' => 'form-control', 'required' => false
        ]); ?>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <h5>注意事項</h5>
        <p>※日付指定しない場合は定期実行になります</p>
        <p>※曲名（ファイル名）を指定しない場合はランダム再生になります</p>
        <p>※再生したいファイルは以下の場所に設置してください。</p>
        <p>/home/pi/time-signal/</p>
    </div>
</div>
