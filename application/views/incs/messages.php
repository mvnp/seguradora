<?php if($this->session->userdata('success')): ?>
	<div class="alert alert-success alert-dismissible" role="alert">
		<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		<?php 
		if(is_array($this->session->flashdata('success'))){
			echo $this->session->flashdata('success')['msg'];
		} else {
			echo $this->session->flashdata('success');
		} $this->session->unset_userdata('success');
		?>
	</div>
<?php elseif($this->session->userdata('danger')): ?>
	<div class="alert alert-danger alert-dismissible" role="alert">
		<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		<?php 
		if(is_array($this->session->flashdata('danger'))){
			echo $this->session->flashdata('danger')['msg'];
		} else {
			echo $this->session->flashdata('danger');
		} $this->session->unset_userdata('danger');
		?>
	</div>
<?php elseif($this->session->userdata('warning')): ?>
	<div class="alert alert-warning alert-dismissible" role="alert">
		<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		<?php 
		if(is_array($this->session->flashdata('warning'))){
			echo $this->session->flashdata('warning')['msg'];
		} else {
			echo $this->session->flashdata('warning');
		} $this->session->unset_userdata('warning');
		?>
	</div>
<?php elseif($this->session->userdata('info')): ?>
	<div class="alert alert-info alert-dismissible" role="alert">
		<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		<?php 
		if(is_array($this->session->flashdata('info'))){
			echo $this->session->flashdata('info')['msg'];
		} else {
			echo $this->session->flashdata('info');
		} $this->session->unset_userdata('info');
		?>
	</div>
<?php elseif($this->session->userdata('primary')): ?>
	<div class="alert alert-primary alert-dismissible" role="alert">
		<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		<?php 
		if(is_array($this->session->flashdata('primary'))){
			echo $this->session->flashdata('primary')['msg'];
		} else {
			echo $this->session->flashdata('primary');
		} $this->session->unset_userdata('primary');
		?>
	</div>
<?php endif; ?>