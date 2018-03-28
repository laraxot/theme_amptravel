<!doctype html>

<!---
Copyright 2017 The AMP Start Authors. All Rights Reserved.

Licensed under the Apache License, Version 2.0 (the "License");
you may not use this file except in compliance with the License.
You may obtain a copy of the License at

      http://www.apache.org/licenses/LICENSE-2.0

Unless required by applicable law or agreed to in writing, software
distributed under the License is distributed on an "AS-IS" BASIS,
WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
See the License for the specific language governing permissions and
limitations under the License.
-->

<html ⚡="">

<head>
  <meta charset="utf-8">
  <title>Beck &amp; Galo – Menu</title>
  <link rel="canonical" href="https://www.ampstart.com/templates/themes_2/menu.amp">
  <meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1">

  <script async="" src="https://cdn.ampproject.org/v0.js"></script>



  <style amp-boilerplate="">body{-webkit-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-moz-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-ms-animation:-amp-start 8s steps(1,end) 0s 1 normal both;animation:-amp-start 8s steps(1,end) 0s 1 normal both}@-webkit-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-moz-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-ms-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-o-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}</style><noscript><style amp-boilerplate="">body{-webkit-animation:none;-moz-animation:none;-ms-animation:none;animation:none}</style></noscript>


<script custom-element="amp-sidebar" src="https://cdn.ampproject.org/v0/amp-sidebar-0.1.js" async=""></script>


  <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700%7CLora%7CLato" rel="stylesheet">
  @php
	Theme::add('pub_theme::css/travel-results.css');
  	//Theme::add('pub_theme::css/travel.css');
	Theme::add('pub_theme::css/navbar1.css');
	Theme::add('pub_theme::css/dropdown-vars.css');
	Theme::add('pub_theme::css/dropdown.css');
//	Theme::add('pub_theme::css/autocomplete.css');
//	Theme::add('theme/bc/bootstrap-languages/languages.css');
	//Theme::add('pub_theme::css/autosuggest.css');
@endphp
<style amp-custom="">
{!! Theme::showStylesInline() !!}
</style>


</head>
<body>

  @include($view.'.navbar')
  <main id="content" role="main">
      <article class="px3 py4">
        <h1 class="h4 mb4">Menu</h1>
          @foreach($row->linked->cuisines as $cuisine)
          <h2 class="h1 my4">{{ $cuisine->title }}</h2>
          <dl class="clearfix">
          	  {{--
              <dt class="h5 mb2 block regular">Chef’s Pick</dt>
              <dd class="m0"><amp-img class="mb2" src="../img/themes_2/waffles.jpg" width="300" height="200" alt="" layout="responsive"></amp-img></dd>
              --}}

              @foreach($cuisine->linked->recipes as $recipe)
              	<dt class="col col-10 h3 mb1">{{ $recipe->title }}</dt>
              	<dd class="col col-2 m0 mb1 self-center right-align">{{ number_format($recipe->pivot->price,2) }}</dd>
              	<dd class="col col-12 m0 mb4">{{ $recipe->subtitle }}</dd>
              @endforeach
          </dl>
          @endforeach
      </article>
  </main>

  <!-- Start Footer -->
  <footer class="ampstart-footer flex flex-column items-center px3 ">


    <small>
     
    </small>
  </footer>
  <!-- End Footer -->
</body>
</html>
