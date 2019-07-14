<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Schijven $schijven
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Schijven'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="schijven form large-9 medium-8 columns content">
    <?= $this->Form->create($schijven) ?>
    <fieldset>
        <legend><?= __('Add Schijven') ?></legend>
        <?php
            echo $this->Form->control('created_at');
            echo $this->Form->control('updated_at');
            echo $this->Form->control('naam');
            echo $this->Form->control('capaciteit');
            echo $this->Form->control('beschikbaar');
            echo $this->Form->control('scandatum', ['empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
