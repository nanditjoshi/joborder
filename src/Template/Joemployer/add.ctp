<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Joemployer $joemployer
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Joemployer'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="joemployer form large-9 medium-8 columns content">
    <?= $this->Form->create($joemployer) ?>
    <fieldset>
        <legend><?= __('Add Joemployer') ?></legend>
        <?php
            echo $this->Form->control('jomasterid');
            echo $this->Form->control('startdate');
            echo $this->Form->control('notes');
            echo $this->Form->control('attachments');
            echo $this->Form->control('jobpositions');
            echo $this->Form->control('nostaff');
            echo $this->Form->control('description');
            echo $this->Form->control('workingdays');
            echo $this->Form->control('workingweek');
            echo $this->Form->control('holidayentitlement');
            echo $this->Form->control('salaryaftertax');
            echo $this->Form->control('foodallowance');
            echo $this->Form->control('accommodation');
            echo $this->Form->control('transportcosts');
            echo $this->Form->control('lengthofcontract');
            echo $this->Form->control('medicalInsurance');
            echo $this->Form->control('airticket');
            echo $this->Form->control('otherdetails');
            echo $this->Form->control('candidate');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
