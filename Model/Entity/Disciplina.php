<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Disciplina Entity
 *
 * @property int $id
 * @property string $descricao
 *
 * @property \App\Model\Entity\DisciplinaProfessor[] $disciplina_professor
 * @property \App\Model\Entity\Prova[] $prova
 */
class Disciplina extends Entity
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
        'disciplina_professor' => true,
        'prova' => true
    ];
}
