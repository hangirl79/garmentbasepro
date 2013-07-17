
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>9lessons Bootstrap Registration Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="http://twitter.github.com/bootstrap/assets/css/bootstrap.css" rel="stylesheet">
    <link href="http://twitter.github.com/bootstrap/assets/css/bootstrap-responsive.css" rel="stylesheet">

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Le fav and touch icons -->
  </head>
  <body>	  
	
  <div class="container">
	
  <div class="row">
	
	
  <div class="span8">
  	<?php if($_POST) { ?>
	<div class="alert alert-success">
	  Well done! You successfully read this important alert message.
	</div>
	<?php } ?>
    
							<form class="form-horizontal" id="registerHere" method='post' action='form.php'>
                          <fieldset>
                            <div class="control-group">
                              <label class="control-label" for="input01">Full Name</label>
                              <div class="controls">
                                <input type="text" class="input-xlarge" id="user_name" name="user_name" rel="popover" data-content="Enter your first and last name." data-original-title="Full Name" onclick="this.value=''" onblur="if(this.value=='') this.value='Your message'">
                                
                              </div>
                        </div>
                        
                         <div class="control-group">
                            <label class="control-label" for="input01">Email</label>
                              <div class="controls">
                                <input type="text" class="input-xlarge" id="user_email" name="user_email" rel="popover" data-content="What’s your email address?" data-original-title="Email">
                               
                              </div>
                        </div>
                        
                        <div class="control-group">
                            <label class="control-label" for="input01">Phone</label>
                              <div class="controls">
                                <input type="text" class="input-xlarge" id="pwd" name="pwd" rel="popover" data-content="6 characters or more! Be tricky" data-original-title="Password" >
                               
                              </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="input01">company</label>
                              <div class="controls">
                                <input type="text" class="input-xlarge" id="comp" name="comp" rel="popover" data-content="Enter company name" data-original-title="company" >
                              </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="input01">Address</label>
                              <div class="controls">
                                <input type="text" class="input-xlarge" id="add" name="add" rel="popover" data-content="Enter Address" data-original-title="address" >
                              </div>
                        </div>
                       <div class="control-group">
                            <label class="control-label" for="input01">City</label>
                              <div class="controls">
                                <input type="text" class="input-xlarge" id="city" name="city" rel="popover" data-content="Enter City" data-original-title="city" >
                              </div>
                        </div>
                            <div class="control-group">
                            <label class="control-label" for="input01">State</label>
                              <div class="controls">
                                    <select class="state" name="State"> 
                                        <option value="" selected="selected">Select a State</option> 
                                        <option value="AL">Alabama</option> 
                                        <option value="AK">Alaska</option> 
                                        <option value="AZ">Arizona</option> 
                                        <option value="AR">Arkansas</option> 
                                        <option value="CA">California</option> 
                                        <option value="CO">Colorado</option> 
                                        <option value="CT">Connecticut</option> 
                                        <option value="DE">Delaware</option> 
                                        <option value="DC">District Of Columbia</option> 
                                        <option value="FL">Florida</option> 
                                        <option value="GA">Georgia</option> 
                                        <option value="HI">Hawaii</option> 
                                        <option value="ID">Idaho</option> 
                                        <option value="IL">Illinois</option> 
                                        <option value="IN">Indiana</option> 
                                        <option value="IA">Iowa</option> 
                                        <option value="KS">Kansas</option> 
                                        <option value="KY">Kentucky</option> 
                                        <option value="LA">Louisiana</option> 
                                        <option value="ME">Maine</option> 
                                        <option value="MD">Maryland</option> 
                                        <option value="MA">Massachusetts</option> 
                                        <option value="MI">Michigan</option> 
                                        <option value="MN">Minnesota</option> 
                                        <option value="MS">Mississippi</option> 
                                        <option value="MO">Missouri</option> 
                                        <option value="MT">Montana</option> 
                                        <option value="NE">Nebraska</option> 
                                        <option value="NV">Nevada</option> 
                                        <option value="NH">New Hampshire</option> 
                                        <option value="NJ">New Jersey</option> 
                                        <option value="NM">New Mexico</option> 
                                        <option value="NY">New York</option> 
                                        <option value="NC">North Carolina</option> 
                                        <option value="ND">North Dakota</option> 
                                        <option value="OH">Ohio</option> 
                                        <option value="OK">Oklahoma</option> 
                                        <option value="OR">Oregon</option> 
                                        <option value="PA">Pennsylvania</option> 
                                        <option value="RI">Rhode Island</option> 
                                        <option value="SC">South Carolina</option> 
                                        <option value="SD">South Dakota</option> 
                                        <option value="TN">Tennessee</option> 
                                        <option value="TX">Texas</option> 
                                        <option value="UT">Utah</option> 
                                        <option value="VT">Vermont</option> 
                                        <option value="VA">Virginia</option> 
                                        <option value="WA">Washington</option> 
                                        <option value="WV">West Virginia</option> 
                                        <option value="WI">Wisconsin</option> 
                                        <option value="WY">Wyoming</option>
                                    </select> 
                              </div>	 
                              <br/>
                        <div class="control-group">
                            <label class="control-label" for="input01">Province</label>
                              <div class="controls">
                                <input type="text" class="input-xlarge" id="province" name="province" rel="popover" data-content="Enter Province" data-original-title="province" >
                              </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="input01">Country</label>
                              <div class="controls">
                                <input type="text" class="input-xlarge" id="country" name="country" rel="popover" data-content="Enter Country" data-original-title="contry" >
                              </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="input01">Territory</label>
                              <div class="controls">
                                <input type="text" class="input-xlarge" id="territory" name="territory" rel="popover" data-content="Enter Territory" data-original-title="territory" >
                              </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="input01">Zip Code</label>
                              <div class="controls">
                                <input type="text" class="input-xlarge" id="zip" name="zip" rel="popover" data-content="Enter Zip Code" data-original-title="zip" >
                              </div>
                        </div>
                       <div class="control-group">
                            <label class="control-label" for="input01">Note</label>
                              <div class="controls">
                              <textarea type="text" class="input-xlarge" id="note" name="note" rel="popover" data-content="Enter your Note" data-original-title="note"rows="4" cols="70" onclick="this.value=''" onblur="if(this.value=='') this.value='Your message'"></textarea>  
                        </div>
                        </div>
                        </div>   
                        <div class="control-group">
                              <div class="controls">
                               <label class="control-label" for="input01">Are you a Pad user?</label><br>  
                               <div class="btn-group" data-toggle-name="is_private" data-toggle="buttons-radio" >
                                  <label>Yes</label><input id="yes" style="width: 20px;" type='radio' name='yes' value='1'/>
                                  <label>No</label><input id="no" style="width: 20px;" type='radio' name='no' class='check' value='0' checked="checked"/>
                                </div>
                                <input type="hidden" name="is_private" value="0" /> 
                           </div>
                           </div> 
                                                                    
                        <div class="control-group">
                            <div class="controls">
                                <button type="submit" class="btn_submit" rel="tooltip" title="first tooltip">Submit</button>
                          </div>
                        </div>
                         </fieldset>
                        </form>
                    
	</div>
	
		</div>
        
        
          </div><!--/row-->
        </div><!--/span-->
      </div><!--/row-->

      <hr>

      <footer>
	 <div class="container">
        <p>&copy; Srinivas Tamada Production</p>
