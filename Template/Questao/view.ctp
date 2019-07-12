<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Questao $questao
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Questao'), ['action' => 'edit', $questao->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Questao'), ['action' => 'delete', $questao->id], ['confirm' => __('Are you sure you want to delete # {0}?', $questao->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Questao'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Questao'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Opcao'), ['controller' => 'Opcao', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Opcao'), ['controller' => 'Opcao', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Prova'), ['controller' => 'Prova', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Prova'), ['controller' => 'Prova', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Resposta'), ['controller' => 'Resposta', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Respostum'), ['controller' => 'Resposta', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="questao view large-9 medium-8 columns content">
    <h3><?= h($questao->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Descricao') ?></th>
            <td><?= h($questao->descricao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($questao->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tipo') ?></th>
            <td><?= $this->Number->format($questao->tipo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Pontuacao') ?></th>
            <td><?= $this->Number->format($questao->pontuacao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Dificuldade') ?></th>
            <td><?= $this->Number->format($questao->dificuldade) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tempo') ?></th>
            <td><?= $this->Number->format($questao->tempo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Disciplina') ?></th>
            <td><?= $this->Number->format($questao->disciplina) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Opcao') ?></h4>
        <?php if (!empty($questao->opcao)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Descricao') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($questao->opcao as $opcao): ?>
            <tr>
                <td><?= h($opcao->id) ?></td>
                <td><?= h($opcao->descricao) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Opcao', 'action' => 'view', $opcao->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Opcao', 'action' => 'edit', $opcao->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Opcao', 'action' => 'delete', $opcao->id], ['confirm' => __('Are you sure you want to delete # {0}?', $opcao->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Prova') ?></h4>
        <?php if (!empty($questao->prova)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Descricao') ?></th>
                <th scope="col"><?= __('Ativo') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($questao->prova as $prova): ?>
            <tr>
                <td><?= h($prova->id) ?></td>
                <td><?= h($prova->descricao) ?></td>
                <td><?= h($prova->ativo) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Prova', 'action' => 'view', $prova->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Prova', 'action' => 'edit', $prova->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Prova', 'action' => 'delete', $prova->id], ['confirm' => __('Are you sure you want to delete # {0}?', $prova->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Resposta') ?></h4>
        <?php if (!empty($questao->resposta)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Numerico') ?></th>
                <th scope="col"><?= __('Texto') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($questao->resposta as $resposta): ?>
            <tr>
                <td><?= h($resposta->id) ?></td>
                <td><?= h($resposta->numerico) ?></td>
                <td><?= h($resposta->texto) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Resposta', 'action' => 'view', $resposta->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Resposta', 'action' => 'edit', $resposta->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Resposta', 'action' => 'delete', $resposta->id], ['confirm' => __('Are you sure you want to delete # {0}?', $resposta->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
