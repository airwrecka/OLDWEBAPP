
<!--  ==== HEADER ==== -->
<?php $this->load->view('admin/components/main_head', array('num' => 2, 'title' => 'ACCOUNTS')); ?>


<!--  ==== NAVBAR==== -->

<?php $this->load->view('admin/components/main_navbar'); ?>

<!--  ==== BODY ==== -->

<div class="container-fluid">

      <div class="col-md-9 col-md-offset-5">
        <h1>Accounts</h1>
       
      </div>
	
		<!-- echo anchor('add_acc', '<button type="button" class="btn btn-primary">Add Account</button> '); ? -->
	<div class="row " padding="5px">
		
		<div class="col-md-10 col-md-offset-1">
			<button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal" > 
				Add Account
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
			<tr class="success">
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
            <th>
			<button class="btn btn-success btn-xs" type="button">
			<span class="badge" type="button"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></span>
			</button>
			</th>
            <th>001</th>
            <th>Boysen</th>
            <th>John Smith</th>
            <th>09222222222</th>
            <th>52</th>
			</tr>
			
			<tr>
             <th>
			<button class="btn btn-success btn-xs" type="button">
			<span class="badge" type="button"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></span>
			</button>
			</th>
            <th>002</th>
            <th>Sun and Rain</th>
            <th>Ferdinand Marcos</th>
            <th>09222222122</th>
            <th>100 billion</th>
			</tr>
			
			<tr>
             <th>
			<button class="btn btn-success btn-xs" type="button">
			<span class="badge" type="button"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></span>
			</button>
			</th>
            <th>003</th>
            <th>Hardiflex</th>
            <th>Lapu Lapu</th>
            <th>09222251122</th>
            <th>0</th>
			</tr>
			
			<tr>
             <th>
			<button class="btn btn-success btn-xs" type="button">
			<span class="badge" type="button"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></span>
			</button>
			</th>
            <th>004</th>
            <th>Pigrolac</th>
            <th>Rody Duterte</th>
            <th>255 3456</th>
            <th>0</th>
			</tr>
			
			<tr>
            <th>
			<button class="btn btn-success btn-xs" type="button">
			<span class="badge" type="button"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></span>
			</button>
			</th>
            <th>005</th>
            <th>Ceramic Tiles</th>
            <th>Leila Delima</th>
            <th>250 5000</th>
            <th>0</th>
			</tr>
			
			<tr>
           <th>
			<button class="btn btn-success btn-xs" type="button">
			<span class="badge" type="button"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></span>
			</button>
			</th>
            <th>006</th>
            <th>Screws</th>
            <th>Cara D.</th>
            <th>09279012300</th>
            <th>0</th>
			</tr>
			
			<tr>
             <th>
			<button class="btn btn-success btn-xs" type="button">
			<span class="badge" type="button"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></span>
			</button>
			</th>
            <th>007</th>
            <th>Steel Bar</th>
            <th>Clark Kent</th>
            <th>09436805290</th>
            <th>Limit Exceeded</th>
			</tr>
			
			<tr>
             <th>
			<button class="btn btn-success btn-xs" type="button">
			<span class="badge" type="button"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></span>
			</button>
			</th>
            <th>008</th>
            <th>Red Cement</th>
            <th>Red Riding Hood</th>
            <th>256 0123</th>
            <th>782.00</th>
			</tr>
			
			<tr>
             <th>
			<button class="btn btn-success btn-xs" type="button">
			<span class="badge" type="button"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></span>
			</button>
			</th>
            <th>009</th>
            <th>Reg Cement</th>
            <th>Bato Dela Rosa</th>
            <th>09277110123</th>
            <th>505.00</th>
			</tr>
			
			<tr>
             <th>
			<button class="btn btn-success btn-xs" type="button">
			<span class="badge" type="button"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></span>
			</button>
			</th>
            <th>010</th>
            <th>Blue Cement</th>
            <th>Smurfs</th>
            <th>09222123333</th>
            <th>0</th>
			</tr>
			
			<tr>
             <th>
			<button class="btn btn-success btn-xs" type="button">
			<span class="badge" type="button"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></span>
			</button>
			</th>
            <th>011</th>
            <th>Yellow Cement</th>
            <th>Ninoy Aquino</th>
            <th>-</th>
            <th>1M</th>
			</tr>
			
			<tr>
             <th>
			<button class="btn btn-success btn-xs" type="button">
			<span class="badge" type="button"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></span>
			</button>
			</th>
            <th>0012</th>
            <th>Yellow Ceramic Tiles</th>
            <th>Minions</th>
            <th>09164018298</th>
            <th>1200.00</th>
			</tr>
			
			<tr>
             <th>
			<button class="btn btn-success btn-xs" type="button">
			<span class="badge" type="button"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></span>
			</button>
			</th>
            <th>013</th>
            <th>Dos Por Dos</th>
            <th>Mr. Tree</th>
            <th>09209394122</th>
            <th>9230.00</th>
			</tr>
			
			<tr>
             <th>
			<button class="btn btn-success btn-xs" type="button">
			<span class="badge" type="button"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></span>
			</button>
			</th>
            <th>014</th>
            <th>Panda Ballpen</th>
            <th>Mr. Panda</th>
            <th>0920202327</th>
            <th>0</th>
			</tr>
			
			<tr>
             <th>
			<button class="btn btn-success btn-xs" type="button">
			<span class="badge" type="button"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></span>
			</button>
			</th>
            <th>015</th>
            <th>Emergency Lights</th>
            <th>Barack Obama</th>
            <th>-</th>
            <th>0</th>
			</tr>
			
			<tr>
            <th>
			<button class="btn btn-success btn-xs" type="button">
			<span class="badge" type="button"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></span>
			</button>
			</th>
            <th>016</th>
            <th>Nails</th>
            <th>Ace Hardware</th>
            <th>099294811346</th>
            <th>100678.00</th>
			</tr>
			
			<tr>
             <th>
			<button class="btn btn-success btn-xs" type="button">
			<span class="badge" type="button"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></span>
			</button>
			</th>
            <th>017</th>
            <th>Steel Beams</th>
            <th>Man of Steel</th>
            <th>209 9090</th>
            <th>1</th>
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
        <button type="submit" class="btn btn-success">Save</button>
      </div>
	  </form>
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