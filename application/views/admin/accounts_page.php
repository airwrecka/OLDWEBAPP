
<!--  ==== HEADER ==== -->
<?php $this->load->view('admin/components/main_head'); ?>


<!--  ==== NAVBAR==== -->

<?php $this->load->view('admin/components/main_navbar'); ?>

<!--  ==== BODY ==== -->

<div class="container-fluid">

      <div class="header-align row">
        <h1>Accounts</h1>
        <p class="lead"></p>
      </div>
	

	  <div class="col-md-10 col-md-offset-1 row">
	 
	<?php echo anchor('add_acc', '<button type="button" class="btn btn-primary">Add Account</button> '); ?>

	
		<div id ="datatables_filter" class="dataTables_filter">
		</div>
		
		
		<table id ="datatables" class="table table-hover" aria-describedby="datatables_info">
		 <thead>
			<tr>
            <th></th>
            <th>No.</th>
            <th>Name</th>
            <th>Person of Contact</th>
            <th>Contact Number</th>
            <th>Credit Limit</th>
			</tr>
		</thead>
		
		<tbody>
			<tr>
            <th><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></th>
            <th>001</th>
            <th>Boysen</th>
            <th>John Smith</th>
            <th>09222222222</th>
            <th>52</th>
			</tr>
			
			<tr>
            <th><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></th>
            <th>002</th>
            <th>Sun and Rain</th>
            <th>Ferdinand Marcos</th>
            <th>09222222122</th>
            <th>100 billion</th>
			</tr>
			
			<tr>
            <th><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></th>
            <th>003</th>
            <th>Hardiflex</th>
            <th>Lapu Lapu</th>
            <th>09222251122</th>
            <th>0</th>
			</tr>
			
		</tbody>
  
		</table>
		
	  </div>
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
</div>

 
<?php $this->load->view('admin/components/main_tail'); ?>