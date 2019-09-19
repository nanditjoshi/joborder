<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Joemployer $joemployer
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Joemployer'), ['action' => 'edit', $joemployer->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Joemployer'), ['action' => 'delete', $joemployer->id], ['confirm' => __('Are you sure you want to delete # {0}?', $joemployer->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Joemployer'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Joemployer'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="joemployer view large-9 medium-8 columns content">
    <h3><?= h($joemployer->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Attachments') ?></th>
            <td><?= h($joemployer->attachments) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Jobpositions') ?></th>
            <td><?= h($joemployer->jobpositions) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Foodallowance') ?></th>
            <td><?= h($joemployer->foodallowance) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Accommodation') ?></th>
            <td><?= h($joemployer->accommodation) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Transportcosts') ?></th>
            <td><?= h($joemployer->transportcosts) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Lengthofcontract') ?></th>
            <td><?= h($joemployer->lengthofcontract) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('MedicalInsurance') ?></th>
            <td><?= h($joemployer->medicalInsurance) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Airticket') ?></th>
            <td><?= h($joemployer->airticket) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Candidate') ?></th>
            <td><?= h($joemployer->candidate) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($joemployer->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Jomasterid') ?></th>
            <td><?= $this->Number->format($joemployer->jomasterid) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Nostaff') ?></th>
            <td><?= $this->Number->format($joemployer->nostaff) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Description') ?></th>
            <td><?= $this->Number->format($joemployer->description) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Workingdays') ?></th>
            <td><?= $this->Number->format($joemployer->workingdays) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Workingweek') ?></th>
            <td><?= $this->Number->format($joemployer->workingweek) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Holidayentitlement') ?></th>
            <td><?= $this->Number->format($joemployer->holidayentitlement) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Salaryaftertax') ?></th>
            <td><?= $this->Number->format($joemployer->salaryaftertax) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Startdate') ?></th>
            <td><?= h($joemployer->startdate) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($joemployer->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($joemployer->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Notes') ?></h4>
        <?= $this->Text->autoParagraph(h($joemployer->notes)); ?>
    </div>
    <div class="row">
        <h4><?= __('Otherdetails') ?></h4>
        <?= $this->Text->autoParagraph(h($joemployer->otherdetails)); ?>
    </div>
</div>
