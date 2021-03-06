<?php echo $this->Html->css('mystyle'); ?>
<?php $this->set("title", 'Employee | '.$coreVariable['company_name']); ?>
<!-- BEGIN PAGE CONTENT-->
<div class="row" style="margin-top:15px;">
	<div class="col-md-2"></div>
	<div class="col-md-8 main-div">
		<!-- BEGIN ALERTS PORTLET-->
		<div class="portlet box blue-hoki">
			<div class="portlet-title">
				<div class="caption">
					<?php if(!empty($id)){ ?>
						Edit Employee
					<?php }else{ ?>
						Add Employee
					<?php } ?>
				</div>
				
				<?php if (in_array("16", $userPages)){ ?>
					<div class="tools" style="margin-right: 10px;">
						<?php
						echo $this->Html->link('<i class="fa fa-plus" style="font-size: 16px;padding-right:2px;" ></i> Employee List', '/Employees/index',['escape' => false, 'class' => 'showLoader','style'=>'text-decoration: none;']);
						?>
					</div>
				<?php } ?>
				
				<div class="row">	
						<div class="col-md-12 horizontal "></div>
				</div>
			</div>
			<div class="portlet-body">
				<div class="">
					<?= $this->Form->create($employee,['id'=>'form_sample_1']); ?>
					<div class="row">
						<div class="form-group col-md-6">
							<label class="control-label col-md-12"> Name <span class="required" aria-required="true">*
							 </span>
							</label>
							<div class="col-md-12">
								<div class="input-icon right">
									<i class="fa"></i>
									<input type="text" <?php if(!empty($id)){ echo "value='".$employee->name."'"; } ?> name="name" class="form-control" Placeholder="Enter Employee Name">
								</div>
							</div>
						</div>
						
						<div class="form-group col-md-6">
							<label class="control-label col-md-12"> Email 	</label>
							<div class="col-md-12">
								<div class="input-icon right">
									<i class="fa"></i>
									<input type="text" <?php if(!empty($id)){ echo "value='".$employee->email."'"; } ?> name="email" class="form-control " Placeholder="Enter E-mail address" >
								</div>
							</div>
						</div>
					</div>
					<div class="row">	
						<div class="form-group col-md-4">
							<label class="control-label col-md-12"> Mobile Number </span>
							</label>
							<div class="col-md-12">
								<div class="input-icon right">
									<i class="fa"></i>
									<input type="text" <?php if(!empty($id)){ echo "value='".$employee->mobile_no."'"; } ?> name="mobile_no" class="form-control" Placeholder="Enter Mobile No" oninput="this.value = this.value.replace(/[^0-9]/g, '').replace(/(\..*)\./g, '$1');" maxlength="10" minlength="10" >
								</div>
							</div>
						</div>
						<div class="form-group col-md-4">
							<label class="control-label col-md-12"> Designation <span class="required" name="dName" >
							 *</span>
							</label>
							<div class="col-md-12">
								<div class="input-icon right">
									<i class="fa"></i>
									<?php echo $this->Form->input('designation_id',['options' =>$Designations,'label' => false,'class'=>'form-control select2me','empty'=> 'Select...','required'=>'required', 'value'=>$employee->designation_id]);?>
								</div>
							</div>
						</div>
						<?php if(!$id){ ?>
						<div class="form-group col-md-4">
							<label class="control-label col-md-12"> Salary	</label>
							<div class="col-md-12">
								<div class="input-icon right">
									<i class="fa"></i>
									<input type="text" <?php if(!empty($id)){ echo "value='".$employee->salary."'"; } ?> name="salary" class="form-control" Placeholder="Salary" >
								</div>
							</div>
						</div>
						<?php } ?>
					</div>
					<div class="row">	
						<?php if($id){ ?>
						<div class="form-group col-md-4">
							<label class="control-label col-md-12"> Salary	</label>
							<div class="col-md-12">
								<div class="input-icon right">
									<i class="fa"></i>
									<input type="text" value="<?php echo @$EmployeeSalary->amount; ?>" name="salary" id="salary" class="form-control" Placeholder="Salary" >
									<input type="hidden" id="old_salary" value="<?php echo @$EmployeeSalary->amount; ?>" />
								</div>
							</div>
						</div>
						<div class="form-group col-md-4">
							<label class="control-label col-md-12"> Effective from	</label>
							<div class="col-md-12">
								<div class="input-icon right">
									<i class="fa"></i>
									<input type="text" name="effective_from" id="effective_from" class="form-control date-picker" Placeholder="Month" data-date-format="mm-yyyy" >
								</div>
							</div>
						</div>
						<?php } ?>
					</div>
					<div class="row">
						<div class="form-group col-md-10">
							<label class="control-label col-md-12"> Address 
							</label>
							<div class="col-md-12">
								<div class="input-icon right">
									<i class="fa"></i>
									<?php echo $this->Form->control('address',['class'=>'form-control','label'=>false,'style'=>'resize:none;','rows'=>2]); ?>
								</div>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-md-6">
							<label>Username</label>
							<?php
							echo $this->Form->control('user.username',['class'=>'form-control','label'=>false, 'value' => $employee->user->username, 'required'=>'false']);
							?>
						</div>
						<div class="col-md-6">
							<label>Password</label>
							<?php
							echo $this->Form->control('user.password',['class'=>'form-control','label'=>false, 'value' =>'', 'required'=>'false']);
							?>
						</div>
					</div>
 						
					<div class="form-actions ">
						<div class="row">
							<div class="col-md-12" style="text-align:center;">
								<hr>
								<?php echo $this->Form->button('Submit',['class'=>'btn btn-danger']); ?> 
							</div>
						</div>
					</div>	 
					<?= $this->Form->end() ?>
				</div> 
			</div>
		</div>
	</div>
	<div class="col-md-2"></div>
