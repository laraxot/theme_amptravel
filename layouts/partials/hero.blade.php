<!-- Hero -->
<div class="travel-hero-bg absolute col-12">
	<amp-img class="travel-hero-bg-img absolute" src="https://unsplash.it/1200/1800?image=1004" height="80vmax" noloading=""></amp-img>
	<amp-img class="travel-hero-bg-img absolute" src="https://unsplash.it/1200/1800?image=1003" height="80vmax" noloading=""></amp-img>
	<amp-img class="travel-hero-bg-img absolute" src="https://unsplash.it/1200/1800?image=1002" height="80vmax" noloading=""></amp-img>
	<amp-img class="travel-hero-bg-img absolute" src="https://unsplash.it/1200/1800?image=1001" height="80vmax" noloading=""></amp-img>
</div>
<section class="travel-hero relative">
	<div class="travel-hero-content max-width-3 mx-auto absolute top-0 left-0 right-0 flex self-end items-center">
		<div class="travel-hero-content-inner relative px1 md-px2 flex-auto self-end">
			<header>
				{{--
				<h1 class="travel-hero-heading mb2 line-height-1">Adventures<br class="md-hide lg-hide"> made&nbsp;easy</h1>
				<h2 class="travel-hero-subheading line-height-2 bold xs-hide sm-hide">Find and book activities, tours, and experiences.</h2>
				--}}
				<h1 class="travel-hero-heading mb2 line-height-1 invert">{{ $row->title }} </h1>
				<h2 class="travel-hero-subheading line-height-2 bold xs-hide sm-hide">{{ $row->subtitle }}</h2>
			</header>
			@include('pub_theme::layouts.partials.hero.search_place') 
		</div>
	</div>
</section>
<!--/ Hero -->
{{--
https://raw.githubusercontent.com/encharm/Font-Awesome-SVG-PNG/master/black/svg/sign-out.svg
  --}}