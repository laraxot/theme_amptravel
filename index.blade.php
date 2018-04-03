<!doctype html>
<html ⚡="">
	<head>
		<meta charset="utf-8">
		<title>Travel Template</title>
		<link rel="canonical" href="https://www.ampstart.com/templates/travel/travel.amp">
		<meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1">
		<script async="" src="https://cdn.ampproject.org/v0.js"></script>
		<style amp-boilerplate="">body{-webkit-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-moz-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-ms-animation:-amp-start 8s steps(1,end) 0s 1 normal both;animation:-amp-start 8s steps(1,end) 0s 1 normal both}@-webkit-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-moz-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-ms-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-o-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}</style>
		<noscript>
			<style amp-boilerplate="">body{-webkit-animation:none;-moz-animation:none;-ms-animation:none;animation:none}</style>
		</noscript>
		<script custom-element="amp-list" src="https://cdn.ampproject.org/v0/amp-list-0.1.js" async=""></script>
		<script custom-element="amp-bind" src="https://cdn.ampproject.org/v0/amp-bind-0.1.js" async=""></script>
		<script custom-element="amp-sidebar" src="https://cdn.ampproject.org/v0/amp-sidebar-0.1.js" async></script>
		<script custom-element="amp-accordion" src="https://cdn.ampproject.org/v0/amp-accordion-0.1.js" async></script>
		<script custom-template="amp-mustache" src="https://cdn.ampproject.org/v0/amp-mustache-0.1.js" async=""></script>
		<script async custom-element="amp-form" src="https://cdn.ampproject.org/v0/amp-form-0.1.js"></script>
		<script async custom-element="amp-selector" src="https://cdn.ampproject.org/v0/amp-selector-0.1.js"></script>
		<script async custom-element="amp-access" src="https://cdn.ampproject.org/v0/amp-access-0.1.js"></script>
		<script async custom-element="amp-install-serviceworker" src="https://cdn.ampproject.org/v0/amp-install-serviceworker-0.1.js"></script>

		<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600,700" rel="stylesheet">
		@php
		Theme::add('pub_theme::css/travel.css');
		Theme::add('pub_theme::css/navbar1.css');
		Theme::add('pub_theme::css/dropdown-vars.css');
		Theme::add('pub_theme::css/dropdown.css');
		Theme::add('pub_theme::css/autocomplete.css');
		Theme::add('theme/bc/bootstrap-languages/languages.css');
		//Theme::add('pub_theme::css/autosuggest.css');
		@endphp
		{!! Theme::showStyles(false) !!}
	</head>
	<body>
		<amp-state id="ui_hero">
			<script type="application/json">true</script>
		</amp-state>
		<amp-state id="ui_reset">
			<script type="application/json">false</script>
		</amp-state>
		<amp-state id="ui_filterPane">
			<script type="application/json">false</script>
		</amp-state>
		<amp-state id="ui_sortPane">
			<script type="application/json">false</script>
		</amp-state>
		<amp-state id="fields_query">
			<script type="application/json">""</script>
		</amp-state>
		<amp-state id="fields_query_initial">
			<script type="application/json">""</script>
		</amp-state>
		<amp-state id="fields_query_live">
			<script type="application/json">""</script>
		</amp-state>
		<amp-state id="fields_query_edited">
			<script type="application/json">false</script>
		</amp-state>
		<amp-state id="query_query">
			<script type="application/json">""</script>
		</amp-state>
		<amp-state id="fields_departure">
			<script type="application/json">""</script>
		</amp-state>
		<amp-state id="fields_departure_initial">
			<script type="application/json">""</script>
		</amp-state>
		<amp-state id="fields_departure_edited">
			<script type="application/json">false</script>
		</amp-state>
		<amp-state id="query_departure">
			<script type="application/json">""</script>
		</amp-state>
		<amp-state id="fields_return">
			<script type="application/json">""</script>
		</amp-state>
		<amp-state id="fields_return_initial">
			<script type="application/json">""</script>
		</amp-state>
		<amp-state id="fields_return_edited">
			<script type="application/json">false</script>
		</amp-state>
		<amp-state id="query_return">
			<script type="application/json">""</script>
		</amp-state>
		<amp-state id="fields_type">
			<script type="application/json">[]</script>
		</amp-state>
		<amp-state id="fields_type_initial">
			<script type="application/json">[]</script>
		</amp-state>
		<amp-state id="fields_type_edited">
			<script type="application/json">false</script>
		</amp-state>
		<amp-state id="query_type">
			<script type="application/json">[]</script>
		</amp-state>
		<amp-state id="fields_city">
			<script type="application/json">[]</script>
		</amp-state>
		<amp-state id="fields_city_initial">
			<script type="application/json">[]</script>
		</amp-state>
		<amp-state id="fields_city_edited">
			<script type="application/json">false</script>
		</amp-state>
		<amp-state id="query_city">
			<script type="application/json">[]</script>
		</amp-state>
		<amp-state id="fields_sort">
			<script type="application/json">"popularity-desc"</script>
		</amp-state>
		<amp-state id="fields_sort_initial">
			<script type="application/json">"popularity-desc"</script>
		</amp-state>
		<amp-state id="fields_sort_edited">
			<script type="application/json">false</script>
		</amp-state>
		<amp-state id="query_sort">
			<script type="application/json">"popularity-desc"</script>
		</amp-state>
		<amp-state id="fields_maxPrice">
			<script type="application/json">801</script>
		</amp-state>
		<amp-state id="fields_maxPrice_initial">
			<script type="application/json">801</script>
		</amp-state>
		<amp-state id="fields_maxPrice_live">
			<script type="application/json">801</script>
		</amp-state>
		<amp-state id="fields_maxPrice_edited">
			<script type="application/json">false</script>
		</amp-state>
		<amp-state id="query_maxPrice">
			<script type="application/json">801</script>
		</amp-state>
		<amp-state id="autosuggest">
			<script type="application/json">
			{
			  "endpoint": "/autocomplete-api.php?query=",
			  "emptyAndInitialTemplateJson": [{
			    "query": "",
			    "results": []
			  }]
			}
			</script>
		</amp-state>
		
		<script id="amp-access" type="application/json">
			{
			  "authorization": "/authorization?rid=READER_ID&url=CANONICAL_URL&ref=DOCUMENT_REFERRER&_=RANDOM", 
			  "noPingback": "true",
			  "login": {
			    "sign-in": "/login?rid=READER_ID&url=CANONICAL_URL&resourceURL=CANONICAL_URL&referrerURL=DOCUMENT_REFERRER&returnURL=RETURN_URL",
			    "sign-up": "/register",
			    "sign-out": "/logout?readerID=READER_ID&returnURL=RETURN_URL"
			  },
			  "authorizationFallbackResponse": {
			    "error": true,
			    "loggedIn": false
			  }
			}
		</script>
		
		{{--
		<link rel="amphtml" href="https://ampbyexample.com/internationalization/alternate/index.amp.html" />
      	<link rel="alternate" href="https://ampbyexample.com/internationalization/alternate/index.mobile.html" />
      	<link rel="alternate" hreflang="en" href="https://ampbyexample.com/internationalization/alternate/" />
      	<link rel="alternate" hreflang="fr" href="https://ampbyexample.com/internationalization/alternate/fr/" />
      	<link rel="alternate" hreflang="ja" href="https://ampbyexample.com/internationalization/alternate/ja/" />
		--}}
		<section class="travel-main-wrapper overflow-hidden" role="main">
			@include('pub_theme::layouts.partials.navbar')
			@include('pub_theme::layouts.partials.hero')
			<div id="travel-landing-content" class="travel-landing-content relative">
				@include('pub_theme::layouts.partials.angles')
				@include('pub_theme::layouts.partials.discover')
				@include('pub_theme::layouts.partials.activities')
				<div class="travel-footer-wrapper">
					@include('pub_theme::layouts.partials.popular')
					@include('pub_theme::layouts.partials.featured')
					@include('pub_theme::layouts.partials.search')
					@include('pub_theme::layouts.partials.discovermobile')
					@include('pub_theme::layouts.partials.footer')
				</div>
			</div>
		</section>
	</body>
</html>