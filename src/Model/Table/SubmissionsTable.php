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
            ->dateTime('created_at')
            ->allowEmptyDateTime('created_at');

        $validator
            ->dateTime('updated_at')
            ->allowEmptyDateTime('updated_at');

        $validator
            ->scalar('customer_firstname')
            ->maxLength('customer_firstname', 255)
            ->requirePresence('customer_firstname', 'create')
            ->notEmptyString('customer_firstname');

        $validator
            ->scalar('customer_lastname')
            ->maxLength('customer_lastname', 255)
            ->requirePresence('customer_lastname', 'create')
            ->notEmptyString('customer_lastname');

        $validator
            ->scalar('customer_email')
            ->maxLength('customer_email', 255)
            ->requirePresence('customer_email', 'create')
            ->notEmptyString('customer_email');

        $validator
            ->scalar('customer_phone')
            ->maxLength('customer_phone', 255)
            ->requirePresence('customer_phone', 'create')
            ->notEmptyString('customer_phone');

        $validator
            ->scalar('customer_mailing_address')
            ->maxLength('customer_mailing_address', 255)
            ->requirePresence('customer_mailing_address', 'create')
            ->notEmptyString('customer_mailing_address');

        $validator
            ->scalar('customer_mailing_address_2')
            ->maxLength('customer_mailing_address_2', 50)
            ->requirePresence('customer_mailing_address_2', 'create')
            ->notEmptyString('customer_mailing_address_2');

        $validator
            ->scalar('customer_city')
            ->maxLength('customer_city', 255)
            ->requirePresence('customer_city', 'create')
            ->notEmptyString('customer_city');

        $validator
            ->scalar('customer_state')
            ->maxLength('customer_state', 255)
            ->requirePresence('customer_state', 'create')
            ->notEmptyString('customer_state');

        $validator
            ->scalar('customer_zipcode')
            ->maxLength('customer_zipcode', 255)
            ->requirePresence('customer_zipcode', 'create')
            ->notEmptyString('customer_zipcode');

        $validator
            ->scalar('company_name')
            ->maxLength('company_name', 255)
            ->requirePresence('company_name', 'create')
            ->notEmptyString('company_name');

        $validator
            ->scalar('company_role')
            ->maxLength('company_role', 255)
            ->requirePresence('company_role', 'create')
            ->notEmptyString('company_role');

        $validator
            ->scalar('customer_birthday')
            ->maxLength('customer_birthday', 255)
            ->requirePresence('customer_birthday', 'create')
            ->notEmptyString('customer_birthday');

        $validator
            ->scalar('customer_gender')
            ->maxLength('customer_gender', 255)
            ->requirePresence('customer_gender', 'create')
            ->notEmptyString('customer_gender');

        $validator
            ->scalar('ec_first_name')
            ->maxLength('ec_first_name', 255)
            ->requirePresence('ec_first_name', 'create')
            ->notEmptyString('ec_first_name');

        $validator
            ->scalar('ec_last_name')
            ->maxLength('ec_last_name', 255)
            ->requirePresence('ec_last_name', 'create')
            ->notEmptyString('ec_last_name');

        $validator
            ->scalar('ec_email')
            ->maxLength('ec_email', 255)
            ->requirePresence('ec_email', 'create')
            ->notEmptyString('ec_email');

        $validator
            ->scalar('ec_relationship')
            ->maxLength('ec_relationship', 255)
            ->requirePresence('ec_relationship', 'create')
            ->notEmptyString('ec_relationship');

        $validator
            ->scalar('ec_phone')
            ->maxLength('ec_phone', 255)
            ->requirePresence('ec_phone', 'create')
            ->notEmptyString('ec_phone');

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
