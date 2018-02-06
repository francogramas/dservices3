<!DOCTYPE html>
<html>
<head>
	<!-- -------------------------------Voyager------------------------------------------  -->
	@yield('css')
	<meta name="csrf-token" content="{{ csrf_token() }}"/>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">

    @yield('css')

    <!-- Few Dynamic Styles -->
    <style type="text/css">
        .voyager .side-menu .navbar-header {
            background:{{ config('voyager.primary_color','#22A7F0') }};
            border-color:{{ config('voyager.primary_color','#22A7F0') }};
        }
        .widget .btn-primary{
            border-color:{{ config('voyager.primary_color','#22A7F0') }};
        }
        .widget .btn-primary:focus, .widget .btn-primary:hover, .widget .btn-primary:active, .widget .btn-primary.active, .widget .btn-primary:active:focus{
            background:{{ config('voyager.primary_color','#22A7F0') }};
        }
        .voyager .breadcrumb a{
            color:{{ config('voyager.primary_color','#22A7F0') }};
        }
    </style>

<!-- -------------------------------------------------------------------------------------- -->

<!-- This site is optimized with the Yoast SEO plugin v5.5 - https://yoast.com/wordpress/plugins/seo/ -->
<link rel="canonical" href="http://dservices.grupointermedics.info/" />
<meta property="og:locale" content="es_ES" />
<meta property="og:type" content="website" />
<meta property="og:title" content="%title%" />
<meta property="og:url" content="http://dservices.grupointermedics.info/" />
<meta property="og:site_name" content="Avada Health" />
<meta property="og:image" content="http://dservices.grupointermedics.info/wp-content/uploads/2015/12/icon-5.png" />
<meta property="og:image" content="http://dservices.grupointermedics.info/wp-content/uploads/2015/12/icon-6.png" />
<meta property="og:image" content="http://dservices.grupointermedics.info/wp-content/uploads/2015/12/icon-7.png" />
<meta property="og:image" content="http://dservices.grupointermedics.info/wp-content/uploads/2015/12/play-icon.png" />
<meta property="og:image" content="http://dservices.grupointermedics.info/wp-content/uploads/2015/12/wave-divider.png" />
<meta name="twitter:card" content="summary" />
<meta name="twitter:title" content="%title%" />
<meta name="twitter:image" content="http://dservices.grupointermedics.info/wp-content/uploads/2015/12/icon-5.png" />
<script type='application/ld+json'>{"@context":"http:\/\/schema.org","@type":"WebSite","@id":"#website","url":"http:\/\/dservices.grupointermedics.info\/","name":"Avada Health","potentialAction":{"@type":"SearchAction","target":"http:\/\/dservices.grupointermedics.info\/?s={search_term_string}","query-input":"required name=search_term_string"}}</script>
<!-- / Yoast SEO plugin. -->

