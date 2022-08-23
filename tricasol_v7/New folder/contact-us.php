<?php include('header.php'); ?>
  <section class="inner-page-banner overflow-hidden position-relative m-auto">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-12">
          <div class="visual-content">
            <h1 class="text-uppercase">Give us a holler.</h1>
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

  <section class="services-block core-value">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-12">
           
                  <div class="testmonioals-slider-block">
                      <div class="customer-picture">
                        <div class="customer-image active"><img src="images/support-ticket-icon.svg" alt="develop image"></div>  
                      </div>
                      <div class="customer-picture">
                        <div class="customer-image active"><img src="images/live-chat-icon.svg" alt="develop image"></div>  
                      </div>
                      <div class="customer-picture">
                        <div class="customer-image active"><img src="images/call-icon.svg" alt="develop image"></div>  
                      </div>
                      <div class="customer-picture">
                        <div class="customer-image active"><img src="images/whatsapp-icon.svg" alt="develop image"></div>  
                      </div>
                      <div class="customer-picture">
                        <div class="customer-image active"><img src="images/location-icon.svg" alt="develop image"></div>  
                      </div>

                      <div class="value-info-slider">
                     
                       <div class="customer-info active">
                        <strong class="customer-name text-uppercase mb-4 d-block">  Innovative At Heart</strong>
                        <p class="testmonioals-text">Innovation lies at the heart of Cloudways. We have an earnest curiosity that consistently drives us to be innovative and creative.

.</p>
                      </div>
                    
                    </div>
                  </div>               
            </div>
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
