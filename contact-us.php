<?php 
  
  $title = "Contact Us | Tricasol";
  $description="CONTACT US. VISIT OUR OFFICE. 709A-2-D1، Shah Jilani Road, Block 2, Sector D 1 Township, Lahore, Punjab, Pakistan. LET'S TALK. Mobile: (+92) 303 00 00 562";
  $keyword="";

  include('header.php'); 

?>
  <section class="inner-page-banner overflow-hidden position-relative m-auto">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-12">
          <div class="visual-content">
            <h2 class="text-uppercase">Give us a holler.</h2>
            <span class="d-block text-white mb-3">We’re here to help 24/7/365.</span>
          </div>
          <div class="btn-scroll-down">
			<a href="javascript:void(0);" data-bind="scrollTo" data-target="#btn-scroll-down">
				<i class="fa fa-chevron-down"></i>
			</a>
		</div>
        </div>
        
      </div>
    </div>
  </section>
  <main>

    <!-- About us section -->


    <!-- Services section -->

  <section class="services-block contact-value">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-12">
           
                  <div class="testmonioals-slider-block">
                      <div class="contact-picture">
                        <div class="contact-image active"><img src="images/support-ticket-icon.svg" alt="ticket"></div>  
                      </div>
                      <div class="contact-picture">
                        <div class="contact-image"><img src="images/live-chat-icon.svg" alt="chat"></div>  
                      </div>
                      <div class="contact-picture">
                        <div class="contact-image"><img src="images/call-icon.svg" alt="call"></div>  
                      </div>
                      <div class="contact-picture">
                        <div class="contact-image"><img src="images/whatsapp-icon.svg" alt="whatsapp"></div>  
                      </div>
                      <div class="contact-picture">
                        <div class="contact-image"><img src="images/location-icon.svg" alt="location"></div>  
                      </div>

                      <div class="value-info-slider">
                     
                       <div class="contact-info ticket" style="display: block;">
                        <strong class="text-uppercase mb-4 d-block">SUBMIT A TICKET</strong>
                        <div class="contact-btn">
                          <a href="https://secure.tricasol.com/submitticket.php?step=2&deptid=1" target="_blank" class="btn text-uppercase bg-blue-animation"><span>Open Ticket</span></a>
                        </div>
                      </div>

                      <div class="contact-info chat">
                        <strong class="text-uppercase mb-4 d-block">LIVE CHAT</strong>
                        <div class="contact-btn">
                          <a href="#" target="_blank" class="btn text-uppercase bg-blue-effect"><span>LET'S CHAT</span></a>
                        </div>
                      </div>

                      <div class="contact-info call">
                        <strong class="text-uppercase mb-4 d-block">LET’S TALK</strong>
                        <div class="contact-no">
                        <a href="tel:03030000562"><i class="fa fa-mobile-alt"></i> (+92) 303 00 00 562</a>
                        <a href="tel:04235151200"><i class="fa fa-phone"></i> (042) 35 151 200</a>  
                        </div>                  
                    </div>

                    <div class="contact-info whatsapp">
                        <strong class="text-uppercase mb-4 d-block">LET’S CHAT Whatsapp</strong>
                        <div class="whatsapp-no">
                        <a href="https://wa.me/923030000562?text=Welcome+to+Tricasol+-+Towards+the+smart+way+of+succeeding+|+Your+IT+Partner" target="_blank"><i class="fab fa-whatsapp"></i> (+92) 303 00 00 562</a>
                        </div>                  
                    </div>

                    <div class="contact-info location">
                        <strong class="text-uppercase mb-4 d-block">VISIT OUR OFFICE</strong>
                        <div class="contact-location">
                        <i class="fa fa-map-marker-alt"></i> 709A, 2-D1 Shah Jilani Road, Township Block 2 Twp Sector D 1 Lahore, Punjab 54000
                        </div>   
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1701.9363198936412!2d74.311569!3d31.445173!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x3285d2d8c4bed703!2sTricasol%20-%20Web%20Hosting%20%26%20Development%20Company!5e0!3m2!1sen!2sus!4v1638859891025!5m2!1sen!2sus" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                  </div>               
            </div>
      </div>
      <div class="lower-img pt-5">
          <img src="images/footer-img.png" class="m-auto" align="footer image">
        </div>
    </div>
  </section>

  


  </main>
  
<?php include('footer.php'); ?>


<script>
  $(".customer-image").click(function(){
    $(".customer-image").removeClass("active");
    $(this).addClass("active");
    $(this).addClass("active");
  });
</script>