<link rel='dns-prefetch' href='//s.w.org' />
<link rel="alternate" type="application/rss+xml" title="Avada Health &raquo; Feed" href="http://dservices.grupointermedics.info/feed/" />
<link rel="alternate" type="application/rss+xml" title="Avada Health &raquo; RSS de los comentarios" href="http://dservices.grupointermedics.info/comments/feed/" />

		<meta property="og:title" content="Home"/>
		<meta property="og:type" content="article"/>
		<meta property="og:url" content="http://dservices.grupointermedics.info/"/>
		<meta property="og:site_name" content="Avada Health"/>
		<meta property="og:description" content="Caring For Life Kind words can be short and easy to speak, but their echoes are truly endless. Avada Health focuses on you as if it was our own family.  Learn More   OFFICE HOURS"/>

									<meta property="og:image" content="http://dservices.grupointermedics.info/wp-content/uploads/2017/11/SmallLogoBlanco-2.png"/>
							<script type="text/javascript">
			window._wpemojiSettings = {"baseUrl":"https:\/\/s.w.org\/images\/core\/emoji\/2.3\/72x72\/","ext":".png","svgUrl":"https:\/\/s.w.org\/images\/core\/emoji\/2.3\/svg\/","svgExt":".svg","source":{"concatemoji":"http:\/\/dservices.grupointermedics.info\/wp-includes\/js\/wp-emoji-release.min.js?ver=4.8.3"}};
			!function(a,b,c){function d(a){var b,c,d,e,f=String.fromCharCode;if(!k||!k.fillText)return!1;switch(k.clearRect(0,0,j.width,j.height),k.textBaseline="top",k.font="600 32px Arial",a){case"flag":return k.fillText(f(55356,56826,55356,56819),0,0),b=j.toDataURL(),k.clearRect(0,0,j.width,j.height),k.fillText(f(55356,56826,8203,55356,56819),0,0),c=j.toDataURL(),b!==c&&(k.clearRect(0,0,j.width,j.height),k.fillText(f(55356,57332,56128,56423,56128,56418,56128,56421,56128,56430,56128,56423,56128,56447),0,0),b=j.toDataURL(),k.clearRect(0,0,j.width,j.height),k.fillText(f(55356,57332,8203,56128,56423,8203,56128,56418,8203,56128,56421,8203,56128,56430,8203,56128,56423,8203,56128,56447),0,0),c=j.toDataURL(),b!==c);case"emoji4":return k.fillText(f(55358,56794,8205,9794,65039),0,0),d=j.toDataURL(),k.clearRect(0,0,j.width,j.height),k.fillText(f(55358,56794,8203,9794,65039),0,0),e=j.toDataURL(),d!==e}return!1}function e(a){var c=b.createElement("script");c.src=a,c.defer=c.type="text/javascript",b.getElementsByTagName("head")[0].appendChild(c)}var f,g,h,i,j=b.createElement("canvas"),k=j.getContext&&j.getContext("2d");for(i=Array("flag","emoji4"),c.supports={everything:!0,everythingExceptFlag:!0},h=0;h<i.length;h++)c.supports[i[h]]=d(i[h]),c.supports.everything=c.supports.everything&&c.supports[i[h]],"flag"!==i[h]&&(c.supports.everythingExceptFlag=c.supports.everythingExceptFlag&&c.supports[i[h]]);c.supports.everythingExceptFlag=c.supports.everythingExceptFlag&&!c.supports.flag,c.DOMReady=!1,c.readyCallback=function(){c.DOMReady=!0},c.supports.everything||(g=function(){c.readyCallback()},b.addEventListener?(b.addEventListener("DOMContentLoaded",g,!1),a.addEventListener("load",g,!1)):(a.attachEvent("onload",g),b.attachEvent("onreadystatechange",function(){"complete"===b.readyState&&c.readyCallback()})),f=c.source||{},f.concatemoji?e(f.concatemoji):f.wpemoji&&f.twemoji&&(e(f.twemoji),e(f.wpemoji)))}(window,document,window._wpemojiSettings);
		</script>
		<style type="text/css">
