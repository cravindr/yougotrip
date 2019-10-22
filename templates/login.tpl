<div class="container">		
	<div class="row-fluid">
    	
        <form id="validate" class="log-page" action="logincheck.php" method="post">
        	<p>
        		<a href="register.php" class="btn-u pull-left">Register New Account</a>
                <br/>
                                
                <hr/>
            </p>
            
            <h3>Login to your account</h3>    
            <div class="input-prepend">
                <span class="add-on"><i class="icon-user"></i></span>
                <input class="input-xlarge validate[required,maxSize[100]]" type="text" name="username" placeholder="Username">
            </div>
            <div class="input-prepend">
                <span class="add-on"><i class="icon-lock"></i></span>
                <input class="input-xlarge validate[required,maxSize[100]]" type="password" name="password" placeholder="Password">
            </div>
            <div class="controls form-inline">
            	<input type="hidden" name="redirecturl" value="{$redirecturl}" />
                <button class="btn-u pull-right" type="submit">Login</button>
            </div>
            <hr />
            {$loginfailed}
            <h4>Forget your Password ?</h4>
            <p>no worries, <a class="color-green" href="forgetpassword.php">click here</a> to reset your password.</p>
            <br />
            <a href="agent.php" class="btn-u pull-left">Register Agent Account</a>
        </form>
    </div><!--/row-fluid-->
</div>