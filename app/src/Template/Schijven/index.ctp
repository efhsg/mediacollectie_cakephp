<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Schijven[]|\Cake\Collection\CollectionInterface $schijven
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Schijven'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="schijven index large-9 medium-8 columns content">
    <h3><?= __('Schijven') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created_at') ?></th>
                <th scope="col"><?= $this->Paginator->sort('updated_at') ?></th>
                <th scope="col"><?= $this->Paginator->sort('naam') ?></th>
                <th scope="col"><?= $this->Paginator->sort('capaciteit') ?></th>
                <th scope="col"><?= $this->Paginator->sort('beschikbaar') ?></th>
                <th scope="col"><?= $this->Paginator->sort('scandatum') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($schijven as $schijven): ?>
            <tr>
                <td><?= $this->Number->format($schijven->id) ?></td>
                <td><?= h($schijven->created_at) ?></td>
                <td><?= h($schijven->updated_at) ?></td>
                <td><?= h($schijven->naam) ?></td>
                <td><?= $this->Number->format($schijven->capaciteit) ?></td>
                <td><?= $this->Number->format($schijven->beschikbaar) ?></td>
                <td><?= h($schijven->scandatum) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $schijven->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $schijven->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $schijven->id], ['confirm' => __('Are you sure you want to delete # {0}?', $schijven->id)]) ?>
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
