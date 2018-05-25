<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\TimeSchedule $timeSchedule
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Time Schedule'), ['action' => 'edit', $timeSchedule->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Time Schedule'), ['action' => 'delete', $timeSchedule->id], ['confirm' => __('Are you sure you want to delete # {0}?', $timeSchedule->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Time Schedules'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Time Schedule'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="timeSchedules view large-9 medium-8 columns content">
    <h3><?= h($timeSchedule->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($timeSchedule->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Time') ?></th>
            <td><?= h($timeSchedule->time) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Start Track Time') ?></th>
            <td><?= h($timeSchedule->start_track_time) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('End Track Time') ?></th>
            <td><?= h($timeSchedule->end_track_time) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Deleted') ?></th>
            <td><?= h($timeSchedule->deleted) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($timeSchedule->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($timeSchedule->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Day') ?></h4>
        <?= $this->Text->autoParagraph(h($timeSchedule->day)); ?>
    </div>
    <div class="row">
        <h4><?= __('Day Of Week') ?></h4>
        <?= $this->Text->autoParagraph(h($timeSchedule->day_of_week)); ?>
    </div>
    <div class="row">
        <h4><?= __('Track') ?></h4>
        <?= $this->Text->autoParagraph(h($timeSchedule->track)); ?>
    </div>
</div>
