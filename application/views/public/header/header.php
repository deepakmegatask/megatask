<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta content="width=device-width, initial-scale=1.0" name="viewport">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title lang="en-in"><?php echo (isset($title))?$title:'megataskweb.com'; ?></title>


<meta name="keywords" content="<?php echo (isset($meta_keyword))?$meta_keyword:'Website Design Company Delhi, Web Development Company, Digital Marketing Agency, SEO Services Delhi, Graphic Design Agency Delhi, Mobile App Development Company, Social Media Marketing Company, Web Design & Development Company, Ecommerce Company Delhi, Ecommerce Website Company'; ?>"/>
<meta name="description" content="<?php echo (isset($meta_description))?$meta_description:'Megatask Technology is the fastest-growing IT company in Delhi, India that offers an extended array of services including Website Design & Development, Mobile App Development, MLM Software, and Digital Marketing Services for the enterprise.'; ?>" />
<meta name="robots" content="<?php echo (isset($meta_robot))?$meta_robot:'index,follow'; ?>" />
<meta name="author" content="megatasktechnologies.com" />
<meta name="copyright" content="&copy; 2022" />

<meta name="p:domain_verify" content="633077d8d04e16efec6c70c02dbdd4d2"/>
<!-- Open Graph -->
<meta property="og:locale" content="en_US">
<meta property="og:type" content="website">
<meta property="og:title" content="<?php echo (isset($meta_title))?$meta_title:'Web Design &  Development Company | Digital Marketing Agency Delhi | Megatask Technologies'; ?>">
<meta property="og:description" content="<?php echo (isset($meta_description))?$meta_description:'Megatask Technology is the fastest-growing IT company in Delhi, India that offers an extended array of services including Website Design & Development, Mobile App Development, MLM Software, and Digital Marketing Services for the enterprise.'; ?>">
<meta property="og:url" content="https://megatasktechnologies.com/">
<meta property="og:image" content="https://megatasktechnologies.com/assets/images/megatask-technologies.jpg">
<meta property="og:site_name" content="Megatask Technologies Pvt. Ltd. " />
<?php
		/*<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content=" Web Design & Development Company | Digital Marketing Agency Delhi | Megatask Technologies ">
<meta name="twitter:description" content="Megatask Technology is the fastest-growing IT company in Delhi, India that offers an extended array of services including Website Design & Development, Mobile App Development, MLM Software, and Digital Marketing Services for the enterprise.">
<meta name="twitter:image" content=" https://megatasktechnologies.com/assets/images/megatask-technologies.jpg ">
<meta name="twitter:site" content=" Megatask Technologies ">
<meta name="twitter:creator" content="@megatasktech">*/
?>
<meta name="google-site-verification" content="adKuUJbW1cm-RHGG-juLOMsF-QldCA7_5PiyssJM9Y0" />

<meta name="twitter:creator" content="@megatasktech">
<meta name="twitter:image:src" content="https://megatasktechnologies.com/assets/images/logo.png">
<meta name="distribution" content="global" />
<meta name="expires" content="never">
<meta name="robots" content="index, follow" />
<meta name="googlebot" content="index, follow" />
<meta name="yahooSeeker" content="index, follow" />
<meta name="msnbot" content="index, follow" />
<meta name="document-type" content="public">
<meta property="og:site_name" content="Megatask Technologies Pvt. Ltd. " />
<meta name="google-site-verification" content="adKuUJbW1cm-RHGG-juLOMsF-QldCA7_5PiyssJM9Y0" />


<link rel="stylesheet" href="<?php echo base_url();?>assets/src/css/bootstrap.min.css">
<link rel="stylesheet" href="<?php echo base_url();?>assets/src/css/responsive.css">
<?php
	$this->load->helper('url');
	$currentURL = current_url();