img.wp-smiley,
img.emoji {
	display: inline !important;
	border: none !important;
	box-shadow: none !important;
	height: 1em !important;
	width: 1em !important;
	margin: 0 .07em !important;
	vertical-align: -0.1em !important;
	background: none !important;
	padding: 0 !important;
}
</style>
<link rel='stylesheet' id='contact-form-7-css'  href='http://dservices.grupointermedics.info/wp-content/plugins/contact-form-7/includes/css/styles.css?ver=4.9' type='text/css' media='all' />
<link rel='stylesheet' id='rs-plugin-settings-css'  href='http://dservices.grupointermedics.info/wp-content/plugins/revslider/public/assets/css/settings.css?ver=5.4.5.1' type='text/css' media='all' />
<style id='rs-plugin-settings-inline-css' type='text/css'>
#rs-demo-id {}
</style>
<link rel='stylesheet' id='avada-stylesheet-css'  href='http://dservices.grupointermedics.info/wp-content/themes/Avada/assets/css/style.min.css?ver=5.2.1' type='text/css' media='all' />
<!--[if lte IE 9]>
<link rel='stylesheet' id='avada-IE-fontawesome-css'  href='http://dservices.grupointermedics.info/wp-content/themes/Avada/includes/lib/assets/fonts/fontawesome/font-awesome.css?ver=5.2.1' type='text/css' media='all' />
<![endif]-->
<!--[if IE]>
<link rel='stylesheet' id='avada-IE-css'  href='http://dservices.grupointermedics.info/wp-content/themes/Avada/assets/css/ie.css?ver=5.2.1' type='text/css' media='all' />
<![endif]-->
<link rel='stylesheet' id='fusion-dynamic-css-css'  href='http://dservices.grupointermedics.info/wp-content/uploads/fusion-styles/fusion-5.css?timestamp=1508970442&#038;ver=4.8.3' type='text/css' media='all' />
<link rel='stylesheet' id='sabai-css'  href='http://dservices.grupointermedics.info/wp-content/plugins/sabai/assets/css/main.min.css?ver=1.3.25' type='text/css' media='all' />
<link rel='stylesheet' id='sabai-font-awesome-css'  href='http://dservices.grupointermedics.info/wp-content/plugins/sabai/assets/css/font-awesome.min.css?ver=1.3.25' type='text/css' media='all' />
<link rel='stylesheet' id='sabai-googlemaps-css'  href='http://dservices.grupointermedics.info/wp-content/plugins/sabai-googlemaps/assets/css/main.min.css?ver=1.3.25' type='text/css' media='all' />
<link rel='stylesheet' id='sabai-directory-css'  href='http://dservices.grupointermedics.info/wp-content/plugins/sabai-directory/assets/css/main.min.css?ver=1.3.25' type='text/css' media='all' />
<script type='text/javascript' src='http://dservices.grupointermedics.info/wp-includes/js/jquery/jquery.js?ver=1.12.4'></script>
<script type='text/javascript' src='http://dservices.grupointermedics.info/wp-includes/js/jquery/jquery-migrate.min.js?ver=1.4.1'></script>
<script type='text/javascript' src='http://dservices.grupointermedics.info/wp-content/plugins/revslider/public/assets/js/jquery.themepunch.tools.min.js?ver=5.4.5.1'></script>
<script type='text/javascript' src='http://dservices.grupointermedics.info/wp-content/plugins/revslider/public/assets/js/jquery.themepunch.revolution.min.js?ver=5.4.5.1'></script>
<link rel='https://api.w.org/' href='http://dservices.grupointermedics.info/wp-json/' />
<link rel="EditURI" type="application/rsd+xml" title="RSD" href="http://dservices.grupointermedics.info/xmlrpc.php?rsd" />
<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="http://dservices.grupointermedics.info/wp-includes/wlwmanifest.xml" /> 
<meta name="generator" content="WordPress 4.8.3" />
<link rel='shortlink' href='http://dservices.grupointermedics.info/' />
<link rel="alternate" type="application/json+oembed" href="http://dservices.grupointermedics.info/wp-json/oembed/1.0/embed?url=http%3A%2F%2Fdservices.grupointermedics.info%2F" />
<link rel="alternate" type="text/xml+oembed" href="http://dservices.grupointermedics.info/wp-json/oembed/1.0/embed?url=http%3A%2F%2Fdservices.grupointermedics.info%2F&#038;format=xml" />
<script type='text/javascript'>
							SG_POPUPS_QUEUE = [];
							SG_POPUP_DATA = [];
							SG_APP_POPUP_URL = 'http://dservices.grupointermedics.info/wp-content/plugins/popup-builder';
							SG_POPUP_VERSION='2.643_1;';
							
							function sgAddEvent(element, eventName, fn) {
								if (element.addEventListener)
									element.addEventListener(eventName, fn, false);
								else if (element.attachEvent)
									element.attachEvent('on' + eventName, fn);
							}
						</script>		<style type="text/css">.recentcomments a{display:inline !important;padding:0 !important;margin:0 !important;}</style>
		<meta name="generator" content="Powered by Slider Revolution 5.4.5.1 - responsive, Mobile-Friendly Slider Plugin for WordPress with comfortable drag and drop interface." />
