<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Opcao[]|\Cake\Collection\CollectionInterface $opcao
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Opcao'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Questao'), ['controller' => 'Questao', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Questao'), ['controller' => 'Questao', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="opcao index large-9 medium-8 columns content">
    <h3><?= __('Opcao') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('descricao') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($opcao as $opcao): ?>
            <tr>
                <td><?= $this->Number->format($opcao->id) ?></td>
                <td><?= h($opcao->descricao) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $opcao->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $opcao->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $opcao->id], ['confirm' => __('Are you sure you want to delete # {0}?', $opcao->id)]) ?>
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
