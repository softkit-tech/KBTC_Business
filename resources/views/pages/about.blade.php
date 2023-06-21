@extends('layouts.app')

@section('content')
	<section class="banner">
			<div class="content text-center">
				<div class="text-center top-text">
                    <!-- Main Heading Starts -->
					<div class="text-center top-text">
						<h1>About Us</h1>
					</div> 
					<!-- Main Heading Ends -->
					<hr>
                    <!-- Breadcrumb Starts -->
					<ul class="breadcrumb">
						<li><a href="{{url('/')}}"> home</a></li>
						<li>About us</li>
					</ul>
					<!-- Breadcrumb Ends -->
                </div>
			</div>
		</section>
		<!-- Banner Ends -->
        <!-- About Section Starts -->
        <section class="about">
            <!-- Container Starts -->
            <div class="container">
                <!-- About Content Starts -->
                <div class="row about-content">
                    <div class="col-sm-12 col-md-6 col-lg-6 about-left-side">
                        <h3 class="title-about"><span style="color:green">  Korea  Bangla  Trade   Corporation</span><span style="color:blue"></span></h3>
                        <hr>
                        <p style="color:violet">KBTC  isConsist of Ownership Companies in Bangladesh. We have started our Journey from1997 with Export-Import Business. The Business Implement by our Family Members.Now Days we involved with, Wholesale and Business Constantly. We are the well known100% Exporter- Importer,wholesaler   Company in Bangladesh. KBTC has about 32 Dealer in 64 Districts. We are represented of worldclass Brand Companies Product to our Valuable Customer. We are in Operationwith Export Garments, Home Textile, Jute, Leather, Vegetable, Handicrafts toour Foreign Buyer
                        .</p>
                        <P style="color:violet">
                           KBTC Exports & Importproprietorship Company. We are 100% Importer - Exporter and Wholesale OrientedCompany Established in 1997 Bangladesh. Over the years we Import Baby Foods,Diaper, Wet wipe Tissue, Feeding Bottle, Medical Equipment and Machinery,Construction and Industrial Machinery, Agricultural Equipment, Dairy Food &Equipment, Food Ingredients, Milk, Chocolate, Frozen Foods, Coffee, Powder andJuices, Cosmetics, & Paints Chemicals, Ceramic Sanitary Tiles, wood &Furniture. Our most of the Products are world Branded Product from AsianPacific, European, North American and Latin American Companies. We have strongManagement Team and Sales Team to tie up with Manufacturer. Our Team makesinnovation we train up from the KBTC Companies and gather Knowledge to Develop Product Sales Volume in ourBangladesh Market
                           </p>
                        <!-- Tabs Heading Starts -->
                     
                        <!-- Tabs Heading Ends -->
                        <!-- Tabs Content Starts -->
                      

                      
                        <!-- Tabs Heading Ends -->
                        <!-- Tabs Content Starts -->
                      
                        <!-- T
                        abs Content Ends -->
					<!-- 	<a class="custom-button" href="portfolio-3-columns.html">Our Portfolio</a> -->
                    </div>
					<!-- Image About Us Starts -->
					
					@php
					$about=DB::table('about_us')->first();
					@endphp
					<div class="col-md-6 col-lg-6 about-right-side">
                        <div>
                            <img class="img-responsive" src="{{asset('public/backend/about/'.$about->image) }}"
                            height="350px;" width="300px;" alt="">
                            <h3 align="center">OBAIDUR  RAHMAN
                            </h3>
                          
                              <p align="center"><span style="color:red">Owner of Company (KBTC )</span></p>
                            
                            
                        </div>
                    </div>
					<!-- Image About Us Ends -->
                </div>
                <!-- About Content Ends -->
            </div>
            <!-- Container Ends -->
        </section>
       
    
        
@endsection