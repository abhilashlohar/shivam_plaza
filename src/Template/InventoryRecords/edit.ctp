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
<?php $this->set("title", 'Manual Daily Inventory | '.$coreVariable['company_name']); ?>
<div class="row" style="margin-top:15px;">
    <div class="col-md-12 main-div">
        <div class="portlet box blue-hoki">
            <div class="portlet-body"  id="ExcelPage">
                <form method="POST">
                    <label id="CurrentDate">Date</label>
                    <input name="date" class="form-control" type="text" value="<?php echo date('d-m-Y', strtotime($t_date)); ?>" readonly="readonly" style="width: 150px;">

                    <div class="table-scrollable">
                        <table class="table table-bordered table-stripped">
                            <tr>
                               <th>Item</th>
                               <th>Unit</th>
                               <th width="15%">Op. Balance</th>
                               <th>Purchase</th>
                               <th>Manual adjustment</th>
                               <th>Mall</th>
                               <th>SS</th>
                               <th>Wastage</th>
                               <th>Cls. Balance</th>
                               <th>Consumption</th>
                           </tr>
                            <?php foreach ($ItemLists as $ItemList) { ?>
                               <tr>
                                   <td>
                                        <?= h($ItemList->name) ?>
                                        <input type="hidden" class="form-control input-sm" name="item_list[<?= h($ItemList->id) ?>]" placeholder="0" value="<?= h($ItemList->id) ?>" >
                                    </td>
                                   <td><?= h($ItemList->unit) ?></td>
                                   <td><?php echo @$OBData[$ItemList->id]; ?></td>
                                   <td>
                                        <input type="text" class="form-control input-sm" name="projection[<?= h($ItemList->id) ?>]" placeholder="0" value="<?php echo @$TodayOBData[$ItemList->id]['projection']; ?>" >
                                   </td>
                                   <td>
                                      <input type="text" class="form-control input-sm" name="adjustment[<?= h($ItemList->id) ?>]" placeholder="0" value="<?php echo @$TodayOBData[$ItemList->id]['adjustment']; ?>" >
                                   </td>
                                   <td>
                                       <input type="text" class="form-control input-sm" name="mall[<?= h($ItemList->id) ?>]" placeholder="0" value="<?php echo @$TodayOBData[$ItemList->id]['mall']; ?>" >
                                   </td>
                                   <td>
                                       <input type="text" class="form-control input-sm" name="road[<?= h($ItemList->id) ?>]" placeholder="0" value="<?php echo @$TodayOBData[$ItemList->id]['road']; ?>" >
                                   </td>
                                   <td>
                                      <input type="text" class="form-control input-sm" name="wastage[<?= h($ItemList->id) ?>]" placeholder="0" value="<?php echo @$TodayOBData[$ItemList->id]['wastage']; ?>" >
                                   </td>
                                   <td>
                                       <input type="text" class="form-control input-sm" name="closing_balance[<?= h($ItemList->id) ?>]" placeholder="0"   value="<?php echo @$TodayOBData[$ItemList->id]['closing_balance']; ?>">
                                   </td>
                                   <td>
                                       <input type="text" class="form-control input-sm" name="consumption[<?= h($ItemList->id) ?>]" placeholder="0" readonly='readonly' tabindex="-1" value="<?php echo @$TodayOBData[$ItemList->id]['consumption']; ?>">
                                   </td>
                               </tr>
                            <?php } ?>
                        </table>
                    </div>
                    <div align="center">
                        <button type="submit" class="btn btn-danger">Submit</button>
                    </div>
                </form>
                
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

    $('input').die().live('keyup',function(event){
        var OB = parseFloat($(this).closest('tr').find('td:nth-child(3)').text());
        if(isNaN(OB)){ OB=0; }

        var Projection = parseFloat($(this).closest('tr').find('td:nth-child(4) input').val());
        if(isNaN(Projection)){ Projection=0; }

        var adjustment = parseFloat($(this).closest('tr').find('td:nth-child(5) input').val());
        if(isNaN(adjustment)){ adjustment=0; }

        var Mall = parseFloat($(this).closest('tr').find('td:nth-child(6) input').val());
        if(isNaN(Mall)){ Mall=0; }

        var Road = parseFloat($(this).closest('tr').find('td:nth-child(7) input').val());
        if(isNaN(Road)){ Road=0; }

        var Wastage = parseFloat($(this).closest('tr').find('td:nth-child(8) input').val());
        if(isNaN(Wastage)){ Wastage=0; }

        var Cls = parseFloat($(this).closest('tr').find('td:nth-child(9) input').val());
        if(isNaN(Cls)){ Cls=0; }

        var Consumption =  OB + Projection + adjustment - Mall - Road - Wastage - Cls;
        Consumption = round(Consumption,2);
        $(this).closest('tr').find('td:nth-child(10) input').val(Consumption);
    });



    ComponentsPickers.init();
});
jQuery(window).scrollTop(jQuery('#CurrentDate').offset().top);
";
?>
<?php echo $this->Html->scriptBlock($js, array('block' => 'scriptBottom'));  ?>