<script type="text/javascript">function setREVStartSize(e){
				try{ var i=jQuery(window).width(),t=9999,r=0,n=0,l=0,f=0,s=0,h=0;					
					if(e.responsiveLevels&&(jQuery.each(e.responsiveLevels,function(e,f){f>i&&(t=r=f,l=e),i>f&&f>r&&(r=f,n=e)}),t>r&&(l=n)),f=e.gridheight[l]||e.gridheight[0]||e.gridheight,s=e.gridwidth[l]||e.gridwidth[0]||e.gridwidth,h=i/s,h=h>1?1:h,f=Math.round(h*f),"fullscreen"==e.sliderLayout){var u=(e.c.width(),jQuery(window).height());if(void 0!=e.fullScreenOffsetContainer){var c=e.fullScreenOffsetContainer.split(",");if (c) jQuery.each(c,function(e,i){u=jQuery(i).length>0?u-jQuery(i).outerHeight(!0):u}),e.fullScreenOffset.split("%").length>1&&void 0!=e.fullScreenOffset&&e.fullScreenOffset.length>0?u-=jQuery(window).height()*parseInt(e.fullScreenOffset,0)/100:void 0!=e.fullScreenOffset&&e.fullScreenOffset.length>0&&(u-=parseInt(e.fullScreenOffset,0))}f=u}else void 0!=e.minHeight&&f<e.minHeight&&(f=e.minHeight);e.c.closest(".rev_slider_wrapper").css({height:f})					
				}catch(d){console.log("Failure at Presize of Slider:"+d)}
			};</script>

		
	<script type="text/javascript">
		var doc = document.documentElement;
		doc.setAttribute('data-useragent', navigator.userAgent);
	</script>
</head>



<body class="home page-template page-template-100-width page-template-100-width-php page page-id-5 fusion-image-hovers fusion-body ltr no-tablet-sticky-header no-mobile-sticky-header mobile-logo-pos-left layout-wide-mode fusion-top-header menu-text-align-center mobile-menu-design-modern fusion-show-pagination-text">
				<div id="wrapper" class="">
		<div id="home" style="position:relative;top:-1px;"></div>
				
		
			<header class="fusion-header-wrapper">
				<div class="fusion-header-v1 fusion-logo-left fusion-sticky-menu- fusion-sticky-logo-1 fusion-mobile-logo-1 fusion-mobile-menu-design-modern ">
					<div class="fusion-header-sticky-height"></div>
