{{-- 
				https://stackoverflow.com/questions/46677058/what-is-required-to-use-amp-access-against-an-existing-rest-login-system
			 --}}

<!-- Start Navbar -->
<header class="ampstart-headerbar fixed flex justify-start items-center top-0 left-0 right-0 pl2 pr4">
	<div role="button" on="tap:header-sidebar.toggle" tabindex="0" class="ampstart-navbar-trigger md-hide lg-hide pr2">☰</div>
	<amp-img src="../img/components/sidebar-example-logo.png" width="110" height="33" layout="fixed" class="my0 mx-auto" alt="Example logo image"></amp-img>
	<nav class="ampstart-headerbar-nav ampstart-nav xs-hide sm-hide">
		<!--
		<ul class="list-reset center m0 p0 flex justify-center nowrap">
			<li class="ampstart-nav-item ampstart-nav-dropdown relative">
				
				<amp-accordion layout="container" disable-session-states="" class="ampstart-dropdown absolute top-0 left-0 right-0 bottom-0">
					<section>
						<header>Fashion</header>
						<ul class="ampstart-dropdown-items list-reset m0 p0">
							<li class="ampstart-dropdown-item">
								<a href="#" class="text-decoration-none">Styling Tips</a>
							</li>
							<li class="ampstart-dropdown-item">
								<a href="#" class="text-decoration-none">Designers</a>
							</li>
						</ul>
					</section>
				</amp-accordion>
				
			</li>
			<li class="ampstart-nav-item ">
				<a href="#" class="text-decoration-none block">Travel</a>
			</li>
			<li class="ampstart-nav-item ampstart-nav-dropdown relative">
				
				<amp-accordion layout="container" disable-session-states="" class="ampstart-dropdown absolute top-0 left-0 right-0 bottom-0">
					<section>
						<header>Food</header>
						<ul class="ampstart-dropdown-items list-reset m0 p0">
							<li class="ampstart-dropdown-item"><a href="#" class="text-decoration-none">Recipes</a></li>
							<li class="ampstart-dropdown-item"><a href="#" class="text-decoration-none">Hosting Tips</a></li>
						</ul>
					</section>
				</amp-accordion>
				
			</li>
			<li class="ampstart-nav-item ">
				<a href="#" class="text-decoration-none block">Beauty</a>
			</li>
			<li class="ampstart-nav-item">
				<a href="#" class="text-decoration-none block">Shop</a>
			</li>
		</ul>
		-->
    	<ul class="list-reset right m0 p0 flex justify-center nowrap">

    		<li class="ampstart-nav-item ampstart-nav-dropdown relative">
				
				<amp-accordion layout="container" disable-session-states="" class="ampstart-dropdown absolute top-0 left-0 right-0 bottom-0">
					<section>
						<header><span class="lang-sm lang-lbl-full" lang="{{ App::getLocale() }}"></span></header>
						<ul class="ampstart-dropdown-items list-reset m0 p0">
							@foreach (array_keys(config('laravellocalization.supportedLocales')) as $lang)
            					@if ($lang != App::getLocale())
									<li class="ampstart-dropdown-item"> 
										<a href="{{ $row->urlLang($lang) }}" class="text-decoration-none"><span class="lang-sm lang-lbl-full" lang="{{ $lang }}"></span></a>
									</li>
								@endif
							@endforeach
						</ul>
					</section>
				</amp-accordion>
				
			</li>


    		<li class="ampstart-nav-item " amp-access="NOT loggedIn">
				<a  on="tap:amp-access.login-sign-in"  class="inline-block">
					<svg width="20" height="20" viewBox="0 -300 1792 1892" xmlns="http://www.w3.org/2000/svg">
						<title>Sign in</title>
						<path d="M1312 896q0 26-19 45l-544 544q-19 19-45 19t-45-19-19-45v-288h-448q-26 0-45-19t-19-45v-384q0-26 19-45t45-19h448v-288q0-26 19-45t45-19 45 19l544 544q19 19 19 45zm352-352v704q0 119-84.5 203.5t-203.5 84.5h-320q-13 0-22.5-9.5t-9.5-22.5q0-4-1-20t-.5-26.5 3-23.5 10-19.5 20.5-6.5h320q66 0 113-47t47-113v-704q0-66-47-113t-113-47h-312l-11.5-1-11.5-3-8-5.5-7-9-2-13.5q0-4-1-20t-.5-26.5 3-23.5 10-19.5 20.5-6.5h320q119 0 203.5 84.5t84.5 203.5z"/>
					</svg>
					Sign in
				</a>
			</li>
			<li class="ampstart-nav-item " amp-access="NOT loggedIn">
				<a on="tap:amp-access.login-sign-up"  class="inline-block">
					<svg width="20" height="20" viewBox="0 -300 1792 1892" xmlns="http://www.w3.org/2000/svg">
						<title>Sign up</title>
						<path d="M888 1184l116-116-152-152-116 116v56h96v96h56zm440-720q-16-16-33 1l-350 350q-17 17-1 33t33-1l350-350q17-17 1-33zm80 594v190q0 119-84.5 203.5t-203.5 84.5h-832q-119 0-203.5-84.5t-84.5-203.5v-832q0-119 84.5-203.5t203.5-84.5h832q63 0 117 25 15 7 18 23 3 17-9 29l-49 49q-14 14-32 8-23-6-45-6h-832q-66 0-113 47t-47 113v832q0 66 47 113t113 47h832q66 0 113-47t47-113v-126q0-13 9-22l64-64q15-15 35-7t20 29zm-96-738l288 288-672 672h-288v-288zm444 132l-92 92-288-288 92-92q28-28 68-28t68 28l152 152q28 28 28 68t-28 68z"/>
					</svg>
					Sign up
				</a>
			</li>
			
			<li class="ampstart-nav-item " amp-access="loggedIn">
				<template amp-access-template type="amp-mustache">
    			<a class="inline-block">Hello @{{user}} </a>
  				</template>
  			</li>
  			

  			<li class="ampstart-nav-item " amp-access="loggedIn">	
				<a amp-access-hide tabindex="0" on="tap:amp-access.login-sign-out" class="button-primary comment-button" onclick="event.preventDefault(); document.getElementById('frm-logout').submit();">
					<form id="frm-logout" action="{{ route('logout') }}" method="POST" style="display: none;">
    					{{ csrf_field() }}
					</form>
					Log Out
					<svg width="20" height="20" viewBox="0 -300 1792 1892" xmlns="http://www.w3.org/2000/svg">
						<title>Log Out</title>
						<path d="M704 1440q0 4 1 20t.5 26.5-3 23.5-10 19.5-20.5 6.5h-320q-119 0-203.5-84.5t-84.5-203.5v-704q0-119 84.5-203.5t203.5-84.5h320q13 0 22.5 9.5t9.5 22.5q0 4 1 20t.5 26.5-3 23.5-10 19.5-20.5 6.5h-320q-66 0-113 47t-47 113v704q0 66 47 113t113 47h312l11.5 1 11.5 3 8 5.5 7 9 2 13.5zm928-544q0 26-19 45l-544 544q-19 19-45 19t-45-19-19-45v-288h-448q-26 0-45-19t-19-45v-384q0-26 19-45t45-19h448v-288q0-26 19-45t45-19 45 19l544 544q19 19 19 45z"/>
					</svg>
					
				</a>
			</li>
    	</ul>
	</nav>
