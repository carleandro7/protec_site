<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Cursos Model
 *
 * @method \App\Model\Entity\Curso newEmptyEntity()
 * @method \App\Model\Entity\Curso newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Curso[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Curso get($primaryKey, $options = [])
 * @method \App\Model\Entity\Curso findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Curso patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Curso[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Curso|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Curso saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Curso[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Curso[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Curso[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Curso[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class CursosTable extends Table
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

        $this->setTable('cursos');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');
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
            ->scalar('tituloprincipal')
            ->maxLength('tituloprincipal', 205)
            ->requirePresence('tituloprincipal', 'create')
            ->notEmptyString('tituloprincipal');

        $validator
            ->scalar('subtituloprincipal')
            ->maxLength('subtituloprincipal', 205)
            ->requirePresence('subtituloprincipal', 'create')
            ->notEmptyString('subtituloprincipal');

        $validator
            ->scalar('curso')
            ->maxLength('curso', 245)
            ->requirePresence('curso', 'create')
            ->notEmptyString('curso');

        $validator
            ->scalar('turno')
            ->maxLength('turno', 45)
            ->requirePresence('turno', 'create')
            ->notEmptyString('turno');

        $validator
            ->scalar('valorintegral')
            ->maxLength('valorintegral', 45)
            ->requirePresence('valorintegral', 'create')
            ->notEmptyString('valorintegral');

        $validator
            ->scalar('valordesconto')
            ->maxLength('valordesconto', 45)
            ->requirePresence('valordesconto', 'create')
            ->notEmptyString('valordesconto');

        $validator
            ->scalar('duracao')
            ->maxLength('duracao', 45)
            ->requirePresence('duracao', 'create')
            ->notEmptyString('duracao');

        $validator
            ->scalar('icone')
            ->maxLength('icone', 245)
            ->requirePresence('icone', 'create')
            ->notEmptyString('icone');
        
        $validator
            ->scalar('modalidade')
            ->maxLength('modalidade', 205)
            ->requirePresence('modalidade', 'create')
            ->notEmptyString('modalidade');

        $validator
            ->scalar('titulo')
            ->maxLength('titulo', 245)
            ->requirePresence('titulo', 'create')
            ->notEmptyString('titulo');

        $validator
            ->scalar('subtitulo')
            ->maxLength('subtitulo', 245)
            ->requirePresence('subtitulo', 'create')
            ->notEmptyString('subtitulo');

        $validator
            ->scalar('texto')
            ->requirePresence('texto', 'create')
            ->notEmptyString('texto');

        $validator
            ->scalar('imagem')
            ->maxLength('imagem', 245)
            ->requirePresence('imagem', 'create')
            ->notEmptyFile('imagem');

        $validator
            ->scalar('tituloinstituicao')
            ->maxLength('tituloinstituicao', 45)
            ->requirePresence('tituloinstituicao', 'create')
            ->notEmptyString('tituloinstituicao');

        $validator
            ->scalar('textoinstituicao')
            ->requirePresence('textoinstituicao', 'create')
            ->notEmptyString('textoinstituicao');

        return $validator;
    }
}
