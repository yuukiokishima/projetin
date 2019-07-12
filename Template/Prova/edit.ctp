<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Prova $prova
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $prova->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $prova->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Prova'), ['action' => 'index']) ?></li>
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
<div class="prova form large-9 medium-8 columns content">
    <?= $this->Form->create($prova) ?>
    <fieldset>
        <legend><?= __('Edit Prova') ?></legend>
        <?php
            echo $this->Form->control('descricao');
            echo $this->Form->control('ativo');
            echo $this->Form->control('disciplina._ids', ['options' => $disciplina]);
            echo $this->Form->control('questao._ids', ['options' => $questao]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
