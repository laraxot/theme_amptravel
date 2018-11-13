<!doctype html>
<html ⚡="">

<head>
  <meta charset="utf-8">
  <title>Travel Template</title>
  <link rel="canonical" href="https://www.ampstart.com/templates/travel/travel-results.amp">
  <meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1">

  <script async="" src="https://cdn.ampproject.org/v0.js"></script>



  <style amp-boilerplate="">body{-webkit-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-moz-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-ms-animation:-amp-start 8s steps(1,end) 0s 1 normal both;animation:-amp-start 8s steps(1,end) 0s 1 normal both}@-webkit-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-moz-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-ms-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-o-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}</style><noscript><style amp-boilerplate="">body{-webkit-animation:none;-moz-animation:none;-ms-animation:none;animation:none}</style></noscript>


<script custom-element="amp-selector" src="https://cdn.ampproject.org/v0/amp-selector-0.1.js" async=""></script>
<script custom-element="amp-bind" src="https://cdn.ampproject.org/v0/amp-bind-0.1.js" async=""></script>
<script custom-element="amp-list" src="https://cdn.ampproject.org/v0/amp-list-0.1.js" async=""></script>

<script custom-template="amp-mustache" src="https://cdn.ampproject.org/v0/amp-mustache-0.1.js" async=""></script>

<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600,700" rel="stylesheet">
@php
	Theme::add('pub_theme::css/travel-results.css');
//	Theme::add('pub_theme::css/navbar1.css');
//	Theme::add('pub_theme::css/dropdown-vars.css');
//	Theme::add('pub_theme::css/dropdown.css');
//	Theme::add('pub_theme::css/autocomplete.css');
//	Theme::add('theme/bc/bootstrap-languages/languages.css');
	//Theme::add('pub_theme::css/autosuggest.css');
@endphp
{!! Theme::showStyles(false) !!}

  
</head>
  <body>


<amp-state id="ui_hero"><script type="application/json">true</script></amp-state>
<amp-state id="ui_reset"><script type="application/json">false</script></amp-state>
<amp-state id="ui_filterPane"><script type="application/json">false</script></amp-state>
<amp-state id="ui_sortPane"><script type="application/json">false</script></amp-state>

<amp-state id="fields_query"><script type="application/json">""</script></amp-state>
<amp-state id="fields_query_initial"><script type="application/json">""</script></amp-state>
<amp-state id="fields_query_live"><script type="application/json">""</script></amp-state>
<amp-state id="fields_query_edited"><script type="application/json">false</script></amp-state>
<amp-state id="query_query"><script type="application/json">""</script></amp-state>

<amp-state id="fields_departure"><script type="application/json">""</script></amp-state>
<amp-state id="fields_departure_initial"><script type="application/json">""</script></amp-state>
<amp-state id="fields_departure_edited"><script type="application/json">false</script></amp-state>
<amp-state id="query_departure"><script type="application/json">""</script></amp-state>

<amp-state id="fields_return"><script type="application/json">""</script></amp-state>
<amp-state id="fields_return_initial"><script type="application/json">""</script></amp-state>
<amp-state id="fields_return_edited"><script type="application/json">false</script></amp-state>
<amp-state id="query_return"><script type="application/json">""</script></amp-state>

<amp-state id="fields_type"><script type="application/json">[]</script></amp-state>
<amp-state id="fields_type_initial"><script type="application/json">[]</script></amp-state>
<amp-state id="fields_type_edited"><script type="application/json">false</script></amp-state>
<amp-state id="query_type"><script type="application/json">[]</script></amp-state>

<amp-state id="fields_city"><script type="application/json">[]</script></amp-state>
<amp-state id="fields_city_initial"><script type="application/json">[]</script></amp-state>
<amp-state id="fields_city_edited"><script type="application/json">false</script></amp-state>
<amp-state id="query_city"><script type="application/json">[]</script></amp-state>

<amp-state id="fields_sort"><script type="application/json">"popularity-desc"</script></amp-state>
<amp-state id="fields_sort_initial"><script type="application/json">"popularity-desc"</script></amp-state>
<amp-state id="fields_sort_edited"><script type="application/json">false</script></amp-state>
<amp-state id="query_sort"><script type="application/json">"popularity-desc"</script></amp-state>

<amp-state id="fields_maxPrice"><script type="application/json">801</script></amp-state>
<amp-state id="fields_maxPrice_initial"><script type="application/json">801</script></amp-state>
<amp-state id="fields_maxPrice_live"><script type="application/json">801</script></amp-state>
<amp-state id="fields_maxPrice_edited"><script type="application/json">false</script></amp-state>
<amp-state id="query_maxPrice"><script type="application/json">801</script></amp-state>
    <div role="main">
      <div class="travel-overlay-fx-scale" [class]="'travel-overlay-fx-scale' + (ui_filterPane ? ' travel-overlay-fx-scale-active' : '')">
        <div class="travel-no-focus" role="button" tabindex="-1" on="tap:AMP.setState({ui_filterPane: false, ui_reset: false, ui_sortPane: false})">
        	@include($view.'.results-navbar')
        </div>
        @include($view.'.filter-bar')
        @include($view.'.filter-pane')
        @include($view.'.sort-bar')
        <div class="travel-no-focus flex-auto overflow-auto" role="button" tabindex="-1" on="tap:AMP.setState({ui_filterPane: false, ui_reset: false, ui_sortPane: false})">
        	@include($view.'.results')
        </div>
      </div>
    </div>
  </body>
</html>
