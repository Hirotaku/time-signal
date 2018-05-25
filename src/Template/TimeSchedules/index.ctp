<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\TimeSchedule[]|\Cake\Collection\CollectionInterface $timeSchedules
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Time Schedule'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="timeSchedules index large-9 medium-8 columns content">
    <h3><?= __('Time Schedules') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('time') ?></th>
                <th scope="col"><?= $this->Paginator->sort('start_track_time') ?></th>
                <th scope="col"><?= $this->Paginator->sort('end_track_time') ?></th>
                <th scope="col"><?= $this->Paginator->sort('deleted') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($timeSchedules as $timeSchedule): ?>
            <tr>
                <td><?= $this->Number->format($timeSchedule->id) ?></td>
                <td><?= h($timeSchedule->time) ?></td>
                <td><?= h($timeSchedule->start_track_time) ?></td>
                <td><?= h($timeSchedule->end_track_time) ?></td>
                <td><?= h($timeSchedule->deleted) ?></td>
                <td><?= h($timeSchedule->created) ?></td>
                <td><?= h($timeSchedule->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $timeSchedule->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $timeSchedule->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $timeSchedule->id], ['confirm' => __('Are you sure you want to delete # {0}?', $timeSchedule->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
