<?php var_dump($receipt_classes);?>
<section class="content">
	<div class="row">
		<div class="col-md-12">
			<div class="box box-solid">
				<div class="box-header with-border">
					<h3 class="box-title">Filters</h3>
				</div>
			<!-- /.box-header -->
			<div class="box-body">
				<form class="form-horizontal">
					<div class="col-md-6">
						<div class="form-group">
							<label class="col-md-3">Receipt Date</label>
							<div class="col-md-9">
								<input type="text" class="form-control input-md" name="txt_receipt_date" id="txt_receipt_date"/>
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-3">Receipt Status</label>
							<div class="col-md-9">
								<select class="form-control">
								<?php
									foreach($receipt_states as $state){
								?>
									<option value="<?php echo $state->id;?>"><?php echo $state->name;?></option>
								<?php
									}
								?>
								</select>
							</div>
						</div>
					</div>

					<div class="col-md-6"></div>
				</form>
			</div>
			<!-- /.box-body -->
			</div>

			<div class="nav-tabs-custom">
				<ul class="nav nav-tabs">
					<li class="active"><a aria-expanded="true" href="#tab_1" data-toggle="tab">With Pending Application</a></li>
					<li class=""><a aria-expanded="false" href="#tab_1" data-toggle="tab">Fully Applied</a></li>
					<li><a href="#tab_1" data-toggle="tab">All</a></li>
				</ul>
				<div class="tab-content">
					<div class="tab-pane active" id="tab_1"></div>
				</div>
			</div>
		</div>
	</div>
</section>
<script>
$(document).ready(function() {
	
	$('#txt_receipt_date').daterangepicker();


	$('#txt_receipt_date').on('apply.daterangepicker', function(ev, picker) {
		$('input[name="from_date"]').val(picker.startDate.format('YYYY-MM-DD'));
		$('input[name="to_date"]').val(picker.endDate.format('YYYY-MM-DD'));
		form_filters.submit();
	});
});
</script>
