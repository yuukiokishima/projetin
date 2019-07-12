<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Prova Model
 *
 * @property \App\Model\Table\AlunoProvaTable|\Cake\ORM\Association\HasMany $AlunoProva
 * @property \App\Model\Table\ProfessorProvaTable|\Cake\ORM\Association\HasMany $ProfessorProva
 * @property \App\Model\Table\RelacaoAlunoProvaTable|\Cake\ORM\Association\HasMany $RelacaoAlunoProva
 * @property \App\Model\Table\DisciplinaTable|\Cake\ORM\Association\BelongsToMany $Disciplina
 * @property \App\Model\Table\QuestaoTable|\Cake\ORM\Association\BelongsToMany $Questao
 *
 * @method \App\Model\Entity\Prova get($primaryKey, $options = [])
 * @method \App\Model\Entity\Prova newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Prova[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Prova|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Prova saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Prova patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Prova[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Prova findOrCreate($search, callable $callback = null, $options = [])
 */
class ProvaTable extends Table
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

        $this->setTable('prova');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->hasMany('AlunoProva', [
            'foreignKey' => 'prova_id'
        ]);
        $this->hasMany('ProfessorProva', [
            'foreignKey' => 'prova_id'
        ]);
        $this->hasMany('RelacaoAlunoProva', [
            'foreignKey' => 'prova_id'
        ]);
        $this->belongsToMany('Disciplina', [
            'foreignKey' => 'prova_id',
            'targetForeignKey' => 'disciplina_id',
            'joinTable' => 'disciplina_prova'
        ]);
        $this->belongsToMany('Questao', [
            'foreignKey' => 'prova_id',
            'targetForeignKey' => 'questao_id',
            'joinTable' => 'prova_questao'
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
            ->integer('ativo')
            ->allowEmptyString('ativo');

        return $validator;
    }
}
