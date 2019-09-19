<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Joemployer Model
 *
 * @method \App\Model\Entity\Joemployer get($primaryKey, $options = [])
 * @method \App\Model\Entity\Joemployer newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Joemployer[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Joemployer|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Joemployer saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Joemployer patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Joemployer[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Joemployer findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class JoemployerTable extends Table
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

        $this->setTable('joemployer');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('jomaster')->setForeignKey('jomasterid')->setJoinType('INNER');
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
            ->integer('jomasterid')
            ->requirePresence('jomasterid', 'create')
            ->notEmptyString('jomasterid')
            ->add('jomasterid', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        $validator
            ->date('startdate')
            ->requirePresence('startdate', 'create')
            ->notEmptyDate('startdate');

        $validator
            ->scalar('notes')
            ->requirePresence('notes', 'create')
            ->notEmptyString('notes');

        $validator
            ->scalar('attachments')
            ->maxLength('attachments', 255)
            ->requirePresence('attachments', 'create')
            ->notEmptyString('attachments');

        $validator
            ->scalar('jobpositions')
            ->maxLength('jobpositions', 255)
            ->requirePresence('jobpositions', 'create')
            ->notEmptyString('jobpositions');

        $validator
            ->integer('nostaff')
            ->requirePresence('nostaff', 'create')
            ->notEmptyString('nostaff');

        $validator
            ->integer('description')
            ->requirePresence('description', 'create')
            ->notEmptyString('description');

        $validator
            ->integer('workingdays')
            ->requirePresence('workingdays', 'create')
            ->notEmptyString('workingdays');

        $validator
            ->integer('workingweek')
            ->requirePresence('workingweek', 'create')
            ->notEmptyString('workingweek');

        $validator
            ->integer('holidayentitlement')
            ->requirePresence('holidayentitlement', 'create')
            ->notEmptyString('holidayentitlement');

        $validator
            ->numeric('salaryaftertax')
            ->requirePresence('salaryaftertax', 'create')
            ->notEmptyString('salaryaftertax');

        $validator
            ->scalar('foodallowance')
            ->maxLength('foodallowance', 255)
            ->requirePresence('foodallowance', 'create')
            ->notEmptyString('foodallowance');

        $validator
            ->scalar('accommodation')
            ->maxLength('accommodation', 50)
            ->requirePresence('accommodation', 'create')
            ->notEmptyString('accommodation');

        $validator
            ->scalar('transportcosts')
            ->maxLength('transportcosts', 50)
            ->requirePresence('transportcosts', 'create')
            ->notEmptyString('transportcosts');

        $validator
            ->scalar('lengthofcontract')
            ->maxLength('lengthofcontract', 50)
            ->requirePresence('lengthofcontract', 'create')
            ->notEmptyString('lengthofcontract');

        $validator
            ->scalar('medicalInsurance')
            ->maxLength('medicalInsurance', 50)
            ->requirePresence('medicalInsurance', 'create')
            ->notEmptyString('medicalInsurance');

        $validator
            ->scalar('airticket')
            ->maxLength('airticket', 50)
            ->requirePresence('airticket', 'create')
            ->notEmptyString('airticket');

        $validator
            ->scalar('otherdetails')
            ->requirePresence('otherdetails', 'create')
            ->notEmptyString('otherdetails');

        $validator
            ->scalar('candidate')
            ->maxLength('candidate', 255)
            ->requirePresence('candidate', 'create')
            ->notEmptyString('candidate');

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
        $rules->add($rules->isUnique(['jomasterid']));

        return $rules;
    }
}
