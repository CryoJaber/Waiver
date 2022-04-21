<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Submissions Model
 *
 * @method \App\Model\Entity\Submission newEmptyEntity()
 * @method \App\Model\Entity\Submission newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Submission[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Submission get($primaryKey, $options = [])
 * @method \App\Model\Entity\Submission findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Submission patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Submission[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Submission|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Submission saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Submission[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Submission[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Submission[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Submission[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class SubmissionsTable extends Table
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

        $this->setTable('submissions');
        $this->setDisplayField('Waiver_ID');
        $this->setPrimaryKey('Waiver_ID');
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
            ->scalar('customer_first_name')
            ->maxLength('customer_first_name', 100)
            ->requirePresence('customer_first_name', 'create')
            ->notEmptyString('customer_first_name');

        $validator
            ->scalar('customer_last_name')
            ->maxLength('customer_last_name', 100)
            ->requirePresence('customer_last_name', 'create')
            ->notEmptyString('customer_last_name');

        $validator
            ->scalar('customer_email')
            ->maxLength('customer_email', 100)
            ->requirePresence('customer_email', 'create')
            ->notEmptyString('customer_email');

        $validator
            ->scalar('customer_phone')
            ->maxLength('customer_phone', 15)
            ->requirePresence('customer_phone', 'create')
            ->notEmptyString('customer_phone');

        $validator
            ->scalar('customer_mailing_address')
            ->maxLength('customer_mailing_address', 200)
            ->requirePresence('customer_mailing_address', 'create')
            ->notEmptyString('customer_mailing_address');

        $validator
            ->scalar('customer_city')
            ->maxLength('customer_city', 100)
            ->requirePresence('customer_city', 'create')
            ->notEmptyString('customer_city');

        $validator
            ->scalar('customer_state')
            ->maxLength('customer_state', 50)
            ->requirePresence('customer_state', 'create')
            ->notEmptyString('customer_state');

        $validator
            ->integer('customer_zipcode')
            ->requirePresence('customer_zipcode', 'create')
            ->notEmptyString('customer_zipcode');

        $validator
            ->scalar('company_name')
            ->maxLength('company_name', 200)
            ->requirePresence('company_name', 'create')
            ->notEmptyString('company_name');

        $validator
            ->scalar('company_role')
            ->maxLength('company_role', 200)
            ->requirePresence('company_role', 'create')
            ->notEmptyString('company_role');

        $validator
            ->dateTime('customer_birthday')
            ->requirePresence('customer_birthday', 'create')
            ->notEmptyDateTime('customer_birthday');

        $validator
            ->scalar('customer_gender')
            ->maxLength('customer_gender', 15)
            ->requirePresence('customer_gender', 'create')
            ->notEmptyString('customer_gender');

        $validator
            ->scalar('ec_first_name')
            ->maxLength('ec_first_name', 100)
            ->requirePresence('ec_first_name', 'create')
            ->notEmptyString('ec_first_name');

        $validator
            ->scalar('ec_last_name')
            ->maxLength('ec_last_name', 100)
            ->requirePresence('ec_last_name', 'create')
            ->notEmptyString('ec_last_name');

        $validator
            ->scalar('ec_phone')
            ->maxLength('ec_phone', 15)
            ->requirePresence('ec_phone', 'create')
            ->notEmptyString('ec_phone');

        $validator
            ->scalar('ec_email')
            ->maxLength('ec_email', 100)
            ->requirePresence('ec_email', 'create')
            ->notEmptyString('ec_email');

        $validator
            ->scalar('ec_relationship')
            ->maxLength('ec_relationship', 100)
            ->requirePresence('ec_relationship', 'create')
            ->notEmptyString('ec_relationship');

        $validator
            ->boolean('chronic_kidneys')
            ->requirePresence('chronic_kidneys', 'create')
            ->notEmptyString('chronic_kidneys');

        $validator
            ->boolean('copd')
            ->requirePresence('copd', 'create')
            ->notEmptyString('copd');

        $validator
            ->boolean('heart_attack')
            ->requirePresence('heart_attack', 'create')
            ->notEmptyString('heart_attack');

        $validator
            ->boolean('heart_bypass')
            ->requirePresence('heart_bypass', 'create')
            ->notEmptyString('heart_bypass');

        $validator
            ->boolean('heart_failure')
            ->requirePresence('heart_failure', 'create')
            ->notEmptyString('heart_failure');

        $validator
            ->boolean('interthecal_painpump')
            ->requirePresence('interthecal_painpump', 'create')
            ->notEmptyString('interthecal_painpump');

        $validator
            ->boolean('pacemaker')
            ->requirePresence('pacemaker', 'create')
            ->notEmptyString('pacemaker');

        $validator
            ->boolean('pregnant')
            ->requirePresence('pregnant', 'create')
            ->notEmptyString('pregnant');

        $validator
            ->boolean('blood_disorders')
            ->requirePresence('blood_disorders', 'create')
            ->notEmptyString('blood_disorders');

        $validator
            ->boolean('circulatory_dysfunction')
            ->requirePresence('circulatory_dysfunction', 'create')
            ->notEmptyString('circulatory_dysfunction');

        $validator
            ->boolean('heart_arythmia')
            ->requirePresence('heart_arythmia', 'create')
            ->notEmptyString('heart_arythmia');

        $validator
            ->boolean('open_wounds')
            ->requirePresence('open_wounds', 'create')
            ->notEmptyString('open_wounds');

        $validator
            ->boolean('siezures')
            ->requirePresence('siezures', 'create')
            ->notEmptyString('siezures');

        $validator
            ->boolean('skin_reactions')
            ->requirePresence('skin_reactions', 'create')
            ->notEmptyString('skin_reactions');

        $validator
            ->boolean('under_influence')
            ->requirePresence('under_influence', 'create')
            ->notEmptyString('under_influence');

        return $validator;
    }
}
