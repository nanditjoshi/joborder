<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Jomaster $jomaster
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Jomaster'), ['action' => 'edit', $jomaster->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Jomaster'), ['action' => 'delete', $jomaster->id], ['confirm' => __('Are you sure you want to delete # {0}?', $jomaster->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Jomaster'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Jomaster'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="jomaster view large-9 medium-8 columns content">
    <h3><?= h($jomaster->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Jobtype') ?></th>
            <td><?= h($jomaster->jobtype) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Status') ?></th>
            <td><?= h($jomaster->status) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Title') ?></th>
            <td><?= h($jomaster->title) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Preferredcountry') ?></th>
            <td><?= h($jomaster->preferredcountry) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Employer') ?></th>
            <td><?= h($jomaster->employer) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Agencies') ?></th>
            <td><?= h($jomaster->agencies) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Candidates') ?></th>
            <td><?= h($jomaster->candidates) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Documents') ?></th>
            <td><?= h($jomaster->documents) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($jomaster->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Startdate') ?></th>
            <td><?= h($jomaster->startdate) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($jomaster->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($jomaster->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Natureofproject') ?></h4>
        <?= $this->Text->autoParagraph(h($jomaster->natureofproject)); ?>
    </div>
</div>
