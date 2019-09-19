<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<!--<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?></li>
    </ul>
</nav>-->
<div class="users form large-9 medium-8 columns content">
    <?= $this->Form->create($user) ?>
    <fieldset>
        <legend><?= __('Add User') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('companyName');
            echo $this->Form->control('address');
            echo $this->Form->control('city');
            echo $this->Form->control('country');
            echo $this->Form->control('email');
            echo $this->Form->control('password');
            echo $this->Form->control('mobileNumber');
            
            echo '<label for="lastname">usertype</label>';
            $type = ['Agency' => 'Agency', 'Employer' => 'Employer', 'Candidate' => 'Candidate'];
            echo $this->Form->select('usertype', $type, ['default' => 'Agency']);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
