<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Jomaster $jomaster
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $jomaster->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $jomaster->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Jomaster'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="jomaster form large-9 medium-8 columns content">
    <?= $this->Form->create($jomaster) ?>
    <fieldset>
        <legend><?= __('Edit Jomaster') ?></legend>
        <?php
            echo $this->Form->control('jobtype');
            echo $this->Form->control('status');
            echo $this->Form->control('title');
            echo $this->Form->control('natureofproject');
            echo $this->Form->control('startdate');
            echo $this->Form->control('preferredcountry');
            echo $this->Form->control('employer');
            echo $this->Form->control('agencies');
            echo $this->Form->control('candidates');
            echo $this->Form->control('documents');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
