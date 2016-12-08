
<!--  ==== HEADER ==== -->
<?php $this->load->view('admin/components/main_head', array('num' => 1, 'title' => 'HOME')); ?>


<!--  ==== NAVBAR==== -->

<?php $this->load->view('admin/components/main_navbar'); ?>

    <div class="container-fluid">

		<div class="starter-template row">
			<h3>Welcome, ADMIN</h3>
			<p class="lead"></p>
		</div>
	  
	  
		<div class="row">
	  
			<div class="col-md-6">
				<div class="alert alert-success monthly" id="mycalendar"></div>

			</div>
			
			<div class="col-md-6">
			  <a href="#" class="list-group-item list-group-item-success">
				<h2 class="list-group-item-heading">REMINDERS FOR TODAY</h2>
				<p class="list-group-item-text">December 9, 2016</p>
			  </a>
			  
			   <a href="#" class="list-group-item">
				<h4 class="list-group-item-heading">Review sales from yesterday</h4>
				<p class="list-group-item-text">Collect and encode receipts</p>
			  </a>
			  
			  <a href="#" class="list-group-item">
				<h4 class="list-group-item-heading">Receive order from Boysen</h4>
				<p class="list-group-item-text">Shipment today</p>
			  </a>
			  
			  <a href="#" class="list-group-item">
				<h4 class="list-group-item-heading">Deliver paint to IT Park</h4>
				<p class="list-group-item-text">Must deliver before lunch</p>
			  </a>
			  
			  <a href="#" class="list-group-item">
				<h4 class="list-group-item-heading">Half day tomorrow</h4>
				<p class="list-group-item-text">Christmas party in the afternoon</p>
			  </a>
			  
			  
			</div>

		</div>
		
		
	</div>
 
<?php $this->load->view('admin/components/main_tail'); ?>
