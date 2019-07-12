<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Questao $questao
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $questao->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $questao->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Questao'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Opcao'), ['controller' => 'Opcao', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Opcao'), ['controller' => 'Opcao', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Prova'), ['controller' => 'Prova', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Prova'), ['controller' => 'Prova', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Resposta'), ['controller' => 'Resposta', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Respostum'), ['controller' => 'Resposta', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="questao form large-9 medium-8 columns content">
    <?= $this->Form->create($questao) ?>
    <fieldset>
        <legend><?= __('Edit Questao') ?></legend>
        <?php
            echo $this->Form->control('descricao');
            echo $this->Form->control('tipo');
            echo $this->Form->control('pontuacao');
            echo $this->Form->control('dificuldade');
            echo $this->Form->control('tempo');
            echo $this->Form->control('disciplina');
            echo $this->Form->control('opcao._ids', ['options' => $opcao]);
            echo $this->Form->control('prova._ids', ['options' => $prova]);
            echo $this->Form->control('resposta._ids', ['options' => $resposta]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
