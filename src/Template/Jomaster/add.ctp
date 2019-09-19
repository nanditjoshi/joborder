<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Jomaster $jomaster
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Jomaster'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="jomaster form large-9 medium-8 columns content">
    <?= $this->Form->create($jomaster) ?>
    <fieldset>
        <legend><?= __('Add Jomaster') ?></legend>
        <?php
            
            echo '<label for="lastname">jobtype</label>';
            $type = ['Public' => 'Public', 'Private' => 'Private'];
            echo $this->Form->select('jobtype', $type, ['default' => 'Public']);

            echo '<label for="lastname">status</label>';
            $type = ['New' => 'New', 'In Progress' => 'In Progress','On Hold' => 'On Hold', 'Agreed' => 'Agreed','Delivered' => 'Delivered', 'Closed' => 'Closed'];
            echo $this->Form->select('status', $type, ['default' => 'Public']);

            echo $this->Form->control('title');
            echo $this->Form->control('natureofproject');
            echo $this->Form->control('startdate');
            echo $this->Form->control('preferredcountry');
            //echo $this->Form->control('employer');
            //echo $this->Form->control('employer', ['options' => $employer,'label' => 'employer']);

            ?>

            <div class="input select required">
                <label for="employer">employer</label>
                <select name="employer" required="required" id="employer">
                <?php foreach ($employer as $employers): ?>
                <option value = <?= $employers->id ?> ><?= $employers->name ?></option>
                <?php endforeach; ?>

            </select>
            </div>

            


            <?php

            //echo $this->Form->control('agencies');
            //echo $this->Form->control('agencies', ['options' => $agencies,'label' => 'agencies']);

            ?>

            <div class="input select required">
                <label for="agencies">agencies</label>
                <select name="agencies[]" required="required" id="agencies" multiple="multiple">
                <?php foreach ($agencies as $agencie): ?>
                <option value = <?= $agencie->id ?> ><?= $agencie->name ?></option>
                <?php endforeach; ?>

            </select>
            </div>

            <?php

            echo $this->Form->control('candidates');
            echo $this->Form->control('documents');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
