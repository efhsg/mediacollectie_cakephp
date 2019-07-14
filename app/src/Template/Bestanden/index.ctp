<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Bestanden[]|\Cake\Collection\CollectionInterface $bestanden
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Bestanden'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="bestanden index large-9 medium-8 columns content">
    <h3><?= __('Bestanden') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created_at') ?></th>
                <th scope="col"><?= $this->Paginator->sort('updated_at') ?></th>
                <th scope="col"><?= $this->Paginator->sort('naam') ?></th>
                <th scope="col"><?= $this->Paginator->sort('bestandstype') ?></th>
                <th scope="col"><?= $this->Paginator->sort('map') ?></th>
                <th scope="col"><?= $this->Paginator->sort('schijf') ?></th>
                <th scope="col"><?= $this->Paginator->sort('grootte') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($bestanden as $bestanden): ?>
            <tr>
                <td><?= $this->Number->format($bestanden->id) ?></td>
                <td><?= h($bestanden->created_at) ?></td>
                <td><?= h($bestanden->updated_at) ?></td>
                <td><?= h($bestanden->naam) ?></td>
                <td><?= h($bestanden->bestandstype) ?></td>
                <td><?= $this->Number->format($bestanden->map) ?></td>
                <td><?= h($bestanden->schijf) ?></td>
                <td><?= $this->Number->format($bestanden->grootte) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $bestanden->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $bestanden->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $bestanden->id], ['confirm' => __('Are you sure you want to delete # {0}?', $bestanden->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
