<style>
    .img-thumb-path{
        height:100px;
        width:80px;
        object-fit:scale-down;
        object-position:center center;
    }
	
</style>
<div class="card card-outline card-primary rounded-0 shadow">
	<div class="card-header">
		<h3 class="card-title">List of Leads</h3>
		<?php if($_settings->userdata('type') == 1): ?>
		<div class="card-tools">
			<a href="./?page=leads/manage_lead" class="btn btn-flat btn-sm btn-primary"><span class="fas fa-plus"></span>  Create New Leads</a>
		</div>
		<?php endif; ?>
	</div>
	<div class="card-body">
		<div class="container-fluid">
			<div class="row justify-content-center mb-3">
				<div class="col-lg-5 col-md-6 col-sm-12">
					<div class="input-group input-group-sm">
						<div class="input-group-prepend">
							<span class="input-group-text">Search</span>
						</div>
						<input type="search" id="search" class="form-control">
						<div class="input-group-append">
							<span class="input-group-text"><i class="fa fa-search"></i></span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

			