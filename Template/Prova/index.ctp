<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Prova[]|\Cake\Collection\CollectionInterface $prova
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Prova'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Aluno Prova'), ['controller' => 'AlunoProva', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Aluno Prova'), ['controller' => 'AlunoProva', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Professor Prova'), ['controller' => 'ProfessorProva', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Professor Prova'), ['controller' => 'ProfessorProva', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Relacao Aluno Prova'), ['controller' => 'RelacaoAlunoProva', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Relacao Aluno Prova'), ['controller' => 'RelacaoAlunoProva', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Disciplina'), ['controller' => 'Disciplina', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Disciplina'), ['controller' => 'Disciplina', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Questao'), ['controller' => 'Questao', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Questao'), ['controller' => 'Questao', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="prova index large-9 medium-8 columns content">
    <h3><?= __('Prova') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('descricao') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ativo') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($prova as $prova): ?>
            <tr>
                <td><?= $this->Number->format($prova->id) ?></td>
                <td><?= h($prova->descricao) ?></td>
                <td><?= $this->Number->format($prova->ativo) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $prova->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $prova->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $prova->id], ['confirm' => __('Are you sure you want to delete # {0}?', $prova->id)]) ?>
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
