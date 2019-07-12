<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Questao[]|\Cake\Collection\CollectionInterface $questao
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Questao'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Opcao'), ['controller' => 'Opcao', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Opcao'), ['controller' => 'Opcao', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Prova'), ['controller' => 'Prova', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Prova'), ['controller' => 'Prova', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Resposta'), ['controller' => 'Resposta', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Respostum'), ['controller' => 'Resposta', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="questao index large-9 medium-8 columns content">
    <h3><?= __('Questao') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('descricao') ?></th>
                <th scope="col"><?= $this->Paginator->sort('tipo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('pontuacao') ?></th>
                <th scope="col"><?= $this->Paginator->sort('dificuldade') ?></th>
                <th scope="col"><?= $this->Paginator->sort('tempo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('disciplina') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($questao as $questao): ?>
            <tr>
                <td><?= $this->Number->format($questao->id) ?></td>
                <td><?= h($questao->descricao) ?></td>
                <td><?= $this->Number->format($questao->tipo) ?></td>
                <td><?= $this->Number->format($questao->pontuacao) ?></td>
                <td><?= $this->Number->format($questao->dificuldade) ?></td>
                <td><?= $this->Number->format($questao->tempo) ?></td>
                <td><?= $this->Number->format($questao->disciplina) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $questao->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $questao->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $questao->id], ['confirm' => __('Are you sure you want to delete # {0}?', $questao->id)]) ?>
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
