
    <nav class="navbar navbar-expand-lg navbar-light bg-light2">
      <a class="navbar-brand mr-md-auto" href="<?php echo base_url();?>">
      <img src="<?php echo base_url();?>assets/images/logo.png"  class="img-fluid" alt="logo">
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <i class="fa fa-bars" aria-hidden="true"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
         <ul class="navbar-nav ml-auto current-nav mb-nav">
            <li class="nav-item">
               <a class="nav-link build-nav nav-link-line" href="<?php echo base_url();?>">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item dropdown">
               <a class="nav-link dropdown-toggle build-nav nav-link-line" href="" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Our Company
               </a>
               <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item nav-link-line" href="<?php echo base_url();?>about-us">About Us</a>
                  <a class="dropdown-item nav-link-line" href="<?php echo base_url();?>our-team">Our Team</a>
               </div>
            </li>
            <li class="nav-item">
               <a class="nav-link build-nav nav-link-line" href="<?php echo base_url();?>portfolio">Our Work</a>
            </li>
            <li class="nav-item">
               <a class="nav-link build-nav nav-link-line" href="<?php echo base_url();?>software-development">Software Development</a>
            </li>
            <li class="nav-item dropdown">
               <a class="nav-link dropdown-toggle build-nav nav-link-line" href="" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Web Development 
               </a>
               <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item nav-link-line" href="<?php echo base_url();?>ecommerce">Ecommerce Website </a>
                    <a class="dropdown-item nav-link-line" href="<?php echo base_url();?>website-redesign">Website Redesign</a>
                    <a class="dropdown-item nav-link-line" href="<?php echo base_url();?>responsive-website">Responsive Website </a>
                    <a class="dropdown-item nav-link-line" href="<?php echo base_url();?>maintenance-website">Website Maintenance Servcies </a>
                    <a class="dropdown-item nav-link-line" href="<?php echo base_url();?>web-development">Web Development </a>
                    <a class="dropdown-item nav-link-line" href="<?php echo base_url();?>graphic-design">Graphic Design</a>
                    <a class="dropdown-item nav-link-line" href="<?php echo base_url();?>web-wordpress">Wordpress Development</a>
                    <a class="dropdown-item nav-link-line" href="<?php echo base_url();?>web-shopify">Shopify Development</a>
                    <a class="dropdown-item nav-link-line" href="<?php echo base_url();?>web-wixdevelop">Wix Development</a>
               </div>
            </li>
            <li class="nav-item dropdown">
               <a class="nav-link dropdown-toggle build-nav nav-link-line" href="" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Digital Marketing 
               </a>
               <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <!-- <a class="dropdown-item nav-link-line" href="<?php echo base_url();?>digital_marketing">Digital Marketing</a> -->
                  <a class="dropdown-item nav-link-line" href="<?php echo base_url();?>seo-services">Search Engine Optimization</a>
                  <a class="dropdown-item nav-link-line" href="<?php echo base_url();?>sem-services">Search Engine Marketing</a>
                  <a class="dropdown-item nav-link-line" href="<?php echo base_url();?>ppc-services">Pay-Per-Click</a>
                  <a class="dropdown-item nav-link-line" href="<?php echo base_url();?>smo-services">Social Media Optimization</a>
                  <a class="dropdown-item nav-link-line" href="<?php echo base_url();?>smm-services">Social Media Marketing</a>
                  <a class="dropdown-item nav-link-line" href="<?php echo base_url();?>email-services">Email Marketing</a>
                  <a class="dropdown-item nav-link-line" href="<?php echo base_url();?>content-writing">Content Writing</a>
                  <a class="dropdown-item nav-link-line" href="<?php echo base_url();?>google-analytics">Google Analytics Serivces</a>
               </div>
            </li>
            <li class="nav-item">
               <a class="nav-link build-nav nav-link-line" href="<?php echo base_url();?>blog">Blog</a>
            </li>
            <li class="nav-item dropdown">
               <a class="nav-link dropdown-toggle build-nav nav-link-line" href="" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Location
               </a>
               <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item nav-link-line" href="<?=base_url()?>contact-us"><i class="flag-icon flag-icon-in"></i>India</a>
                  <a class="dropdown-item nav-link-line" href="<?=base_url()?>contact-us"><i class="flag-icon flag-icon-ae"></i>Dubai</a>
                  <a class="dropdown-item nav-link-line" href="<?=base_url()?>contact-us"><i class="flag-icon flag-icon-us"></i>USA</a>
               </div>
            </li>

         </ul>
         <a href="<?php echo base_url();?>contact-us" class="btn btn-outline-success my-2 my-sm-0 get_quote">Grab Now</a>
      </div>
   </nav>


   
<script>
   /* When the user clicks on the button, 
   toggle between hiding and showing the dropdown content */
    
     
   function myFunction() {
     document.getElementById("myDropdown").classList.toggle("show");
   }
   
   // Close the dropdown if the user clicks outside of it
   window.onclick = function(event) {
     if (!event.target.matches('.dropbtn')) {
       var dropdowns = document.getElementsByClassName("dropdown-content");
       var i;
       for (i = 0; i < dropdowns.length; i++) {
         var openDropdown = dropdowns[i];
         if (openDropdown.classList.contains('show')) {
           openDropdown.classList.remove('show');
         }
       }
     }
   }
   window.onscroll = function() {myFunction()};

var header = document.getElementById("myHeader");
var sticky = header.offsetTop;

function myFunction() {
  if (window.pageYOffset > sticky) {
    header.classList.add("sticky");
  } else {
    header.classList.remove("sticky");
  }
}





if ($(".dropdown").length) {
    $(document).on("click", ".dropdown-menu .dropdown-item", function (e) {
        e.preventDefault();
        if (!$(this).hasClass("active")) {
            var swalWithBootstrapButtons = Swal.mixin({
                customClass: {
                    confirmButton: "btn btn-primary",
                    cancelButton: "btn btn-danger me-3",
                },
                buttonsStyling: false,
            });
            swalWithBootstrapButtons
                .fire({
                    title: "Are you sure?",
                    text: "Do you really want to change your current language!",
                    icon: "warning",
                    confirmButtonText: "<i class='fas fa-check-circle me-1'></i> Yes, I am!",
                    cancelButtonText: "<i class='fas fa-times-circle me-1'></i> No, I'm Not",
                    showCancelButton: true,
                    reverseButtons: true,
                    focusConfirm: true,
                })
                .then((result) => {
                    if (result.isConfirmed) {
                        if (!$(this).hasClass("active")) {
                            $(".dropdown-menu .dropdown-item").removeClass("active");
                            $(this).addClass("active");
                            $(this)
                                .parents(".dropdown")
                                .find(".btn")
                                .html("<span class='flag-icon flag-icon-us me-1'></span>" + $(this).text());
                        }
                        Swal.fire({
                            icon: "success",
                            title: "Amazing!",
                            text: "Your current language has been changed successfully.",
                            showConfirmButton: false,
                            timer: 1500,
                        });
                    }
                });
        }
    });
}
</script>