<div class="fusion-header">
	<div class="fusion-row">
		<div class="fusion-logo" data-margin-top="31px" data-margin-bottom="31px" data-margin-left="0px" data-margin-right="0px">
				<a class="fusion-logo-link" href="http://dservices.grupointermedics.info/">
						<img src="http://dservices.grupointermedics.info/wp-content/uploads/2017/11/SmallLogoBlanco-2.png" width="300" height="181" alt="Avada Health Logo" class="fusion-logo-1x fusion-standard-logo" />

							<img src="http://dservices.grupointermedics.info/wp-content/uploads/2017/11/SmallLogoBlanco-2.png" width="300" height="181" alt="Avada Health Retina Logo" class="fusion-standard-logo fusion-logo-2x" />
			
			<!-- mobile logo -->
											<img src="http://dservices.grupointermedics.info/wp-content/uploads/2017/11/SmallLogoBlanco-2.png" width="300" height="181" alt="Avada Health Mobile Logo" class="fusion-logo-1x fusion-mobile-logo-1x" />

									<img src="http://dservices.grupointermedics.info/wp-content/uploads/2017/11/SmallLogoBlanco-2.png" width="300" height="181" alt="Avada Health Mobile Retina Logo" class="fusion-logo-2x fusion-mobile-logo-2x" />
							
			<!-- sticky header logo -->
											<img src="http://dservices.grupointermedics.info/wp-content/uploads/2017/11/SmallLogoBlanco-2.png" width="300" height="181" alt="Avada Health Sticky Logo" class="fusion-logo-1x fusion-sticky-logo-1x" />

									<img src="http://dservices.grupointermedics.info/wp-content/uploads/2017/11/SmallLogoBlanco-2.png" width="300" height="181" alt="Avada Health Sticky Logo Retina" class="fusion-logo-2x fusion-sticky-logo-2x" />
									</a>
		</div>		<nav class="fusion-main-menu" aria-label="Main Menu"><ul role="menubar" id="menu-health-main-menu" class="fusion-menu"><li role="menuitem"  id="menu-item-19"  class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-5 current_page_item menu-item-19"  ><a  href="http://dservices.grupointermedics.info/"><span class="menu-text">HOME</span></a></li><li role="menuitem"  id="menu-item-18"  class="menu-item menu-item-type-post_type menu-item-object-page menu-item-18"  ><a  href="http://dservices.grupointermedics.info/about/"><span class="menu-text">ABOUT</span></a></li><li role="menuitem"  id="menu-item-17"  class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-17 fusion-dropdown-menu"  ><a  href="http://dservices.grupointermedics.info/departments/"><span class="menu-text">DEPARTMENTS</span></a><ul role="menu" class="sub-menu"><li role="menuitem"  id="menu-item-739"  class="menu-item menu-item-type-post_type menu-item-object-avada_portfolio menu-item-739 fusion-dropdown-submenu"  ><a  href="http://dservices.grupointermedics.info/portfolio-items/general-practice/"><span>General Practice</span></a></li><li role="menuitem"  id="menu-item-740"  class="menu-item menu-item-type-post_type menu-item-object-avada_portfolio menu-item-740 fusion-dropdown-submenu"  ><a  href="http://dservices.grupointermedics.info/portfolio-items/cardiology/"><span>Cardiology</span></a></li><li role="menuitem"  id="menu-item-741"  class="menu-item menu-item-type-post_type menu-item-object-avada_portfolio menu-item-741 fusion-dropdown-submenu"  ><a  href="http://dservices.grupointermedics.info/portfolio-items/pediactrics/"><span>Pediatrics</span></a></li><li role="menuitem"  id="menu-item-742"  class="menu-item menu-item-type-post_type menu-item-object-avada_portfolio menu-item-742 fusion-dropdown-submenu"  ><a  href="http://dservices.grupointermedics.info/portfolio-items/diabetes-care/"><span>Diabetes Care</span></a></li><li role="menuitem"  id="menu-item-743"  class="menu-item menu-item-type-post_type menu-item-object-avada_portfolio menu-item-743 fusion-dropdown-submenu"  ><a  href="http://dservices.grupointermedics.info/portfolio-items/pre-natal-care/"><span>Pre-natal Care</span></a></li><li role="menuitem"  id="menu-item-744"  class="menu-item menu-item-type-post_type menu-item-object-avada_portfolio menu-item-744 fusion-dropdown-submenu"  ><a  href="http://dservices.grupointermedics.info/portfolio-items/ultrasound-echocardiogram/"><span>Ultrasound Echocardiogram</span></a></li></ul></li><li role="menuitem"  id="menu-item-16"  class="menu-item menu-item-type-post_type menu-item-object-page menu-item-16"  ><a  href="http://dservices.grupointermedics.info/articles/"><span class="menu-text">ARTICLES</span></a></li><li role="menuitem"  id="menu-item-15"  class="menu-item menu-item-type-post_type menu-item-object-page menu-item-15 fusion-menu-item-button"  ><a  href="http://dservices.grupointermedics.info/make-appointment/"><span class="menu-text fusion-button button-default button-large">MAKE APPOINTMENT</span></a></li></ul></nav>		<div class="fusion-mobile-menu-icons">
							<a href="#" class="fusion-icon fusion-icon-bars" aria-label="Toggle mobile menu"></a>
		
		
			</div>

<nav class="fusion-mobile-nav-holder fusion-mobile-menu-text-align-left"></nav>

	</div>
</div>
				</div>
				<div class="fusion-clearfix"></div>
			</header>
					
		<div id="sliders-container">
					</div>
						
</div>	


		
						<main id="main" role="main" class="clearfix width-100" style="padding-left:30px;padding-right:30px">
			<div class="fusion-row" style="max-width:100%;">
