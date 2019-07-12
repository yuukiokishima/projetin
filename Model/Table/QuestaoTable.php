<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Questao Model
 *
 * @property \App\Model\Table\OpcaoTable|\Cake\ORM\Association\BelongsToMany $Opcao
 * @property \App\Model\Table\ProvaTable|\Cake\ORM\Association\BelongsToMany $Prova
 * @property \App\Model\Table\RespostaTable|\Cake\ORM\Association\BelongsToMany $Resposta
 *
 * @method \App\Model\Entity\Questao get($primaryKey, $options = [])
 * @method \App\Model\Entity\Questao newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Questao[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Questao|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Questao saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Questao patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Questao[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Questao findOrCreate($search, callable $callback = null, $options = [])
 */
class QuestaoTable extends Table
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

        $this->setTable('questao');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsToMany('Opcao', [
            'foreignKey' => 'questao_id',
            'targetForeignKey' => 'opcao_id',
            'joinTable' => 'opcao_questao'
        ]);
        $this->belongsToMany('Prova', [
            'foreignKey' => 'questao_id',
            'targetForeignKey' => 'prova_id',
            'joinTable' => 'prova_questao'
        ]);
        $this->belongsToMany('Resposta', [
            'foreignKey' => 'questao_id',
            'targetForeignKey' => 'respostum_id',
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
            ->scalar('descricao')
            ->maxLength('descricao', 255)
            ->requirePresence('descricao', 'create')
            ->notEmptyString('descricao');

        $validator
            ->integer('tipo')
            ->allowEmptyString('tipo');

        $validator
            ->numeric('pontuacao')
            ->allowEmptyString('pontuacao');

        $validator
            ->integer('dificuldade')
            ->allowEmptyString('dificuldade');

        $validator
            ->integer('tempo')
            ->allowEmptyString('tempo');

        $validator
            ->integer('disciplina')
            ->requirePresence('disciplina', 'create')
            ->notEmptyString('disciplina');

        return $validator;
    }
}
