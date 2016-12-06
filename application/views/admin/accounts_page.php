
<!--  ==== HEADER ==== -->
<?php $this->load->view('admin/components/main_head', array('num' => 2, 'title' => 'ACCOUNTS')); ?>


<!--  ==== NAVBAR==== -->

<?php $this->load->view('admin/components/main_navbar'); ?>

<!--  ==== BODY ==== -->

<div class="container-fluid">

      <div class="header-align row">
        <h1>Accounts</h1>
        <p class="lead"></p>
      </div>
	

	 
	  
		<!-- echo anchor('add_acc', '<button type="button" class="btn btn-primary">Add Account</button> '); ? -->
		 <div class="col-md-10 col-md-offset-1" padding="5px">
		<div class="row">
		
			<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal" > 
				Add Account
			</button>
		
	 </div>
	 
	 
	 <div class="row" padding-top="5px">
		
		
		<table id ="datatables" class="table table-hover" >
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
	  
	  
	  
	  <!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">New Account</h4>
      </div>
      <div class="modal-body">
           <form>
					  <div class="form-group">
						<label>Name</label>
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
						<label>Credit Limit</label>
						<input class="form-control"  placeholder="Limit">
					  </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save</button>
      </div>
	  </form>
    </div>
  </div>
</div>
	  
	  
</div>
	  
	  
	  
	  
	  
	  
</div>

 
<?php $this->load->view('admin/components/main_tail'); ?>

<script type="text/javascript">
$(document).ready( function () {
    $('#datatables').DataTable();
} );
  });
</script>