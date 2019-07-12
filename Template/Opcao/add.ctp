<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Opcao $opcao
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Opcao'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Questao'), ['controller' => 'Questao', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Questao'), ['controller' => 'Questao', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="opcao form large-9 medium-8 columns content">
    <?= $this->Form->create($opcao) ?>
    <fieldset>
        <legend><?= __('Add Opcao') ?></legend>
        <?php
            echo $this->Form->control('descricao');
            echo $this->Form->control('questao._ids', ['options' => $questao]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