</div>
<!-- BEGIN PAGE LEVEL STYLES -->
<!-- BEGIN COMPONENTS DROPDOWNS -->
	<?php echo $this->Html->css('/assets/global/plugins/bootstrap-select/bootstrap-select.min.css', ['block' => 'PAGE_LEVEL_CSS']); ?>
	<?php echo $this->Html->css('/assets/global/plugins/select2/select2.css', ['block' => 'PAGE_LEVEL_CSS']); ?>
	<?php echo $this->Html->css('/assets/global/plugins/jquery-multi-select/css/multi-select.css', ['block' => 'PAGE_LEVEL_CSS']); ?>
	<!-- END COMPONENTS DROPDOWNS -->
<!-- BEGIN COMPONENTS DROPDOWNS -->
	<?php echo $this->Html->script('/assets/global/plugins/bootstrap-select/bootstrap-select.min.js', ['block' => 'PAGE_LEVEL_PLUGINS_JS']); ?>
	<?php echo $this->Html->script('/assets/global/plugins/select2/select2.min.js', ['block' => 'PAGE_LEVEL_PLUGINS_JS']); ?>
	<?php echo $this->Html->script('/assets/global/plugins/jquery-multi-select/js/jquery.multi-select.js', ['block' => 'PAGE_LEVEL_PLUGINS_JS']); ?>
	<!-- END COMPONENTS DROPDOWNS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
	<!-- BEGIN VALIDATEION -->
	<?php echo $this->Html->script('/assets/global/plugins/jquery-validation/js/jquery.validate.min.js', ['block' => 'PAGE_LEVEL_PLUGINS_JS']); ?>
	<?php echo $this->Html->script('/assets/admin/pages/scripts/form-validation.js', ['block' => 'PAGE_LEVEL_PLUGINS_JS']); ?>
	<?php echo $this->Html->script('/assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js', ['block' => 'PAGE_LEVEL_PLUGINS_JS']); ?>
	<?php echo $this->Html->script('/assets/admin/pages/scripts/components-pickers.js', ['block' => 'PAGE_LEVEL_PLUGINS_JS']); ?>
	<!-- END VALIDATEION --> 
<!-- END PAGE LEVEL SCRIPTS -->

<?php 
$js="
$(document).ready(function() {
	var form3 = $('#form_sample_1');
	var error3 = $('.alert-danger', form3);
	var success3 = $('.alert-success', form3);
	form3.validate({
		errorElement: 'span', //default input error message container
		errorClass: 'help-block help-block-error', // default input error message class
		focusInvalid: true, // do not focus the last invalid input
		rules: {
			name: { 
				required: true 
			},
			designation_id:{
				required: true,
			}
			 
		},

		errorPlacement: function (error, element) { // render error placement for each input type
			if (element.parent('.input-group').size() > 0) {
				error.insertAfter(element.parent('.input-group'));
			} else if (element.attr('data-error-container')) { 
				error.appendTo(element.attr('data-error-container'));
			} else if (element.parents('.radio-list').size() > 0) { 
				error.appendTo(element.parents('.radio-list').attr('data-error-container'));
			} else if (element.parents('.radio-inline').size() > 0) { 
				error.appendTo(element.parents('.radio-inline').attr('data-error-container'));
			} else if (element.parents('.checkbox-list').size() > 0) {
				error.appendTo(element.parents('.checkbox-list').attr('data-error-container'));
			} else if (element.parents('.checkbox-inline').size() > 0) { 
				error.appendTo(element.parents('.checkbox-inline').attr('data-error-container'));
			} else {
				error.insertAfter(element); // for other inputs, just perform default behavior
			}
		},

		invalidHandler: function (event, validator) { //display error alert on form submit   
			success3.hide();
			error3.show();
		},

		highlight: function (element) { // hightlight error inputs
		   $(element)
				.closest('.form-group').addClass('has-error'); // set error class to the control group
		},

		unhighlight: function (element) { // revert the change done by hightlight
			$(element)
				.closest('.form-group').removeClass('has-error'); // set error class to the control group
		},

		success: function (label) {
			label
				.closest('.form-group').removeClass('has-error'); // set success class to the control group
		},

		submitHandler: function (form) {
			success3.show();
			error3.hide();
			$('#loading').show();
			form[0].submit(); // submit the form
		}
	});

	$('#salary').die().live('keyup',function(event){
		var edited_salary=$(this).val();
		var old_salary=$('#old_salary').val();
		if(old_salary!=edited_salary){
			 $('#effective_from').rules('add', 
                    {
                        required: true
                    });
		}else{
			$('#effective_from').rules('add', 
                    {
                        required: false
                    });
		}
	});


});
";

$js.="
$(document).ready(function() {
    ComponentsPickers.init();
});
";

?>
<?php echo $this->Html->scriptBlock($js, array('block' => 'scriptBottom'));  ?>
<style>
.btn-sets{
	
}
</style>
