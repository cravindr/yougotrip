            
<form id="validate" method="POST" action="{$tourpack_post_url}" enctype="multipart/form-data">
<div class="data-fluid">
<!-- Option Selection start -->
    <div class="span6">
         <div class="row-form">
              <div class="span2">Tour Packages:</div>
              <div class="span4 input-prepend">
              <span class="add-on blue"><i class="icon-signal icon-white"></i></span>
              <input type="text" name="packagetype" id="packagetype" placeholder="Package" auto-complete="false" value="{$input_packagetype}" data-provide="typeahead" class="validate[required,maxSize[100]]"/></div>
           
          </div>
    
          <div class="row-form">
              <div class="span2">Title:</div>
              <div class="span4 input-prepend">
              <span class="add-on blue"><i class="icon-map-marker icon-white"></i></span>
              <input type="text" name="title"  id="title" placeholder="eg. Singapore Malaysia tour" value="{$input_title}"   class="validate[required]"/></div>
          </div>
            
    </div>
</div>

      <div class="row-form">
          <div class="span6  pagination-centered">
          	<input type="hidden" name="pack_id" value="{$pack_id}" />
            <button class="btn" type="submit">Submit</button>
            <button class="btn" type="reset">Reset</button>
            <button class="btn btn-info" type="button" onClick="$('#validate').validationEngine('hide');">Hide prompts</button>
          </div>
      </div>
  </div>

      
<input type="hidden" name="noofimgbox" id="noofimgbox" value="1" />
</form>

  
  <script type='text/javascript' src='jscript/image_upload_btn.js'></script>
  <script type='text/javascript' src='jscript/tour.js'></script>