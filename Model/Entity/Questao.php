<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Questao Entity
 *
 * @property int $id
 * @property string $descricao
 * @property int|null $tipo
 * @property float|null $pontuacao
 * @property int|null $dificuldade
 * @property int|null $tempo
 * @property int $disciplina
 *
 * @property \App\Model\Entity\Opcao[] $opcao
 * @property \App\Model\Entity\Prova[] $prova
 * @property \App\Model\Entity\Respostum[] $resposta
 */
class Questao extends Entity
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
        'tipo' => true,
        'pontuacao' => true,
        'dificuldade' => true,
        'tempo' => true,
        'disciplina' => true,
        'opcao' => true,
        'prova' => true,
        'resposta' => true
    ];
}
