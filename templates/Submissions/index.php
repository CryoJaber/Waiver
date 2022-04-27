<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Submission[]|\Cake\Collection\CollectionInterface $submissions
 */
?>
<?php $this->extend('/layout/TwitterBootstrap/dashboard'); ?>

<?php $this->start('tb_actions'); ?>
<li><?= $this->Html->link(__('New Submission'), ['action' => 'add'], ['class' => 'nav-link']) ?></li>
<?php $this->end(); ?>
<?php $this->assign('tb_sidebar', '<ul class="nav flex-column">' . $this->fetch('tb_actions') . '</ul>'); ?>

<table class="table table-striped">
    <thead>
    <tr>
        <th scope="col"><?= $this->Paginator->sort('id') ?></th>
        <th scope="col"><?= $this->Paginator->sort('created_at') ?></th>
        <th scope="col"><?= $this->Paginator->sort('updated_at') ?></th>
        <th scope="col"><?= $this->Paginator->sort('customer_firstname') ?></th>
        <th scope="col"><?= $this->Paginator->sort('customer_lastname') ?></th>
        <th scope="col"><?= $this->Paginator->sort('customer_email') ?></th>
        <th scope="col"><?= $this->Paginator->sort('customer_phone') ?></th>
        <th scope="col"><?= $this->Paginator->sort('customer_mailing_address') ?></th>
        <th scope="col"><?= $this->Paginator->sort('customer_mailing_address_2') ?></th>
        <th scope="col"><?= $this->Paginator->sort('customer_city') ?></th>
        <th scope="col"><?= $this->Paginator->sort('customer_state') ?></th>
        <th scope="col"><?= $this->Paginator->sort('customer_zipcode') ?></th>
        <th scope="col"><?= $this->Paginator->sort('company_name') ?></th>
        <th scope="col"><?= $this->Paginator->sort('company_role') ?></th>
        <th scope="col"><?= $this->Paginator->sort('customer_birthday') ?></th>
        <th scope="col"><?= $this->Paginator->sort('customer_gender') ?></th>
        <th scope="col"><?= $this->Paginator->sort('ec_first_name') ?></th>
        <th scope="col"><?= $this->Paginator->sort('ec_last_name') ?></th>
        <th scope="col"><?= $this->Paginator->sort('ec_email') ?></th>
        <th scope="col"><?= $this->Paginator->sort('ec_relationship') ?></th>
        <th scope="col"><?= $this->Paginator->sort('ec_phone') ?></th>
        <th scope="col"><?= $this->Paginator->sort('chronic_kidneys') ?></th>
        <th scope="col"><?= $this->Paginator->sort('copd') ?></th>
        <th scope="col"><?= $this->Paginator->sort('heart_attack') ?></th>
        <th scope="col"><?= $this->Paginator->sort('heart_bypass') ?></th>
        <th scope="col"><?= $this->Paginator->sort('heart_failure') ?></th>
        <th scope="col"><?= $this->Paginator->sort('interthecal_painpump') ?></th>
        <th scope="col"><?= $this->Paginator->sort('pacemaker') ?></th>
        <th scope="col"><?= $this->Paginator->sort('pregnant') ?></th>
        <th scope="col"><?= $this->Paginator->sort('blood_disorders') ?></th>
        <th scope="col"><?= $this->Paginator->sort('circulatory_dysfunction') ?></th>
        <th scope="col"><?= $this->Paginator->sort('heart_arythmia') ?></th>
        <th scope="col"><?= $this->Paginator->sort('open_wounds') ?></th>
        <th scope="col"><?= $this->Paginator->sort('siezures') ?></th>
        <th scope="col"><?= $this->Paginator->sort('skin_reactions') ?></th>
        <th scope="col"><?= $this->Paginator->sort('under_influence') ?></th>
        <th scope="col" class="actions"><?= __('Actions') ?></th>
    </tr>
    </thead>
    <tbody>
        <?php foreach ($submissions as $submission) : ?>
        <tr>
            <td><?= $this->Number->format($submission->id) ?></td>
            <td><?= h($submission->created_at) ?></td>
            <td><?= h($submission->updated_at) ?></td>
            <td><?= h($submission->customer_firstname) ?></td>
            <td><?= h($submission->customer_lastname) ?></td>
            <td><?= h($submission->customer_email) ?></td>
            <td><?= h($submission->customer_phone) ?></td>
            <td><?= h($submission->customer_mailing_address) ?></td>
            <td><?= h($submission->customer_mailing_address_2) ?></td>
            <td><?= h($submission->customer_city) ?></td>
            <td><?= h($submission->customer_state) ?></td>
            <td><?= h($submission->customer_zipcode) ?></td>
            <td><?= h($submission->company_name) ?></td>
            <td><?= h($submission->company_role) ?></td>
            <td><?= h($submission->customer_birthday) ?></td>
            <td><?= h($submission->customer_gender) ?></td>
            <td><?= h($submission->ec_first_name) ?></td>
            <td><?= h($submission->ec_last_name) ?></td>
            <td><?= h($submission->ec_email) ?></td>
            <td><?= h($submission->ec_relationship) ?></td>
            <td><?= h($submission->ec_phone) ?></td>
            <td><?= h($submission->chronic_kidneys) ?></td>
            <td><?= h($submission->copd) ?></td>
            <td><?= h($submission->heart_attack) ?></td>
            <td><?= h($submission->heart_bypass) ?></td>
            <td><?= h($submission->heart_failure) ?></td>
            <td><?= h($submission->interthecal_painpump) ?></td>
            <td><?= h($submission->pacemaker) ?></td>
            <td><?= h($submission->pregnant) ?></td>
            <td><?= h($submission->blood_disorders) ?></td>
            <td><?= h($submission->circulatory_dysfunction) ?></td>
            <td><?= h($submission->heart_arythmia) ?></td>
            <td><?= h($submission->open_wounds) ?></td>
            <td><?= h($submission->siezures) ?></td>
            <td><?= h($submission->skin_reactions) ?></td>
            <td><?= h($submission->under_influence) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $submission->Waiver_ID], ['title' => __('View'), 'class' => 'btn btn-secondary']) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $submission->Waiver_ID], ['title' => __('Edit'), 'class' => 'btn btn-secondary']) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $submission->Waiver_ID], ['confirm' => __('Are you sure you want to delete # {0}?', $submission->Waiver_ID), 'title' => __('Delete'), 'class' => 'btn btn-danger']) ?>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>
<div class="paginator">
    <ul class="pagination">
        <?= $this->Paginator->first('«', ['label' => __('First')]) ?>
        <?= $this->Paginator->prev('‹', ['label' => __('Previous')]) ?>
        <?= $this->Paginator->numbers() ?>
        <?= $this->Paginator->next('›', ['label' => __('Next')]) ?>
        <?= $this->Paginator->last('»', ['label' => __('Last')]) ?>
    </ul>
    <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
</div>
