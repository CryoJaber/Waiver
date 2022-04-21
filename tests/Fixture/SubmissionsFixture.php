<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * SubmissionsFixture
 */
class SubmissionsFixture extends TestFixture
{
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'Waiver_ID' => 1,
                'customer_first_name' => 'Lorem ipsum dolor sit amet',
                'customer_last_name' => 'Lorem ipsum dolor sit amet',
                'customer_email' => 'Lorem ipsum dolor sit amet',
                'customer_phone' => 'Lorem ipsum d',
                'customer_mailing_address' => 'Lorem ipsum dolor sit amet',
                'customer_city' => 'Lorem ipsum dolor sit amet',
                'customer_state' => 'Lorem ipsum dolor sit amet',
                'customer_zipcode' => 1,
                'company_name' => 'Lorem ipsum dolor sit amet',
                'company_role' => 'Lorem ipsum dolor sit amet',
                'customer_birthday' => '',
                'customer_gender' => 'Lorem ipsum d',
                'ec_first_name' => 'Lorem ipsum dolor sit amet',
                'ec_last_name' => 'Lorem ipsum dolor sit amet',
                'ec_phone' => 'Lorem ipsum d',
                'ec_email' => 'Lorem ipsum dolor sit amet',
                'ec_relationship' => 'Lorem ipsum dolor sit amet',
                'chronic_kidneys' => 1,
                'copd' => 1,
                'heart_attack' => 1,
                'heart_bypass' => 1,
                'heart_failure' => 1,
                'interthecal_painpump' => 1,
                'pacemaker' => 1,
                'pregnant' => 1,
                'blood_disorders' => 1,
                'circulatory_dysfunction' => 1,
                'heart_arythmia' => 1,
                'open_wounds' => 1,
                'siezures' => 1,
                'skin_reactions' => 1,
                'under_influence' => 1,
            ],
        ];
        parent::init();
    }
}
