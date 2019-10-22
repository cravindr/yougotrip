<form action="content_upd.php" method="post" name="content">
<div class="block">
        <div class="head">                                
            <h2>Describe Page</h2>                          
        </div>  
        <div class="data-fluid tabbable tabs-left">                    
            <ul class="nav nav-tabs">
                <li class="active"><a href="#home" data-toggle="tab">Home</a></li>
                <li><a href="#abt" data-toggle="tab">About Us</a></li>
                <li><a href="#ser" data-toggle="tab">Services Us</a></li>
                <li><a href="#cu" data-toggle="tab">Contact Us</a></li>
                <li><a href="#tc" data-toggle="tab">Terms & Conditions</a></li>
                <li><a href="#rp" data-toggle="tab">Return Policy</a></li>                
                <li><a href="#wm" data-toggle="tab">Welcome Message</a></li>
                <li><a href="#wwa" data-toggle="tab">Invoice Text</a></li>
                <li><a href="#fp" data-toggle="tab">Forgot Password</a></li>
                <li><a href="#act" data-toggle="tab">Activation</a></li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane active" id="home">
                <h4>Describe Home page content</h4>
                    <div class="data-fluid editor">
                     <textarea id="homecont"  name="homecont" style="height: 400px;">{$home_link}</textarea>
                    </div>
                </div>
                <div class="tab-pane" id="abt">
                <h4>Describe About Us page content</h4>
                    <div class="data-fluid editor">
                     <textarea id="aboutus"  name="aboutus" style="height: 300px;">{$about_us}</textarea>
                    </div>
                </div>
                <div class="tab-pane" id="ser">
                <h4>Describe Service page content</h4>
                    <div class="data-fluid editor">
                     <textarea id="services"  name="services" style="height: 300px;">{$services}</textarea>
                    </div>
                </div>
                <div class="tab-pane" id="cu">
                    <h4>Describe Contact content</h4>
                    <div class="data-fluid editor">
                     <textarea id="contactus"  name="contactus" style="height: 300px;">{$contact}</textarea>
                    </div>
                </div>
                <div class="tab-pane" id="tc">
                    <h4>Describe Terms and Condition</h4>
                    <div class="data-fluid editor">
                     <textarea id="termsandcondition"  name="termsandcondition" style="height: 300px;">{$terms_conditions}</textarea>
                    </div>
                </div>
                <div class="tab-pane" id="rp">
                <h4>Describe Return Policy Contents</h4>
                    <div class="data-fluid editor">
                     <textarea id="returnpol"  name="returnpol" style="height: 300px;">{$return_policy}</textarea>
                    </div>
                </div>
                 
                <div class="tab-pane" id="wm">
                <h4>Describe Welcome email Message </h4>
                    <div class="data-fluid editor">
                     <textarea id="welcome"  name="welcome" style="height: 300px;">{$welcome_message}</textarea>
                    </div>
                </div>
               <div class="tab-pane" id="wwa">
                <h4>Describe Invoice Mail Message</h4>
                    <div class="data-fluid editor">
                     <textarea id="invoice_message"  name="invoice_message" style="height: 300px;">{$invoice_message}</textarea>
                    </div>
                </div>
                
                <div class="tab-pane" id="fp">
                <h4>Describe forget password Contents</h4>
                    <div class="data-fluid editor">
                     <textarea id="forgetpass"  name="forgetpass" style="height: 300px;">{$forgot_password}</textarea>
                    </div>
                </div>
                <div class="tab-pane" id="act">
                <h4>Describe Activation Message Content</h4>
                    <div class="data-fluid editor">
                     <textarea id="activationmessage"  name="activationmessage" style="height: 300px;">{$activation}</textarea>
                    </div>
                </div>
            </div>
        </div>
</div>
		<div class="row-form">
          <div class="span6  pagination-centered">
          <!--  <button class="btn btn-info" type="button" onClick="$('#validate').validationEngine('hide');">Hide prompts</button>-->
            <button class="btn" type="submit" name="submit" id="submit">Save..</button>
            <!--<button class="btn" type="reset">Reset</button>-->

          </div>

      </div>
</form>
 <script type='text/javascript' src='jscript/content.js'></script>