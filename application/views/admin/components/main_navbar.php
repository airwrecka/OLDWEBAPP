    <nav class="navbar navbar-inverse navbar-fixed-top" >
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Cuadro Ocho</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
		  
            <li class="active"><?php echo anchor('home', '<span class="glyphicon glyphicon-home" aria-hidden="true"></span> Home</a>'); ?>
			</li>
            
			<li><?php echo anchor('accounts', '<span class="glyphicon glyphicon-credit-card" aria-hidden="true"></span> Accounts</a>'); ?>
			</li>
			
			
            <li><?php echo anchor('suppliers', '<span class="glyphicon glyphicon-import" aria-hidden="true"></span> Suppliers</a>'); ?>
			</li>
			
			
			<li><?php echo anchor('inventory', '<span class="glyphicon glyphicon-list" aria-hidden="true"></span> Inventory</a>'); ?>
			</li>
			
			
			<li><?php echo anchor('sales', '<span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span> Sales</a>'); ?>
			</li>
			
			
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>