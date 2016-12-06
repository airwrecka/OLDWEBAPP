
<!--  ==== HEADER ==== -->
<?php $this->load->view('admin/components/login_head'); ?>




    <div class="wrapper" id="log"> 
	
      <div class="starter-template wrapper" >
        <h3>WELCOME</h3>
		<h1>CUADRO OCHO</h1>
        <p class="lead"></p>
      </div>

      <div class="login-bground" id ="logbox" > </div>
        <div id="loginbox" class="login-loginbox mainbox col-xs-6 col-xs-offset-3 col-lg-4 col-lg-offset-4 text-center">                    
          <div class="panel login-panel panel-info text-center" >                               
            <div class="panel-body login-panel-body">
              <div class="panel-heading">
               <span>
                	    
               </span>
              </div>
              <span class="text-center login-errormsg"></span>
              <span class="text-center login-errormsg" style="color:red"><?php echo $message;?></span>
              <div style="display:none" id="login-alert" class="alert alert-danger col-xs-12"></div>
              
              <form id="login" action="<?php echo base_url();?>home/login" class="form-horizontal" method="post" role="form">    
                <div style="margin-bottom: 10px" class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                  <input id="username" class="form-control" type="text" name="user" placeholder="Username" aria-label="Username" required>                                        
                </div>
                    
                <div style="margin-bottom: 10px" class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                  <input id="password" class="form-control" type="password" name="pass" placeholder="Password" aria-label="Password" required>
                </div>                                  
                <button id="loginbtn" type="submit" class="btn btn-primary pull-right">Login</button>
              </form>
            </div>                     
          </div>  
        </div>

    </div>


<script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.1/jquery-ui.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/bootstrap/js/jquery.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/bootstrap/js/bootstrap.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/dtables/media/js/jquery.dataTables.js"></script>
<script src="<?php echo base_url();?>assets/sweetalerts/sweet-alert.js"></script>

<script type="text/javascript">
  $(document).ready(function(){
    $('#loginbtn').click(function(event){
        event.preventDefault();
        $.getJSON("<?php echo base_url();?>home/check_login/",{username:$('#username').val(),password:$('#password').val()},success=function(data){
                if(data == '0'){
                  swal('ERROR','Invalid Username/Password','error');
                }
                else
                  $('#login').submit();
        });
    });
  });
</script>