?>
<link rel="canonical" href="<?php echo $canonical;?>">
<link rel="alternate" href="<?php echo $alternate ?>" hreflang="en-US" />
<link rel="alternate" href="<?php echo $alternate ?>" hreflang="en-AE" />
<link rel="alternate" href="<?php echo $alternate ?>" hreflang="de-DE" />
<link rel="alternate" href="<?php echo $alternate ?>" hreflang="es-ES" />
<link rel="alternate" href="<?php echo $alternate ?>" hreflang="fr-FR" />
<link rel="alternate" href="<?php echo $alternate ?>" hreflang="pt-BR" />
<link rel="alternate" href="<?php echo $alternate ?>" hreflang="en-GB" />
<link rel="alternate" href="<?php echo $alternate ?>" hreflang="en-CA" />
<link rel="alternate" href="<?php echo $alternate ?>" hreflang="en-MY" />
<link rel="alternate" href="<?php echo $alternate ?>" hreflang="en-SG" />
<link rel="alternate" href="<?php echo $alternate ?>" hreflang="en-NG" />
<link rel="alternate" href="<?php echo $alternate ?>" hreflang="en-ID" />
<link rel="alternate" href="<?php echo $alternate ?>" hreflang="en-IE" />
<link rel="alternate" href="<?php echo $alternate ?>" hreflang="en-AU" />
<link rel="alternate" href="<?php echo $alternate ?>" hreflang="en-IN" />
<link rel="alternate" href="<?php echo $alternate ?>" hreflang="en-NZ" />
<link rel="alternate" href="<?php echo $alternate ?>" hreflang="en-PH" />
<link rel="alternate" href="<?php echo $alternate ?>" hreflang="en-ZA" />
<link rel="alternate" href="<?php echo $alternate ?>" hreflang="es-MX" />
<link rel="alternate" href="<?php echo $alternate ?>" hreflang="es-CO" />
<link rel="alternate" href="<?php echo $alternate ?>" hreflang="es-PE" />
<link rel="alternate" href="<?php echo $alternate ?>" hreflang="es-AR" />
<link rel="alternate" href="<?php echo $alternate ?>" hreflang="es-CL" />
<link rel="alternate" href="<?php echo $alternate ?>" hreflang="es-VE" />
<link rel="alternate" href="<?php echo $alternate ?>" hreflang="pt-PT" />
<link rel="alternate" href="<?php echo $alternate ?>" hreflang="fr-CA" />
<link rel="alternate" href="<?php echo $alternate ?>" hreflang="fr-BE" />

<link href="https://fonts.googleapis.com/css2?family=Catamaran:wght@400;700&display=swap" rel="stylesheet">

<link rel="stylesheet" href="<?php echo base_url();?>assets/src/css/build.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script defer src="<?php echo base_url();?>assets/src/js/jQuery-v3.5.1.js"> </script>
<script defer src="<?php echo base_url();?>assets/src/js/jquery-3.5.1.min.js"> </script>
<script defer src="<?php echo base_url();?>assets/src/js/bootstrap.min.js"> </script> 
<link rel="stylesheet" href="<?php echo base_url();?>assets/src/css/animate.css">
<link rel="stylesheet" href="<?php echo base_url();?>assets/src/css/megatask-animation.css">
<link rel="apple-touch-icon" sizes="57x57" href="<?php echo base_url();?>assets/images/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="<?php echo base_url();?>assets/images/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="<?php echo base_url();?>assets/images/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url();?>assets/images/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="<?php echo base_url();?>assets/images/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="<?php echo base_url();?>assets/images/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="<?php echo base_url();?>assets/images/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="<?php echo base_url();?>assets/images/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="<?php echo base_url();?>assets/images/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="<?php echo base_url();?>assets/images/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="<?php echo base_url();?>assets/images/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="<?php echo base_url();?>assets/images/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url();?>assets/images/favicon-16x16.png">
<link rel="manifest" href="<?php echo base_url();?>assets/images/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">


