<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\TimeSchedule $timeSchedule
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Time Schedules'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="timeSchedules form large-9 medium-8 columns content">
    <?= $this->Form->create($timeSchedule) ?>
    <fieldset>
        <legend><?= __('Add Time Schedule') ?></legend>
        <?php
            echo $this->Form->control('day');
            echo $this->Form->control('day_of_week');
            echo $this->Form->control('time');
            echo $this->Form->control('track');
            echo $this->Form->control('start_track_time');
            echo $this->Form->control('end_track_time');
            echo $this->Form->control('deleted');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
