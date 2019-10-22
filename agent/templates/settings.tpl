            
<form id="validate" method="POST" action="{$settings_post_url}">
<div class="data-fluid">
<!-- Option Selection start -->
    
    
         <div class="row-form">
              <div class="span2">Site Name:</div>
              <div class="span4 input-prepend">
              <span class="add-on blue"><i class="icon-signal icon-white"></i></span>
              <input type="text" name="site_name" id="site_name" placeholder="Site Name" value="{$site_name}" class="validate[required,maxSize[100]]"/></div>
          </div>
   
        <div class="row-form">
              <div class="span2">Domain Name:</div>
              <div class="span4 input-prepend">
              <span class="add-on blue"><i class="icon-signal icon-white"></i></span>
              <input type="text" name="domain_name" id="domain_name" placeholder="Domain Name" value="{$domain_name}" class="validate[required,maxSize[100]]"/></div>
          </div>
   
        <div class="row-form">
              <div class="span2">Title Name:</div>
              <div class="span4 input-prepend">
              <span class="add-on blue"><i class="icon-signal icon-white"></i></span>
              <input type="text" name="title_name" id="title_name" placeholder="Title Name" value="{$title_name}" class="validate[required,maxSize[100]]"/></div>
          </div>
   
        <div class="row-form">
              <div class="span2"> Logo:</div>
              <div class="span4 input-prepend">
              <span class="add-on blue"><i class="icon-signal icon-white"></i></span>
              <input type="text" name="logo" id="logo" placeholder="Logo" value="{$logo}" class="validate[required,maxSize[100]]"/></div>
          </div>
   
        <div class="row-form">
              <div class="span2"> Subtitle:</div>
              <div class="span4 input-prepend">
              <span class="add-on blue"><i class="icon-signal icon-white"></i></span>
              <input type="text" name="subtitle" id="subtitle" placeholder="Subtitle" value="{$subtitle}" class="validate[required,maxSize[100]]"/></div>
          </div>
  
        <div class="row-form">
              <div class="span2"> Meta Content:</div>
              <div class="span4 input-prepend">
              <span class="add-on blue"><i class="icon-signal icon-white"></i></span>
              <input type="text" name="meta_content" id="meta_content" placeholder="Meta Content" value="{$meta_content}" class="validate[required,maxSize[100]]"/></div>
          </div>
   
        <div class="row-form">
              <div class="span2"> Meta Keyword:</div>
              <div class="span4 input-prepend">
              <span class="add-on blue"><i class="icon-signal icon-white"></i></span>
              <input type="text" name="meta_keyword" id="meta_keyword" placeholder="Meta Keyword" value="{$meta_keyword}" class="validate[required,maxSize[100]]"/></div>
          </div>
   
        <div class="row-form">
              <div class="span2"> Search Button Caption:</div>
              <div class="span4 input-prepend">
              <span class="add-on blue"><i class="icon-signal icon-white"></i></span>
              <input type="text" name="sbuttoncap" id="sbuttoncap" placeholder="Search Button Caption" value="{$sbuttoncap}" /></div>
          </div>
   
        <div class="row-form">
              <div class="span2"> Address:</div>
              <div class="span4">
              <textarea name="address" id="address" placeholder="Address">{$address}</textarea></div>
          </div>
 
        <div class="row-form">
              <div class="span2"> Email:</div>
              <div class="span4 input-prepend">
              <span class="add-on blue"><i class="icon-signal icon-white"></i></span>
              <input type="text" name="email" id="email" placeholder="eg. example@gmail.com" value="{$email}" class="validate[required,maxSize[100]]"/></div>
          </div>
  
        <div class="row-form">
              <div class="span2"> Phone:</div>
              <div class="span4 input-prepend">
              <span class="add-on blue"><i class="icon-signal icon-white"></i></span>
              <input type="text" name="phone" id="phone" placeholder="eg. 9942356712" value="{$phone}" class="validate[required,maxSize[100]]"/></div>
          </div>
  
        <div class="row-form">
              <div class="span2"> Website:</div>
              <div class="span4 input-prepend">
              <span class="add-on blue"><i class="icon-signal icon-white"></i></span>
              <input type="text" name="website" id="website" placeholder="eg. www.mydomain.com" value="{$website}" /></div>
          </div>
    
        <div class="row-form">
              <div class="span2"> Fax:</div>
              <div class="span4 input-prepend">
              <span class="add-on blue"><i class="icon-signal icon-white"></i></span>
              <input type="text" name="fax" id="fax" placeholder="Fax" value="{$fax}" /></div>
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
