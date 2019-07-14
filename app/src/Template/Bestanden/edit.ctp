<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Bestanden $bestanden
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $bestanden->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $bestanden->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Bestanden'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="bestanden form large-9 medium-8 columns content">
    <?= $this->Form->create($bestanden) ?>
    <fieldset>
        <legend><?= __('Edit Bestanden') ?></legend>
        <?php
            echo $this->Form->control('created_at');
            echo $this->Form->control('updated_at');
            echo $this->Form->control('naam');
            echo $this->Form->control('bestandstype');
            echo $this->Form->control('map');
            echo $this->Form->control('schijf');
            echo $this->Form->control('grootte');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
