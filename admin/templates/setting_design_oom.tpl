<form id="validate" method="post"  action="{$settings_post_url}">

<div class="data-fluid">
<div class="row-form">
<div class="span2">Name:</div>
<div class="span4 input-append">
<input type="text" name="name" id="name" placeholder="Enter the name" value="{$name}" class="validate[required,maxSize[100]]"/>
<span class="add-on blue"><i class="icon-user icon-white"></i></span>
</div>
</div>

<div class="row-form">
<div class="span2">Email:</div>
<div class="span4 input-append">
<input type="text" name="email" id="email" placeholder="Enter the email" value="{$email}" class="validate[required,maxSize[100],custom[email]]"/>
<span class="add-on blue"><i class="icon-envelope icon-white"></i></span>
</div>
</div>

<div class="row-form">
<div class="span2">Password:</div>
<div class="span4 input-append">
<input type="text" name="password" id="password" placeholder="Enter the password" value="{$password}" class="validate[required,maxSize[100]]"/>
<span class="add-on blue"><i class="icon-eye-open icon-white"></i></span>
</div>
</div>



<div class="row-form">
<div class="span2">Conform Password:</div>
<div class="span4 input-append">
<input type="text" name="conformpassword" id="conformpassword" placeholder="Retype the password" value="{$conformpassword}" class="validate[required,maxSize[100],equals[password]]"/>
<span class="add-on blue"><i class="icon-eye-open icon-white"></i></span>
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

