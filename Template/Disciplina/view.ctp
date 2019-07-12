<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Disciplina $disciplina
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Disciplina'), ['action' => 'edit', $disciplina->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Disciplina'), ['action' => 'delete', $disciplina->id], ['confirm' => __('Are you sure you want to delete # {0}?', $disciplina->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Disciplina'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Disciplina'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Disciplina Professor'), ['controller' => 'DisciplinaProfessor', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Disciplina Professor'), ['controller' => 'DisciplinaProfessor', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Prova'), ['controller' => 'Prova', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Prova'), ['controller' => 'Prova', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="disciplina view large-9 medium-8 columns content">
    <h3><?= h($disciplina->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Descricao') ?></th>
            <td><?= h($disciplina->descricao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($disciplina->id) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Prova') ?></h4>
        <?php if (!empty($disciplina->prova)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Descricao') ?></th>
                <th scope="col"><?= __('Ativo') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($disciplina->prova as $prova): ?>
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
        <h4><?= __('Related Disciplina Professor') ?></h4>
        <?php if (!empty($disciplina->disciplina_professor)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Disciplina Id') ?></th>
                <th scope="col"><?= __('Professor Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($disciplina->disciplina_professor as $disciplinaProfessor): ?>
            <tr>
                <td><?= h($disciplinaProfessor->disciplina_id) ?></td>
                <td><?= h($disciplinaProfessor->professor_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'DisciplinaProfessor', 'action' => 'view', $disciplinaProfessor->disciplina_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'DisciplinaProfessor', 'action' => 'edit', $disciplinaProfessor->disciplina_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'DisciplinaProfessor', 'action' => 'delete', $disciplinaProfessor->disciplina_id], ['confirm' => __('Are you sure you want to delete # {0}?', $disciplinaProfessor->disciplina_id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
