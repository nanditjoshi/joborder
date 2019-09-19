<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Jomaster[]|\Cake\Collection\CollectionInterface $jomaster
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Jomaster'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="jomaster index large-9 medium-8 columns content">
    <h3><?= __('Jomaster') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('jobtype') ?></th>
                <th scope="col"><?= $this->Paginator->sort('status') ?></th>
                <th scope="col"><?= $this->Paginator->sort('title') ?></th>
                <th scope="col"><?= $this->Paginator->sort('startdate') ?></th>
                <th scope="col"><?= $this->Paginator->sort('preferredcountry') ?></th>
                <th scope="col"><?= $this->Paginator->sort('employer') ?></th>
                <th scope="col"><?= $this->Paginator->sort('agencies') ?></th>
                <th scope="col"><?= $this->Paginator->sort('candidates') ?></th>
                <th scope="col"><?= $this->Paginator->sort('documents') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($jomaster as $jomaster): ?>
            <tr>
                <td><?= $this->Number->format($jomaster->id) ?></td>
                <td><?= h($jomaster->jobtype) ?></td>
                <td><?= h($jomaster->status) ?></td>
                <td><?= h($jomaster->title) ?></td>
                <td><?= h($jomaster->startdate) ?></td>
                <td><?= h($jomaster->preferredcountry) ?></td>
                <td><?= h($jomaster->employer) ?></td>
                <td><?= h($jomaster->agencies) ?></td>
                <td><?= h($jomaster->candidates) ?></td>
                <td><?= h($jomaster->documents) ?></td>
                <td><?= h($jomaster->created) ?></td>
                <td><?= h($jomaster->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $jomaster->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $jomaster->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $jomaster->id], ['confirm' => __('Are you sure you want to delete # {0}?', $jomaster->id)]) ?>
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
