<div class="container">		
	<div class="row-fluid">
    	
        <form id="validate" class="log-page" action="{$form_post_url}" method="post">
        	            
            <h3>Reset Password</h3>    
            <div class="input-prepend">
                <span class="add-on"><i class="icon-user"></i></span>
                <input class="input-xlarge validate[required,maxSize[100]]" type="text" name="email" placeholder="Email Id">
            </div>
            <div class="controls form-inline">
            	<input type="hidden" name="redirecturl" value="{$redirecturl}" />
                <button class="btn-u pull-right" type="submit">Reset Password</button>
                <hr/>
            </div>
        </form>
    </div><!--/row-fluid-->
</div>