<section id="content" class="full-width">
			<div id="post-5" class="post-5 page type-page status-publish hentry">
			
			<span class="entry-title rich-snippet-hidden">
			Home		</span>
	
			<span class="vcard rich-snippet-hidden">
			<span class="fn">
				<a href="http://dservices.grupointermedics.info/author/grupointermedics/" title="Entradas de grupointermedics" rel="author">D'Services</a>			</span>
		</span>
	
			<span class="updated rich-snippet-hidden">
			</span>
	
			<div class="post-content">
				<div class=" fusion-bg-parallax"  data-bg-align="center center" data-direction="up" data-mute="false" data-opacity="100" data-velocity="-0.4" data-mobile-enabled="false" data-break_parents="0" data-bg-image="http://dservices.grupointermedics.info/wp-content/uploads/2015/12/make-an-appointment.jpg" data-bg-repeat="false" data-bg-height="" data-bg-width=""></div>
				<div  class="fusion-fullwidth fullwidth-box fusion-parallax-up nonhundred-percent-fullwidth"  style='background-color: rgba(255,255,255,0);background-image: url("http://dservices.grupointermedics.info/wp-content/uploads/2015/12/make-an-appointment.jpg");background-position: center center;background-repeat: no-repeat;padding-top:14%;padding-right:5%;padding-bottom:14%;padding-left:5%;border-top-width:0px;border-bottom-width:0px;border-color:#eae9e9;border-top-style:solid;border-bottom-style:solid;-webkit-background-size:cover;-moz-background-size:cover;-o-background-size:cover;background-size:cover;background-attachment:up;'>
					<div class="fusion-builder-row fusion-row ">
						<div  class="fusion-layout-column fusion_builder_column fusion_builder_column_2_3  fusion-two-third fusion-column-first 2_3"  style='margin-top:0px;margin-bottom:30px;width:90%; margin-right: 4%;'>
							<div class="fusion-column-wrapper" style="background-position:left top;background-repeat:no-repeat;-webkit-background-size:cover;-moz-background-size:cover;-o-background-size:cover;background-size:cover;"  data-bg-url="">
								<p style="font-size: 26px; line-height: 26px;">
									<span style="color: #ffffff;">
										@yield('content')
									</span>
								</p>
							<div class="fusion-sep-clear"></div>
							<div class="fusion-separator fusion-full-width-sep sep-none" style="margin-left: auto;margin-right: auto;margin-top:15px;margin-bottom:10px;"></div>
							
							</div>
							<div class="fusion-clearfix">

							</div>
						</div>
					</div>
				</div>				
			</div>
		</div>
	</div>
</section>
</div>
</main>

								<a class="fusion-one-page-text-link fusion-page-load-link"></a>

						<script type="text/javascript">
				jQuery( document ).ready( function() {
					var ajaxurl = 'http://dservices.grupointermedics.info/wp-admin/admin-ajax.php';
					if ( 0 < jQuery( '.fusion-login-nonce' ).length ) {
						jQuery.get( ajaxurl, { 'action': 'fusion_login_nonce' }, function( response ) {
							jQuery( '.fusion-login-nonce' ).html( response );
						});
					}
				});
				</script>
				<script type='text/javascript'>
/* <![CDATA[ */
var wpcf7 = {"apiSettings":{"root":"http:\/\/dservices.grupointermedics.info\/wp-json\/contact-form-7\/v1","namespace":"contact-form-7\/v1"},"recaptcha":{"messages":{"empty":"Por favor, prueba que no eres un robot."}}};
/* ]]> */
</script>
<script type='text/javascript' src='http://dservices.grupointermedics.info/wp-content/plugins/contact-form-7/includes/js/scripts.js?ver=4.9'></script>
<!--[if IE 9]>
<script type='text/javascript' src='http://dservices.grupointermedics.info/wp-content/themes/Avada/includes/lib/assets/min/js/general/fusion-ie9.js?ver=1'></script>
<![endif]-->
<script type='text/javascript' src='http://dservices.grupointermedics.info/wp-includes/js/comment-reply.min.js?ver=4.8.3'></script>
<script type='text/javascript' src='http://dservices.grupointermedics.info/wp-content/uploads/fusion-scripts/faa4e3a37bf758eb47e7985ad8279f52.js?timestamp=1509570947'></script>
<script type='text/javascript' src='http://dservices.grupointermedics.info/wp-includes/js/wp-embed.min.js?ver=4.8.3'></script>


<!-- Javascript Libs -->


<script src="/js/app.js"></script>
<script src="/js/dservices.js"></script>

<script>
    @if(Session::has('alerts'))
        let alerts = {!! json_encode(Session::get('alerts')) !!};
        helpers.displayAlerts(alerts, toastr);
    @endif

    @if(Session::has('message'))

    // TODO: change Controllers to use AlertsMessages trait... then remove this
    var alertType = {!! json_encode(Session::get('alert-type', 'info')) !!};
    var alertMessage = {!! json_encode(Session::get('message')) !!};
    var alerter = toastr[alertType];

    if (alerter) {
        alerter(alertMessage);
    } else {
        toastr.error("toastr alert-type " + alertType + " is unknown");
    }

    @endif
</script>

</body>
</html>