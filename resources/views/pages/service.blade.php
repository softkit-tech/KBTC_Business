@extends('layouts.app')

@section('content')

<section class="banner">
			<div class="content text-center">
				<div class="text-center top-text">
                    <!-- Main Heading Starts -->
					<div class="text-center top-text">
						<h1>Service</h1>
					</div> 
					<!-- Main Heading Ends -->
					<hr>
                    <!-- Breadcrumb Starts -->
					<ul class="breadcrumb">
						<li><a href="{{url('/')}}">home</a></li>
						<li>Service</li>
					</ul>
					<!-- Breadcrumb Ends -->
                </div>
			</div>
		</section>


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
                              <th>
                                  
                                  <img class="img-responsive hidden-xs" src="{{asset('public/front/img/asia.png')}}" height="30px;" width="30px;" alt=""> </td>
                                 
                                  .</th>
                                  <td> BANK  ASIA LIMITED</td>
                              
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
                              <th scope="col">
                               <img class="img-responsive hidden-xs" src="{{asset('public/front/img/air.jpg')}}" height="40px;" width="40px;" alt="">
                            </th>
                            
                            </tr>
                            </thead>
                            <tbody>
                            
                            <tr>
                              
                              <td>By  Sea</td>
                              <td><img class="img-responsive hidden-xs" src="{{asset('public/front/img/ship.png')}}" height="40px;" width="40px;" alt=""> </td>
                            
                            </tr>
                            
                             <tr>
                              
                              <td>By  Road</td>
                              <td> <img class="img-responsive hidden-xs" src="{{asset('public/front/img/bus.jpg')}}" height="40px;" width="40px;" alt="">  </td>
                            
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
@endsection