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