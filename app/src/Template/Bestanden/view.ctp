<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Bestanden $bestanden
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Bestanden'), ['action' => 'edit', $bestanden->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Bestanden'), ['action' => 'delete', $bestanden->id], ['confirm' => __('Are you sure you want to delete # {0}?', $bestanden->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Bestanden'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Bestanden'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="bestanden view large-9 medium-8 columns content">
    <h3><?= h($bestanden->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Naam') ?></th>
            <td><?= h($bestanden->naam) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Bestandstype') ?></th>
            <td><?= h($bestanden->bestandstype) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Schijf') ?></th>
            <td><?= h($bestanden->schijf) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($bestanden->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Map') ?></th>
            <td><?= $this->Number->format($bestanden->map) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Grootte') ?></th>
            <td><?= $this->Number->format($bestanden->grootte) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created At') ?></th>
            <td><?= h($bestanden->created_at) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Updated At') ?></th>
            <td><?= h($bestanden->updated_at) ?></td>
        </tr>
    </table>
</div>
