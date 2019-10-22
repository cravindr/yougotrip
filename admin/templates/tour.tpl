            
<form id="validate" method="POST" action="{$tourpack_post_url}" enctype="multipart/form-data">
<div class="data-fluid">
<!-- Option Selection start -->
    
     <div class="row-form">
          <div class="span2">Tour Packages:</div>
          <div class="span4 input-prepend">
          <span class="add-on blue"><i class="icon-signal icon-white"></i></span>
          <input type="text" name="packagetype" id="packagetype" placeholder="Package" autocomplete="off" auto-complete="false" value="{$input_packagetype}" data-provide="typeahead" class="validate[required,maxSize[100]]"/></div>
       
      </div>

      <div class="row-form">
          <div class="span2">Title:</div>
          <div class="span4 input-prepend">
          <span class="add-on blue"><i class="icon-map-marker icon-white"></i></span>
          <input type="text" name="title"  id="title" placeholder="eg. Singapore Malaysia tour" value="{$input_title}"   class="validate[required]"/></div>
      </div>
      
      
      
            <div class="row-form">
          <div class="span2"></div>
      <!-- ################################# tab control ###################################################-->
      <div class="span10">
                              
            <div class="data-fluid tabbable">                    
                <ul class="nav nav-tabs">
                    <li class="active"><a href="#desc" data-toggle="tab">Description</a></li>
                    <li><a href="#placedesc" data-toggle="tab">Place Desc</a></li>
                    <li><a href="#inc" data-toggle="tab">Includes</a></li>
                    <li><a href="#exc" data-toggle="tab">More Info</a></li>
                    <li><a href="#ite" data-toggle="tab">Itinerary</a></li>
                    <li><a href="#das" data-toggle="tab">Date & Cost</a></li>
                </ul>
                
                <div class="tab-content">
                
                    <div class="tab-pane active" id="desc">
                         <div class="span10">

                            <div class="data-fluid editor">
                                <textarea id="description"  name="description" style="height: 300px;">{$input_description}</textarea>
                            </div>
                        </div>
                    </div>
                    
                    
                    <div class="tab-pane" id="placedesc">
                         <div class="span10">

                            <div class="data-fluid editor">
                                <textarea id="place_desc"  name="place_desc" style="height: 300px;">{$input_place_desc}</textarea>
                            </div>
                        </div>
                    </div>

                    
                    <div class="tab-pane" id="inc">
                          <div class="span10">
                                  <div class="data-fluid editor">
                                      <textarea id="includes" name="includes" style="height: 300px;">{$input_includes}</textarea>
                                  </div>
                          </div>

                   </div>
                    
                    <div class="tab-pane" id="exc">
                             <div class="span10">
                                  <div class="data-fluid editor">
                                      <textarea id="excludes" name="excludes" style="height: 300px;">{$input_excludes}</textarea>
                                  </div>
                           </div>
                    </div>
                    <div class="tab-pane" id="ite">
                       <div class="span10">
                                  <div class="data-fluid editor">
                                      <textarea id="itinerary" name="itinerary" style="height: 300px;">{$input_itinerary}</textarea>
                                  </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="das">
                           <div class="span10">
                                  <div class="data-fluid editor">
                                      <textarea id="dac" name="dac" style="height: 300px;">{$input_dac}</textarea>
                                  </div>
                           </div>
                    </div>
                    
                </div>
                
            </div>
        </div>
    <!-- ####################################################################################-->
      </div>
      </div>
      
      
      <div class="row-form">
          <div class="span2">Adult Price:</div>
          <div class="span4 input-prepend">
          <span class="add-on blue"><i class="icon-arrow-down icon-white"></i></span>
          <input type="text" name="adultprice" id="adultprice" placeholder="eg. 12000.00" value="{$input_adultprice}"  class="validate[required]"/>
          </div>
      </div>
      
      <div class="row-form">
          <div class="span2">Child Price:</div>
          <div class="span4 input-prepend">
          <span class="add-on blue"><i class="icon-arrow-down icon-white"></i></span>
          <input type="text" name="childprice" id="childprice" placeholder="eg. 12000.00" value="{$input_childprice}"  class="validate[required]"/>
          </div>
      </div>
      <div class="row-form">
          <div class="span2">Child with out Bed Price:</div>
          <div class="span4 input-prepend">
          <span class="add-on blue"><i class="icon-arrow-down icon-white"></i></span>
          <input type="text" name="childwobprice" id="childwobprice" placeholder="eg. 12000.00" value="{$input_childwobprice}" class="validate[required]"/>
          </div>
      </div>
      
      <div class="row-form">
          <div class="span2"></div>
          <div class="span4">
            <div  id="imgdisplay_logo" name="imgdisplay_logo" {$display_img_lo}>
                    {$display_img_logo}
            </div>
          </div>
       </div>
        
      
      <div class="row-form">
          <div class="span2">Upload Logo:</div>
          <div class="span4" id="display_logo_main" {$display_logo_main}>
            <div class="fileupload fileupload-new" data-provides="fileupload">
                <div class="fileupload-new thumbnail span2" >
                <img src="{$input_img1}" name="asd.jpg" width="100%"/>
                </div>
                <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                <div>
                <span class="btn btn-file"><span class="fileupload-new">Select image</span><span class="fileupload-exists">Change</span>
                <input type="file" name="pro_image1" id="pro_image1" /></span>
                <a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remove</a>
                </div>
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
        <div class="span2">More Picture:</div>
          <div class="span3 input-prepend">
          <span class="add-on blue"><i class="icon-signal icon-white"></i></span>
          <input type="text" name="piccount" id="piccount"  placeholder="eg. No of Pic"  class="validate[maxSize[2]]"/></div>
        <input type="button" class="btn" id="btnpiccount" value="Add Picture" />
       </div> 

        <!--######################################### Add Multipul Image ############################################# -->  
        <div  id="imgupload" name="imgupload">
        
        
        
        </div>
        <div class="row-form">
          <div class="span2">Page Title:</div>
          <div class="span4 input-prepend">
          <span class="add-on blue"><i class="icon-map-marker icon-white"></i></span>
          <input type="text" name="title_desc"  id="title_desc" placeholder="eg. Singapore Malaysia tour" value="{$input_title_desc}"   /></div>
      </div>
           
      <div class="row-form">
          <div class="span2">Meta Description:</div>
          <div class="span4 input-prepend">
          <span class="add-on blue"><i class="icon-map-marker icon-white"></i></span>
          <input type="text" name="meta_desc"  id="meta_desc" value="{$input_meta_desc}" placeholder="eg. gallery, images, etc..." /></div>
      </div>
      
      <div class="row-form">
          <div class="span2">Meta Keyword:</div>
          <div class="span4 input-prepend">
          <span class="add-on blue"><i class="icon-map-marker icon-white"></i></span>
          <input type="text" name="meta_keyword"  id="meta_keyword" value="{$input_meta_keyword}"  placeholder="eg. gallery, images, etc..." /></div>
      </div>
      
      <div class="row-form">
          <div class="span2">Static URL:</div>
          <div class="span4 input-prepend">
          <span class="add-on blue"><i class="icon-map-marker icon-white"></i></span>
          <input type="text" name="staticurl"  id="staticurl" value="{$input_staticurl}"  placeholder="eg. international-asia-singapore-3days" class="validate[required,maxSize[250]]"  />
          <!--<input type="text" name="staticurl"  id="staticurl" value="{$input_staticurl}"  placeholder="eg. international-asia-singapore-3days" class="validate[required,maxSize[250],ajax[ajaxURLCallPhp]]"  />-->
          </div>
      </div>
      
        <div class="row-form">
          <div class="span2">Theme:</div>
          <div class="span4 input-prepend">
         
          <div id="divtheme" name="divtheme">
		<select name="theme[]" id="theme" multiple="multiple" >
        </select>
        
  
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
