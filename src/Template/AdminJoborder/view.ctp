<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\AdminJoborder $adminJoborder
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Admin Joborder'), ['action' => 'edit', $adminJoborder->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Admin Joborder'), ['action' => 'delete', $adminJoborder->id], ['confirm' => __('Are you sure you want to delete # {0}?', $adminJoborder->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Admin Joborder'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Admin Joborder'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="adminJoborder view large-9 medium-8 columns content">
    <h3><?= h($adminJoborder->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Job-type') ?></th>
            <td><?= h($adminJoborder->job-type) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Job-status') ?></th>
            <td><?= h($adminJoborder->job-status) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Job-title') ?></th>
            <td><?= h($adminJoborder->job-title) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Preferred-country') ?></th>
            <td><?= h($adminJoborder->preferred-country) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Employer') ?></th>
            <td><?= h($adminJoborder->employer) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Agencies') ?></th>
            <td><?= h($adminJoborder->agencies) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Candidates') ?></th>
            <td><?= h($adminJoborder->candidates) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Documents') ?></th>
            <td><?= h($adminJoborder->documents) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($adminJoborder->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Start-date') ?></th>
            <td><?= h($adminJoborder->start-date) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($adminJoborder->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($adminJoborder->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Nature-of-project') ?></h4>
        <?= $this->Text->autoParagraph(h($adminJoborder->nature-of-project)); ?>
    </div>
</div>
