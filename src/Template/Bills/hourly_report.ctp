<?php echo $this->Html->css('mystyle'); ?>
<style type="text/css" media="print">
@page {
	width:100%;
	size: auto;   /* auto is the initial value */
	margin: 0px 0px 0px 0px;  /* this affects the margin in the printer settings */
}
.hide_at_print {
	display:none !important;
}
.show_at_print {
	display:block !important;
}
</style>
<?php $this->set("title", 'Hourly Sales Report | '.$coreVariable['company_name']); ?>
<div class="row" style="margin-top:15px;">
	<div class="col-md-12 main-div">
		<div class="portlet box blue-hoki">
			<div class="portlet-title hide_at_print">
				<table width="100%" style=" margin-top: 5px; margin-bottom: 5px; ">
					<tr>
						<td width="20%">
							<div class="caption"style="padding:13px; color: red;">
								Hourly Sales Report
							</div>
						</td>
						<td valign="button">
							<div align="center">
								<form method="GET">
									<table>
										<tr>
											<td>
												<input name="date" class="form-control date-picker" type="text" value="<?php echo @$date; ?>" data-date-format="dd-mm-yyyy" required="required" placeholder="Date">
											</td>
											<td>
												<button type="submit" class="btn" style="background-color: #FA6775;color: #FFF;">GO</button>
											</td>
										</tr>
									</table>
								</form>
							</div>
						</td>
						<td width="20%">
							<a href="javascript:void()" id="exportExcel" class="btn btn-danger" style="float: right;margin-right: 10px;">Excel</a>
						</td>
					</tr>
				</table>
				<div class="row">	
					<div class="col-md-12 horizontal"></div>
				</div>
			</div>

			<div class="portlet-body"  id="ExcelPage">
				<?php if($date){ ?>
				<div align="center">
					<h4><?php echo $coreVariable['company_name']; ?></h4>
					<span><?php echo $coreVariable['company_address']; ?></span><br/>

				</div>
				<div>
					<b>Bill Wise Sales Report</b><br/>
					<b>Date <?php echo @$date; ?></b>
					<b style="float: right;"><?php echo date('d-m-Y H:i A'); ?></b>
				</div>
				<div class="table-scrollable">
					<table border="1" class="table table-bordered" id="main_table" >
						<thead>
							<tr>
								<th><?= ('Time') ?></th>
								<th style="text-align: center;"><?= ('Sale') ?></th>
								<th style="text-align: center;"><?= ('No. of Pax') ?></th>
								<th style="text-align: center;"><?= ('No. of Bills') ?></th>
							</tr>
						</thead>
						<tbody id="main_tbody">
							<tr class="main_tr">
								<td>6 AM - 7 AM</td>
								<td style="text-align: center;"><?php echo @$HoyrlySalesData[6]; ?></td>
								<td style="text-align: center;"><?php echo @$HoyrlyPaxData[6]; ?></td>
								<td style="text-align: center;"><?php echo @$HoyrlyBillData[6]; ?></td>
							</tr>
							<tr class="main_tr">
								<td>7 AM - 8 AM</td>
								<td style="text-align: center;"><?php echo @$HoyrlySalesData[7]; ?></td>
								<td style="text-align: center;"><?php echo @$HoyrlyPaxData[7]; ?></td>
								<td style="text-align: center;"><?php echo @$HoyrlyBillData[7]; ?></td>
							</tr>
							<tr class="main_tr">
								<td>8 AM - 9 AM</td>
								<td style="text-align: center;"><?php echo @$HoyrlySalesData[8]; ?></td>
								<td style="text-align: center;"><?php echo @$HoyrlyPaxData[8]; ?></td>
								<td style="text-align: center;"><?php echo @$HoyrlyBillData[8]; ?></td>
							</tr>
							<tr class="main_tr">
								<td>9 AM - 10 AM</td>
								<td style="text-align: center;"><?php echo @$HoyrlySalesData[9]; ?></td>
								<td style="text-align: center;"><?php echo @$HoyrlyPaxData[9]; ?></td>
								<td style="text-align: center;"><?php echo @$HoyrlyBillData[9]; ?></td>
							</tr>
							<tr class="main_tr">
								<td>10 AM - 11 AM</td>
								<td style="text-align: center;"><?php echo @$HoyrlySalesData[10]; ?></td>
								<td style="text-align: center;"><?php echo @$HoyrlyPaxData[10]; ?></td>
								<td style="text-align: center;"><?php echo @$HoyrlyBillData[10]; ?></td>
							</tr>
							<tr class="main_tr">
								<td>11 AM - 12 PM</td>
								<td style="text-align: center;"><?php echo @$HoyrlySalesData[11]; ?></td>
								<td style="text-align: center;"><?php echo @$HoyrlyPaxData[11]; ?></td>
								<td style="text-align: center;"><?php echo @$HoyrlyBillData[11]; ?></td>
							</tr>
							<tr class="main_tr">
								<td>12 PM - 1 PM</td>
								<td style="text-align: center;"><?php echo @$HoyrlySalesData[12]; ?></td>
								<td style="text-align: center;"><?php echo @$HoyrlyPaxData[12]; ?></td>
								<td style="text-align: center;"><?php echo @$HoyrlyBillData[12]; ?></td>
							</tr>
							<tr class="main_tr">
								<td>1 PM - 2 PM</td>
								<td style="text-align: center;"><?php echo @$HoyrlySalesData[13]; ?></td>
								<td style="text-align: center;"><?php echo @$HoyrlyPaxData[13]; ?></td>
								<td style="text-align: center;"><?php echo @$HoyrlyBillData[13]; ?></td>
							</tr>
							<tr class="main_tr">
								<td>2 PM - 3 PM</td>
								<td style="text-align: center;"><?php echo @$HoyrlySalesData[14]; ?></td>
								<td style="text-align: center;"><?php echo @$HoyrlyPaxData[14]; ?></td>
								<td style="text-align: center;"><?php echo @$HoyrlyBillData[14]; ?></td>
							</tr>
							<tr class="main_tr">
								<td>3 PM - 4 PM</td>
								<td style="text-align: center;"><?php echo @$HoyrlySalesData[15]; ?></td>
								<td style="text-align: center;"><?php echo @$HoyrlyPaxData[15]; ?></td>
								<td style="text-align: center;"><?php echo @$HoyrlyBillData[15]; ?></td>
							</tr>
							<tr class="main_tr">
								<td>4 PM - 5 PM</td>
								<td style="text-align: center;"><?php echo @$HoyrlySalesData[16]; ?></td>
								<td style="text-align: center;"><?php echo @$HoyrlyPaxData[16]; ?></td>
								<td style="text-align: center;"><?php echo @$HoyrlyBillData[16]; ?></td>
							</tr>
							<tr class="main_tr">
								<td>5 PM - 6 PM</td>
								<td style="text-align: center;"><?php echo @$HoyrlySalesData[17]; ?></td>
								<td style="text-align: center;"><?php echo @$HoyrlyPaxData[17]; ?></td>
								<td style="text-align: center;"><?php echo @$HoyrlyBillData[17]; ?></td>
							</tr>
							<tr class="main_tr">
								<td>6 PM - 7 PM</td>
								<td style="text-align: center;"><?php echo @$HoyrlySalesData[18]; ?></td>
								<td style="text-align: center;"><?php echo @$HoyrlyPaxData[18]; ?></td>
								<td style="text-align: center;"><?php echo @$HoyrlyBillData[18]; ?></td>
							</tr>
							<tr class="main_tr">
								<td>7 PM - 8 PM</td>
								<td style="text-align: center;"><?php echo @$HoyrlySalesData[19]; ?></td>
								<td style="text-align: center;"><?php echo @$HoyrlyPaxData[19]; ?></td>
								<td style="text-align: center;"><?php echo @$HoyrlyBillData[19]; ?></td>
							</tr>
							<tr class="main_tr">
								<td>8 PM - 9 PM</td>
								<td style="text-align: center;"><?php echo @$HoyrlySalesData[20]; ?></td>
								<td style="text-align: center;"><?php echo @$HoyrlyPaxData[20]; ?></td>
								<td style="text-align: center;"><?php echo @$HoyrlyBillData[20]; ?></td>
							</tr>
							<tr class="main_tr">
								<td>9 PM - 10 PM</td>
								<td style="text-align: center;"><?php echo @$HoyrlySalesData[21]; ?></td>
								<td style="text-align: center;"><?php echo @$HoyrlyPaxData[21]; ?></td>
								<td style="text-align: center;"><?php echo @$HoyrlyBillData[21]; ?></td>
							</tr>
							<tr class="main_tr">
								<td>10 PM - 11 PM</td>
								<td style="text-align: center;"><?php echo @$HoyrlySalesData[22]; ?></td>
								<td style="text-align: center;"><?php echo @$HoyrlyPaxData[22]; ?></td>
								<td style="text-align: center;"><?php echo @$HoyrlyBillData[22]; ?></td>
							</tr>
							<tr class="main_tr">
								<td>11 PM - 12 AM</td>
								<td style="text-align: center;"><?php echo @$HoyrlySalesData[23]; ?></td>
								<td style="text-align: center;"><?php echo @$HoyrlyPaxData[23]; ?></td>
								<td style="text-align: center;"><?php echo @$HoyrlyBillData[23]; ?></td>
							</tr>
						</tbody>
					</table>
				</div>
				<?php } ?>
			</div>
		</div>
	</div>
