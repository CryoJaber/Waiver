<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Submission $submission
 */
?>
<?php $this->extend('/layout/TwitterBootstrap/dashboard'); ?>

<?php $this->start('tb_actions'); ?>
<li><?= $this->Html->link(__('List Submissions'), ['action' => 'index'], ['class' => 'nav-link']) ?></li>
<?php $this->end(); ?>
<?php $this->assign('tb_sidebar', '<ul class="nav flex-column">' . $this->fetch('tb_actions') . '</ul>'); ?>

<div class="submissions form content">
    <?= $this->Form->create($submission) ?>
    <fieldset>
        <legend><?= __('Add Submission') ?></legend>
        <?php
            echo $this->Form->control('id');
            echo $this->Form->control('created_at');
            echo $this->Form->control('updated_at');
            echo $this->Form->control('customer_firstname');
            echo $this->Form->control('customer_lastname');
            echo $this->Form->control('customer_email');
            echo $this->Form->control('customer_phone');
            echo $this->Form->control('customer_mailing_address');
            echo $this->Form->control('customer_mailing_address_2');
            echo $this->Form->control('customer_city');
            echo $this->Form->control('customer_state');
            echo $this->Form->control('customer_zipcode');
            echo $this->Form->control('company_name');
            echo $this->Form->control('company_role');
            echo $this->Form->control('customer_birthday');
            echo $this->Form->control('customer_gender');
            echo $this->Form->control('ec_first_name');
            echo $this->Form->control('ec_last_name');
            echo $this->Form->control('ec_email');
            echo $this->Form->control('ec_relationship');
            echo $this->Form->control('ec_phone');
            echo $this->Form->control('chronic_kidneys');
            echo $this->Form->control('copd');
            echo $this->Form->control('heart_attack');
            echo $this->Form->control('heart_bypass');
            echo $this->Form->control('heart_failure');
            echo $this->Form->control('interthecal_painpump');
            echo $this->Form->control('pacemaker');
            echo $this->Form->control('pregnant');
            echo $this->Form->control('blood_disorders');
            echo $this->Form->control('circulatory_dysfunction');
            echo $this->Form->control('heart_arythmia');
            echo $this->Form->control('open_wounds');
            echo $this->Form->control('siezures');
            echo $this->Form->control('skin_reactions');
            echo $this->Form->control('under_influence');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
