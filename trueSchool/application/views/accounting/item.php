<section class="panel">
	<div class="tabs-custom">
		<ul class="nav nav-tabs">
<?php if (get_permission('account', 'is_add')){ ?>
			<li>
				<a href="#create" data-toggle="tab"><i class="far fa-edit"></i> <?php echo translate('create') . " " . translate('item'); ?></a>
			</li>
<?php } ?>
		</ul>
		<div class="tab-content">
			<div id="list" class="tab-pane active">
			    <div class="row">
			        <div class="col-md-5">
            		<section class="panel">
			        <header class="panel-heading">
				        <h4 class="panel-title"><i class="far fa-edit"></i> <?php echo translate('add') . " " . translate('item') . " " . translate('category'); ?></h4>
			        </header>
        				<?php echo form_open($this->uri->uri_string(), array('class' => 'form-horizontal form-bordered frm-submit')); ?>
        				<div class="panel-body">
    					<?php if (is_superadmin_loggedin()): ?>
	    				<div class="form-group">
		    				<label class="col-md-3 control-label"><?=translate('branch')?> <span class="required">*</span></label>
			    			<div class="col-md-6">
				    			<?php
					    			$arrayBranch = $this->app_lib->getSelectList('branch');
						    		echo form_dropdown("branch_id", $arrayBranch, "", "class='form-control' id='branch_id'
							    	id='branch_id' data-plugin-selectTwo data-width='100%' data-minimum-results-for-search='Infinity'");
    							?>
	    						<span class="error"></span>
		    				</div>
			    		</div>
				    	<?php endif; ?>
					    <div class="form-group">
						    <label class="col-md-4 control-label"><?=translate('item') . " " . translate('name')?> <span class="required">*</span></label>
    						<div class="col-md-6">
	    						<input type="text" class="form-control" name="item" value="<?php echo set_value('category'); ?>" placeholder="Item.." required/>
		    					<span class="error"></span>
			    			</div>
				    	</div>
					    <div class="form-group">
						    <label class="col-md-4 control-label"><?=translate('category') . " " . translate('name')?> <span class="required">*</span></label>
    						<div class="col-md-6">	
    						    <select id="category" name="category_id" data-plugin-selectTwo>
    						        <?php
    						        foreach ($categorylist as $row){
    						        ?>  
    						        <option value="<?=$row['id']?>"><?=$row['category']?></option>
    						        <?php
    						        }
    						        ?>
    						    </select>
    						<span class="error"></span>
			    			</div>
				    	</div>
				    	<footer class="panel-footer mt-lg">
    						<div class="row">
	    						<div class="col-md-12">
		    						<button type="submit" class="btn btn-default pull-right" data-loading-text="<i class='fas fa-spinner fa-spin'></i> Processing">
			    						<i class="fas fa-plus-circle"></i> <?php echo translate('save'); ?>
				    				</button>
					    		</div>
						    </div>	
				        </footer>
				        </div>
				    	<?php echo form_close(); ?>
				    	</section>
			    	</div>
			    	<div class="col-md-7">
		                <div class="mb-md">
					        <div class="export_title"><?php echo translate('item') . " " . translate('category'); ?></div>
					        <table class="table table-bordered table-hover table-condensed table-export">
					    	    <thead>
					    		    <tr>
					    			    <th width="50"><?php echo translate('sl'); ?></th>
				    		            <?php if (is_superadmin_loggedin()): ?>
					    			    <th><?=translate('branch')?></th>
					    		        <?php endif; ?>
					    			    <th><?php echo translate('category'); ?></th>
					    			    <th><?php echo translate('item'); ?></th>
				    			        <th><?php echo translate('action'); ?></th>
					    		    </tr>
					    	    </thead>
					    	    <tbody>
					    		    <?php 
					    		    $count = 1; foreach ($itemlist as $row):
					    		    ?>
					    		    <tr>
					    			    <td><?php echo $count++; ?></td>
					    	        <?php if (is_superadmin_loggedin()): ?>
					    			    <td><?php echo $row['branch_name']; ?></td>
					    	        <?php endif; ?>
					    			    <td><?php echo $row['category']; ?></td>
					    			    <td><?php echo $row['item']; ?></td>
					    			    <td>
					    				    <?php if (get_permission('account', 'is_edit')): ?>
					    					    <a href="<?php echo base_url('accounting/item_edit/' . $row['id']); ?>" class="btn btn-circle btn-default icon"> 
					    						    <i class="fas fa-pen-nib"></i>
					    					    </a>
					    				    <?php endif; if (get_permission('account', 'is_delete')): ?>
				    					    <?php echo btn_delete('accounting/item_delete/' . $row['id']); ?>
					    				    <?php endif; ?>
					    			    </td>
					    		    </tr>
					    		    <?php endforeach; ?>
					    	    </tbody>
					        </table>
				        </div>
		            </div>
		    	</div>
			</div>
		</div>
	</div>
</section>