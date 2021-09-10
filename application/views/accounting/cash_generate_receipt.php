<div class="row">
	<div class="col-md-12">
		<section class="panel">
			<header class="panel-heading">
				<h4 class="panel-title"><i class="fas fa-list-ol"></i> <?php echo translate('cash').' '.translate('generate').' '.translate('receipt'); ?></h4>
			</header>
			<div class="panel-body">
			    <div class="form-group">
				    <label class="col-md-4 control-label"><?=translate('date')?> <span class="required">*</span></label>
					<div class="col-md-6">
					    <?php if($this->session->userdata('date_type') === 'bs') { ?>
					    <input type="text" class="form-control" name="date" id="nepaliDatepicker" required/>
					    <?php } else{ ?>
						<input type="text" data-plugin-datepicker class="form-control" name="date" value="<?=date('Y-m-d') ?>" required/>
						<?php }?>
    					<span class="error"></span>
	    			</div>
		    	</div>
		    	<div class="form-group">
				    <label class="col-md-4 control-label"><?=translate('received') . " " . translate('from')?> <span class="required">*</span></label>
					<div class="col-md-6">
						<input type="text" class="form-control" name="received"  placeholder="Received.." required/>
    					<span class="error"></span>
	    			</div>
		    	</div>
		    	<div class="form-group">
				    <label class="col-md-4 control-label"><?=translate('received') . " " . translate('amount')?> <span class="required">*</span></label>
					<div class="col-md-6">
						<input type="number" class="form-control" name="amount"  placeholder="Amount.." required/>
    					<span class="error"></span>
	    			</div>
		    	</div>
		    	<div class="form-group">
				    <label class="col-md-4 control-label"><?=translate('payment') . " " . translate('type')?> <span class="required">*</span></label>
					<div class="col-md-6">
						Cash: <input type="radio" class="payment_type" name="payment_type"  value="cash" checked required/>
						Cheque: <input type="radio" class="payment_type" name="payment_type"  value="cheque" required/>
						Others: <input type="radio" class="payment_type" name="payment_type"  value="others" required/>
    					<span class="error"></span>
	    			</div>
		    	</div>
		    	<div class="form-group">
				    <label class="col-md-4 control-label"><?=translate('description')?> <span class="required">*</span></label>
					<div class="col-md-6">
						<textarea class="form-control" id="description" name="description"  placeholder="Description.." required/></textarea>
    					<span class="error"></span>
	    			</div>
		    	</div>
		    </div>
		    <footer class="panel-footer mt-lg">
				<div class="row">
					<div class="col-md-12">
						<button onclick="generate_bill()" class="btn btn-default pull-right" data-loading-text="<i class='fas fa-spinner fa-spin'></i> Processing">
    						<i class="fas fa-plus-circle"></i> <?php echo translate('generate'); ?>
	    				</button>
		    		</div>
			    </div>	
	        </footer>
	    </section>
    </div>
</div>
<div class="row">
	<div class="col-md-12">
        <?php
        $result = $this->db->query('SELECT institute_name from global_settings')->result_array();
        ?>
        <section class="panel">
            <div class="panel-body" id="bill">
                <table>
                    <thead style="border-bottom: black">
                    <tr>
                        <th style="width: 100px;"></th>
                        <th style="width: 100px;"></th>
                        <th style="width: 100px;"></th>
                        <th style="width: 100px;"></th>
                        <th style="width: 100px;"></th>
                        <th style="width: 100px;"></th>
                        <th style="width: 100px;"></th>
                        <th style="width: 100px;"></th>
                        <th style="width: 100px;"></th>
                        <th style="width: 100px;"></th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr style="border-bottom: 1px solid black; padding-bottom: 10px;">
                        <td><img src="<?=site_url('uploads/app_image/defualt.png')?>" alt="img" style="height: 100px; width:100px;"></td>
                        <td colspan="8" style="text-align: center">
                            <h2><?=$result[0]['institute_name']?></h2>
                            <h5>Address, address</h5>
                            <h5>ph: 123123</h5>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="10" style="text-align: center; font-weight: bold"><h4 style="padding-top: 10px;padding-bottom: 10px;">Cash Receipt</h4></td>
                    </tr>
                    <tr>
                        <td colspan="6">Receipt No. : <span id="bill_receipt_no"></span></td>
                        <td colspan="4">Date : <span id="bill_date"></span> </td>
                    </tr>
                    <tr>
                        <td colspan="6">Cash received from : <span id="bill_received_from"></span></td>
                    </tr>
                    <tr>
                        <td colspan="10" style="border-bottom: 1px solid black;">For : <span id="bill_for"></span></td>
                    </tr>
                    <tr style="border-bottom: 1px solid black;">
                        <td colspan="5" style=" padding-top: 5px; padding-bottom: 5px;">Payment received in : <span id="bill_payment_type"></span></td>
                        <td colspan="5">Amount : <span id="bill_amount"></span></td>
                    </tr>
                    <tr>
                        <td><img src="<?=site_url('uploads/app_image/defualt.png')?>" alt="img" style="height: 100px; width:150px;"></td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <footer class="panel-footer mt-lg">
                <div class="row">
                    <div class="col-md-12">
			            <button onclick="printDiv()" class="btn btn-default pull-left" data-loading-text="<i class='fas fa-spinner fa-spin'></i> Processing">
				            <i class="fas fa-print"></i> <?php echo translate('Print'); ?>
			            </button>
		            </div>
		        </div>
            </footer>
        </section>       
    </div>

</div>    
<script src="https://unpkg.com/nepali-date-picker@2.0.1/dist/jquery.nepaliDatePicker.min.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://unpkg.com/nepali-date-picker@2.0.1/dist/nepaliDatePicker.min.css" crossorigin="anonymous" />
<script>
$(document).ready(function () {
    $('#nepaliDatepicker').nepaliDatePicker({
        dateFormat: "%y-%m-%d",
        closeOnDateSelect: true
    });
    let nep_date = (calendarFunctions.getBsDateByAdDate(<?=date('Y')?>, <?=date('m')?>, <?=date('d')?>));
    let nepDay = calendarFunctions.getNepaliNumber(nep_date.bsDate);
    let nepMonth = calendarFunctions.getNepaliNumber(nep_date.bsMonth);
    let nepYear = calendarFunctions.getNepaliNumber(nep_date.bsYear);
	$('#nepaliDatepicker').val(nepYear+'-'+nepMonth+'-'+nepDay);
});

function generate_bill(){
    let date = $("input[name=date]").val();
    let received = $("input[name=received]").val();
    let amount = $("input[name=amount]").val();
    let payment_type = $("input[name=payment_type]").val();
    let description = $("#description").val();
    console.log(description);
    let bill_no = <?=$receipt_no?>;
    $('#bill_date').html(date);
    $('#bill_received_from').html(received);
    $('#bill_amount').html(amount);
    $('#bill_payment_type').html(payment_type);
    $('#bill_for').html(description);
    $('#bill_receipt_no').html(bill_no);
}

function printDiv()
{
    var mywindow = window.open('', 'PRINT', 'height=1200,width=1000');

    mywindow.document.write('<html><head>');
    mywindow.document.write('</head><body >');
    mywindow.document.write(document.getElementById('bill').innerHTML);
    mywindow.document.write('</body></html>');

    mywindow.document.close(); // necessary for IE >= 10
    mywindow.focus(); // necessary for IE >= 10*/

    mywindow.print();
    mywindow.close();

    return true;
}
</script>