</div>

<?php $formAction=$this->Url->build(['controller'=>'Bills','action'=>'hourlyReportExcel']); ?>
<form method="POST" action="<?php echo $formAction; ?>" id="ExcelForm" style="display: none;">
	<textarea id="ExcelBox" name="excel_box"></textarea>
	<button type="submit">EXCEL</button>
</form>
<!-- BEGIN PAGE LEVEL STYLES -->
    <!-- BEGIN COMPONENTS DROPDOWNS -->
    <?php echo $this->Html->css('/assets/global/plugins/clockface/css/clockface.css', ['block' => 'PAGE_LEVEL_CSS']); ?>
    <?php echo $this->Html->css('/assets/global/plugins/bootstrap-timepicker/css/bootstrap-timepicker.min.css', ['block' => 'PAGE_LEVEL_CSS']); ?>
    <?php echo $this->Html->css('/assets/global/plugins/bootstrap-colorpicker/css/colorpicker.css', ['block' => 'PAGE_LEVEL_CSS']); ?>
    <?php echo $this->Html->css('/assets/global/plugins/bootstrap-daterangepicker/daterangepicker-bs3.css', ['block' => 'PAGE_LEVEL_CSS']); ?>
    <?php echo $this->Html->css('/assets/global/plugins/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css', ['block' => 'PAGE_LEVEL_CSS']); ?>
    <!-- END COMPONENTS DROPDOWNS -->
