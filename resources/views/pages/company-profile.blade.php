@extends('layouts.app')

@section('content')

		 <section class="banner">
			<div class="content text-center">
				<div class="text-center top-text">
                    <!-- Main Heading Starts -->
					<div class="text-center top-text">
						<h1>portfolio</h1>
					</div> 
					<!-- Main Heading Ends -->
					<hr>
                    <!-- Breadcrumb Starts -->
					<ul class="breadcrumb">
						<li><a href="{{url('/')}}"> home</a></li>
						
					</ul>
					<!-- Breadcrumb Ends -->
                </div>
			</div>
		</section>

		        <section class="shop-cart">
		            <!--Start section-->
		            <div class="container">
		                <div class="row">
							<!-- Purchased Products Starts -->
<div class="col-xs-12 table-responsive">
    <table class="table order text-center">
        <colgroup>
            <col class="col-xs-1">
            <col class="col-xs-2 col-sm-5">
            <col class="col-xs-2">
            <col class="col-xs-1 col-sm-2">
            <col class="col-xs-2 col-sm-2">
        </colgroup>
        <thead>
            <!-- <tr>
                <th></th>
                <th>Product</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Total</th>
            </tr>
            <hr> -->
            <h1 style="color:green">Company Portfolio</h1>

            
        </thead>
        <tbody>
            <tr>
               
                <td class="text-left"><h4 class="product">Company Name:</h4></td>
                <td class="text-center"><span class="price">Korea Bangla Trade Corporation </span></td>
            </tr>

        <tr>
            <tr>
                    
                    <td class="text-left"><h4 class="product">Business Type:</h4></td>
                    <td class="text-center"><span class="price">Exporter & Importer</span></td>
                  
                </tr>
                
                 <tr>
            
            <td class="text-left"><h4 class="product">Ownership Type:</h4></td>
            <td class="text-center"><span class="price">Proprietorship</span></td>
            
              	 </tr>
              	 <tr>
            
        <td class="text-left"><h4 class="product">Trade Licence NO: </h4></td>
            <td class="text-center"><span class="price"> 304135.</span></td>
            
        </tr>
        <tr>
        
        <td class="text-left"><h4 class="product">Import & export  Reg. </h4></td>
        <td class="text-center"><span class="price">234534</span></td>
        

    </tr>
    <tr>
       
       <td class="text-left"><h4 class="product">TIN-  CERTIFICAT NO.  </h4></td>
       <td class="text-center"><span class="price">439058881986.</span></td>
       


   </tr>
        
        <tr>
           
            <td class="text-left"><h4 class="product">VAT REG. NO.</h4></td>
            <td class="text-center"><span class="price"> </span></td>
            
        </tr>
        
         <tr>
           
            <td class="text-left"><h4 class="product">CHMBER  OF COMMERCE CERTIFICAT  SL. NO.</h4></td>
            <td class="text-center"><span class="price"> </span></td>
            
        </tr>
                        
	  
    
   
   <tr>
       
       <td class="text-left"><h4 class="product">BANKER: </h4></td>
       <td class="text-center"><span class="price"> BANK ASIA LIMITED,  MIRPUR- 01; BRANCH: DHAKA-1216.BANGLADESH.</span></td>
       

   </tr>
   
    <tr>
           
            <td class="text-left"><h4 class="product">YEAR OF ESTABLISHMENT:  </h4></td>
            <td class="text-center">1997<span class="price"> </span></td>
            
        </tr>

   <tr>
       
       <td class="text-left"><h4 class="product">Customized Packaging:</h4></td>
       <td class="text-center"><span class="price">Yes</span></td>
       

   </tr>
     <tr>
       
       <td class="text-left"><h4 class="product">EMPLOYED :      </h4></td>
       <td class="text-center"><span class="price">05</span></td>
       

   </tr>
   
      <tr>
       
       <td class="text-left"><h4 class="product">REGISTERED ADDRESS.</h4></td>
       <td class="text-center"><span class="price">148, AHMED NAGAR  MIRPUR, 01. DHAKA, 1216.BANGLADESH.</span></td>
       

   </tr>
   
    <tr>
       
       <td class="text-left"><h4 class="product">CONTRACT MANUFACTURING:</h4></td>
       <td class="text-center"><span class="price">OEM Service Offered</span></td>
       

   </tr>
   
   <tr>
       
       <td class="text-left"><h4 class="Cell Phone:  ">Cell Phone: </h4></td>
       <td class="text-center"><span class="price"> +88-01819849536</span></td>
       

   </tr>
   
   <tr>
       
       <td class="text-left"><h4 class="product">Tele Fax::</h4></td>
       <td class="text-center"><span class="price">+88-02 9143173</span></td>
       

   </tr>
   
   <tr>
       
       <td class="text-left"><h4 class="product"> Email:</h4></td>
       <td class="text-center"><span class="price">kbtcbd@hotmail.com</span></td>
       

   </tr>
   
      <tr>
       
       <td class="text-left"><h4 class="product"> Website:</h4></td>
       <td class="text-center"><span class="price">www.kbtcbd.com</span></td>
       

   </tr>
  
  
   

			        
        </tr>
        </tbody>
    </table>
</div>




							<!-- Purchased Products Ends -->
							<!-- Coupon Input Starts -->
		                   
							<!-- Update Cart Ends -->
							<!-- Cart Totals Starts -->
		                    
							<!-- Cart Totals Ends -->
		                </div>
		            </div>
		        </section>
 @endsection