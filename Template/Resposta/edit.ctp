<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Respostum $respostum
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $respostum->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $respostum->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Resposta'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Questao'), ['controller' => 'Questao', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Questao'), ['controller' => 'Questao', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="resposta form large-9 medium-8 columns content">
    <?= $this->Form->create($respostum) ?>
    <fieldset>
        <legend><?= __('Edit Respostum') ?></legend>
        <?php
            echo $this->Form->control('numerico');
            echo $this->Form->control('texto');
            echo $this->Form->control('questao._ids', ['options' => $questao]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
