            
<form id="validate" method="POST" action="{$profile_post_url}">
<div class="data-fluid">
<!-- Option Selection start -->
    
     <div class="row-form">
          <div class="span2"> Name:</div>
          <div class="span4 input-prepend">
          <span class="add-on blue"><i class="icon-signal icon-white"></i></span>
          <input type="text" name="cname" id="cname" placeholder=" Name" value="{$user_name}" class="validate[required,maxSize[100]]"/></div>
       
      </div>
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
