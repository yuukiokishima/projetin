<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Disciplina $disciplina
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Disciplina'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Disciplina Professor'), ['controller' => 'DisciplinaProfessor', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Disciplina Professor'), ['controller' => 'DisciplinaProfessor', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Prova'), ['controller' => 'Prova', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Prova'), ['controller' => 'Prova', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="disciplina form large-9 medium-8 columns content">
    <?= $this->Form->create($disciplina) ?>
    <fieldset>
        <legend><?= __('Add Disciplina') ?></legend>
        <?php
            echo $this->Form->control('descricao');
            echo $this->Form->control('prova._ids', ['options' => $prova]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
