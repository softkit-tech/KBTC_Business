@extends('layouts.app')

@section('content')




        <section class="contactform">
            <div class="section-overlay">
                <div class="container">
                    <!-- Main Heading Starts -->
                    <div class="text-center top-text">
                        <h1><span>Send Us</span> an email</h1>
                        <p style="color:orange">We Appreciate yourenquiries and feedbacks. Please feel free to send us a message by filling theform below and we will reply you soonest.We respect yourprivacy and will ensure that your personal information will be kept strictlyconfidential.</p>
                    </div>

                    @if (Session::has('success'))
                        <div class="alert alert-success">
                          <p>{{ Session::get('success') }}</p>
                        </div>
                      @endif
                    <!-- Main Heading Ends -->
                    <div class="form-container">
                        <!-- Contact Form Starts -->
                        <form   action="{{route('contact.store')}}" method="post">
                        	@csrf
                            <div class="row form-inputs">
                                <!-- First Name Field Starts -->
                                <div class="col-sm-6 form-group custom-form-group">
                                    <span class="input custom-input">
										<input placeholder="First Name" class="input-field custom-input-field"  name="name" type="text" required data-error="NEW ERROR MESSAGE">
										<label class="input-label custom-input-label" >
											<i class="fa fa-user icon icon-field"></i>
										</label>
									</span>
                                </div>
                                <!-- First Name Field Ends -->
                                <!-- Last Name Field Starts -->
                                <div class="col-sm-6 form-group custom-form-group">
                                    <span class="input custom-input">
										<input placeholder="Last Name" class="input-field custom-input-field" name="last" type="text" required>
										<label class="input-label custom-input-label" >
											<i class="fa fa-user-o icon icon-field"></i>
										</label>
									</span>
                                </div>
                            <div class="col-sm-6 form-group custom-form-group">
                                <span class="input custom-input">
									<input placeholder="Email" class="input-field custom-input-field"  name="email" type="text" required>
									<label class="input-label custom-input-label" >
										<i class="fa fa-envelope icon icon-field"></i>
									</label>
								</span>
                            </div>
                        <div class="col-sm-6 form-group custom-form-group">
                            <span class="input custom-input">
								<input placeholder="Phone" class="input-field custom-input-field"  name="number" type="text" required>
								<label class="input-label custom-input-label" >
									<i class="fa fa-phone icon icon-field"></i>
								</label>
							</span>
                        </div>
                                <!-- Last Name Field Ends -->
                                <!-- Message Field Starts -->
                                <div class="form-group custom-form-group col-sm-12">
                                    <textarea placeholder="Message" name="msg" cols="45" rows="7" required></textarea>
                                </div>
                                <!-- Message Field Ends -->
                                <!-- Email Name Field Starts -->
                               
                                <!-- Email Name Field Ends -->
                                <!-- Submit Button Starts -->
                                <div class="col-sm-6 submit-form">
                                    <button  type="submit" class="custom-button" >Send Message</button>
                                </div>
                                <!-- Submit Button Ends -->
                                <!-- Form Submit Message Starts -->
                                <div class="col-sm-12 text-center output_message_holder">
                                    <p class="output_message"></p>
                                </div>
                                <!-- Form Submit Message Ends -->
                            </div>
                        </form>
                        <!-- Contact Form Ends -->
                    </div>
                </div>
            </div>
        </section>
<section class="contact">
            <!-- Map Section Starts -->
            <div class="info-map">
                <div class="google-map">
                    <div class="gmap_container">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1534.941764524699!2d90.36076259001955!3d23.79272201015796!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c0c41fed8c23%3A0x9b5300e219f8bd4e!2sPurnima%20Rd%2C%20Dhaka!5e0!3m2!1sen!2sbd!4v1629461533913!5m2!1sen!2sbd" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>
            </div>
            <!-- Info Map Boxes Starts -->
            <div class="container">
                <div class="row info-map-boxes">
					<!-- Left Info Map Box Starts -->
                    <div class="col-md-3 col-sm-3">
                        <div class="info-map-boxes-item">
                            <h1>Address:</h1>
                            <p style="color:blue">Head Office ->148,Ahmed Nagar,Mirpur-1,Dhaka-1216. Bangladesh
                            </p>
                        </div>
                    </div>
                    <!-- Left Info Map Box Ends -->
                    <!-- Right Info Map Box Starts -->
                    <div class="col-md-3 col-sm-3">
                        <div class="info-map-boxes-item">
                            <h1>Email address</h1>
                            <p style="color:red">kbtcbd@hotmail.com</p>
                            <p style="color:green">kbtcbd2@gmail.com</p>
                            
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3">
                        <div class="info-map-boxes-item">
                            <h1>Contact Number</h1>
                            <p style="color:blue">01819849536</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3">
                        <div class="info-map-boxes-item">
                            <h1>Open Days</h1>
                            <p style="color:blue">
                                Sunday - Thursday</p>
                        </div>
                        
                    </div>
                    
                   
                    <!-- Right Info Map Box Ends -->
                </div>
            </div>
            <!-- Info Map Boxes Ends -->
        </section>
        <!-- Contact Section Ends -->
        <!-- Contact Form Section Starts -->
     
        <!-- Contact Form Section Ends -->
		<!-- Logos Section Starts -->
        
				

@endsection