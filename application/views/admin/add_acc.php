<!--  ==== HEADER ==== -->
<?php $this->load->view('admin/components/main_head'); ?>


<!--  ==== NAVBAR==== -->

<?php $this->load->view('admin/components/main_navbar'); ?>

<!--  ==== BODY ==== -->


<div class="container-fluid">

<div class="col-md-10 col-md-offset-1 row">
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
 
  
 
  <button type="submit" class="btn btn-default">Submit</button>
</form>
	  
	  </div>
	  
</div>

 
<?php $this->load->view('admin/components/main_tail'); ?>