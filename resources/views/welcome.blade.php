@extends('layouts.app')

@section('content')

@php

$slider=DB::table('settings')->first();
@endphp
<!-- Header Ends -->
        <section class="mainslider" id="mainslider">
            <!-- Slider Hero Starts -->
            <div class="rev_slider_wrapper fullwidthbanner-container" data-alias="classicslider1" style="margin:0px auto;background-color:transparent;padding:0px;margin-top:0px;margin-bottom:0px;">
                <!-- START REVOLUTION SLIDER 5.0.7 auto mode -->
                <div id="rev_slider_slideshow" class="rev_slider fullwidthabanner" style="display:none;" data-version="5.0.7">
                    <ul>
                        <!-- SLIDE  -->
                        <li data-index="rs-1" data-transition="boxslide" data-slotamount="default" data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="{{asset('public/front/img/revolution-slider/slideshow/thumb1.jpg')}}" data-rotate="0" data-fsmasterspeed="300" data-fsslotamount="7" data-saveperformance="off" data-title="Intro" data-description="">
                            <!-- MAIN IMAGE -->
                            <img src="{{asset('public/front/img/revolution-slider/slideshow/slider.jpg')}}" alt="" data-bgposition="top center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina>
                            <!-- LAYERS -->

                            <!-- LAYER NR. 1 -->
                            <div class="tp-caption NotGeneric-Title   tp-resizeme rs-parallaxlevel-0" data-frames='[{"from":"x:[105%];z:0;rX:45deg;rY:0deg;rZ:90deg;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":2000,"to":"o:1;","delay":1000,"split":"chars","splitdelay":0.05,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]' data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" data-fontsize="['70','70','70','45']" data-lineheight="['70','70','70','50']" data-width="none" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_in="x:[105%];z:0;rX:45deg;rY:0deg;rZ:90deg;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power4.easeInOut;" data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="1000" data-splitin="chars" data-splitout="none" data-responsive_offset="on" data-elementdelay="0.05" style="z-index: 5; white-space: nowrap;" >
                            Korea Bangla Trade Corporation 
                            </div>

                            <!-- LAYER NR. 2 -->
                            <div class="tp-caption NotGeneric-SubTitle   tp-resizeme rs-parallaxlevel-0" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['52','52','52','51']" data-width="none" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;" data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="1500" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 6; white-space: nowrap;">
                            </div>

                            <!-- LAYER NR. 3 -->
                            <div class="tp-caption NotGeneric-Icon   tp-resizeme rs-parallaxlevel-0" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['-68','-68','-68','-68']" data-width="none" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;" data-style_hover="cursor:default;" data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:1500;e:Power4.easeInOut;" data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;" data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="2000" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 7; white-space: nowrap;"><i class="pe-7s-refresh"></i>
                            </div>
                            <!-- LAYER NR. 4 -->
                           
                        </li>
                        <!-- SLIDE  -->
                        <li data-index="rs-2" data-transition="3dcurtain-vertical" data-slotamount="default" data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="{{asset('public/front/img/revolution-slider/slideshow/thumb2.jpg')}}" data-rotate="0" data-fsmasterspeed="300" data-fsslotamount="7" data-saveperformance="off" data-title="Intro" data-description="">
                            <!-- MAIN IMAGE -->
                            <img src="{{asset('public/front/img/revolution-slider/slideshow/slider2.jpg')}}" alt="" data-bgposition="top center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina>
                            <!-- LAYERS -->

                            <!-- LAYER NR. 1 -->
                            <div class="tp-caption NotGeneric-Title   tp-resizeme rs-parallaxlevel-0" data-frames='[{"from":"x:[105%];z:0;rX:45deg;rY:0deg;rZ:90deg;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":2000,"to":"o:1;","delay":1000,"split":"chars","splitdelay":0.05,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]' data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" data-fontsize="['70','70','70','45']" data-lineheight="['70','70','70','50']" data-width="none" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_in="x:[105%];z:0;rX:45deg;rY:0deg;rZ:90deg;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power4.easeInOut;" data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="1000" data-splitin="chars" data-splitout="none" data-responsive_offset="on" data-elementdelay="0.05" style="z-index: 5; white-space: nowrap;">  한국방라무역공사
                            </div>

                         

                            
                          
                        </li>
                        <!-- SLIDE  -->
                        <li data-index="rs-3" data-transition="3dcurtain-horizontal" data-slotamount="default" data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="{{asset('public/front/img/revolution-slider/slideshow/thumb3.jpg')}}" data-rotate="0" data-fsmasterspeed="300" data-fsslotamount="7" data-saveperformance="off" data-title="Intro" data-description="">
                            <!-- MAIN IMAGE -->
                            <img src="{{asset('public/front/img/revolution-slider/slideshow/slider3.jpg')}}" alt="" data-bgposition="top center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina>
                            <!-- LAYERS -->

                            <!-- LAYER NR. 1 -->
                            <div class="tp-caption NotGeneric-Title   tp-resizeme rs-parallaxlevel-0" data-frames='[{"from":"x:[105%];z:0;rX:45deg;rY:0deg;rZ:90deg;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":2000,"to":"o:1;","delay":1000,"split":"chars","splitdelay":0.05,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]' data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" data-fontsize="['70','70','70','45']" data-lineheight="['70','70','70','50']" data-width="none" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_in="x:[105%];z:0;rX:45deg;rY:0deg;rZ:90deg;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power4.easeInOut;" data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="1000" data-splitin="chars" data-splitout="none" data-responsive_offset="on" data-elementdelay="0.05" style="z-index: 5; white-space: nowrap;">KOREA  BANGLA TRADE CORPORATION.
                            </div>

                           

                           
                         
                             </a></div>
                        </li>
                    </ul>
                    <div class="tp-static-layers"></div>
                </div>
            </div>
            <!-- Slider Hero Ends -->
        </section>
        <!-- Main Slider Section Ends -->
        <!-- About Section Starts -->
        <section id="about" class="about">
            <!-- Container Starts -->
            <div class="container">
                <!-- Main Heading Starts -->
                <div class="text-center top-text">
                    <h1><span>About</span> Us</h1>
                    <h4>Who We Are</h4>
                </div>
                <!-- Main Heading Ends -->
                <!-- Divider Starts -->
                <div class="divider text-center">
                    <span class="outer-line"></span>
                    <span class="fa fa-user" aria-hidden="true"></span>
                    <span class="outer-line"></span>
                </div>
                <!-- Divider Ends -->
                <!-- About Content Starts -->
                <div class="row about-content">
                    <div class="col-sm-12 col-md-6 col-lg-6 about-left-side">
                        <h2 class="title-about">korea Bangla Trade Corporation <strong></strong></h2>
                        <hr>
                         <p style="color:violet">KBTC  isConsist of Ownership Companies in Bangladesh. We have started our Journey from1997 with Export-Import Business. The Business Implement by our Family Members.Now Days we involved with, Wholesale and Business Constantly. We are the well known100% Exporter- Importer,wholesaler   Company in Bangladesh. KBTC has about 32 Dealer in 64 Districts. We are represented of worldclass Brand Companies Product to our Valuable Customer. We are in Operationwith Export Garments, Home Textile, Jute, Leather, Vegetable, Handicrafts toour Foreign Buyer
                        .</p>
                        <P style="color:violet">
                           KBTC Exports & Importproprietorship Company. We are 100% Importer - Exporter and Wholesale OrientedCompany Established in 1997 Bangladesh. Over the years we Import Baby Foods,Diaper, Wet wipe Tissue, Feeding Bottle, Medical Equipment and Machinery,Construction and Industrial Machinery, Agricultural Equipment, Dairy Food &Equipment, Food Ingredients, Milk, Chocolate, Frozen Foods, Coffee, Powder andJuices, Cosmetics, & Paints Chemicals, Ceramic Sanitary Tiles, wood &Furniture. Our most of the Products are world Branded Product from AsianPacific, European, North American and Latin American Companies. We have strongManagement Team and Sales Team to tie up with Manufacturer. Our Team makesinnovation we train up from the KBTC Companies and gather Knowledge to Develop Product Sales Volume in ourBangladesh Market
                           </p>
                       
                        <!-- Tabs Heading Ends -->
                        <!-- Tabs Content Starts -->
                        
                        <!-- Tabs Content Ends -->
                        <a class="custom-button" href="{{url('/about')}}">Know more about us</a>
                    </div>
                    @php
					$about=DB::table('about_us')->first();
					@endphp
                    <div class="col-md-6 col-lg-6 about-right-side">
                      <div class="full-image-container">
                   <img class="img-responsive hidden-xs" src="{{asset('public/backend/about/'.$about->image) }}"
                            height="350px;" width="300px;" alt="">
                            <h3 align="center">OBAIDUR  RAHMAN
                            </h3>
                          
                              <p align="center"><span style="color:red">Owner of Company (KBTC )</span></p>
               
                 </div>
                  </div>
                    <div class="col-md-12 col-lg-11 about-right-side">
                        <div class="full-image-container hovered">
                            <img class="img-responsive hidden-xs" src="{{asset('public/front/img/about.jpg')}}" alt="">
                            <div class="full-image-overlay">
                                <h3>Why <strong>Choose Us</strong></h3>
                                <ul class="list-why-choose-us">
                                    <li>Quick Response se with in 24 hrs on Enquiry</li>
                                    <li>To provide Best Competitive Market Price</li>
                                    <li>Best Quality </li>
                                    <li>Timely Delivery</li>
                                    <li>Capable for Bulk Quality Supplies</li>
                                    <li>Transparent business dealing </li>
                                    <li>Wide Network </li>
                                    <li>Tem of professionals </li>
                                    <li>Complete satisfaction Guaranteed</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- About Content Ends -->
            </div>
            <!-- Container Ends -->
        </section>
        <!-- About Section Ends -->
        <!-- Video Section Starts -->
        <section class="videopromotion">
            <div class="section-overlay">
                <!-- Container Starts -->
                <div class="container">
                    <!-- Main Heading Starts -->
                    <div class="text-center top-text">
                        <h1><span>Video</span> Promo</h1>
                        <h4>Made with love for you</h4>
                    </div>
                    <!-- Main Heading Ends -->
                    <div class="video-content">
                        <p class="text-center">See Amira like you've never seen it before! Watch our new promo video,<br> and discover just what an Amira membership can do for you!</p>
                        <!-- Video Play Starts -->
                        <div class="magnific-popup-gallery">
                            <div class="btn-wrapper text-center"><a class="image-wrap mfp-youtube" href="https://www.youtube.com/watch?v=0gv7OC9L2s8"></a></div>
                        </div>
                        <!-- Video Play Ends -->
                    </div>
                </div>
                <!-- Container Ends -->
            </div>
        </section>
        <!-- Video Section Ends -->
        <!-- Services Section Starts -->
        <section class="services">
            <!-- Container Starts -->
            <div class="container">
                <!-- Main Heading Starts -->
                <div class="text-center top-text">
                    <h1><span>Our</span> Services</h1>
                    <h4>What We Doing</h4>
                </div>
                <!-- Main Heading Starts -->
                <!-- Divider Starts -->
                <div class="divider text-center">
                    <span class="outer-line"></span>
                    <span class="fa fa-cogs" aria-hidden="true"></span>
                    <span class="outer-line"></span>
                </div>
                <!-- Divider Ends -->
                <!-- Services Starts -->
                <div class="row services-box">
		            <!-- Service Item Starts -->
		         
		            <div class="col-lg-6 col-md-6 col-sm-12 services-box-item">
		                <!-- Service Item Cover Starts -->
		                <span class="services-box-item-cover fa fa-leaf" data-headline="Merchant Importer"></span>
		                <!-- Service Item Cover Ends -->
		                <!-- Service Item Content Starts -->
		                <div class="services-box-item-content fa fa-leaf">
		                    <h2>Merchant Importer</h2>
		                    <p style="color:red">Pam oil, textiles machineries , cosmetics’  Auto  motor sprayer parts ,Electronics goods, textile fabrics, plastic raw materials, LDPE, HDPE, Medical Equipments, Masks, Stationary’s, Foods Cheese, Mobile Accessories parts, Milk, Chocolate, Frozen, Foods, Coffee, Tiles, Wood & Furniture.</p> <br>
		                    <h4 style="color:green">OUR REGISTION & CERTIFICATES:</h4>
		                    <p style="color:green">Trade Licence  No.      304135 .</p>
		                    <p style="color:green"> Import (IRC) REG No.</p>
		                    <p style="color:green">Export (ERC) REG  No. </p>
		                    <h6 style="color:green">Taxpayer’s Identification Number (TIN) Certification No.   439058881986 </h6>
		                    <p style="color:green">Vat Reg.  (BIN) No.       </p>
		                    <p style="color:green">ExportPromotion Beru  Certificate No </p>
		                    <p style="color:green">Chamber Of Commerce Certificate  SL- No.  </p>
		                    <h4 style="color:green">OUR ASSODATES:</h4>
		                    <p style="color:red">We are supported with highly professionalconnection in various Countries like. Singapore, Malaysia, Dubai, UAE, Qatar,Saudi Arabia, Oman, Kuwait, Bahrain,  Philippines,South Africa, Nepal,  France ,  South KOREA , Bulgaria, Spain,Turkey,China & India,   </p>
		                    
		                    
		                    
		                </div>
		                <!-- Service Item Content Ends -->
		            </div>
		            
		            <div class="col-lg-6 col-md-6 col-sm-12 services-box-item">
		                <!-- Service Item Cover Starts -->
		                <span class="services-box-item-cover fa fa-leaf" data-headline="Merchant Exporter"></span>
		                <!-- Service Item Cover Ends -->
		                <!-- Service Item Content Starts -->
		                <div class="services-box-item-content fa fa-leaf">
		                    <h2>Merchant Exporter</h2>
		                    <h5 style="color:red">Garments goods, Tea, Jute goods, Potato, coconut, Lather goods, Fruits, Sugar, textiles, Rice. Handicrafts, Vegetables, and FISH,</h5>
		                    <p style="color:blue">The products supplied by us areprocured/ contractually manufactured from the reliable source of the market that males  us assure their high quality . Today ,we arerespected name in the field of the exports for multiple Bangladesh origincommodities in the export  sectors  our products garments international standardswith competitive price and we have the capacity for bulk quantities supplies .We are interested in  establishing long time business relationshipwith overseas companies..</p>
		                    <h4 style="color:green">
                             KBTC  Exports  assures for the “Beast Quality,  Competitive Regular Supply & Timely Delivery”</h4>
                             <p>Kindly provide us with a chance to serve you in every  possible manner.</p>
                             <br>
                             
                             <h4 style="color:red">Payment Method: </h4>
                             <table class="table">
                            <thead>
                            <tr>
                              <th colspan="2"></th>
                              <th scope="col">Letter of Credit (L/C)</th>
                              <th scope="col">Demand Draft</th>
                            
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                              <th scope="row">BANK  ASIA LIMITED.</th>
                              
                            </tr>
                            <tr>
                              <th colspan="2"></th>
                              <td>Advance Payment</td>
                              <td>open Account  </td>
                            
                            </tr>
                            <tr>
                              <th colspan="2"></th>
                              <td>Wire transfer (TT)</td>
                              <td>Cheque </td>
                            </tr>
                             <tr>
                              <th colspan="2"></th>
                              <td>Pay Order</td>
                              <td>Cash. </td>
                            </tr>
                            </tbody>
                            </table>
                            
                            <h4 style="color:green">Shipment  Mode: </h4>
                             <table class="table">
                            <thead>
                            <tr>
                             
                              <th scope="col">By Air</th>
                              <th scope="col"><img class="img-responsive hidden-xs" src="{{asset('public/front/img/air.jpg')}}" height="40px;" width="40px;" alt=""></th>
                            
                            </tr>
                            </thead>
                            <tbody>
                            
                            <tr>
                              
                              <td>By  Sea</td>
                              <td><img class="img-responsive hidden-xs" src="{{asset('public/front/img/ship.png')}}" height="40px;" width="40px;" alt=""></td>
                            
                            </tr>
                            
                             <tr>
                              
                              <td>By  Road</td>
                              <td><img class="img-responsive hidden-xs" src="{{asset('public/front/img/bus.jpg')}}" height="40px;" width="40px;" alt="">  </td>
                            
                            </tr>
                           
                           
                            </tbody>
                            </table>
		                </div>
		                <!-- Service Item Content Ends -->
		            </div>
		            
		           


		          
		          

		           
		            

		        </div>
                <!-- Services Ends -->
            </div>
        </section>
        <!-- Services Section Ends -->
        <!-- Testimonials Section Starts -->
    
        <!-- Testimonials Section Ends -->
        <!-- Portfolio Section Starts -->
        
        <!-- Portfolio Section Ends -->
        <!-- Facts Section Starts -->
        <section class="facts">
            <div class="section-overlay">
                <!-- Container Starts -->
                <div class="container">
                    <!-- Main Heading Starts -->
                    <div class="text-center top-text">
                        <h1><span>Cool</span> Facts</h1>
                        <h4>our numbers</h4>
                    </div>
                    <!-- Main Heading Starts -->
                    <!-- Fact Badges Starts -->
                    <div class="fact-badges">
                        <div class="row">
                            <!-- Fact Badge Item Starts -->
                            @foreach($counts as $row)
                            <div class="col-md-3 col-sm-6">
                                <i class="{{$row->icon}}"></i>
                                <h2>
                                    <span><strong class="badges-counter">{{$row->count}}</strong>+</span>
                                </h2>
                                <h4>{{$row->name}}</h4>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <!-- Fact Badges Ends -->
                </div>
                <!-- Container Ends -->
            </div>
        </section>
        <!-- facts Section Ends -->
        <!-- Pricing Starts -->
        
        <!-- Pricing Ends -->
        <!-- Newsletter Section Starts -->
        <section class="newsletter">
            <div class="section-overlay">
                <!-- Container Starts -->
                <div class="container">
                    <!-- Main Heading Starts -->
                    <div class="text-center top-text">
                        <h1><span>our</span> newsletter</h1>
                        <h4>Keep in touch</h4>
                    </div>

                    @if (Session::has('success'))
                        <div class="alert alert-success">
                          <p>{{ Session::get('success') }}</p>
                        </div>
                      @endif
                      
                    <!-- Main Heading Ends -->
                    <div class="newsletter-content">
                        <p class="text-center">Sign up to our newsletter subscription and be the first to know about<br> Important news <span> & </span> Amazing offers <span> & </span>Discounts</p>
                        <!-- Newsletter Form Starts -->
                        <form action="{{route('news.store')}}" method="post">
                            @csrf
                            <!-- Newsletter Form Input Field Starts -->
                            <div class="col-md-12 form-group custom-form-group">
                                <span class="input custom-input">
                                    <input name="email" placeholder="Enter Your Email" class="input-field custom-input-field" type="text" required="" />
                                    <label class="input-label custom-input-label" >
                                        <i class="fa fa-envelope-open-o icon icon-field"></i>
                                    </label>
                                </span>
                            </div>
                            <!-- Newsletter Form Input Field Ends -->
                            <!-- Newsletter Form Submit Button Starts -->
                            <button  type="submit" class="custom-button" title="Send">Subscribe Now</button>
                            <!-- Newsletter Form Submit Button Ends -->
                        </form>
                        <!-- Newsletter Form Ends -->
                    </div>
                </div>
                <!-- Container Ends -->
            </div>
        </section>
        <!-- Newsletter Section Ends -->
        <!-- Blog Section Starts -->
        <section class="blog">
            <!-- Container Starts -->
            <div class="container">
                <!-- Main Heading Starts -->
                <div class="text-center top-text">
                    <h1><span>Blog</span> Posts</h1>
                    <h4>Latest Articles</h4>
                </div>
                <!-- Main Heading Starts -->
                <!-- Divider Starts -->
                <div class="divider text-center">
                    <span class="outer-line"></span>
                    <span class="fa fa-comments" aria-hidden="true"></span>
                    <span class="outer-line"></span>
                </div>
                <!-- Divider Ends -->
                <div class="row latest-posts-content">
                    <!-- Article Starts -->
                    @foreach($allblog as $row)
                    <div class="col-sm-4 col-md-4 col-xs-12">
                        <div class="latest-post">
                            <!-- Featured Image Starts -->
                            <a class="img-thumb" href="#"><img class="img-responsive" src="{{asset('public/backend/blog/'.$row->image) }}" alt="img"></a>
                            <!-- Featured Image Ends -->
                            <!-- Article Content Starts -->
                            <div class="post-body">
                                <h4 class="post-title">
                                    <a href="#">{{$row->name}}</a>
                                </h4>
                                <div class="post-text">
                                    <p>{{$row->description}}</p>
                                </div>
                            </div>
                            <!-- Post Date Starts -->
                            <div class="post-date">
                                <span>{{$row->date}}</span>
                               
                            </div>
                            <!-- Post Date Ends -->
                            <a class="custom-button" href="#">Read more</a>
                            <!-- Article Content Ends -->
                        </div>
                    </div>
                    @endforeach
                    <!-- Article Ends -->
                    <!-- Article Starts -->
                    
                    <!-- Article Ends -->
                    <!-- Article Starts -->
                   
                    <!-- Article Ends -->
                </div>
                <!-- Latest Blog Posts Ends -->
            </div>
        </section>
        
         <section class="about">
            <!-- Container Starts -->
            <div class="container">
             
    <div class="row about-content">
      
        <div class="col-md-12 col-lg-12">
            <div class="full-image-container">
                <img class="img-responsive hidden-xs" src="{{asset('public/front/img/welcome.jpg')}}" alt="">
               
            </div>
        </div>
    </div>
    </section>
       
        

        @endsection