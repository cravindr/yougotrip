
           
<form id="validate" method="POST" action="password_upd.php">
    <div class="data-fluid">
                                
  
   	  <div class="row-form">
          <div class="span2">Enter Current Password:</div>
          <div class="span4 input-prepend">
          <span class="add-on blue"><i class="icon-briefcase icon-white"></i></span>
          <input type="password" name="currentpassword" id="currentpassword"  class="validate[required,minSize[5]],maxSize[200]]"/></div>
      </div>
      
      <div class="row-form">
          <div class="span2">Enter New Password:</div>
          <div class="span4 input-prepend">
          <span class="add-on blue"><i class="icon-briefcase icon-white"></i></span>
          <input type="password" name="password" id="password"  class="validate[required,minSize[5]],maxSize[200]]"/></div>
      </div>
      <div class="row-form">
          <div class="span2">Conform Password:</div>
          <div class="span4 input-prepend">
          <span class="add-on blue"><i class="icon-briefcase icon-white"></i></span>
          <input type="password" name="cpassword"  class="validate[required,minSize[5]],maxSize[200],equals[password]]"/></div>
      </div>
   
      
      <div class="row-form">
          <div class="span6  pagination-centered">
            <button class="btn btn-info" type="button" onClick="$('#validate').validationEngine('hide');">Hide prompts</button>
            <button class="btn" type="submit" name="submit" id="submit">Submit</button>
            <button class="btn" type="reset">Reset</button>

          </div>

      </div>
  </div>     

      </form>
</div>
</div>
</div>
</div>
</div>

<script src="jscript/register.js"></script>

  
