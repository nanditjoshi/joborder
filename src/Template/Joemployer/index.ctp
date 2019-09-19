<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Joemployer[]|\Cake\Collection\CollectionInterface $joemployer
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Joemployer'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="joemployer index large-9 medium-8 columns content">
    <h3><?= __('Joemployer') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('jomasterid') ?></th>
                <th scope="col"><?= $this->Paginator->sort('startdate') ?></th>
                <th scope="col"><?= $this->Paginator->sort('attachments') ?></th>
                <th scope="col"><?= $this->Paginator->sort('jobpositions') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nostaff') ?></th>
                <th scope="col"><?= $this->Paginator->sort('description') ?></th>
                <th scope="col"><?= $this->Paginator->sort('workingdays') ?></th>
                <th scope="col"><?= $this->Paginator->sort('workingweek') ?></th>
                <th scope="col"><?= $this->Paginator->sort('holidayentitlement') ?></th>
                <th scope="col"><?= $this->Paginator->sort('salaryaftertax') ?></th>
                <th scope="col"><?= $this->Paginator->sort('foodallowance') ?></th>
                <th scope="col"><?= $this->Paginator->sort('accommodation') ?></th>
                <th scope="col"><?= $this->Paginator->sort('transportcosts') ?></th>
                <th scope="col"><?= $this->Paginator->sort('lengthofcontract') ?></th>
                <th scope="col"><?= $this->Paginator->sort('medicalInsurance') ?></th>
                <th scope="col"><?= $this->Paginator->sort('airticket') ?></th>
                <th scope="col"><?= $this->Paginator->sort('candidate') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($joemployer as $joemployer): ?>
            <tr>
                <td><?= $this->Number->format($joemployer->id) ?></td>
                <td><?= $this->Number->format($joemployer->jomasterid) ?></td>
                <td><?= h($joemployer->startdate) ?></td>
                <td><?= h($joemployer->attachments) ?></td>
                <td><?= h($joemployer->jobpositions) ?></td>
                <td><?= $this->Number->format($joemployer->nostaff) ?></td>
                <td><?= $this->Number->format($joemployer->description) ?></td>
                <td><?= $this->Number->format($joemployer->workingdays) ?></td>
                <td><?= $this->Number->format($joemployer->workingweek) ?></td>
                <td><?= $this->Number->format($joemployer->holidayentitlement) ?></td>
                <td><?= $this->Number->format($joemployer->salaryaftertax) ?></td>
                <td><?= h($joemployer->foodallowance) ?></td>
                <td><?= h($joemployer->accommodation) ?></td>
                <td><?= h($joemployer->transportcosts) ?></td>
                <td><?= h($joemployer->lengthofcontract) ?></td>
                <td><?= h($joemployer->medicalInsurance) ?></td>
                <td><?= h($joemployer->airticket) ?></td>
                <td><?= h($joemployer->candidate) ?></td>
                <td><?= h($joemployer->created) ?></td>
                <td><?= h($joemployer->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $joemployer->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $joemployer->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $joemployer->id], ['confirm' => __('Are you sure you want to delete # {0}?', $joemployer->id)]) ?>
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
