<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.theme.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
    .title_lead p,
    .title_lead a
    {
       
    }
    .title_lead.image-section {
     
    border-radius: 10px;
    padding: 10px;

    }

    .page-item a {
            position: relative;
            display: block;
            padding: 0.5rem 0.75rem;
            margin-left: -1px;
            line-height: 1.25;
            color: #007bff;
            background-color: #fff;
            border: 1px solid #dee2e6;
        }
        
        .pad{
            padding: 10px;
        }
        .ecom-img-section, .ecom-img-section img {
            padding-left: 0 !important;
        }
</style>

<section class="">
    <!--ecommerce home banner start-->
    <div class="container-fluid  ">
        <div class="container-fluid   ">
            <div class="container">
                <div class="row  pt-3 pb-3  ">
                    <div class="col-sm-6">
                        <div class="   pt-5">
                            <h1 class="wordH text-center font-big">Our Blog</h1> </div>
                    </div>
                    <div class="col-sm-6 ecom-img-section text-center"> <img class="abot-img" src="<?= base_url()?>assets/images/about-us-1.gif" alt="About Us"> </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="pt-5 pb-5 perfect-seo bg-seemles-webdesign ">
    <div class="container">
        <div class="row ">
            <div class=" col-sm-12">
                <div class="title_lead pl-4 pr-4">
                    <h4 class="text-center text-white wow fadeInUp leter-space-3" data-wow-delay=".20s">Our Blogs 

               </h4> </div>
            </div>
        </div>
        <?php
        foreach($list_blogs  as $k=>$v)
        {
                ?>
                <div class="row pad bg-white ">
            <div class=" col-sm-6 mt-3 mb-3">
                <div class="title_lead image-section wow fadeInLeft" data-wow-delay=".20s">
                    <img src="<?php echo base_url('uploads/blog/'.$v->image)?>" style="height:350px;width:100%;">
                </div>
            </div>
            <div class=" col-sm-6  ">
                <div class="title_lead pt-4 pb-2 ">
						<a href="<?php echo base_url('blog/'.$v->slug_url)?>"><h3  class="text-justify wow fadeInUp "><?=$v->name?> <h3></a>
                       <p>By : <b><?=$v->created_by?></b><br>Date :&nbsp;<?=date("d M Y", strtotime($v->date_at))?></p> 
                    <a href="<?php echo base_url('blog/'.$v->slug_url)?>"><div class="text-justify wow fadeInUp " data-wow-delay=".25s"><?= base64_decode(substr( $v->description, 0, 500))?>...</div></a>
					
					
                    <a href="<?php echo base_url('blog/'.$v->slug_url)?>" class="mt-2 text-center mb-2 get_quote">Read More...</a>

                </div>
            </div>
            <hr>
        </div>
            <?php
        }   


        ?>
<br>
<br>
<br>
        <nav aria-label="Page navigation example">

                         <?php echo $links; ?> 
 </nav>
 
        
        
        
    </div>
</section>

<section class="testimonial-section">
    <div class="container">
        <div class="row ">
            <div class=" col-sm-12">
                <div class="title_lead pl-4 pr-4">
                    <h3 class="testimonial-heading">Testimonial</h3>

               </h3>
                    <h4 class="text-center text-white wow fadeInUp leter-space-3" data-wow-delay=".20s">know about us from our clients</h4> </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div id="testimonial-slider" class="owl-carousel">
                    <div class="testimonial">
                        <div class="pic"> <img src="<?php echo base_url()?>assets/images/test-1.png" alt="testimonial-1"> </div>
                        <div class="testimonial-profile">
                            <h3 class="title text-white">Ali Haider</h3> <span class="post">Business Owner</span> </div>
                        <p class="description"> Thanks for all the work that went into creating my website. You achieved the clean and simple site I asked for. It was such a pleasure working with you on this project. You delivered everything I asked for within the timeframe you set out in the beginning. Your service is outstanding. </p>
                    </div>
                    <div class="testimonial">
                        <div class="pic"> <img src="<?php echo base_url()?>assets/images/test-3.png" alt="testimonial-2"> </div>
                        <div class="testimonial-profile">
                            <h3 class="title text-white">Kristina Bing</h3> <span class="post">Business Owner</span> </div>
                        <p class="description"> I had a startup business idea but I didn’t know how to start and promote it in the market until I met Megatask Technologies. They have got an amazing team, who guided me from the very beginning. It has been an absolute pleasure working with them. I look forward to many more projects together. </p>
                    </div>
                    <div class="testimonial">
                        <div class="pic"> <img src="<?php echo base_url()?>assets/images/test-2.png" alt="testimonial-3"> </div>
                        <div class="testimonial-profile">
                            <h3 class="title text-white">Dwight Schrute</h3> <span class="post">Graphic Designer</span> </div>
                        <p class="description"> I was thoroughly impressed with Megatask Technologies quality of design and overall working style. They took the time to discuss each project in detail, worked on it as per our needs and met our expectations. I can’t thank them enough. They came up with design-oriented solutions that helped my business gain more attention. </p>
                    </div>
                    <div class="testimonial">
                        <div class="pic"> <img src="<?php echo base_url()?>assets/images/test-3.jpg" alt="testimonial-4"> </div>
                        <div class="testimonial-profile">
                            <h3 class="title text-white">Angela Matthews</h3> <span class="post">Store Owner</span> </div>
                        <p class="description"> Our new website designed by Megatask Technologies better reflects our company as a whole and made a huge difference in the collections side of our business. With the new feature of web payments, our patients find it easy to navigate and we are not only saving time, but money. </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script type="text/javascript" src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js"></script>
<script>
var words = ["Our Blog Megatask Technologies Pvt Ltd", "We'd Love to Hear from You"],
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
    $('.panel-group').on('hidden.bs.collapse', toggleIcon);
    $('.panel-group').on('shown.bs.collapse', toggleIcon);
});

function toggleIcon(e) {
    $(e.target).prev('.panel-heading').find(".more-less").toggleClass('fa fa-minus');
}
</script>
<script type="text/javascript">
$(document).ready(function() {
    $("#testimonial-slider").owlCarousel({
        items: 2,
        itemsDesktop: [1000, 2],
        itemsDesktopSmall: [979, 2],
        itemsTablet: [768, 1],
        pagination: false,
        navigation: true,
        navigationText: ["", ""],
        autoPlay: true
    });
});
</script>