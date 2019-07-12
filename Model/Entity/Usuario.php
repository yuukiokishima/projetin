<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Usuario Entity
 *
 * @property int $id
 * @property string $rga
 * @property string $nome
 * @property string $senha
 * @property string $cpf
 * @property string $email
 * @property string|null $telefone
 * @property string|null $endereco
 * @property int|null $professor
 */
class Usuario extends Entity
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
        'rga' => true,
        'nome' => true,
        'senha' => true,
        'cpf' => true,
        'email' => true,
        'telefone' => true,
        'endereco' => true,
        'professor' => true
    ];
}
