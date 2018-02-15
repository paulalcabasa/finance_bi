
<section class="content">
	<div class="row">
		<div class="col-md-12">


	<!-- 		<div class="box box-danger">
				<div class="box-header with-border">
					<h3 class="box-title"><i class="fa fa-search fa-1x"></i> Filter</h3>
					
				</div>
				<div class="box-body">
					
	             	
				</div>
				<div class="box-footer">
					<div class="pull-right">
						<button type="button" id="btn_search" class="btn btn-danger btn-sm">Submit</button>
					</div>
				</div>
			
			</div> -->

			<div class="box box-danger ap_box_invoices">
				
				<div class="box-body">	
					
					
					<div class="row">
						
						<div class="col-md-12">
							
							<table class="table table-condensed nowrap table-bordered" id="new_item_tbl" style="font-size:90%;" >
								<thead>
									<tr>
										<th>Request ID</th>
										<th>Program</th>
										<th>Requestor</th>
										<th>Next Run</th>
										<th>Last Run</th>
										<th>On Hold</th>
										<th>Increment Dates</th>
										<th>Schedule Type</th>
										<th>Schedule</th>
										<th>Start Date</th>
										<th>End Date</th>
									</tr>
								</thead>
								<tbody>
								<?php
									foreach($scheduled_jobs as $job){
								?>
									<tr>
										<td><?php echo $job->REQUEST_ID;?></td>
										<td><?php echo $job->CONC_PROG;?></td>
										<td><?php echo $job->REQUESTOR_NAME;?></td>
										<td><?php echo $job->NEXT_RUN;?></td>
										<td><?php echo $job->LAST_RUN;?></td>
										<td><?php echo $job->ON_HOLD;?></td>
										<td><?php echo $job->INCREMENT_DATES;?></td>
										<td><?php echo $job->SCHEDULE_TYPE;?></td>
										<td><?php echo $job->SCHEDULE;?></td>
										<td><?php echo $job->START_DATE;?></td>
										<td><?php echo $job->END_DATE;?></td>
									</tr>
								<?php
									}
								?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- 
<script src="<?php echo base_url('resources/input-mask/jquery.inputmask.js'); ?>"></script>
<script src="<?php echo base_url('resources/input-mask/jquery.inputmask.date.extensions.js'); ?>"></script>
<script src="<?php echo base_url('resources/blockui/jquery.blockUI.js'); ?>"></script>
<script src="<?php echo base_url('resources/js/utils.js'); ?>"></script>
 -->
<!-- Data Tables -->
<script src="<?php echo base_url('resources/datatables/datatables.min.js');?>"></script>
<script>


$(document).ready(function(){

    var table = $("#new_item_tbl").DataTable({
    	'scrollX' : true,
    	'sort' : true
    	
    });

  

});    
</script>


