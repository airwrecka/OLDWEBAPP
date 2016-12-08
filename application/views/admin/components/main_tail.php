	
		
		<script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script>
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.1/jquery-ui.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url();?>assets/bootstrap/js/jquery.js"></script>

		
		<script type="text/javascript" src="<?php echo base_url();?>assets/bootstrap/js/bootstrap.js"></script>
		
		<script src="<?php echo base_url();?>assets/sweetalerts/sweet-alert.js"></script>
		<script type="text/javascript" src="https://cdn.datatables.net/v/bs-3.3.7/jq-2.2.4/dt-1.10.13/b-1.2.3/b-print-1.2.3/fh-3.1.2/kt-2.2.0/r-2.1.0/rr-1.2.0/sc-1.4.2/se-1.2.0/datatables.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>assets/monthly/js/monthly.js"></script>
			
		
<script type="text/javascript">

	$(document).ready(function(){
		
	 //   $('#datatables').dataTable();
		$('#datatables').DataTable();
		
		$('.dropdown-toggle').dropdown();
	//	$('.ui.checkbox').checkbox();
	
	 $(window).load( function() {
        $('#mycalendar').monthly();
    });
		
	});

</script>
				
				
				
				
</body>
        </html>