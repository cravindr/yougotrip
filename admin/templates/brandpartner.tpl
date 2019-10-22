            
<form id="validate" method="POST" action="{$addnewurl}" enctype="multipart/form-data">
<div class="data-fluid">
<!-- Option Selection start -->
    
    
         <div class="row-form">
              <div class="span2">Company Name</div>
              <div class="span4 input-prepend">
              <span class="add-on blue"><i class="icon-signal icon-white"></i></span>
              <input type="text" name="company" id="company" placeholder="Company Name.." value="{$company}" class="validate[required,maxSize[256]]"/></div>
          </div>
          <div class="row-form">
              <div class="span2"> Address:</div>
              <div class="span4">
              <textarea name="desc" id="desc" placeholder="Description">{$desc}</textarea></div>
          </div>
         <!--################################################################################### -->          
          
         <div class="row-form">    
          <div class="span2"></div>
          <div class="span4">
            <div  id="imgdisplay_logo" name="imgdisplay_logo" {$visiable_img_logo}>  <!-- if image its used to show the image -->    
                    {$display_img_logo}
            </div>
          </div>
       </div>
          
          
          <div class="row-form">
          <div class="span2">Upload Logo:</div>
          <div class="span4" id="display_logo_main" {$visiable_logo_main}>
          
            <div class="fileupload fileupload-new" data-provides="fileupload">
                <div class="fileupload-new thumbnail span2" >
                <img src="{$input_img1}" name="imgneme" width="100%"/>
                </div>
                <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                <div>
                <span class="btn btn-file"><span class="fileupload-new">Select image</span><span class="fileupload-exists">Change</span>
                <input type="file" name="logoimage" id="logoimage" /></span>
                <a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remove</a>
                </div>
            </div>
           </div>
       </div> 
       
        <!--######################################### Display Images While Edit ############################################# -->  



     <div class="row-form">
              <div class="span2">URL</div>
              <div class="span4 input-prepend">
              <span class="add-on blue"><i class="icon-signal icon-white"></i></span>
              <input type="text" name="url" id="url" placeholder="Domain Name" value="{$url}" class="validate[required,maxSize[256]]"/></div>
          </div>
   
        
  
        <div class="row-form">
              <div class="span2"> Meta Content:</div>
              <div class="span4 input-prepend">
              <span class="add-on blue"><i class="icon-signal icon-white"></i></span>
              <input type="text" name="meta_content" id="meta_content" placeholder="Meta Content" value="{$meta_desc}" /></div>
          </div>
   
        <div class="row-form">
              <div class="span2"> Meta Keyword:</div>
              <div class="span4 input-prepend">
              <span class="add-on blue"><i class="icon-signal icon-white"></i></span>
              <input type="text" name="meta_keyword" id="meta_keyword" placeholder="Meta Keyword" value="{$meta_keyword}" /></div>
          </div>
   
        
      

      <div class="row-form">
          <div class="span6  pagination-centered">

            <button class="btn" type="submit">Submit</button>
            <button class="btn" type="reset">Reset</button>
            <button class="btn btn-info" type="button" onClick="$('#validate').validationEngine('hide');">Hide prompts</button>
          </div>
      </div>
  </div>
<input type="hidden" id="partid" name="partid" value="{$partid}" />
</form>
  <script type='text/javascript' src='jscript/brandlist.js'></script>