<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Submission Entity
 *
 * @property int $id
 * @property \Cake\I18n\FrozenTime|null $created_at
 * @property \Cake\I18n\FrozenTime|null $updated_at
 * @property string $customer_firstname
 * @property string $customer_lastname
 * @property string $customer_email
 * @property string $customer_phone
 * @property string $customer_mailing_address
 * @property string $customer_mailing_address_2
 * @property string $customer_city
 * @property string $customer_state
 * @property string $customer_zipcode
 * @property string $company_name
 * @property string $company_role
 * @property string $customer_birthday
 * @property string $customer_gender
 * @property string $ec_first_name
 * @property string $ec_last_name
 * @property string $ec_email
 * @property string $ec_relationship
 * @property string $ec_phone
 * @property bool $chronic_kidneys
 * @property bool $copd
 * @property bool $heart_attack
 * @property bool $heart_bypass
 * @property bool $heart_failure
 * @property bool $interthecal_painpump
 * @property bool $pacemaker
 * @property bool $pregnant
 * @property bool $blood_disorders
 * @property bool $circulatory_dysfunction
 * @property bool $heart_arythmia
 * @property bool $open_wounds
 * @property bool $siezures
 * @property bool $skin_reactions
 * @property bool $under_influence
 */
class Submission extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array<string, bool>
     */
    protected $_accessible = [
        'created_at' => true,
        'updated_at' => true,
        'customer_firstname' => true,
        'customer_lastname' => true,
        'customer_email' => true,
        'customer_phone' => true,
        'customer_mailing_address' => true,
        'customer_mailing_address_2' => true,
        'customer_city' => true,
        'customer_state' => true,
        'customer_zipcode' => true,
        'company_name' => true,
        'company_role' => true,
        'customer_birthday' => true,
        'customer_gender' => true,
        'ec_first_name' => true,
        'ec_last_name' => true,
        'ec_email' => true,
        'ec_relationship' => true,
        'ec_phone' => true,
        'chronic_kidneys' => true,
        'copd' => true,
        'heart_attack' => true,
        'heart_bypass' => true,
        'heart_failure' => true,
        'interthecal_painpump' => true,
        'pacemaker' => true,
        'pregnant' => true,
        'blood_disorders' => true,
        'circulatory_dysfunction' => true,
        'heart_arythmia' => true,
        'open_wounds' => true,
        'siezures' => true,
        'skin_reactions' => true,
        'under_influence' => true,
    ];
}
