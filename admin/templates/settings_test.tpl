            
<form id="validate" method="POST" action="{$settings_post_url}">
<div class="data-fluid">
<!-- Option Selection start -->
   
        
 
        <div class="row-form">
              <div class="span2"> Name:</div>
              <div class="span4 input-prepend">
              <span class="add-on blue"><i class="icon-signal icon-white"></i></span>
              <input type="text" name="name" id="name" placeholder="eg. Ravi" value="{$name}" class="validate[required,maxSize[100]]"/></div>
          </div>
  
        
        <div class="row-form">
              <div class="span2"> Address :</div>
              <div class="span4 input-prepend">
              <span class="add-on blue"><i class="icon-signal icon-white"></i></span>
              <input type="text" name="address" id="address" placeholder="eg. R.S Puram " value="{$address}" class="validate[required,maxSize[100]]"/></div>
          </div>
          
          <div class="row-form">
              <div class="span2"> Place:</div>
              <div class="span4 input-prepend">
              <span class="add-on blue"><i class="icon-signal icon-white"></i></span>
              <input type="text" name="place" id="place" placeholder="eg. Coimbatore " value="{$place}" class="validate[required,maxSize[100]]"/></div>
          </div>
  
        

      

      <div class="row-form">
          <div class="span6  pagination-centered">
            <input type="hidden" name="category_id" value="{$category_id}" />
            <button class="btn" type="submit">Submit</button>
            <button class="btn" type="reset">Reset</button>
            <button class="btn btn-info" type="button" onClick="$('#validate').validationEngine('hide');">Hide prompts</button>
          </div>
      </div>
  </div>

</form>
