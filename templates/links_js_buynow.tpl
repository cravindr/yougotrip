  
    <!-- JS Implementing Plugins -->           
    <script type="text/javascript" src="assets/plugins/flexslider/jquery.flexslider-min.js"></script>
    <script type="text/javascript" src="assets/plugins/back-to-top.js"></script>
    <!-- JS Page Level -->           
    <script type="text/javascript" src="assets/js/app.js"></script>
    <script type="text/javascript">
        jQuery(document).ready(function() {
            App.init();
            App.initSliders();        
        });
		
		function validatebuy(){
			if($("#adult").val() == "" &&	$("#child").val() == "" && $("#childwob").val() == ""){
				alert("Please enter any one person");
				return false;
			}
		}
    </script>
    <!--[if lt IE 9]>
        <script src="assets/js/respond.js"></script>
    <![endif]-->
