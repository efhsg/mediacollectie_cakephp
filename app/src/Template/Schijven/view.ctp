<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Schijven $schijven
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Schijven'), ['action' => 'edit', $schijven->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Schijven'), ['action' => 'delete', $schijven->id], ['confirm' => __('Are you sure you want to delete # {0}?', $schijven->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Schijven'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Schijven'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="schijven view large-9 medium-8 columns content">
    <h3><?= h($schijven->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Naam') ?></th>
            <td><?= h($schijven->naam) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($schijven->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Capaciteit') ?></th>
            <td><?= $this->Number->format($schijven->capaciteit) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Beschikbaar') ?></th>
            <td><?= $this->Number->format($schijven->beschikbaar) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created At') ?></th>
            <td><?= h($schijven->created_at) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Updated At') ?></th>
            <td><?= h($schijven->updated_at) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Scandatum') ?></th>
            <td><?= h($schijven->scandatum) ?></td>
        </tr>
    </table>
</div>
