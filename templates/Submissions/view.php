<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Submission $submission
 */
?>
<?php $this->extend('/layout/TwitterBootstrap/dashboard'); ?>

<?php $this->start('tb_actions'); ?>
<li><?= $this->Html->link(__('Edit Submission'), ['action' => 'edit', $submission->Waiver_ID], ['class' => 'nav-link']) ?></li>
<li><?= $this->Form->postLink(__('Delete Submission'), ['action' => 'delete', $submission->Waiver_ID], ['confirm' => __('Are you sure you want to delete # {0}?', $submission->Waiver_ID), 'class' => 'nav-link']) ?></li>
<li><?= $this->Html->link(__('List Submissions'), ['action' => 'index'], ['class' => 'nav-link']) ?> </li>
<li><?= $this->Html->link(__('New Submission'), ['action' => 'add'], ['class' => 'nav-link']) ?> </li>
<?php $this->end(); ?>
<?php $this->assign('tb_sidebar', '<ul class="nav flex-column">' . $this->fetch('tb_actions') . '</ul>'); ?>
<script type="text/javascript">
$(document).ready(function() {
    var table = $('#submissions').DataTable( {
        lengthChange: false,
        ]
    } );
 
    table.buttons().container()
        .appendTo( '#example_wrapper .col-md-6:eq(0)' );
} );
</script>

<div class="submissions view large-9 medium-8 columns content">
    <h3><?= h($submission->Waiver_ID) ?></h3>
    <div class="table-responsive">
        <table class="table table-striped" id="submissions">
            <tr>
                <th scope="row"><?= __('Customer First Name') ?></th>
                <td><?= h($submission->customer_first_name) ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('Customer Last Name') ?></th>
                <td><?= h($submission->customer_last_name) ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('Customer Email') ?></th>
                <td><?= h($submission->customer_email) ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('Customer Phone') ?></th>
                <td><?= h($submission->customer_phone) ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('Customer Mailing Address') ?></th>
                <td><?= h($submission->customer_mailing_address) ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('Customer City') ?></th>
                <td><?= h($submission->customer_city) ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('Customer State') ?></th>
                <td><?= h($submission->customer_state) ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('Company Name') ?></th>
                <td><?= h($submission->company_name) ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('Company Role') ?></th>
                <td><?= h($submission->company_role) ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('Customer Gender') ?></th>
                <td><?= h($submission->customer_gender) ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('Ec First Name') ?></th>
                <td><?= h($submission->ec_first_name) ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('Ec Last Name') ?></th>
                <td><?= h($submission->ec_last_name) ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('Ec Phone') ?></th>
                <td><?= h($submission->ec_phone) ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('Ec Email') ?></th>
                <td><?= h($submission->ec_email) ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('Ec Relationship') ?></th>
                <td><?= h($submission->ec_relationship) ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('Waiver ID') ?></th>
                <td><?= $this->Number->format($submission->Waiver_ID) ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('Customer Zipcode') ?></th>
                <td><?= $this->Number->format($submission->customer_zipcode) ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('Customer Birthday') ?></th>
                <td><?= h($submission->customer_birthday) ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('Chronic Kidneys') ?></th>
                <td><?= $submission->chronic_kidneys ? __('Yes') : __('No'); ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('Copd') ?></th>
                <td><?= $submission->copd ? __('Yes') : __('No'); ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('Heart Attack') ?></th>
                <td><?= $submission->heart_attack ? __('Yes') : __('No'); ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('Heart Bypass') ?></th>
                <td><?= $submission->heart_bypass ? __('Yes') : __('No'); ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('Heart Failure') ?></th>
                <td><?= $submission->heart_failure ? __('Yes') : __('No'); ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('Interthecal Painpump') ?></th>
                <td><?= $submission->interthecal_painpump ? __('Yes') : __('No'); ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('Pacemaker') ?></th>
                <td><?= $submission->pacemaker ? __('Yes') : __('No'); ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('Pregnant') ?></th>
                <td><?= $submission->pregnant ? __('Yes') : __('No'); ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('Blood Disorders') ?></th>
                <td><?= $submission->blood_disorders ? __('Yes') : __('No'); ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('Circulatory Dysfunction') ?></th>
                <td><?= $submission->circulatory_dysfunction ? __('Yes') : __('No'); ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('Heart Arythmia') ?></th>
                <td><?= $submission->heart_arythmia ? __('Yes') : __('No'); ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('Open Wounds') ?></th>
                <td><?= $submission->open_wounds ? __('Yes') : __('No'); ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('Siezures') ?></th>
                <td><?= $submission->siezures ? __('Yes') : __('No'); ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('Skin Reactions') ?></th>
                <td><?= $submission->skin_reactions ? __('Yes') : __('No'); ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('Under Influence') ?></th>
                <td><?= $submission->under_influence ? __('Yes') : __('No'); ?></td>
            </tr>
        </table>
    </div>
</div>
