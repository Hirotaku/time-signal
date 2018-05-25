<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */
$cakeDescription = 'Time-Signal';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>
      <?= $cakeDescription ?>
  </title>
    <?= $this->Html->meta('icon') ?>

  <!-- Bootstrap core CSS     -->
    <?= $this->Html->css('bootstrap.min.css') ?>

  <!-- Animation library for notifications   -->
    <?= $this->Html->css('animate.min.css') ?>

  <!--  Paper Dashboard core CSS    -->
    <?= $this->Html->css('paper-dashboard.css') ?>

  <!--  Fonts and icons     -->
  <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
  <link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
    <?= $this->Html->css('themify-icons.css') ?>

    <?= $this->Html->css('common.css') ?>


  <!--   Core JS Files   -->
    <?= $this->Html->script('jquery-1.10.2.js'); ?>


  <!--  Checkbox, Radio & Switch Plugins -->
    <?= $this->Html->script('bootstrap-checkbox-radio.js'); ?>

  <!--  Charts Plugin -->
    <?= $this->Html->script('chartist.min.js'); ?>

  <!--  Notifications Plugin    -->
    <?= $this->Html->script('bootstrap-notify.js'); ?>

  <!-- Paper Dashboard Core javascript and methods for Demo purpose -->


    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>
<div class="wrapper">
  <div class="sidebar" data-background-color="white" data-active-color="danger">
      <?= $this->element('global_sideber') ?>
  </div>
  <div class="main-panel">
    <div class="content">
      <div class="container-fluid">
          <?= $this->Flash->render() ?>
          <?= $this->fetch('content') ?>
      </div>
    </div>
  </div>

</div>

</body>
</html>