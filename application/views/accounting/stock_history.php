<?php
// var_dump($students);
if(is_superadmin_loggedin()){
?>
<?php echo form_open($this->uri->uri_string(), array('class' => 'validate')); ?>
<section class="panel">
<header class="panel-heading">
    <h4>Stock History</h4>
</header>
<div class="panel-body text-center">
    <div class="row justify-content-center">
	<div class="col-md-4  col-md-offset-4 mb-sm">
		<div class="form-group">
			<label class="control-label"><?=translate('branch')?> <span class="required">*</span></label>
			<?php
				$arrayBranch = $this->app_lib->getSelectList('branch');
				echo form_dropdown("branch_id", $arrayBranch, set_value('branch_id'), "class='form-control' id='branch_id'
				data-plugin-selectTwo data-width='100%' data-minimum-results-for-search='Infinity'");
			?>
		</div>
	</div>
	</div>
</div>
<footer class="panel-footer mt-lg">
	<div class="row justify-content-center">
		<div class="col-md-2 col-md-offset-5">
			<button type="submit" name="submit_discharge" class="btn btn-default btn-block" data-loading-text="<i class='fas fa-spinner fa-spin'></i> Processing">
				<i class="fas fa-plus-circle"></i> <?php echo translate('submit'); ?>
			</button>
		</div>
	</div>	
</footer>
</section>
<?php echo form_close(); ?>
<?php
}
?>

<section class="panel">
<header class="panel-heading">
    <h4>Stock History</h4>
</header>
<div class="panel-body text-center">
    
    <?php if($students){ ?>
    <table class="table table-bordered table-striped  table-hover table-condensed table-export mt-md">
        <thead>
        <tr>
            <th>Student Name</th>
            <th>Class</th>
            <th>Section</th>
            <th>Roll No.</th>
            <th>Item</th>
            <th>Date</th>
        </tr>
        </thead>
        <tbody>

        <?php
        foreach($students as $student){
        ?>
        <tr>
            <td><?=$student['first_name'] .' '. $student['middle_name'] .' '. $student['last_name']?></td>
            <td><?=$student['class_name']?></td>
            <td><?=$student['section_name']?></td>
            <td><?=$student['roll']?></td>
            <td><?=$student['item']?></td>
            <td><?=$student['date']?></td>
        </tr>
        <?php }
        } else {
            echo "<h4>No stock discharge found.</h4>";
        } 
        ?>
        </tbody>
    </table>
</div>
</section>