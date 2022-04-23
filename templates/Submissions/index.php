<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Submission[]|\Cake\Collection\CollectionInterface $submissions
 */
?>
<?php $this->extend('/layout/TwitterBootstrap/dashboard'); ?>
<?php $this->fetch('css');?>
<?php $this->start('tb_actions'); ?>
<li><?= $this->Html->link(__('New Submission'), ['action' => 'add'], ['class' => 'nav-link']) ?></li>
<?php $this->end(); ?>
<?php $this->assign('tb_sidebar', '<ul class="nav flex-column">' . $this->fetch('tb_actions') . '</ul>'); ?>

<link rel="stylesheet" href="extensions/sticky-header/bootstrap-table-sticky-header.css">
<script src="extensions/sticky-header/bootstrap-table-sticky-header.js"></script>

<table class="table table-striped" data-model="Submissions" name="Submissions" style="stickyheader: true;" id="Submissions">
    <thead style="stickyheader: true;">
    <tr>
        <th scope="col"><h6>Waiver #</h6>
        <th scope="col"><h6>Name</h6>
        <th scope="col"><h6>Email</h6>
        <th scope="col"><h6>Phone</h6>
        <th scope="col"><h6>Employer</h6>
        <th scope="col"><h6>Title/Role</h6>
        
    </tr>
    </thead>
    <tbody>
        <?php foreach ($submissions as $submission) : ?>
        <tr>
            <td><?= $this->Number->format($submission->Waiver_ID) ?></td>
            <td><?= h($submission->customer_first_name) ?></td>
            <td><?= h($submission->customer_last_name) ?></td>
            <td><?= h($submission->customer_email) ?></td>
            <td><?= h($submission->customer_phone) ?></td>

            <td><?= h($submission->company_name) ?></td>
            <td><?= h($submission->company_role) ?></td>
	    <td><?= h($submission->date_signed) ?></td>
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

<?= $this->fetch('script') ?>

</body>
</html>
