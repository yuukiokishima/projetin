<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Prova Entity
 *
 * @property int $id
 * @property string $descricao
 * @property int|null $ativo
 *
 * @property \App\Model\Entity\AlunoProva[] $aluno_prova
 * @property \App\Model\Entity\ProfessorProva[] $professor_prova
 * @property \App\Model\Entity\RelacaoAlunoProva[] $relacao_aluno_prova
 * @property \App\Model\Entity\Disciplina[] $disciplina
 * @property \App\Model\Entity\Questao[] $questao
 */
class Prova extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'descricao' => true,
        'ativo' => true,
        'aluno_prova' => true,
        'professor_prova' => true,
        'relacao_aluno_prova' => true,
        'disciplina' => true,
        'questao' => true
    ];
}