<script type="application/ld+json">
{
"@context": "https://schema.org",
"@type": "Review",
"name": "Mega Tasktechnologies",
"url": "https://megatasktechnologies.com/",
"image": "https://megatasktechnologies.com/assets/images/logo.png",
"author": "Amit",
"reviewBody": "Best Web Design Company",
"reviewRating": {
"@type": "Rating",
"ratingValue": "5"
},
"itemReviewed": {
"@type": "LocalBusiness",
"name": "Mega Tasktechnologies",
"priceRange": "$ 10 Web Design Cost",
"image": "https://megatasktechnologies.com/assets/images/logo.png",
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
        "name" : "Best Website Design Company in Delhi",
        "sameAs" : "https://megatasktechnologies.com"
      },
      "ratingValue": "99",
      "bestRating": "100",
      "worstRating": "1",
      "ratingCount" : "190561"
    }
    </script>

<script  defer type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "ProfessionalService",
  "name": "Megatask Technologies Pvt Ltd | Website Design & Development Company",
  "image": "",
  "@id": "",
  "url": "https://megatasktechnologies.com/",
  "telephone": "011 42032023",
  "address": {
    "@type": "PostalAddress",
    "streetAddress": "D-21 (Second Floor) Lane No.3, Abul Fazal Enclave-Part 1, Jamia Nagar",
    "addressLocality": "New Delhi",
    "postalCode": "110025",
    "addressCountry": "IN"
  },
  "geo": {
    "@type": "GeoCoordinates",
    "latitude": 28.5547758,
    "longitude": 77.2965637
  },
  "openingHoursSpecification": {
    "@type": "OpeningHoursSpecification",
    "dayOfWeek": [
      "Monday",
      "Tuesday",
      "Wednesday",
      "Thursday",
      "Friday"
    ],
    "opens": "09:00",
    "closes": "18:00"
  },
  "sameAs": [
    "https://www.facebook.com/Megatasktechnology",
    "https://twitter.com/megatasktech",
    "https://www.instagram.com/megatasktechnologies",
    "https://www.youtube.com/channel/UCI-TtTxlPXLRRUBTcsFf4FQ",
    "https://www.linkedin.com/company/megatasktechnologies",
    "https://in.pinterest.com/megatasktech"
  ] 
}
</script>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="preload"  href="https://fonts.googleapis.com/css2?family=Play:wght@700&display=swap" rel="stylesheet">
<link rel="flaticon" href="https://cdnjs.cloudflare.com/ajax/libs/flat-ui/2.3.0/js/flat-ui.min.js">



<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/0.8.2/css/flag-icon.min.css">
<!-- jquery-->


<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-73E5V19P68"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-73E5V19P68');
  gtag('config', 'AW-10784563968');
</script>
<!--end Global site tag (gtag.js) - Google Analytics -->


<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-KMDRHFT');</script>
<!-- End Google Tag Manager -->




<?php
		/*
				<!-- Global site tag (gtag.js) - Google Analytics

	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-178522838-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-178522838-1');
</script>

-->



<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-RRL2XVM0R9"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-RRL2XVM0R9');
</script>

		*/
?>




<!-- Facebook Pixel Code -->
<script>!function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window, document,'script','https://connect.facebook.net/en_US/fbevents.js');fbq('init', '259810769083379');fbq('track', 'PageView');</script><noscript><img height="1" width="1" style="display:none"src="https://www.facebook.com/tr?id=259810769083379&ev=PageView&noscript=1"/></noscript><!-- End Facebook Pixel Code -->

<!-- Start of  Zendesk Widget script -->
<script rel="preload"  id="ze-snippet" src="https://static.zdassets.com/ekr/snippet.js?key=a0303315-ef47-4d79-b4fb-bc71f579c6cd"> </script>
<!-- End of  Zendesk Widget script -->
 
</head>
<body>
 
	 

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KMDRHFT"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->