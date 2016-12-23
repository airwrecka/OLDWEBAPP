    <nav class="navbar navbar-inverse navbar-fixed-top" >
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?php echo base_url();?>home">Cuadro Ocho</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">

          <?php if($this->session->userdata('username')){?>
		  
            <li class="<?php if($num == 1): ?>active<?php endif;?>"><?php echo anchor('home', '<span class="glyphicon glyphicon-home" aria-hidden="true"></span> Home</a>'); ?>
			      </li>
             
			      <li class="<?php if($num == 2): ?>active<?php endif;?>"><?php echo anchor('accounts', '<span class="glyphicon glyphicon-credit-card" aria-hidden="true"></span> Accounts</a>'); ?>
			      </li>
			
			
            <li class="<?php if($num == 3): ?>active<?php endif;?>"><?php echo anchor('suppliers', '<span class="glyphicon glyphicon-import" aria-hidden="true"></span> Suppliers</a>'); ?>
			      </li>
			
			
			      <li class="<?php if($num == 4): ?>active<?php endif;?>"><?php echo anchor('inventory', '<span class="glyphicon glyphicon-list" aria-hidden="true"></span> Inventory</a>'); ?>
			      </li>
			
			
			      <li class="<?php if($num == 5): ?>active<?php endif;?>"><?php echo anchor('sales', '<span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span> Sales</a>'); ?>
			      </li>
            
				  <li class="<?php if($num == 5): ?>active<?php endif;?>"><?php echo anchor('w_transfer', '<span class="glyphicon glyphicon-sort" aria-hidden="true"></span> Warehouse Transfers</a>'); ?>
			      </li>
				  
				  
            
           

			    

          </ul>
		  
		  <ul class="nav navbar-nav navbar-right">
		  
		   <li class="dropdown <?php if($num == 6): ?>active<?php endif;?>">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Account<span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
					<li><a href="#">Settings</a></li>				
					<li><a href="#">Change Password</a></li>	
					<li role="separator" class="divider"></li>
                    <!-- <li><a href="<?php echo base_url();?>admin/change_password/<?php echo $this->session->userdata('id');?>">Change Password</a></li> -->
                    <li><a href="<?php echo base_url();?>home/logout">Logout</a></li>      

					
                </ul>
            </li>
			
		
		  
		  
		  <?php } ?>
		  </ul>
		  
        </div><!--/.nav-collapse -->
      </div>
    </nav>