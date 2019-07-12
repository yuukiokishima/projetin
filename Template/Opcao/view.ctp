<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Opcao $opcao
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Opcao'), ['action' => 'edit', $opcao->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Opcao'), ['action' => 'delete', $opcao->id], ['confirm' => __('Are you sure you want to delete # {0}?', $opcao->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Opcao'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Opcao'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Questao'), ['controller' => 'Questao', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Questao'), ['controller' => 'Questao', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="opcao view large-9 medium-8 columns content">
    <h3><?= h($opcao->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Descricao') ?></th>
            <td><?= h($opcao->descricao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($opcao->id) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Questao') ?></h4>
        <?php if (!empty($opcao->questao)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Descricao') ?></th>
                <th scope="col"><?= __('Tipo') ?></th>
                <th scope="col"><?= __('Pontuacao') ?></th>
                <th scope="col"><?= __('Dificuldade') ?></th>
                <th scope="col"><?= __('Tempo') ?></th>
                <th scope="col"><?= __('Disciplina') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($opcao->questao as $questao): ?>
            <tr>
                <td><?= h($questao->id) ?></td>
                <td><?= h($questao->descricao) ?></td>
                <td><?= h($questao->tipo) ?></td>
                <td><?= h($questao->pontuacao) ?></td>
                <td><?= h($questao->dificuldade) ?></td>
                <td><?= h($questao->tempo) ?></td>
                <td><?= h($questao->disciplina) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Questao', 'action' => 'view', $questao->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Questao', 'action' => 'edit', $questao->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Questao', 'action' => 'delete', $questao->id], ['confirm' => __('Are you sure you want to delete # {0}?', $questao->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
