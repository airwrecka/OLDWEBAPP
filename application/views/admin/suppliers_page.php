
<!--  ==== HEADER ==== -->
<?php $this->load->view('admin/components/main_head', array('num' => 3, 'title' => 'SUPPLIERS')); ?>


<!--  ==== NAVBAR==== -->

<?php $this->load->view('admin/components/main_navbar'); ?>

<!--  ==== BODY ==== -->

<div class="container-fluid">

      <div class="col-md-9 col-md-offset-5">
        <h1>Suppliers</h1>
       
      </div>
	
		<!-- echo anchor('add_acc', '<button type="button" class="btn btn-primary">Add Account</button> '); ? -->
	<div class="row " padding="5px">
		
		<div class="col-md-10 col-md-offset-1">
			<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#myModal" > 
				Add Suppliers
			</button>
		</div>
	 </div>
	 
	 <div class="row " padding="5px">
		
		<div class="col-md-10 col-md-offset-1">
			&nbsp;
		</div>
	 </div>
	 
	 <div class="row" padding-top="5px">
		
		<div class="col-md-10 col-md-offset-1 " padding="5px">
		<table id ="datatables" class="table table-hover" >
		 <thead>
			<tr class="danger">
            <th></th>
            <th>No.</th>
            <th>Supplier Name</th>
            <th>Person of Contact</th>
            <th>Contact Number</th>
            <th>Address</th>
			</tr>
		</thead>
		
		<tbody>
			<tr>
            <th>
			<button class="btn btn-danger btn-xs" type="button" data-toggle="modal" data-target="#infoModal">
			<span class="badge" type="button"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></span>
			</button>
			</th>
			
            <th>001</th>
            <th>Cuadro Ocho</th>
            <th>Katrin Lasala</th>
            <th>09212093847</th>
            <th>Talamban, Cebu City</th>
			</tr>
			
			<tr>
            <th>
			<button class="btn btn-danger btn-xs" type="button">
			<span class="badge" type="button"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></span>
			</button>
			</th>
            <th>002</th>
            <th>Ayala</th>
            <th>Erikka Fernando</th>
            <th>250 5000</th>
            <th>Guadalupe, Cebu City</th>
			</tr>
			
			<tr>
            <th>
			<button class="btn btn-danger btn-xs" type="button">
			<span class="badge" type="button"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></span>
			</button>
			</th>
            <th>003</th>
            <th>SM</th>
            <th>Gigi Hadid</th>
            <th>259 8382</th>
            <th>Lahug, Cebu City</th>
			</tr>
			
		</tbody>
  
		</table>
		
		
	  </div>
	  
	  </div>
	  
	  
	  <!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        
		
		<h4 class="modal-title" id="myModalLabel">New Supplier</h4>
	
      </div>
      <div class="modal-body">
           <form>
					  <div class="form-group">
						<label>Supplier Name</label>
						<input class="form-control"  placeholder="Name">
					  </div>
					  
					  <div class="form-group">
						<label>Person of Contact</label>
						<input class="form-control"  placeholder="POC">
					  </div>
					 
					 <div class="form-group">
						<label>Contact Number</label>
						<input class="form-control"  placeholder="Contact Number">
					  </div>
					  
					  <div class="form-group">
						<label>Address</label>
						<input class="form-control"  placeholder="Address">
					  </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-danger">Save</button>
      </div>
	  </form>
    </div>
  </div>
</div>

<!-- end of add modal-->



<!-- end of add modal-->
<div class="modal fade" id="infoModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        
		
		<h4 class="modal-title" id="myModalLabel">Supplier Info</h4>
	
      </div>
      <div class="modal-body">
	  <button type="button" class="btn btn-danger"> 
				Edit Supplier Info
		</button>
          		<table id ="datatables" class="table table-hover" >
		 <thead>
		 <div class="col-md-10 col-md-offset-1">
			&nbsp;
		</div>
			<tr class="danger">
           
            <th>Voucher Number</th>
            <th>Date Received</th>
            <th>Person of Contact</th>
			</tr>
		</thead>
		
		<tbody>
			<tr>
            <th>001</th>
            <th>Jan. 10, 2016</th>
            <th>Jen Lawrence</th>
			</tr>
			
			<tr>
            <th>002</th>
            <th>July 29, 2016</th>
            <th>Ms. Moana</th>
			</tr>
			
			<tr>
            <th>009</th>
            <th>October 7, 2016</th>
            <th>Roberto Emmanuel</th>
			</tr>
			
		</tbody>
  
		</table>
	  <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>
	  
	  
</div>
	  

<?php $this->load->view('admin/components/main_tail'); ?>