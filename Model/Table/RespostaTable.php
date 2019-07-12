<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Resposta Model
 *
 * @property \App\Model\Table\QuestaoTable|\Cake\ORM\Association\BelongsToMany $Questao
 *
 * @method \App\Model\Entity\Respostum get($primaryKey, $options = [])
 * @method \App\Model\Entity\Respostum newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Respostum[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Respostum|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Respostum saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Respostum patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Respostum[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Respostum findOrCreate($search, callable $callback = null, $options = [])
 */
class RespostaTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('resposta');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsToMany('Questao', [
            'foreignKey' => 'respostum_id',
            'targetForeignKey' => 'questao_id',
            'joinTable' => 'questao_resposta'
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmptyString('id', null, 'create');

        $validator
            ->integer('numerico')
            ->allowEmptyString('numerico');

        $validator
            ->scalar('texto')
            ->maxLength('texto', 255)
            ->allowEmptyString('texto');

        return $validator;
    }
}
