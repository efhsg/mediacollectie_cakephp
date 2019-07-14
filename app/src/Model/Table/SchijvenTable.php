<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Schijven Model
 *
 * @method \App\Model\Entity\Schijven get($primaryKey, $options = [])
 * @method \App\Model\Entity\Schijven newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Schijven[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Schijven|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Schijven saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Schijven patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Schijven[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Schijven findOrCreate($search, callable $callback = null, $options = [])
 */
class SchijvenTable extends Table
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

        $this->setTable('schijven');
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
            ->maxLength('naam', 64)
            ->requirePresence('naam', 'create')
            ->notEmptyString('naam')
            ->add('naam', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        $validator
            ->integer('capaciteit')
            ->allowEmptyString('capaciteit');

        $validator
            ->integer('beschikbaar')
            ->allowEmptyString('beschikbaar');

        $validator
            ->date('scandatum')
            ->allowEmptyDate('scandatum');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->isUnique(['naam']));

        return $rules;
    }
}
