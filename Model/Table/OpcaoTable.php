<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Opcao Model
 *
 * @property \App\Model\Table\QuestaoTable|\Cake\ORM\Association\BelongsToMany $Questao
 *
 * @method \App\Model\Entity\Opcao get($primaryKey, $options = [])
 * @method \App\Model\Entity\Opcao newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Opcao[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Opcao|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Opcao saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Opcao patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Opcao[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Opcao findOrCreate($search, callable $callback = null, $options = [])
 */
class OpcaoTable extends Table
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

        $this->setTable('opcao');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsToMany('Questao', [
            'foreignKey' => 'opcao_id',
            'targetForeignKey' => 'questao_id',
            'joinTable' => 'opcao_questao'
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
            ->scalar('descricao')
            ->maxLength('descricao', 255)
            ->requirePresence('descricao', 'create')
            ->notEmptyString('descricao');

        return $validator;
    }
}