</header>
<!-- Start Sidebar -->
<amp-sidebar id="header-sidebar" class="ampstart-sidebar px3 md-hide lg-hide" layout="nodisplay">
	<div class="flex justify-start items-center ampstart-sidebar-header">
		<div role="button" on="tap:header-sidebar.toggle" tabindex="0" class="ampstart-navbar-trigger items-start">✕</div>
	</div>
	<nav class="ampstart-sidebar-nav ampstart-nav">
		<ul class="list-reset m0 p0 ampstart-label">
			<li class="ampstart-nav-item ampstart-nav-dropdown relative">
				<!-- Start Dropdown-inline -->
				<amp-accordion layout="container" disable-session-states="" class="ampstart-dropdown">
					<section>
						<header>Fashion</header>
						<ul class="ampstart-dropdown-items list-reset m0 p0">
							<li class="ampstart-dropdown-item"><a href="#" class="text-decoration-none">Styling Tips</a></li>
							<li class="ampstart-dropdown-item"><a href="#" class="text-decoration-none">Designers</a></li>
						</ul>
					</section>
				</amp-accordion>
				<!-- End Dropdown-inline -->
			</li>
			<li class="ampstart-nav-item"><a href="#">Travel</a></li>
			<li class="ampstart-nav-item ampstart-nav-dropdown relative">
				<!-- Start Dropdown-inline -->
				<amp-accordion layout="container" disable-session-states="" class="ampstart-dropdown">
					<section>
						<header>Food</header>
						<ul class="ampstart-dropdown-items list-reset m0 p0">
							<li class="ampstart-dropdown-item"><a href="#" class="text-decoration-none">Recipes</a></li>
							<li class="ampstart-dropdown-item"><a href="#" class="text-decoration-none">Hosting Tips</a></li>
						</ul>
					</section>
				</amp-accordion>
				<!-- End Dropdown-inline -->
			</li>
			<li class="ampstart-nav-item"><a href="#">Beauty</a></li>
			<li class="ampstart-nav-item"><a href="#">Shop</a></li>
		</ul>
	</nav>
	<ul class="ampstart-social-follow list-reset flex justify-around items-center flex-wrap m0 mb4">
		<li class="mr2">
			<a href="#" class="inline-block">
				<svg xmlns="http://www.w3.org/2000/svg" width="24" height="22.2" viewbox="0 0 53 49">
					<title>Twitter</title>
					<path d="M45 6.9c-1.6 1-3.3 1.6-5.2 2-1.5-1.6-3.6-2.6-5.9-2.6-4.5 0-8.2 3.7-8.2 8.3 0 .6.1 1.3.2 1.9-6.8-.4-12.8-3.7-16.8-8.7C8.4 9 8 10.5 8 12c0 2.8 1.4 5.4 3.6 6.9-1.3-.1-2.6-.5-3.7-1.1v.1c0 4 2.8 7.4 6.6 8.1-.7.2-1.5.3-2.2.3-.5 0-1 0-1.5-.1 1 3.3 4 5.7 7.6 5.7-2.8 2.2-6.3 3.6-10.2 3.6-.6 0-1.3-.1-1.9-.1 3.6 2.3 7.9 3.7 12.5 3.7 15.1 0 23.3-12.6 23.3-23.6 0-.3 0-.7-.1-1 1.6-1.2 3-2.7 4.1-4.3-1.4.6-3 1.1-4.7 1.3 1.7-1 3-2.7 3.6-4.6" class="ampstart-icon ampstart-icon-twitter"></path>
				</svg>
			</a>
		</li>
		<li class="mr2">
			<a href="#" class="inline-block">
				<svg xmlns="http://www.w3.org/2000/svg" width="24" height="23.6" viewbox="0 0 56 55">
					<title>Facebook</title>
					<path d="M47.5 43c0 1.2-.9 2.1-2.1 2.1h-10V30h5.1l.8-5.9h-5.9v-3.7c0-1.7.5-2.9 3-2.9h3.1v-5.3c-.6 0-2.4-.2-4.6-.2-4.5 0-7.5 2.7-7.5 7.8v4.3h-5.1V30h5.1v15.1H10.7c-1.2 0-2.2-.9-2.2-2.1V8.3c0-1.2 1-2.2 2.2-2.2h34.7c1.2 0 2.1 1 2.1 2.2V43" class="ampstart-icon ampstart-icon-fb"></path>
				</svg>
			</a>
		</li>
		<li class="mr2">
			<a href="#" class="inline-block">
				<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 54 54">
					<title>instagram</title>
					<path d="M27.2 6.1c-5.1 0-5.8 0-7.8.1s-3.4.4-4.6.9c-1.2.5-2.3 1.1-3.3 2.2-1.1 1-1.7 2.1-2.2 3.3-.5 1.2-.8 2.6-.9 4.6-.1 2-.1 2.7-.1 7.8s0 5.8.1 7.8.4 3.4.9 4.6c.5 1.2 1.1 2.3 2.2 3.3 1 1.1 2.1 1.7 3.3 2.2 1.2.5 2.6.8 4.6.9 2 .1 2.7.1 7.8.1s5.8 0 7.8-.1 3.4-.4 4.6-.9c1.2-.5 2.3-1.1 3.3-2.2 1.1-1 1.7-2.1 2.2-3.3.5-1.2.8-2.6.9-4.6.1-2 .1-2.7.1-7.8s0-5.8-.1-7.8-.4-3.4-.9-4.6c-.5-1.2-1.1-2.3-2.2-3.3-1-1.1-2.1-1.7-3.3-2.2-1.2-.5-2.6-.8-4.6-.9-2-.1-2.7-.1-7.8-.1zm0 3.4c5 0 5.6 0 7.6.1 1.9.1 2.9.4 3.5.7.9.3 1.6.7 2.2 1.4.7.6 1.1 1.3 1.4 2.2.3.6.6 1.6.7 3.5.1 2 .1 2.6.1 7.6s0 5.6-.1 7.6c-.1 1.9-.4 2.9-.7 3.5-.3.9-.7 1.6-1.4 2.2-.7.7-1.3 1.1-2.2 1.4-.6.3-1.7.6-3.5.7-2 .1-2.6.1-7.6.1-5.1 0-5.7 0-7.7-.1-1.8-.1-2.9-.4-3.5-.7-.9-.3-1.5-.7-2.2-1.4-.7-.7-1.1-1.3-1.4-2.2-.3-.6-.6-1.7-.7-3.5 0-2-.1-2.6-.1-7.6 0-5.1.1-5.7.1-7.7.1-1.8.4-2.8.7-3.5.3-.9.7-1.5 1.4-2.2.7-.6 1.3-1.1 2.2-1.4.6-.3 1.6-.6 3.5-.7h7.7zm0 5.8c-5.4 0-9.7 4.3-9.7 9.7 0 5.4 4.3 9.7 9.7 9.7 5.4 0 9.7-4.3 9.7-9.7 0-5.4-4.3-9.7-9.7-9.7zm0 16c-3.5 0-6.3-2.8-6.3-6.3s2.8-6.3 6.3-6.3 6.3 2.8 6.3 6.3-2.8 6.3-6.3 6.3zm12.4-16.4c0 1.3-1.1 2.3-2.3 2.3-1.3 0-2.3-1-2.3-2.3 0-1.2 1-2.3 2.3-2.3 1.2 0 2.3 1.1 2.3 2.3z" class="ampstart-icon ampstart-icon-instagram"></path>
				</svg>
			</a>
		</li>
		<li class="mr2">
			<a href="#" class="inline-block">
				<svg xmlns="http://www.w3.org/2000/svg" width="24" height="28.5" viewbox="0 0 43 51">
					<title>pinterest</title>
					<path d="M-13.6-5c0-1.6.2-3 .8-4.4.5-1.4 1.2-2.6 2.2-3.6.9-1 2-1.9 3.2-2.6 1.2-.8 2.5-1.3 3.9-1.7 1.5-.4 2.9-.5 4.4-.5 2.2 0 4.3.4 6.2 1.4 1.9.9 3.5 2.3 4.7 4.1 1.2 1.9 1.8 3.9 1.8 6.2 0 1.4-.1 2.7-.4 4C13-.8 12.5.5 12 1.7c-.6 1.2-1.3 2.3-2.2 3.2C9 5.8 8 6.6 6.7 7.1c-1.2.6-2.5.9-4 .9-1 0-1.9-.3-2.9-.7-.9-.5-1.6-1.1-2-1.9-.1.5-.3 1.4-.6 2.4-.3 1.1-.4 1.7-.5 2-.1.3-.2.9-.4 1.6-.3.7-.4 1.2-.6 1.5-.1.3-.4.7-.7 1.3-.3.6-.6 1.2-1 1.7-.3.5-.7 1.1-1.3 1.8l-.3.1-.2-.2c-.2-2.2-.3-3.6-.3-4 0-1.3.2-2.8.5-4.4.3-1.7.8-3.7 1.4-6.2.6-2.5 1-3.9 1.1-4.4-.5-.9-.7-2.1-.7-3.6 0-1.2.4-2.3 1.1-3.3.8-1.1 1.7-1.6 2.8-1.6.9 0 1.6.3 2.1.9.4.6.7 1.3.7 2.2 0 .9-.3 2.3-1 4.1C-.7-.9-1 .4-1 1.3c0 .9.3 1.6 1 2.2.6.6 1.4.9 2.3.9.8 0 1.5-.2 2.2-.5.6-.4 1.2-.9 1.6-1.5.5-.6.9-1.3 1.2-2 .4-.8.6-1.5.8-2.4.2-.8.4-1.6.5-2.4.1-.7.1-1.4.1-2.1 0-2.5-.8-4.4-2.3-5.8-1.6-1.4-3.6-2.1-6.1-2.1-2.8 0-5.2 1-7.1 2.8-1.9 1.9-2.9 4.2-2.9 7.1 0 .6.1 1.2.3 1.8.2.6.4 1.1.6 1.4.2.3.4.7.5 1 .2.3.3.5.3.6 0 .4-.1.9-.3 1.6-.2.6-.5 1-.8 1 0 0-.1-.1-.4-.1-.7-.2-1.3-.6-1.9-1.2-.5-.6-1-1.3-1.3-2-.3-.8-.5-1.6-.7-2.4-.2-.7-.2-1.5-.2-2.2z" transform="translate(21.734 23.748)" class="ampstart-icon ampstart-icon-pinterest"></path>
				</svg>
			</a>
		</li>
		<li class="mr2">
			<a href="#" class="inline-block">
				<svg xmlns="http://www.w3.org/2000/svg" width="24" height="18.4" viewbox="0 0 56 43">
					<title>email</title>
					<path d="M10.5 6.4C9.1 6.4 8 7.5 8 8.9v21.3c0 1.3 1.1 2.5 2.5 2.5h34.9c1.4 0 2.5-1.2 2.5-2.5V8.9c0-1.4-1.1-2.5-2.5-2.5H10.5zm2.1 2.5h30.7L27.9 22.3 12.6 8.9zm-2.1 1.4l16.6 14.6c.5.4 1.2.4 1.7 0l16.6-14.6v19.9H10.5V10.3z" class="ampstart-icon ampstart-icon-email"></path>
				</svg>
			</a>
		</li>
	</ul>
	<ul class="ampstart-sidebar-faq list-reset m0">
		<li class="ampstart-faq-item">
			<a href="#" class="text-decoration-none">About</a>
		</li>
		<li class="ampstart-faq-item">
			<a href="#" class="text-decoration-none">Contact</a>
		</li>
	</ul>
</amp-sidebar>
<!-- End Sidebar -->
<!-- End Navbar -->
