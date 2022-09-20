<script type="application/ld+json">
{
"@context": "https://schema.org",
"@type": "Review",
"name": "MegaTask Technologies",
"url": "https://megatasktechnologies.com/portfolio/",
"image": "https://h7p2w6k8.stackpathcdn.com/assets/images/logo.png",
"author": "Amit",
"reviewBody": "Website Design Company in Delhi",
"reviewRating": {
"@type": "Rating"
"ratingValue": "1"
},
"itemReviewed": {
"@type": "LocalBusiness",
"name": "MegaTask Technologies",
"priceRange": "$ 10 Web Design Cost",
"image": "https://h7p2w6k8.stackpathcdn.com/assets/images/logo.png",
"address": {
"@type": "PostalAddress",
"streetAddress": "D-21 (Second Floor) Lane No.3, Abul Fazal Enclave-Part 1, Jamia Nagar",
"addressLocality": "New Delhi",
"addressRegion": "New Delhi",
"postalCode": "110025",
"telephone": "+91-9871652511",
"addressCountry": {
"@type": "Country",
"name": "India"
}
}
}
}

</script>
<script type="application/ld+json">
  {
    "@context" : "https://schema.org/",
    "@type": "EmployerAggregateRating",
    "itemReviewed": {
      "@type": "Organization",
      "name" : "Megatask Technologies",
      "sameAs" : "https://megatasktechnologies.com/portfolio"
    },
    "ratingValue": "97",
    "bestRating": "99",
    "worstRating": "1",
    "ratingCount" : "19062"
  }
</script>

<section class="">
  <div class="container-fluid digital-marketing-banner">
    <div class="container-fluid ">
      <div class="container">
        <div class="row">
          <div class="col-sm-6">
            <div class="pt-5">
              <h2 class="wordH"></h2> </div>
          </div>
          <div class="col-sm-6 ppc-img-section text-center pt-5">
            <img src="<?= base_url('assets/images/portfolio.webp')?>" alt="Megatask Web Software Development" class="bounce-1" style="width: 100%;">
          </div>
        </div> 
      </div>
    </div>
  </div>
</section>
<section class="pt-5 pb-5 website-design-contain">
  <div class="container min-width-cont">
    <div class="row BannerOpenGraph101">
      <div class=" col-sm-12 ">
        <div class="title_lead pl-4 pr-4" data-wow-delay=".20s">
          <h3 class="text-center"><strong class="lead">Our</strong> Portfolio</h3>
          <p class="text-center wow fadeInUp">Promising to deliver the services is one thing and letting our services talk for themselves is another. We have delivered several hundred services which include website designing and development. The reason for having this page on the website is not because we can brag about the things we delivered but for the impact it created in the individual businesses.</p>
          <div class="row" id="multiple-image">
		  <?php
				
				$larg_img = array('make-in-india.webp','dubai-stone-capital.webp','ecommerce-zovics.webp','spreader-techno.webp','snack-lafun.webp','food-packaging.webp');
				$larg_img_alt =  array('Make In India','Dubai Stone Capital','E-commerce Zovics','Driver Updater','Snack Lafun','Food Packaging');
				for ($i=0; $i < count($larg_img); $i++) 
				{
					
					 $name = $larg_img[$i];
					?>
					<div class="col-md-4 p-img">
						<div class="Scriptcontent">
						<img class="myImg img-rounded" data-id="<?php echo $i;?>" data-largimage="assets/images/Portfolio/<?php echo $name;?>" loading="lazy"   id="myimage<?php echo $i;?>" src="assets/images/Portfolio/thumb-<?php echo $name;?>" alt="<?php echo $larg_img_alt[$i];?>">
						</div>
					</div>
					 <?php
				}
			?>
          </div>
          <br>
          <div class="sr-button"> <a href="<?php echo base_url();?>contact-us" class="btn btn-outline-success text-dark my-2 my-sm-0 get_quote asknow">Request a Quote</a> </div>
        </div>
      </div>
    </div>
  </div>
</section>
<div id="myModal" class="modal"> 
    <img src="#" class="modal-content" id="img01" alt="image error">

</div>
<script>
var words = ['We make websites come alive.', 'Make your business shine on the web.', 'Great web design is more than pretty pictures.' , 'A design agency for the digital age.'],
  part,
  i = 0,
  offset = 0,
  len = words.length,
  forwards = true,
  skip_count = 0,
  skip_delay = 15,
  speed = 70;
var wordflick = function() {
  setInterval(function() {
    if(forwards) {
      if(offset >= words[i].length) {
        ++skip_count;
        if(skip_count == skip_delay) {
          forwards = false;
          skip_count = 0;
        }
      }
    } else {
      if(offset == 0) {
        forwards = true;
        i++;
        offset = 0;
        if(i >= len) {
          i = 0;
        }
      }
    }
    part = words[i].substr(0, offset);
    if(skip_count == 0) {
      if(forwards) {
        offset++;
      } else {
        offset--;
      }
    }
    $('.wordH').text(part);
  }, speed);
};
$(document).ready(function() {
  wordflick();
});
// Add active class to the current button (highlight it)
$('.listitem').click(function(e) {
  e.preventDefault();
  $('.listitem').removeClass('active');
  $(this).addClass('active');
});
$(window).scroll(function() {
  var sticky = $('.seo-mockup-mg'),
    scroll = $(window).scrollTop();
  if(scroll >= 2000) sticky.addClass('active-seo');
  else sticky.removeClass('active-seo');
});

    $( document ).ready(function() {



        $('#myModal').on('click', function(event){
             $(this).css("display","none") 
        });
        $('#multiple-image').on('click','.myImg',function(event){
   
            
           var imagez =  $(this).attr("data-id");
           var image_name =  $(this).attr("data-largimage");
           var src =  $(this).attr("src");
            
                   
            $('#myModal').css("display","block");
            $('#img01').attr("src", image_name);
             



        });
         

        //multple_image();
    });
</script>