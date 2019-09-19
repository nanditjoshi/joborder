<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\AdminJoborder $adminJoborder
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $adminJoborder->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $adminJoborder->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Admin Joborder'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="adminJoborder form large-9 medium-8 columns content">
    <?= $this->Form->create($adminJoborder) ?>
    <fieldset>
        <legend><?= __('Edit Admin Joborder') ?></legend>
        <?php
            echo $this->Form->control('job-type');
            echo $this->Form->control('job-status');
            echo $this->Form->control('job-title');
            echo $this->Form->control('nature-of-project');
            echo $this->Form->control('start-date');
            echo $this->Form->control('preferred-country');
            echo $this->Form->control('employer');
            echo $this->Form->control('agencies');
            echo $this->Form->control('candidates');
            echo $this->Form->control('documents');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
