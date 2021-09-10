<?php 
$this->db->select('	institute_name, institute_email, address, mobileno');
$result = $this->db->get('global_settings')->result_array();
?>
<div class="panel">
<div class="container content-invoice">
    <div class="load-animate animated fadeInUp">
        <div class="row">
            <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
                <h2 class="title">Invoice</h2>
            </div>
        </div>
		<div class="row">
			<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
				<h3>From,</h3>
				<?php echo $result[0]['institute_name']; ?><br>	
				<?php echo $result[0]['address']; ?><br>	
				<?php echo $result[0]['mobileno']; ?><br>
				<?php echo $result[0]['institute_email']; ?><br>	
			</div>      		
			<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 pull-right mb-lg">
				<h3>To,</h3>
				<div class="form-group">
					<input type="text" class="form-control" name="companyName" id="companyName" placeholder="Company Name" autocomplete="off">
				</div>
				<div class="form-group">
					<textarea class="form-control" rows="3" name="address" id="address" placeholder="Your Address"></textarea>
				</div>
				
			</div>
		</div>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <table class="table table-bordered table-hover" id="invoiceItem">
                    <tr>
						<th width="2%"><input id="checkAll" class="formcontrol" type="checkbox"></th>
                        <th width="15%">Item No</th>
                        <th width="38%">Item Name</th>
                        <th width="15%">Quantity</th>
                        <th width="15%">Price</th>
                        <th width="15%">Total</th>
                    </tr>
                    <tr>
						<td><input class="itemRow" type="checkbox"></td>
                        <td><input type="text" name="productCode[]" id="productCode_1" class="form-control" autocomplete="off"></td>
                        <td><input type="text" name="productName[]" id="productName_1" class="form-control" autocomplete="off"></td>
                        <td><input type="number" name="quantity[]" id="quantity_1" class="form-control quantity" autocomplete="off"></td>
                        <td><input type="number" name="price[]" id="price_1" class="form-control price" autocomplete="off"></td>
                        <td><input type="number" name="total[]" id="total_1" class="form-control total" autocomplete="off"></td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
                <button class="btn btn-danger delete" id="removeRows" type="button">- Delete</button>
                <button class="btn btn-success" id="addRows" type="button">+ Add More</button>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 mt-lg">
                <span class="form-inline float-right">
                    <div class="form-group">
                        <label>Subtotal:  </label>
                        <div class="input-group">
                            <div class="input-group-addon currency">Rs.</div>
                            <input value="" type="number" class="form-control" name="subTotal" id="subTotal" placeholder="Subtotal">
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Tax Rate:  </label>
                        <div class="input-group">
                            <input value="" type="number" class="form-control" name="taxRate" id="taxRate" placeholder="Tax Rate">
                            <div class="input-group-addon">%</div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Tax Amount:  </label>
                        <div class="input-group">
                            <div class="input-group-addon currency">Rs.</div>
                            <input value="" type="number" class="form-control" name="taxAmount" id="taxAmount" placeholder="Tax Amount">
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Total:  </label>
                        <div class="input-group">
                            <div class="input-group-addon currency">Rs.</div>
                            <input value="" type="number" class="form-control" name="totalAftertax" id="totalAftertax" placeholder="Total">
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Amount Paid:  </label>
                        <div class="input-group">
                            <div class="input-group-addon currency">Rs.</div>
                            <input value="" type="number" class="form-control" name="amountPaid" id="amountPaid" placeholder="Amount Paid">
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Amount Due:  </label>
                        <div class="input-group">
                            <div class="input-group-addon currency">Rs.</div>
                            <input value="" type="number" class="form-control" name="amountDue" id="amountDue" placeholder="Amount Due">
                        </div>
                    </div>
                </span>
                <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8 mt-lg mb-lg">
                    <div class="form-group">
                        <input type="hidden" value="<?php echo $_SESSION['userid']; ?>" class="form-control" name="userId">
                        <button data-loading-text="Saving Invoice..." onclick="generate_bill()" name="invoice_btn" value="Generate" class="btn btn-success submit_btn invoice-save-btm">Generate</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
</div>
<div class="panel">
    <div class="panel-body" id="generated_bill">
        
    </div>
