<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Prova $prova
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Prova'), ['action' => 'edit', $prova->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Prova'), ['action' => 'delete', $prova->id], ['confirm' => __('Are you sure you want to delete # {0}?', $prova->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Prova'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Prova'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Aluno Prova'), ['controller' => 'AlunoProva', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Aluno Prova'), ['controller' => 'AlunoProva', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Professor Prova'), ['controller' => 'ProfessorProva', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Professor Prova'), ['controller' => 'ProfessorProva', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Relacao Aluno Prova'), ['controller' => 'RelacaoAlunoProva', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Relacao Aluno Prova'), ['controller' => 'RelacaoAlunoProva', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Disciplina'), ['controller' => 'Disciplina', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Disciplina'), ['controller' => 'Disciplina', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Questao'), ['controller' => 'Questao', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Questao'), ['controller' => 'Questao', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="prova view large-9 medium-8 columns content">
    <h3><?= h($prova->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Descricao') ?></th>
            <td><?= h($prova->descricao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($prova->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ativo') ?></th>
            <td><?= $this->Number->format($prova->ativo) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Disciplina') ?></h4>
        <?php if (!empty($prova->disciplina)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Descricao') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($prova->disciplina as $disciplina): ?>
            <tr>
                <td><?= h($disciplina->id) ?></td>
                <td><?= h($disciplina->descricao) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Disciplina', 'action' => 'view', $disciplina->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Disciplina', 'action' => 'edit', $disciplina->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Disciplina', 'action' => 'delete', $disciplina->id], ['confirm' => __('Are you sure you want to delete # {0}?', $disciplina->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Questao') ?></h4>
        <?php if (!empty($prova->questao)): ?>
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
            <?php foreach ($prova->questao as $questao): ?>
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
    <div class="related">
        <h4><?= __('Related Aluno Prova') ?></h4>
        <?php if (!empty($prova->aluno_prova)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Aluno Id') ?></th>
                <th scope="col"><?= __('Prova Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($prova->aluno_prova as $alunoProva): ?>
            <tr>
                <td><?= h($alunoProva->aluno_id) ?></td>
                <td><?= h($alunoProva->prova_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'AlunoProva', 'action' => 'view', $alunoProva->aluno_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'AlunoProva', 'action' => 'edit', $alunoProva->aluno_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'AlunoProva', 'action' => 'delete', $alunoProva->aluno_id], ['confirm' => __('Are you sure you want to delete # {0}?', $alunoProva->aluno_id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Professor Prova') ?></h4>
        <?php if (!empty($prova->professor_prova)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Professor Id') ?></th>
                <th scope="col"><?= __('Prova Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($prova->professor_prova as $professorProva): ?>
            <tr>
                <td><?= h($professorProva->professor_id) ?></td>
                <td><?= h($professorProva->prova_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'ProfessorProva', 'action' => 'view', $professorProva->professor_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'ProfessorProva', 'action' => 'edit', $professorProva->professor_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'ProfessorProva', 'action' => 'delete', $professorProva->professor_id], ['confirm' => __('Are you sure you want to delete # {0}?', $professorProva->professor_id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Relacao Aluno Prova') ?></h4>
        <?php if (!empty($prova->relacao_aluno_prova)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Aluno Id') ?></th>
                <th scope="col"><?= __('Prova Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($prova->relacao_aluno_prova as $relacaoAlunoProva): ?>
            <tr>
                <td><?= h($relacaoAlunoProva->aluno_id) ?></td>
                <td><?= h($relacaoAlunoProva->prova_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'RelacaoAlunoProva', 'action' => 'view', $relacaoAlunoProva->aluno_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'RelacaoAlunoProva', 'action' => 'edit', $relacaoAlunoProva->aluno_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'RelacaoAlunoProva', 'action' => 'delete', $relacaoAlunoProva->aluno_id], ['confirm' => __('Are you sure you want to delete # {0}?', $relacaoAlunoProva->aluno_id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
