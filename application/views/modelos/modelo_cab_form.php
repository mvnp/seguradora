<section role="main" class="content-body" style="padding-top:0">
	<!-- start: page -->
	<div class="row">
		<div class="col-md-12">
			<form id="form" action="forms-validation.html" class="form-horizontal">
				<section class="panel">
					<header class="panel-heading">
						<div class="panel-actions">
							<!-- a href="#" class="panel-action panel-action-toggle" data-panel-toggle></a -->
							<!-- a href="#" class="panel-action panel-action-dismiss" data-panel-dismiss></a -->
						</div>

						<h2 class="panel-title">Basic Form Validation</h2>
						<p class="panel-subtitle">
							Basic validation will display a label with the error after the form control.
						</p>
					</header>
					<div class="panel-body">
						<!-- start form -->
						<div class="form-group">
							<div class="col-sm-12">
								<label class="control-label">Full Name <span class="required">*</span></label>
								<input type="text" name="fullname" class="form-control" placeholder="eg.: John Doe" required/>
							</div>
						</div>
					<!-- end form -->
					</div>		
					<footer class="panel-footer">
						<div class="row">
							<div class="col-sm-offset-4 col-sm-2">
								<button class="btn btn-block btn-primary">Submit</button>
							</div>
							<div class="col-sm-2">
								<button type="reset" class="btn btn-block btn-default">Reset</button>
							</div>
						</div>
					</footer>
				</section>
			</form>
		</div>
	</div>
</section>