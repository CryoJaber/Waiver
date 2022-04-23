<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Submission $submission
 */

$this->extend('/layout/TwitterBootstrap/dashboard');

?>

<script src="http://code.jquery.com/jquery.min.js"></script>
<script src="http://code.jquery.com/ui/1.8.17/jquery-ui.min.js"></script>



<script src="jquery.ui.touch-punch.min.js"></script>



<?php $this->start('tb_actions'); ?>
<ul>

<li><?= $this->Html->link(__('List Submissions'), ['action' => 'index'], ['class' => 'nav-link']) ?></li>
<?php $this->end(); ?>

<?php $this->assign('tb_sidebar', '<ul class="nav flex-column">' . $this->fetch('tb_actions') . '</ul>'); ?>


<div class="form-group" style="width: 100%">

    <img src="https://cloud.cryocenter.us/Cryo.png" width="150" height="auto" align="center">

    <?= $this->Form->create($submission) ?>

    <fieldset>
        
	<h1 style="text-align: center;">
		Customer Waiver
	</h1>

	<table class="table-responsive">
	  
	              <th colspan="3">
		          <h4 style="text-align: center;">
			    Contact Details
		          </h4>	
		      </th>
		   </tr>
		
	  
		   <tr>
			<td colspan="1"><?php echo $this->Form->control('customer_first_name', ['label' => 'First Name', 'size' => '50%']); ?></td>
			<td colspan="2"><?php echo $this->Form->control('customer_last_name', ['label' => 'Last Name', 'size' => '50%']); ?></td>
		   </tr>

		   <tr>
			<td colspan="1"><?php echo $this->Form->control('customer_email', ['label' => 'Email']); ?></td>
			<td colspan="2"><?php echo $this->Form->control('customer_phone', ['label' => 'Phone']); ?></td>
		   </tr>

		   <tr>
			<td colspan="3"><?php echo $this->Form->control('customer_mailing_address', ['label' => 'Mailing Address']); ?></td>
		   </tr>

		   <tr>
			<td colspan="2"><?php echo $this->Form->control('customer_city', ['label' => 'City']); ?></td>
			<td><?php echo $this->Form->control('customer_state', ['label' => 'State']); ?></td>
			<td><?php echo $this->Form->control('customer_zipcode', ['label' => 'Zipcode']); ?></td>
		   </tr>

		   <tr>
			<td><?php echo $this->Form->control('company_name', ['label' => 'Company Name']); ?></td>
            		<td colspan="2"><?php echo $this->Form->control('company_role', ['label' => 'Role Within Company']); ?></td>
		   </td>

		   <tr>
			<td><?php echo $this->Form->control('customer_birthday', ['label' => 'Birthday']); ?></td>
			<td colspan="2"><?php echo $this->Form->control('customer_gender', ['label' => 'Gender']); ?></td>
		   </tr>
		</tbody>
	</table>
	</fieldset>
	<fieldset>

	<table class="table-responsive" style="border-color: #333333; border-style: solid; border-width: 2px; border-radius: 15px;">

	<thead>
	<th>
		<h3 style="text-align: center;">
			Emergency Contact
		</h3>
	</th>
	<tr>
		<td><?php echo $this->Form->control('ec_first_name', ['label' => 'First Name']); ?></td>
		<td><?php echo $this->Form->control('ec_last_name', ['label' => 'Last Name']); ?></td>
	</tr>
	
	<tr>
            <td><?php echo $this->Form->control('ec_phone', ['label' => 'Phone']); ?></td>
	    <td><?php  echo $this->Form->control('ec_email', ['label' => 'Email']); ?></td>
	</tr>

	<tr>
	    <td colspan="2"><?php echo $this->Form->control('ec_relationship', ['label' => 'Relationship']); ?></td>
	</tr>
	</tbody>
	</table>

	<table>
		<thead>
		<tr style="width: 100%; background-color: #f5f5f5;">
		<th>
			<h3 style="text-align: center;">
			Your Current Health Condition
			</h3>
		</th>
		</tr>

		<tr>
		<th>
			<h5 style="text=align: left;">
			Question
			</h5>
		</th>
		<th>
			<h5 style="text-align: center;">
			Yes
		</th>
		<th>
			<h5 style="text-align: center;">
			No
		</th>
		</tr>
		</thead>
		<tbody>
		<tr>
		<td style="width: 80%">
			<h6 style="text-align: left;">
			Have you recently suffered a heart attack within the past 6 months?
			</h6>
		</td>
		<td style="width: 10%">
			<?php echo $this->Form->radio('heart_attack', ['value' => 'Yes']); ?>
		</td>
		<td style="width: 10%">
			<?php echo $this->Form->radio('heart_attack', ['value' => 'No']); ?>
		</td>
		</tr>

		<tr>
		<td style="width: 80%">
			<h6 style="text-align: left;">
			Do you have a pacemaker?
			</h6>
		</td>
		<td style="10%">
			<?php echo $this->Form->radio('pacemaker', ['value' => 'Yes']); ?>
		</td>
		<td style="10%">
			<?php echo $this->Form->radio('pacemaker', ['value' => 'No']); ?>
		</td>
		</tr>
	</tbody>

	</table>

            echo $this->Form->control('heart_attack');
            echo $this->Form->control('heart_bypass');
            echo $this->Form->control('heart_failure');
            echo $this->Form->control('interthecal_painpump');
            echo $this->Form->control('pacemaker');
            echo $this->Form->control('pregnant');
 	?>

	<h3 style="text-align: center;">
		Relative Contraindications
	</h3>

	<?php

            echo $this->Form->control('blood_disorders');
            echo $this->Form->control('circulatory_dysfunction');
            echo $this->Form->control('heart_arythmia');
            echo $this->Form->control('open_wounds');

	?>

	<h3 style="text-align: center;">
		Other Risk Factors
	</h3>

	<?php

            echo $this->Form->control('siezures');
            echo $this->Form->control('skin_reactions');
            echo $this->Form->control('under_influence');
        ?>
    </fieldset>

<div class="container">
  
    <form method="POST" action="upload.php">
  
        <h1>Please sign here</h1>
  
        <div class="col-md-12">
            <label class="" for="">Signature:</label>
            <br/>
            <div id="sig" ></div>
            <br/>
            <button id="clear">Clear Signature</button>
            <textarea id="signature64" name="signed" style="display: none"></textarea>
        </div>
  
        <br/>
        <button class="btn btn-success">Sign Now</button>
    </form>
  
</div>
  
<script type="text/javascript">
    var sig = $('#sig').signature({syncField: '#signature64', syncFormat: 'PNG'});
    $('#clear').click(function(e) {
        e.preventDefault();
        sig.signature('clear');
        $("#signature64").val('');
    });
</script>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