<!-- END PAGE LEVEL STYLES -->

 <!-- BEGIN PAGE LEVEL PLUGINS -->
<?php echo $this->Html->script('/assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js', ['block' => 'PAGE_LEVEL_PLUGINS_JS']); ?>
<?php echo $this->Html->script('/assets/global/plugins/bootstrap-timepicker/js/bootstrap-timepicker.min.js', ['block' => 'PAGE_LEVEL_PLUGINS_JS']); ?>
<?php echo $this->Html->script('/assets/global/plugins/clockface/js/clockface.js', ['block' => 'PAGE_LEVEL_PLUGINS_JS']); ?>
<?php echo $this->Html->script('/assets/global/plugins/bootstrap-daterangepicker/moment.min.js', ['block' => 'PAGE_LEVEL_PLUGINS_JS']); ?>
<?php echo $this->Html->script('/assets/global/plugins/bootstrap-daterangepicker/daterangepicker.js', ['block' => 'PAGE_LEVEL_PLUGINS_JS']); ?>
<?php echo $this->Html->script('/assets/global/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.js', ['block' => 'PAGE_LEVEL_PLUGINS_JS']); ?>
<?php echo $this->Html->script('/assets/global/plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js', ['block' => 'PAGE_LEVEL_PLUGINS_JS']); ?>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<?php echo $this->Html->script('/assets/global/scripts/metronic.js', ['block' => 'PAGE_LEVEL_PLUGINS_JS']); ?>
<?php echo $this->Html->script('/assets/admin/layout/scripts/layout.js', ['block' => 'PAGE_LEVEL_PLUGINS_JS']); ?>
<?php echo $this->Html->script('/assets/admin/layout/scripts/quick-sidebar.js', ['block' => 'PAGE_LEVEL_PLUGINS_JS']); ?>
<?php echo $this->Html->script('/assets/admin/layout/scripts/demo.js', ['block' => 'PAGE_LEVEL_PLUGINS_JS']); ?>
<?php echo $this->Html->script('/assets/admin/pages/scripts/components-pickers.js', ['block' => 'PAGE_LEVEL_PLUGINS_JS']); ?>
<!-- END PAGE LEVEL SCRIPTS -->
<?php 
$js="
$(document).ready(function() {
	var ht = $('#ExcelPage').html();
	$('#ExcelBox').html(ht);

	
	$('#exportExcel').die().live('click',function(event){
		$('#ExcelForm').submit();
	});

    ComponentsPickers.init();
});
";
?>
<?php echo $this->Html->scriptBlock($js, array('block' => 'scriptBottom'));  ?>