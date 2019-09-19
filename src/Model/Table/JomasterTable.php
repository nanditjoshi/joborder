<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Jomaster Model
 *
 * @method \App\Model\Entity\Jomaster get($primaryKey, $options = [])
 * @method \App\Model\Entity\Jomaster newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Jomaster[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Jomaster|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Jomaster saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Jomaster patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Jomaster[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Jomaster findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class JomasterTable extends Table
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

        $this->setTable('jomaster');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Users')->setForeignKey('employer')->setJoinType('INNER');

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
            ->scalar('jobtype')
            ->notEmptyString('jobtype');

        $validator
            ->scalar('status')
            ->maxLength('status', 50)
            ->requirePresence('status', 'create')
            ->notEmptyString('status');

        $validator
            ->scalar('title')
            ->maxLength('title', 255)
            ->requirePresence('title', 'create')
            ->notEmptyString('title');

        $validator
            ->scalar('natureofproject')
            ->requirePresence('natureofproject', 'create')
            ->notEmptyString('natureofproject');

        $validator
            ->date('startdate')
            ->requirePresence('startdate', 'create')
            ->notEmptyDate('startdate');

        $validator
            ->scalar('preferredcountry')
            ->maxLength('preferredcountry', 50)
            ->requirePresence('preferredcountry', 'create')
            ->notEmptyString('preferredcountry');

        $validator
            ->scalar('employer')
            ->maxLength('employer', 255)
            ->requirePresence('employer', 'create')
            ->notEmptyString('employer');

        $validator
            ->scalar('agencies')
            ->maxLength('agencies', 255)
            ->requirePresence('agencies', 'create')
            ->notEmptyString('agencies');

        $validator
            ->scalar('candidates')
            ->maxLength('candidates', 255)
            ->requirePresence('candidates', 'create')
            ->notEmptyString('candidates');

        $validator
            ->scalar('documents')
            ->maxLength('documents', 255)
            ->requirePresence('documents', 'create')
            ->notEmptyString('documents');

        return $validator;
    }
}
