<?php include "includes/header.php"  ?>

<style>
    
    header.main-website-header{
        background-color:#000;
            position: relative;
    top: 0;
    }
    
    ul.property-type span{
            display: flex;
    align-items: center;
    justify-content: center;
    }
    
</style>




<section class="new-step">
<!--	<div id="step-1">
		<div class="innerformban">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h2>Fast way to sell your home</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,<br> sed do eiusmod tempor incididunt ut labore et </p>
					</div>
				</div>
			</div>
		</div>

		<div class="form">
		    <div class="container ">
		      <form action="#">
		        <div class="form-field">
		          <input type="text" placeholder="Enter Property Address">
		          <a href="#" class="step-btn1" >Get my estimated offer 
		          <span><i class="fal fa-long-arrow-right"></i></span>
		          </a>
		        </div>
		      </form>
		    </div>
	    </div>
	</div>-->
<!--	<div id="step-1">
		<div class="innerformban" >
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h2>What is your address?</h2>
						<p>Full Property Address</p>
					</div>
				</div>
			</div>
		</div>
		<div class="form">
			<div class="container ">
			  <form action="#">
			    <div class="address-field">
			      <input type="text" placeholder="Enter a Location">
			      <a href="#" type="submit"  class="step-btn2">Next <span><i class="fal fa-long-arrow-right"></i></span></a>
			    </div>
			  </form>
			</div>
		</div>
	</div>-->
	<div id="step-1">
		<div class="innerformban">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h2>Is this the correct address?</h2>
						<p>If this home is part of a complex please provide the unit number.</p>
					</div>
				</div>
			</div>
		</div>
	  <div class="form">
	    <div class="container ">
	      <form action="#">
	        <div class="coradd-field">
	          <input type="text" class="step1-value" placeholder="Unit Number (Optional)">
	          <a href="#" id="stepbtn" class="step-btn1">Yes <span><i class="fal fa-long-arrow-right"></i></span></a>
	          <!--<a href="" class="edit">Edit Adress</a>-->
	        </div>
	      </form>
	    </div>
	  </div>
	</div>
	<div id="step-2">
		<div class=" innerformban">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h2>What type of property is this?</h2>
						<p>It looks like this home is part of a complex. Please provide a <br> unit number to continue.</p>
					</div>
				</div>
			</div>
		</div>
		<div class="property">
			<div class="container ">
				<ul class="property-type">
					<li><a href="#" class="step-btn2" rel="Single Home Family"><span><img src="assets/images/home.png" alt=""></span> Single Home Family</a></li>
					<li><a href="#" class="step-btn2" rel="Condominium"><span><img src="assets/images/shope.png" alt=""></span> Condominium</a></li>
					<li><a href="#" class="step-btn2" rel="Townhouse"><span><img src="assets/images/calender.png" alt=""></span> Townhouse</a></li>
					<li><a href="#" class="step-btn2" rel="Vacant Lot"><span><img src="assets/images/mapp.png" alt=""></span> Vacant Lot</a></li>
					<li><a href="#" class="step-btn2" rel="Mobile Home"><span><img src="assets/images/mobile.png" alt=""></span>Mobile Home</a></li>
					<li><a href="#" class="step-btn2" rel="Other"><span><img src="assets/images/dots.png" alt=""></span> Other</a></li>
				</ul>
			</div>
		</div>
	</div>
	<div id="step-3">
		<div class="innerformban">
			<div class="container wow fadeInLeft" data-wow-delay="0.3s">
				<div class="row">
					<div class="col-md-12">
						<h2>When was this property built?</h2>
						<p>It looks like this home is part of a complex. Please provide a <br> unit number to continue.</p>
					</div>
				</div>
			</div>
		</div>
		<div class="property">
			<div class="container ">
		      <ul class="property-built">
		        <li><a href="#" rel="2000 Or Later" class="step-btn3">2000 Or Later</a></li>
		        <li><a href="#" rel="1970s" class="step-btn3">1970s</a></li>
		        <li><a href="#" rel="1990s" class="step-btn3">1990s</a></li>
		        <li><a href="#" rel="1960s" class="step-btn3">1960s</a></li>
		        <li><a href="#" rel="1980s" class="step-btn3">1980s</a></li>
		        <li><a href="#" rel="Before 1960" class="step-btn3"> Before 1960</a></li>
		      </ul>
			</div>
		</div>
	</div>
	<div id="step-4">
		<div class=" innerformban">
			<div class="container wow fadeInLeft" data-wow-delay="0.3s">
				<div class="row">
					<div class="col-md-12">
						<h2>What is the condition of your property?</h2>
					</div>
				</div>
			</div>
		</div>
		<div class="property">
			<div class="container ">
				<ul class="property-condition">
					<li><a href="#" rel="Need Nothing" class="step-btn4">Need Nothing</a></li>
					<li><a href="#" rel="Needs a Little Work" class="step-btn4">Needs a Little Work</a></li>
					<li><a href="#" rel="Need Significant Work" class="step-btn4">Need Significant Work</a></li>
					<li><a href="#" rel="Tear Down" class="step-btn4">Tear Down</a></li>
				</ul>
			</div>
		</div>
	</div>
	<div id="step-5">
		<div class="innerformban">
			<div class="container wow fadeInLeft" data-wow-delay="0.3s">
				<div class="row">
					<div class="col-md-12">
						<h2>How soon are you looking to sell?</h2>
					</div>
				</div>
			</div>
		</div>
		<div class="property">
			<div class="container ">
			<ul class="property-sell">
				<li><a href="#" rel="As Soon As Possible" class="step-btn5">As Soon As Possible</a></li>
				<li><a href="#" rel="1-3 Months" class="step-btn5">1-3 Months</a></li>
				<li><a href="#" rel="3-6 Months" class="step-btn5">3-6 Months</a></li>
				<li><a href="#" rel="6-12 Months" class="step-btn5">6-12 Months</a></li>
				<li><a href="#" rel="12+ Months" class="step-btn5">12+ Months</a></li>
			</ul>
			</div>
		</div>
	</div>
	<div id="step-6">
		<div class="innerformban">
			<div class="container wow fadeInLeft" data-wow-delay="0.3s">
				<div class="row">
					<div class="col-md-12">
						<h2>What is your asking price?</h2>
					</div>
				</div>
			</div>
		</div>
		<div class="form">
			<div class="container ">
				<form action="#">
					<div class="home-field">
						<input type="text" class="step6-value" placeholder="Estimated Price">
						<a href="#" class="step-btn6">Next <span><i class="fal fa-long-arrow-right"></i></span></a>
					</div>
				</form>
			</div>
		</div>
	</div>
	<div id="step-7">
		<div class="innerformban">
			<div class="container wow fadeInLeft" data-wow-delay="0.3s">
				<div class="row">
					<div class="col-md-12">
						<h2>Why are you thinking of selling?</h2>
					</div>
				</div>
			</div>
		</div>
		<div class="property">
			<div class="container ">
				<ul class="think-sell">
					<li><a href="#" rel="Looking to Buy a Home" class="step-btn7">Looking to Buy a Home</a></li>
					<li><a href="#" rel="This is an investment property" class="step-btn7">This is an investment property</a></li>
					<li><a href="#" rel="This is a Second Home" class="step-btn7">This is a Second Home</a></li>
					<li><a href="#" rel="This is Inheritance" class="step-btn7">This is Inheritance</a></li>
					<li><a href="#" rel="Other" class="step-btn7">Other</a></li>
				</ul>
			</div>
		</div>
	</div>
	<div id="step-8">
		<div class="innerformban">
		   <div class="container wow fadeInLeft" data-wow-delay="0.3s">
		      <div class="row">
		         <div class="col-md-12">
		            <h2>How did you hear about us?</h2>
		         </div>
		      </div>
		   </div>
		</div>
		<div class="hear-about">
		   <div class="container ">
		      <ul class="hearing">
		         <li>
		            <div class="hear-wrap">
		               <div class="hearing-images">
		                 <a href="#" rel="Google/Bing" class="step-btn8"> <img src="assets/images/google.png" alt=""></a>
		               </div>
		               <a href="#" rel="Google/Bing" class="step-btn8">Google/Bing</a>
		            </div>
		         </li>
		         <li>
		            <div class="hear-wrap">
		               <div class="hearing-images">
		                    <a href="#" rel="Social Media" class="step-btn8"> <img src="assets/images/social.png" alt=""></a>
		               </div>
		               <a href="#" rel="Social Media" class="step-btn8">Social Media</a>
		            </div>
		         </li>
		         <li>
		            <div class="hear-wrap">
		               <div class="hearing-images">
		                 <a href="#" rel="Television" class="step-btn8"> <img src="assets/images/television.png" alt=""></a>
		               </div>
		               <a href="#" rel="Television" class="step-btn8">Television</a>
		            </div>
		         </li>
		         <li>
		            <div class="hear-wrap">
		               <div class="hearing-images">
		                 <a href="#" rel="Radio" class="step-btn8"> <img src="assets/images/radio.png" alt=""></a>
		               </div>
		               <a href="#" rel="Radio" class="step-btn8">Radio</a>
		               
		            </div>
		         </li>   
		         <li>
		            <div class="hear-wrap">
		               <div class="hearing-images">
		                  <a href="#" rel="Mailer" class="step-btn8"><img src="assets/images/mail.png" alt=""></a>
		               </div>
		               <a href="#" rel="Mailer" class="step-btn8">Mailer</a>
		            </div>
		         </li>
		         <li>
		            <div class="hear-wrap">
		               <div class="hearing-images">
		                  <a href="#" rel="Friend/Family" class="step-btn8"><img src="assets/images/family.png" alt=""></a>
		               </div>
		               <a href="#" rel="Friend/Family" class="step-btn8">Friend/Family</a>
		            </div>
		         </li>
		         <li>
		            <div class="hear-wrap">
		               <div class="hearing-images">
		                  <a href="#" rel="Podcast" class="step-btn8"><img src="assets/images/broadcast.png" alt=""></a>
		               </div>
		               <a href="#" rel="Podcast" class="step-btn8">Podcast</a>
		            </div>
		         </li>
		         <li>
		            <div class="hear-wrap">
		               <div class="hearing-images">
		                <a href="#" rel="Other" class="step-btn8">  <img src="assets/images/other.png" alt=""></a>
		               </div>
		               <a href="#" rel="Other" class="step-btn8">Other</a>
		            </div>
		         </li>
		      </ul>
		   </div>
		</div>	
	</div>
	<div id="step-9">
		<div class="innerformban">
	      <div class="container wow fadeInLeft" data-wow-delay="0.3s">
	         <div class="row">
	            <div class="col-md-12">
	               <h2>Where should we send your offer?</h2>
	            </div>
	         </div>
	      </div>
	   </div>
	   <div class="offer-form">
	      <div class="container ">
	         <form action="">
	            <div class="row">
	               <div class="col-md-6 pad-r-zero">
	                  <div class="offers-field2">
	                     <input type="text" id="step-btn9-fname" placeholder="Full Name">
	                  </div>
	                  <div class="offers-text">
	                     <p>By clicking "Submit", I consent to Offerock's Terms of Service and Privacy <br> Policy, and I consent to have offerock or one of its partners to contact me </p>      
	                  </div>
	               </div>
	               <div class="col-md-6 pad-l-zero">
	                  <div class="offers-field">
	                     <input type="text" id="step-btn9-email" placeholder="Email">
	                     <a href="#" class="step-btn9">Next 
	                     <span><i class="fal fa-long-arrow-right"></i></span>
	                     </a>
	                  </div>
	               </div>
	            </div>
	         </form>
	      </div>
	   </div>
	</div>
	<div id="step-10">
		<div class="innerformban">
			<div class="container wow fadeInLeft" data-wow-delay="0.3s">
				<div class="row">
					<div class="col-md-12">
						<h2>What is the best way to contact you?</h2>
						<p>What is the best way to contact you?</p>
					</div>
				</div>
			</div>
		</div>
		<!-- <div class="form">
			<div class="container ">
			  <form action="/email-function" method="POST" id="email-form">
			      <input type="hidden" id="unitnumber" name="unitnumber">
			      <input type="hidden" id="typeofproperty" name="typeofproperty">
			      <input type="hidden" id="propertybuilt" name="propertybuilt">
			      <input type="hidden" id="propertycondition" name="propertycondition">
			      <input type="hidden" id="propertysell" name="propertysell">
			      <input type="hidden" id="homeworth" name="homeworth">
			      <input type="hidden" id="thinksell" name="thinksell">
			      <input type="hidden" id="hearing" name="hearing">
			      <input type="hidden" id="fname" name="fname">
			      <input type="hidden" id="email" name="email">
			      <input type="hidden" id="address"  name="address">
			        <div class="best-field">
        			      <input type="number" placeholder="Phone Number" name="phone" id="phone" required>
        			      <div class="cbox">
        			         <input type="checkbox" name="LetterNeed" id="LetterNeed" onclick="validate()" required>
                                <label for="vehicle1">By submitting your phone number you consent to receive follow up texts and phone calls from our representatives with respect to your property. You may receive up to 4 text messages/month. To unsubscribe from follow up texts and calls from us, simply text back STOP, CANCEL, or UNSUBCRIBE.</label><br>
        			      </div>
        			      
        			      <button type="submit" id="form-sbmt-btn" >Submit 
        			      <span><i class="fal fa-long-arrow-right"></i></span>
        			      </button>
			    </div>
			  </form>
			</div>
		</div> -->
	</div>
	<div id="step-11">
		<div class="innerformban">
			<div class="container wow fadeInLeft" data-wow-delay="0.3s">
				<div class="row">
					<div class="col-md-12">
						<h2>Thanks for submitting your details</h2>
						<p>Hold tight, while we calculate your offer.</p>
					</div>
				</div>
			</div>
		</div>
	</div>

</section>







 

<?php require "includes/footer.php"  ?>

     
     
     
     
     
     
     



