            
<form id="validate" method="POST" action="{$gallery_post_url}" enctype="multipart/form-data">
<div class="data-fluid">
<!-- Option Selection start -->
    

      <div class="row-form">
          <div class="span2">Name:</div>
          <div class="span4 input-prepend">
          <span class="add-on blue"><i class="icon-map-marker icon-white"></i></span>
          <input type="text" name="title"  id="title" placeholder="eg. company images" class="validate[required]"/></div>
      </div>
      
      
      <div class="row-form">
          <div class="span2">Description:</div>
          <div class="span8 input-prepend">          
          	<div class="data-fluid editor">
                <textarea id="description"  name="description" style="height: 300px;">{$input_description}</textarea>
            </div>
          </div>
      </div>
      


        <!--######################################### Display Images While Edit ############################################# -->  
       <div class="row-form">
          <div class="span2"></div>
          <div class="span4">
            <div  id="imgdisplay" name="imgdisplay" {$display_img}>
                    {$display_img_con}
            </div>
          </div>
       </div>
        
       <!--######################################### Add Multipul Image ############################################# -->  
      <div class="row-form">
        <div class="span2">Pictures:</div>
          <div class="span3 input-prepend">
          <span class="add-on blue"><i class="icon-signal icon-white"></i></span>
          <input type="text" name="piccount" id="piccount"  placeholder="eg. No of Pic"  class="validate[maxSize[2]]"/></div>
        <input type="button" class="btn" id="btnpiccount" value="Add Picture" />
       </div> 

<!--######################################### Add Multipul Image ############################################# -->  
<div  id="imgupload" name="imgupload">



</div>
           
      <div class="row-form">
          <div class="span2">Meta Description:</div>
          <div class="span4 input-prepend">
          <span class="add-on blue"><i class="icon-map-marker icon-white"></i></span>
          <input type="text" name="meta_desc"  id="meta_desc" value="input_meta_desc" placeholder="eg. gallery, images, etc..." class="validate[required]"/></div>
      </div>
      
      <div class="row-form">
          <div class="span2">Meta Keyword:</div>
          <div class="span4 input-prepend">
          <span class="add-on blue"><i class="icon-map-marker icon-white"></i></span>
          <input type="text" name="meta_keyword"  id="meta_keyword" value="input_meta_keyword" placeholder="eg. gallery, images, etc..." class="validate[required]"/></div>
      </div>
      
      <div class="row-form">
          <div class="span6  pagination-centered">
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