</div>
<script>
	$(document).on('click', '#checkAll', function() {          	
		$(".itemRow").prop("checked", this.checked);
	});	
	$(document).on('click', '.itemRow', function() {  	
		if ($('.itemRow:checked').length == $('.itemRow').length) {
			$('#checkAll').prop('checked', true);
		} else {
			$('#checkAll').prop('checked', false);
		}
	}); 
	var count = $(".itemRow").length;
	$(document).on('click', '#addRows', function() { 
		count++;
		var htmlRows = '';
		htmlRows += '<tr>';
		htmlRows += '<td><input class="itemRow" type="checkbox"></td>';          
		htmlRows += '<td><input type="text" name="productCode[]" id="productCode_'+count+'" class="form-control" autocomplete="off"></td>';          
		htmlRows += '<td><input type="text" name="productName[]" id="productName_'+count+'" class="form-control" autocomplete="off"></td>';	
		htmlRows += '<td><input type="number" name="quantity[]" id="quantity_'+count+'" class="form-control quantity" autocomplete="off"></td>';   		
		htmlRows += '<td><input type="number" name="price[]" id="price_'+count+'" class="form-control price" autocomplete="off"></td>';		 
		htmlRows += '<td><input type="number" name="total[]" id="total_'+count+'" class="form-control total" autocomplete="off"></td>';          
		htmlRows += '</tr>';
		$('#invoiceItem').append(htmlRows);
    });

	$(document).on('click', '#removeRows', function(){
		$(".itemRow:checked").each(function() {
			$(this).closest('tr').remove();
		});
		$('#checkAll').prop('checked', false);
		calculateTotal();
	});	
	$(document).on('blur', "[id^=quantity_]", function(){
		calculateTotal();
	});	
	$(document).on('blur', "[id^=price_]", function(){
		calculateTotal();
	});	
	$(document).on('blur', "#taxRate", function(){		
		calculateTotal();
	});
	$(document).on('blur', "#amountPaid", function(){
		var amountPaid = $(this).val();
		var totalAftertax = $('#totalAftertax').val();	
		if(amountPaid && totalAftertax) {
			totalAftertax = totalAftertax-amountPaid;			
			$('#amountDue').val(totalAftertax);
		} else {
			$('#amountDue').val(totalAftertax);
		}	
	});
    function calculateTotal(){
    	var totalAmount = 0; 
    	$("[id^='price_']").each(function() {
    		var id = $(this).attr('id');
    		id = id.replace("price_",'');
    		var price = $('#price_'+id).val();
    		var quantity  = $('#quantity_'+id).val();
    		if(!quantity) {
    			quantity = 1;
    		}
    		var total = price*quantity;
    		$('#total_'+id).val(parseFloat(total));
    		totalAmount += total;			
    	});
    	$('#subTotal').val(parseFloat(totalAmount));	
    	var taxRate = $("#taxRate").val();
    	var subTotal = $('#subTotal').val();	
    	if(subTotal) {
    		var taxAmount = subTotal*taxRate/100;
    		$('#taxAmount').val(taxAmount);
    		subTotal = parseFloat(subTotal)+parseFloat(taxAmount);
    		$('#totalAftertax').val(subTotal);		
    		var amountPaid = $('#amountPaid').val();
    		var totalAftertax = $('#totalAftertax').val();	
    		if(amountPaid && totalAftertax) {
    			totalAftertax = totalAftertax-amountPaid;			
    			$('#amountDue').val(totalAftertax);
    		} else {		
    			$('#amountDue').val(subTotal);
    		}
    	}
    }
    
    function generate_bill(){
    let output = ``;
    output += `<div id="bill"><table width="100%" border="1" cellpadding="5" cellspacing="0">
    	<tr>
    	<td colspan="2" align="center" style="font-size:18px"><b>Invoice</b></td>
    	</tr>
    	<tr>
    	<td colspan="2">
    	<table width="100%" cellpadding="5">
    	<tr>
    	<td width="65%">
    	To,<br />
    	<b>RECEIVER (BILL TO)</b><br />
    	Name : `+$('#companyName').val()+`<br /> 
    	Billing Address : `+$('#address').val()+`<br />
    	</td>
    	<td width="35%">         
    	Invoice No. : `+`1234`+`<br />
    	Invoice Date : `+`<?=date('Y-m-d')?>`+`<br />
    	</td>
    	</tr>
    	</table>
    	<br />
    	<table width="100%" border="1" cellpadding="5" cellspacing="0">
    	<tr>
    	<th align="left">Sr No.</th>
    	<th align="left">Item Code</th>
    	<th align="left">Item Name</th>
    	<th align="left">Quantity</th>
    	<th align="left">Price</th>
    	<th align="left">Actual Amt.</th> 
    	</tr>`;
    let count = 0;   
    for(let i=1; i <= $('.itemRow').length; i++){
    	count++;
    	output += `
    	<tr>
    	<td align="left">`+count+`</td>
    	<td align="left">`+$('#productCode_'+count).val()+`</td>    	
    	<td align="left">`+$('#productName_'+count).val()+`</td>
    	<td align="left">`+$('#quantity_'+count).val()+`</td>
    	<td align="left">`+$('#price_'+count).val()+`</td>
    	<td align="left">`+$('#total_'+count).val()+`</td>   
    	</tr>`;
    }
    output += `
    	<tr>
    	<td align="right" colspan="5"><b>Sub Total</b></td>
    	<td align="left"><b>`+$('#subTotal').val()+`</b></td>
    	</tr>
    	<tr>
    	<td align="right" colspan="5"><b>Tax Rate :</b></td>
    	<td align="left">`+$('#taxRate').val()+`</td>
    	</tr>
    	<tr>
    	<td align="right" colspan="5">Tax Amount: </td>
    	<td align="left">`+$('#taxAmount').val()+`</td>
    	</tr>
    	<tr>
    	<td align="right" colspan="5">Total: </td>
    	<td align="left">`+$('#totalAftertax').val()+`</td>
    	</tr>
    	<tr>
    	<td align="right" colspan="5">Amount Paid:</td>
    	<td align="left">`+$('#amountPaid').val()+`</td>
    	</tr>
    	<tr>
    	<td align="right" colspan="5"><b>Amount Due:</b></td>
    	<td align="left">`+$('#amountDue').val()+`</td>
    	</tr>`;
    output += `
    	</table>
    	</td>
    	</tr>
    	</table>
    	</div>
        <div class="row">
            <div class="col-md-12">
	            <button onclick="printDiv()" class="btn btn-default pull-left mt-lg" data-loading-text="<i class='fas fa-spinner fa-spin'></i> Processing">
		            <i class="fas fa-print"></i> <?php echo translate('Print'); ?>
	            </button>
            </div>
        </div>
    	`;
        $('#generated_bill').html(output);
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