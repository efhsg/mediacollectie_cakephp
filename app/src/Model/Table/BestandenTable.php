<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Bestanden Model
 *
 * @method \App\Model\Entity\Bestanden get($primaryKey, $options = [])
 * @method \App\Model\Entity\Bestanden newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Bestanden[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Bestanden|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Bestanden saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Bestanden patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Bestanden[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Bestanden findOrCreate($search, callable $callback = null, $options = [])
 */
class BestandenTable extends Table
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

        $this->setTable('bestanden');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');
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
            ->dateTime('created_at')
            ->allowEmptyDateTime('created_at');

        $validator
            ->dateTime('updated_at')
            ->allowEmptyDateTime('updated_at');

        $validator
            ->scalar('naam')
            ->maxLength('naam', 200)
            ->requirePresence('naam', 'create')
            ->notEmptyString('naam');

        $validator
            ->scalar('bestandstype')
            ->maxLength('bestandstype', 255)
            ->allowEmptyString('bestandstype');

        $validator
            ->integer('map')
            ->allowEmptyString('map');

        $validator
            ->scalar('schijf')
            ->maxLength('schijf', 64)
            ->allowEmptyString('schijf');

        $validator
            ->integer('grootte')
            ->allowEmptyString('grootte');

        return $validator;
    }
}
