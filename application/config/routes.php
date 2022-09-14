<?php







defined('BASEPATH') OR exit('No direct script access allowed');















/*







| -------------------------------------------------------------------------







| URI ROUTING







| -------------------------------------------------------------------------







| This file lets you re-map URI requests to specific controller functions.







|







| Typically there is a one-to-one relationship between a URL string







| and its corresponding controller class/method. The segments in a







| URL normally follow this pattern:







|







|	example.com/class/method/id/







|







| In some instances, however, you may want to remap this relationship







| so that a different class/function is called than the one







| corresponding to the URL.







|







| Please see the user guide for complete details:







|







|	https://codeigniter.com/user_guide/general/routing.html







|







| -------------------------------------------------------------------------







| RESERVED ROUTES







| -------------------------------------------------------------------------







|







| There are three reserved routes:







|







|	$route['default_controller'] = 'welcome';







|







| This route indicates which controller class should be loaded if the







| URI contains no data. In the above example, the "welcome" class







| would be loaded.







|







|	$route['404_override'] = 'errors/page_missing';







|







| This route will tell the Router which controller/method to use if those







| provided in the URL cannot be matched to a valid route.







|







|	$route['translate_uri_dashes'] = FALSE;







|







| This is not exactly a route, but allows you to automatically route







| controller and method names that contain dashes. '-' isn't a valid







| class or method name character, so it requires translation.







| When you set this option to TRUE, it will replace ALL dashes with







| underscores in the controller and method URI segments.







|







| Examples:	my-controller/index	-> my_controller/index







|		my-controller/my-method	-> my_controller/my_method







*/







$route['default_controller'] = "index";







$route['404_override'] = 'index/error_404';







$route['translate_uri_dashes'] = FALSE;























// Front 



$route['about-us']  = 'Index/about_us';



$route['ecommerce']  = 'Index/ecommerce';



$route['seo-services']  = 'Index/seo_services';



$route['digital-marketing']  = 'Index/digital_marketing';


$route['ppc-services']  = 'Index/ppc_services';


$route['smo-services']  = 'Index/smo_services';

$route['smm-services']  = 'Index/smm_services';


$route['email-services']  = 'Index/email_services';


$route['content-writing']  = 'Index/content_writing';


$route['portfolio']  = 'Index/portfolio';


$route['google-analytics']  = 'Index/google_analytics';


$route['sem-services']  = 'Index/sem_services';


$route['graphic-design']  = 'Index/graphic_design';




$route['website-redesign']  = 'Index/website_redesign';



$route['responsive-website']  = 'Index/responsive_website';



$route['maintenance-website']  = 'Index/maintenance_website';


$route['our-team']  = 'Index/our_team';



$route['web-development']  = 'Index/web_development';



/*$route['contact_us'] = 'Index/contact_us';*/
$route['contact-us'] = 'Index/contact_us';

$route['why-choose-us'] = 'Index/why_choose_us';

$route['terms-and-contitions'] = 'Index/terms_and_contitions';

$route['refund-and-cancellation-policy'] = 'Index/refund_and_cancellation_policy';


$route['privacy-policy'] = 'Index/privacy_policy';



$route['software-development'] = 'Index/software_development';




$route['web-wordpress'] = 'Index/web_wordpress';

$route['web-shopify'] = 'Index/web_shopify';

$route['web-wixdevelop'] = 'Index/web_wixdevelop';

$route['disclaimer'] = 'Index/disclaimer';
 

$route['faqs'] = 'Index/faq';
 
 $route['agent'] = 'agent/dashboard';






$route['refund-policy'] = 'refund_policy';







$route['terms-of-use'] = 'terms_of_use';







$route['cookies-policy'] = 'cookies_policy';




$route['blog'] = 'Blogs/index';
$route['blog/(:num)'] = 'Blogs/index/$1';
$route['blog/(:any)'] = 'Blogs/blog_detail/$1';







$route['driver-installation-instruction'] = 'driver_installation_instruction';



$route['trial-driver-download'] = 'driver_installation_instruction/downloadlink';



$route['try-now'] = 'driver_installation_instruction/trynow';







$route['after-install'] = 'after_install';







$route['after-uninstall'] = 'after_uninstall';







$route['uninstall/feedback'] = 'feedback';//'uninstallinstructions';    //'feedback';







$route['installed/welcome'] = '';







$route['buy-now'] = 'cart';















//$route['front/login/resetPasswordConfirmUser/(:any)'] = 'front/login/resetPasswordConfirmUser/$1';







$route['admin'] = 'admin/dashboard';



$route['vendor'] = 'vendor/dashboard';


















// Service supp







$route['product/(:num)/(:num)'] = 'product_list/get_product_list/$1/$1';







$route['shop'] = 'product_list/get_product_list';















$route['time-closed'] = 'timeclosed';







