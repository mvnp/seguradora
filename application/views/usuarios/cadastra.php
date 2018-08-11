	<!-- start: page -->
	<div class="row">
		<div class="col-md-12">
			<form id="form" action="forms-validation.html" class="form-horizontal">
				<section class="panel">
					<header class="panel-heading">
						<div class="panel-actions">
							<a href="#" class="panel-action panel-action-toggle" data-panel-toggle></a>
							<a href="#" class="panel-action panel-action-dismiss" data-panel-dismiss></a>
						</div>

						<h2 class="panel-title">Basic Form Validation</h2>
						<p class="panel-subtitle">
							Basic validation will display a label with the error after the form control.
						</p>
					</header>
					<div class="panel-body">
						<!-- start form -->
						<div class="form-group">
							<div class="col-sm-12">
								<label class="control-label">Full Name <span class="required">*</span></label>
								<input type="text" name="fullname" class="form-control" placeholder="eg.: John Doe" required/>
							</div>
						</div>
						<div class="form-group">
							<div class="col-sm-6">
								<label class="control-label">Full Name <span class="required">*</span></label>
								<input type="text" name="surname" class="form-control" placeholder="eg.: John Doe" required/>
							</div>
							<div class="col-sm-6">
								<label class="control-label">Full Name <span class="required">*</span></label>
								<input type="text" name="age" class="form-control" placeholder="eg.: John Doe" required/>
							</div>
						</div>
						<div class="form-group">
							<div class="col-sm-12">
								<label class="control-label">Company</label>
								<select id="company" class="form-control" title="Please select at least one company" required>
									<option value="">Choose a Company</option>
									<option value="apple">Apple</option>
									<option value="google">Google</option>
									<option value="microsoft">Microsoft</option>
									<option value="yahoo">Yahoo</option>
								</select>
							</div>
						</div>
						<div class="form-group">
							<div class="col-md-12">
								<label class="control-label">Multi-Value Select</label>
								<select id="states2" name="states2" multiple data-plugin-selectTwo class="form-control populate" title="Please select at least one state" required>
									<optgroup label="Alaskan/Hawaiian Time Zone">
										<option value="AK">Alaska</option>
										<option value="HI">Hawaii</option>
									</optgroup>
									<optgroup label="Pacific Time Zone">
										<option value="CA">California</option>
										<option value="NV">Nevada</option>
										<option value="OR">Oregon</option>
										<option value="WA">Washington</option>
									</optgroup>
									<optgroup label="Mountain Time Zone">
										<option value="AZ">Arizona</option>
										<option value="CO">Colorado</option>
										<option value="ID">Idaho</option>
										<option value="MT">Montana</option>
										<option value="NE">Nebraska</option>
										<option value="NM">New Mexico</option>
										<option value="ND">North Dakota</option>
										<option value="UT">Utah</option>
										<option value="WY">Wyoming</option>
									</optgroup>
									<optgroup label="Central Time Zone">
										<option value="AL">Alabama</option>
										<option value="AR">Arkansas</option>
										<option value="IL">Illinois</option>
										<option value="IA">Iowa</option>
										<option value="KS">Kansas</option>
										<option value="KY">Kentucky</option>
										<option value="LA">Louisiana</option>
										<option value="MN">Minnesota</option>
										<option value="MS">Mississippi</option>
										<option value="MO">Missouri</option>
										<option value="OK">Oklahoma</option>
										<option value="SD">South Dakota</option>
										<option value="TX">Texas</option>
										<option value="TN">Tennessee</option>
										<option value="WI">Wisconsin</option>
									</optgroup>
									<optgroup label="Eastern Time Zone">
										<option value="CT">Connecticut</option>
										<option value="DE">Delaware</option>
										<option value="FL">Florida</option>
										<option value="GA">Georgia</option>
										<option value="IN">Indiana</option>
										<option value="ME">Maine</option>
										<option value="MD">Maryland</option>
										<option value="MA">Massachusetts</option>
										<option value="MI">Michigan</option>
										<option value="NH">New Hampshire</option>
										<option value="NJ">New Jersey</option>
										<option value="NY">New York</option>
										<option value="NC">North Carolina</option>
										<option value="OH">Ohio</option>
										<option value="PA">Pennsylvania</option>
										<option value="RI">Rhode Island</option>
										<option value="SC">South Carolina</option>
										<option value="VT">Vermont</option>
										<option value="VA">Virginia</option>
										<option value="WV">West Virginia</option>
									</optgroup>
								</select>
							</div>
						</div>
						<div class="form-group">
							<div class="col-sm-12">
								<label class="control-label">Skills <span class="required">*</span></label>
								<textarea name="skills" rows="5" class="form-control" placeholder="Describe your skills" required></textarea>
							</div>
						</div>
						<div class="form-group">							
							<div class="col-sm-12">
								<label class="control-label">Porto Admin is <span class="required">*</span></label>
								<div class="radio-custom radio-primary">
									<input id="awesome" name="porto_is" type="radio" value="awesome" required />
									<label for="awesome">Awesome</label>
								</div>
								<div class="radio-custom radio-primary">
									<input id="very-awesome" name="porto_is" type="radio" value="very-awesome" />
									<label for="very-awesome">Very Awesome</label>
								</div>
								<div class="radio-custom radio-primary">
									<input id="ultra-awesome" name="porto_is" type="radio" value="ultra-awesome" />
									<label for="ultra-awesome">Ultran awesome</label>
								</div>
								<label class="error" for="porto_is"></label>
							</div>
						</div>
						<div class="form-group">
							<div class="col-sm-9">
								<label class="control-label">I will use it for <span class="required">*</span></label>
								<div class="checkbox-custom chekbox-primary">
									<input id="for-project" value="project" type="checkbox" name="for[]" required />
									<label for="for-project">My Project</label>
								</div>
								<div class="checkbox-custom chekbox-primary">
									<input id="for-website" value="website" type="checkbox" name="for[]" />
									<label for="for-website">My Website</label>
								</div>
								<div class="checkbox-custom chekbox-primary">
									<input id="for-all" value="all" type="checkbox" name="for[]" />
									<label for="for-all">All things I do</label>
								</div>
								<label class="error" for="for[]"></label>
							</div>
						</div>	
						<div class="form-group">
							<label class="col-md-12">Large</label>
							<div class="col-md-12">
								<div class="switch switch-lg switch-primary">
									<input type="checkbox" name="switch" data-plugin-ios-switch checked="checked" />
								</div>
								<div class="switch switch-lg switch-success">
									<input type="checkbox" name="switch" data-plugin-ios-switch checked="checked" />
								</div>
								<div class="switch switch-lg switch-warning">
									<input type="checkbox" name="switch" data-plugin-ios-switch checked="checked" />
								</div>
								<div class="switch switch-lg switch-danger">
									<input type="checkbox" name="switch" data-plugin-ios-switch checked="checked" />
								</div>
								<div class="switch switch-lg switch-info">
									<input type="checkbox" name="switch" data-plugin-ios-switch checked="checked" />
								</div>
								<div class="switch switch-lg switch-dark">
									<input type="checkbox" name="switch" data-plugin-ios-switch checked="checked" />
								</div>
							</div>
						</div>
						<!-- Ranges -->
						<div class="form-group" style="margin-top:15px">
							<label class="col-md-12">One Value</label>
							<div class="col-md-12">
								<div class="m-md slider-primary" data-plugin-slider data-plugin-options='{ "value": 50, "range": "min", "max": 100 }' data-plugin-slider-output="#listenSlider">
									<input id="listenSlider" type="hidden" value="50" />
								</div>
								<p class="output">The current <code>value</code> is: <b>50</b></p>
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-12">Range</label>
							<div class="col-md-12">
								<div class="m-md slider-primary" data-plugin-slider data-plugin-options='{ "values": [ 25, 75 ], "range": true, "max": 100 }' data-plugin-slider-output="#listenSlider2">
									<input id="listenSlider2" type="hidden" value="25, 75" />
								</div>
								<p class="output2">The <code>min</code> is: <b class="min">25</b> and the <code>max</code> is: <b class="max">75</b></p>
							</div>
						</div>
						<!-- Spinners -->
						<div class="form-group">
							<label class="col-md-3 control-label">Default Spinner</label>
							<div class="col-md-6">
								<div data-plugin-spinner>
									<div class="input-group input-small">
										<input type="text" class="spinner-input form-control" readonly="readonly">
										<div class="spinner-buttons input-group-btn btn-group-vertical">
											<button type="button" class="btn spinner-up btn-xs btn-default">
												<i class="fa fa-angle-up"></i>
											</button>
											<button type="button" class="btn spinner-down btn-xs btn-default">
												<i class="fa fa-angle-down"></i>
											</button>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-3 control-label">Disabled</label>
							<div class="col-md-6">
								<div data-plugin-spinner data-plugin-options='{ "disabled": true }'>
									<div class="input-group input-small">
										<input type="text" class="spinner-input form-control" maxlength="3" readonly>
										<div class="spinner-buttons input-group-btn btn-group-vertical">
											<button type="button" class="btn spinner-up btn-xs">
												<i class="fa fa-angle-up"></i>
											</button>
											<button type="button" class="btn spinner-down btn-xs">
												<i class="fa fa-angle-down"></i>
											</button>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-3 control-label">Horizontal buttons</label>
							<div class="col-md-6">
								<div data-plugin-spinner data-plugin-options='{ "value":0, "min": 0, "max": 10 }'>
									<div class="input-group" style="width:150px;">
										<input type="text" class="spinner-input form-control" maxlength="3" readonly>
										<div class="spinner-buttons input-group-btn">
											<button type="button" class="btn btn-default spinner-up">
												<i class="fa fa-angle-up"></i>
											</button>
											<button type="button" class="btn btn-default spinner-down">
												<i class="fa fa-angle-down"></i>
											</button>
										</div>
									</div>
								</div>
								<p>
									with <code>max</code> value set to 10
								</p>
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-3 control-label">Alternative</label>
							<div class="col-md-6">
								<div data-plugin-spinner data-plugin-options='{ "value":0, "step": 5, "min": 0, "max": 200 }'>
									<div class="input-group">
										<div class="spinner-buttons input-group-btn">
											<button type="button" class="btn btn-default spinner-up">
												<i class="fa fa-plus"></i>
											</button>
										</div>
										<input type="text" class="spinner-input form-control" maxlength="3" readonly>
										<div class="spinner-buttons input-group-btn">
											<button type="button" class="btn btn-default spinner-down">
												<i class="fa fa-minus"></i>
											</button>
										</div>
									</div>
								</div>
								<p>
									with <code>step</code> set to 5
								</p>
							</div>
						</div>		
						<!-- mascaras -->
						<div class="form-group">
							<label class="col-md-3 control-label">Date</label>
							<div class="col-md-6">
								<div class="input-group">
									<span class="input-group-addon">
										<i class="fa fa-calendar"></i>
									</span>
									<input id="date" data-plugin-masked-input data-input-mask="99/99/9999" placeholder="__/__/____" class="form-control">
								</div>
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-3 control-label">Phone</label>
							<div class="col-md-6 control-label">
								<div class="input-group">
									<span class="input-group-addon">
										<i class="fa fa-phone"></i>
									</span>
									<input id="phone" data-plugin-masked-input data-input-mask="(999) 999-9999" placeholder="(123) 123-1234" class="form-control">
								</div>
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-3 control-label">Product Key</label>
							<div class="col-md-6 control-label">
								<div class="input-group">
									<span class="input-group-addon">
										<i class="fa fa-tag"></i>
									</span>
									<input id="product-key" data-plugin-masked-input data-input-mask="(aa) 99-999" placeholder="(ab) 12-123" class="form-control">
								</div>
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-3 control-label" for="fc_inputmask_1">SSN</label>
							<div class="col-md-6">
								<div class="input-group">
									<span class="input-group-addon">
										<i class="fa fa-plus"></i>
									</span>
									<input id="fc_inputmask_1" data-plugin-masked-input data-input-mask="999-99-9999" placeholder="___-__-____" class="form-control">
								</div>
							</div>
						</div>
						<!-- Datepickers -->
						<div class="form-group">
							<label class="col-md-3 control-label">Default Datepicker</label>
							<div class="col-md-6">
								<div class="input-group">
									<span class="input-group-addon">
										<i class="fa fa-calendar"></i>
									</span>
									<input type="text" data-plugin-datepicker class="form-control">
								</div>
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-3 control-label">Date range</label>
							<div class="col-md-6">
								<div class="input-daterange input-group" data-plugin-datepicker>
									<span class="input-group-addon">
										<i class="fa fa-calendar"></i>
									</span>
									<input type="text" class="form-control" name="start">
									<span class="input-group-addon">to</span>
									<input type="text" class="form-control" name="end">
								</div>
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-3 control-label">Multiple dates</label>
							<div class="col-md-6">
								<div class="input-group">
									<span class="input-group-addon">
										<i class="fa fa-calendar"></i>
									</span>
									<input type="text" data-plugin-datepicker data-plugin-options='{ "multidate": true }' class="form-control">
								</div>
							</div>
						</div>
						<!-- Timepickers -->					
						<div class="form-group">
							<label class="col-md-3 control-label">Default Time Picker</label>
							<div class="col-md-6">
								<div class="input-group">
									<span class="input-group-addon">
										<i class="fa fa-clock-o"></i>
									</span>
									<input type="text" data-plugin-timepicker class="form-control">
								</div>
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-3 control-label">24 Hour Mode Time Picker</label>
							<div class="col-md-6">
								<div class="input-group">
									<span class="input-group-addon">
										<i class="fa fa-clock-o"></i>
									</span>
									<input type="text" data-plugin-timepicker class="form-control" data-plugin-options='{ "showMeridian": false }'>
								</div>
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-3 control-label">Specify a step for the minute field</label>
							<div class="col-md-6">
								<div class="input-group">
									<span class="input-group-addon">
										<i class="fa fa-clock-o"></i>
									</span>
									<input type="text" data-plugin-timepicker class="form-control" data-plugin-options='{ "minuteStep": 15 }'>
								</div>
							</div>
						</div>
						<!-- Colorspicker -->
						<div class="form-group">
							<label class="col-md-3 control-label">Default</label>
							<div class="col-md-6">
								<input type="text" data-plugin-colorpicker class="colorpicker-default form-control" value="#8fff00"/>
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-3 control-label">RGBA</label>
							<div class="col-md-6">
								<input type="text" data-plugin-colorpicker class="colorpicker-rgba form-control" value="rgb(0,194,255,0.78)" data-color-format="rgba"/>
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-3 control-label">Horizontal</label>
							<div class="col-md-6">
								<input type="text" data-plugin-colorpicker class="colorpicker-rgba form-control" value="#8fff00" data-horizontal="true"/>
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-3 control-label">Component</label>
							<div class="col-md-6">
								<div class="input-group color" data-plugin-colorpicker>
									<span class="input-group-addon"><i></i></span>
									<input type="text" class="form-control" value="#0088cc">
								</div>
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-3 control-label">Button</label>
							<div class="col-md-6 col-xs-11">
								<a href="#" class="btn btn-sm btn-primary" data-plugin-colorpicker data-color-format="hex" data-color="rgb(255, 255, 255)">Select color</a>
							</div>
						</div>
						<!-- Maxlength control -->
						<div class="form-group">
							<label class="col-md-3 control-label" for="textareaDefault">Input</label>
							<div class="col-md-6">
								<input class="form-control" data-plugin-maxlength maxlength="20" />
								<p>
									<code>max-length</code> set to 20.
								</p>
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-3 control-label" for="textareaDefault">Textarea</label>
							<div class="col-md-6">
								<textarea class="form-control" rows="3" data-plugin-maxlength maxlength="140"></textarea>
								<p>
									<code>max-length</code> set to 140.
								</p>
							</div>
						</div>	
						<!-- Multiselect -->
						<div class="form-group">
							<label class="col-md-3 control-label">Basic Multi-select</label>
							<div class="col-md-6">
								<select class="form-control" multiple="multiple" data-plugin-multiselect data-plugin-options='{ "maxHeight": 200 }' id="ms_example0">
									<option value="cheese">Cheese</option>
									<option value="tomatoes" selected>Tomatoes</option>
									<option value="mozarella" selected>Mozzarella</option>
									<option value="mushrooms">Mushrooms</option>
									<option value="pepperoni">Pepperoni</option>
									<option value="onions">Onions</option>
								</select>
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-3 control-label">Basic Multi-select (Only One)</label>
							<div class="col-md-6">
								<select class="form-control" data-plugin-multiselect data-plugin-options='{ "maxHeight": 200 }' id="ms_example1">
									<option value="cheese" selected>Cheese</option>
									<option value="tomatoes">Tomatoes</option>
									<option value="mozarella">Mozzarella</option>
									<option value="mushrooms">Mushrooms</option>
									<option value="pepperoni">Pepperoni</option>
									<option value="onions">Onions</option>
								</select>
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-3 control-label">With Preselected Options</label>
							<div class="col-md-6">
								<select class="form-control" multiple="multiple" data-plugin-options='{ "maxHeight": 200 }' data-plugin-multiselect id="ms_example2">
									<option value="cheese" selected>Cheese</option>
									<option value="tomatoes" selected>Tomatoes</option>
									<option value="mozarella" selected>Mozzarella</option>
									<option value="mushrooms">Mushrooms</option>
									<option value="pepperoni">Pepperoni</option>
									<option value="onions">Onions</option>
								</select>
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-3 control-label">Link button</label>
							<div class="col-md-6">
								<select class="form-control" multiple="multiple" data-plugin-multiselect data-plugin-options='{ "maxHeight": 200, "buttonClass": "btn btn-link" }' id="ms_example3">
									<option value="cheese">Cheese</option>
									<option value="tomatoes">Tomatoes</option>
									<option value="mozarella">Mozzarella</option>
									<option value="mushrooms">Mushrooms</option>
									<option value="pepperoni">Pepperoni</option>
									<option value="onions">Onions</option>
								</select>
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-3 control-label">With icon</label>
							<div class="col-md-6">
								<div class="input-group btn-group">
									<span class="input-group-addon">
										<i class="fa fa-th-list"></i>
									</span>
									<select class="form-control" multiple="multiple" data-plugin-multiselect data-plugin-options='{ "maxHeight": 200 }' id="ms_example4">
										<option value="cheese">Cheese</option>
										<option value="tomatoes">Tomatoes</option>
										<option value="mozarella">Mozzarella</option>
										<option value="mushrooms">Mushrooms</option>
										<option value="pepperoni">Pepperoni</option>
										<option value="onions">Onions</option>
									</select>
								</div>
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-3 control-label">Select All Option</label>
							<div class="col-md-6">
								<select class="form-control" multiple="multiple" data-plugin-multiselect data-plugin-options='{ "maxHeight": 200, "includeSelectAllOption": true }' id="ms_example5">
									<optgroup label="Mathematics">
										<option value="analysis">Analysis</option>
										<option value="algebra">Linear Algebra</option>
										<option value="discrete">Discrete Mathematics</option>
										<option value="numerical">Numerical Analysis</option>
										<option value="probability">Probability Theory</option>
									</optgroup>
									<optgroup label="Computer Science">
										<option value="programming">Introduction to Programming</option>
										<option value="automata">Automata Theory</option>
										<option value="complexity">Complexity Theory</option>
										<option value="software">Software Engineering</option>
									</optgroup>
								</select>
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-3 control-label">With Search</label>
							<div class="col-md-6">
								<select class="form-control" multiple="multiple" data-plugin-multiselect data-plugin-options='{ "maxHeight": 200, "enableCaseInsensitiveFiltering": true }' id="ms_example6">
									<optgroup label="Mathematics">
										<option value="analysis">Analysis</option>
										<option value="algebra">Linear Algebra</option>
										<option value="discrete">Discrete Mathematics</option>
										<option value="numerical">Numerical Analysis</option>
										<option value="probability">Probability Theory</option>
									</optgroup>
									<optgroup label="Computer Science">
										<option value="programming">Introduction to Programming</option>
										<option value="automata">Automata Theory</option>
										<option value="complexity">Complexity Theory</option>
										<option value="software">Software Engineering</option>
									</optgroup>
								</select>
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-3 control-label">Toggle All Button</label>
							<div class="col-md-6">
								<div class="btn-group">
									<select class="form-control" multiple="multiple" data-plugin-multiselect data-plugin-options='{ "maxHeight": 200 }' data-multiselect-toggle-all="true" id="ms_example7">
										<option value="cheese">Cheese</option>
										<option value="tomatoes">Tomatoes</option>
										<option value="mozarella">Mozzarella</option>
										<option value="mushrooms">Mushrooms</option>
										<option value="pepperoni">Pepperoni</option>
										<option value="onions">Onions</option>
									</select>
									<button id="ms_example7-toggle" class="btn btn-primary">Select All</button>
								</div>
							</div>
						</div>
					<!-- end form -->
					</div>		
					<footer class="panel-footer">
						<div class="row">
							<div class="col-sm-offset-4 col-sm-2">
								<button class="btn btn-block btn-primary">Submit</button>
							</div>
							<div class="col-sm-2">
								<button type="reset" class="btn btn-block btn-default">Reset</button>
							</div>
						</div>
					</footer>
				</section>
			</form>
		</div>
	</div>
</section>