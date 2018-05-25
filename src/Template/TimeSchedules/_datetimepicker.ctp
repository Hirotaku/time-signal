<?= $this->Html->css('datetime/bootstrap-material-datetimepicker.css',['block' => true]) ?>
  <link href='http://fonts.googleapis.com/css?family=Roboto:400,500' rel='stylesheet' type='text/css'>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">


<?= $this->Html->script('//code.jquery.com/jquery-1.12.4.js',['block' => true]) ?>
<?= $this->Html->script('moment/moment.js',['block' => true]) ?>
<?= $this->Html->script('datetime/bootstrap-material-datetimepicker.js',['block' => true]) ?>
<?= $this->Html->scriptStart(['block' => true]) ?>
    $( function() {
    $('.datetime').bootstrapMaterialDatePicker({ weekStart : 0, time: false, clearButton: true });
    $('.time').bootstrapMaterialDatePicker({ date: false, time: true, format: 'HH:mm' });
    } );
<?= $this->Html->scriptEnd() ?>