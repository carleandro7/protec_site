<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Homes Model
 *
 * @method \App\Model\Entity\Home newEmptyEntity()
 * @method \App\Model\Entity\Home newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Home[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Home get($primaryKey, $options = [])
 * @method \App\Model\Entity\Home findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Home patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Home[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Home|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Home saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Home[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Home[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Home[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Home[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class HomesTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('homes');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Cidades', [
            'foreignKey' => 'cidades_id',
            'joinType' => 'INNER',
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->integer('id')
            ->allowEmptyString('id', null, 'create');

        $validator
            ->scalar('curso')
            ->maxLength('curso', 205)
            ->requirePresence('curso', 'create')
            ->notEmptyString('curso');

        $validator
            ->scalar('tipo')
            ->maxLength('tipo', 205)
            ->requirePresence('tipo', 'create')
            ->notEmptyString('tipo');

        $validator
            ->scalar('mensagembtn')
            ->maxLength('mensagembtn', 85)
            ->requirePresence('mensagembtn', 'create')
            ->notEmptyString('mensagembtn');

        $validator
            ->scalar('valor')
            ->maxLength('valor', 25)
            ->requirePresence('valor', 'create')
            ->notEmptyString('valor');

        $validator
            ->scalar('desconto')
            ->maxLength('desconto', 45)
            ->allowEmptyString('desconto');

        $validator
            ->scalar('status')
            ->maxLength('status', 45)
            ->requirePresence('status', 'create')
            ->notEmptyString('status');

        $validator
            ->scalar('ordem')
            ->maxLength('ordem', 45)
            ->requirePresence('ordem', 'create')
            ->notEmptyString('ordem');

        $validator
            ->scalar('linkbtn')
            ->maxLength('linkbtn', 245)
            ->requirePresence('linkbtn', 'create')
            ->notEmptyString('linkbtn');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules): RulesChecker
    {
        $rules->add($rules->existsIn(['cidades_id'], 'Cidades'), ['errorField' => 'cidades_id']);

        return $rules;
    }
}