</div>
      </footer>

    </div><!--/.fluid-container-->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="http://twitter.github.com/bootstrap/assets/js/jquery.js"></script>
    <script src="http://twitter.github.com/bootstrap/assets/js/bootstrap-transition.js"></script>
    <script src="http://twitter.github.com/bootstrap/assets/js/bootstrap-alert.js"></script>
    <script src="http://twitter.github.com/bootstrap/assets/js/bootstrap-modal.js"></script>
    <script src="http://twitter.github.com/bootstrap/assets/js/bootstrap-dropdown.js"></script>
    <script src="http://twitter.github.com/bootstrap/assets/js/bootstrap-scrollspy.js"></script>
    <script src="http://twitter.github.com/bootstrap/assets/js/bootstrap-tab.js"></script>
    <script src="http://twitter.github.com/bootstrap/assets/js/bootstrap-tooltip.js"></script>
    <script src="http://twitter.github.com/bootstrap/assets/js/bootstrap-popover.js"></script>
	<script type="text/javascript" src="http://jzaefferer.github.com/jquery-validation/jquery.validate.js"></script>
	  <script type="text/javascript">
	  $(document).ready(function(){
			$('#registerHere input').hover(function()
			{
			$(this).popover('show')
		});
			$("#registerHere").validate({
				rules:{
					user_name:"required",
					user_email:{
							required:true,
							email: true
						},
					pwd:{
						required:true,
						minlength: 6
					},
					cpwd:{
						required:true,
						equalTo: "#pwd"
					},
					comp:{
							required:true,
							comp: true
						},
					add:{
						required:true,
						add: true
					},
					city:{
						required:true,
						add: true
					},
					country:{
						required:true,
						add: true
					},
					zip:{
						required:true,
						add: true
					},
					province:{
						required:true,
						add: true
					},
					territory:{
						required:true,
						add: true
					},
					note:{
						required:true,
						add: true
					},
					state:"required"
				    },
				    messages:{
					user_name:"Enter your first and last name",
					user_email:{
						required:"Enter your email address",
						email:"Enter valid email address"
					},
					pwd:{
						required:"Enter your password",
						minlength:"Password must be minimum 6 characters"
					},
					cpwd:{
						required:"Enter confirm password",
						equalTo:"Password and Confirm Password must match"
					},
					comp:{
						required:"Enter your company name",
						equalTo:"Enter company name"
					},
					add:{
						required:"Enter your Address",
						equalTo:"Enter address"
					},
					city:{
						required:"Enter your City",
						equalTo:"Enter City"
					},
					country:{
						required:"Enter your Country",
						equalTo:"Enter Country"
					},
					zip:{
						required:"Enter your Zip",
						equalTo:"Enter Zip"
					},
					province:{
						required:"Enter your Province",
						equalTo:"Enter province"
					},
					territory:{
						required:"Enter your territory",
						equalTo:"Enter territory"
					},
					note:{
						required:"Enter your Note",
						equalTo:"Enter Note"
					},
					state:"Select Gender"
				},
				errorClass: "help-inline",
				errorElement: "span",
				highlight:function(element, errorClass, validClass) {
					$(element).parents('.control-group').addClass('error');
				},
				unhighlight: function(element, errorClass, validClass) {
					$(element).parents('.control-group').removeClass('error');
					$(element).parents('.control-group').addClass('success');
				}
			});
		});
	  </script>
   
  </body>
</html>

