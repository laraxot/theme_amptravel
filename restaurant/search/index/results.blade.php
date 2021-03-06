<!-- Results -->
<section class="travel-results pb1 md-pt1">
  	<div class="max-width-3 mx-auto px1 md-px2 flex">
    	<amp-list class="travel-inline-list travel-results-list" layout="flex-item" noloading="" src="/api/it/restaurant/search?maxPrice=800&query=&sort=popularity-desc" [src]="
  '/api/it/restaurant/search?maxPrice=' + (query_maxPrice < 801 ? query_maxPrice : 0) +
  '&query=' + query_query +
  (query_city.length ? '&cities[]=' + query_city.join('&cities[]=') : '') +
  (query_type.length ? '&types[]=' + query_type.join('&types[]=') : '') +
  '&sort=' + query_sort
">
			@verbatim
<template type="amp-mustache">
	<div>
		<div class="flex flex-wrap mxn1 flex-auto">
			{{#results.length}}
			{{#results}}
			<div class="col-12 sm-col-6 lg-col-4 p1 travel-results-result">
				<div class="relative travel-results-result">
					<a class="travel-results-result-link" href="{{ owner_url }}">
						<amp-img class="rounded bg-silver mb1" width="2" height="1" noloading="" layout="responsive" src="{{ photo_url }}"></amp-img>
					</a>
					{{#flags.new}}
					<div class="travel-results-result-flags absolute top-0 left-0">
						<div class="p1"><span class="travel-pill bold">NEW</span></div>
					</div>
					{{/flags.new}}
					<div class="travel-results-result-like absolute top-0 right-0">
						<div class="p1">
							<label class="travel-like">
								{{#liked}}<input type="checkbox" checked="" class="absolute">{{/liked}}
								{{^liked}}<input type="checkbox" class="absolute">{{/liked}}
								<div class="travel-like-hearts circle inline-block relative">
									<div class="travel-like-heart-tiny travel-like-heart-solid absolute"></div>
									<div class="travel-like-heart-tiny travel-like-heart-solid absolute"></div>
									<div class="travel-like-heart-tiny travel-like-heart-solid absolute"></div>
									<div class="travel-like-heart travel-like-heart-white absolute mx-auto"></div>
									<div class="travel-like-heart travel-like-heart-solid absolute mx-auto"></div>
									<div class="travel-like-heart travel-like-heart-outline absolute mx-auto"></div>
								</div>
							</label>
						</div>
					</div>
				</div>
				<div class="h2 line-height-2 mb1">
					<span class="travel-results-result-text">{{title}}</span>
					<span class="travel-results-result-subtext h3">&bull;</span>
					<span class="travel-results-result-subtext h3">$&nbsp;</span><span class="bold">{{price.value}}</span>
				</div>
				<div class="h4 line-height-2">
					<!--
						Outputting SVG with amp-mustache is currently blocked. Plain
						glyphs are used here instead for the map icon and rating.
						see: https://github.com/ampproject/amphtml/issues/8214
						-->
					{{#reviews.count}}
					<div class="inline-block relative mr1 h3 line-height-2">
						<div>
							<span class="travel-icon travel-img-icon-star-silver">
							</span><span class="travel-icon travel-img-icon-star-silver">
							</span><span class="travel-icon travel-img-icon-star-silver">
							</span><span class="travel-icon travel-img-icon-star-silver">
							</span><span class="travel-icon travel-img-icon-star-silver"></span>
						</div>
						<div class="absolute top-0">
							{{#reviews.averageRating.range}}<span class="travel-icon travel-img-icon-star-green"></span>{{/reviews.averageRating.range}}
						</div>
					</div>
					<span class="travel-results-result-subtext mr1">{{reviews.count}} Reviews</span>
					{{/reviews.count}}
					{{^reviews.count}}
					<span class="travel-results-result-subtext mr1">Not Yet Reviewed</span>
					{{/reviews.count}}
					<span class="nowrap">
					<span class="travel-icon travel-img-icon-map-pin-outline-gray"></span>
					{{locality}}
					</span>
				</div>
			</div>
			{{/results}}
			{{/results.length}}
			{{^results.length}}
			<div class="travel-results-empty">
				<div>
					<div class="h1 center mb1">
						<span class="travel-icon travel-img-icon-sad-face-gray"></span>
					</div>
					<div class="h1 gray center">No Restaurants for that search</div>
					<div class="gray center">
						You can
						<span class="underline pointer" role="button" tabindex="0" on="
							tap:
							AMP.setState({ui_reset: false}),
							AMP.setState({
							ui_filterPane: true,
							ui_reset: true,
							query_maxPrice: fields_maxPrice_initial,
							fields_maxPrice: fields_maxPrice_initial,
							fields_maxPrice_live: fields_maxPrice_initial,
							fields_maxPrice_edited: false,
							query_city: fields_city_initial,
							fields_city: fields_city_initial,
							fields_city_edited: false,
							query_type: fields_type_initial,
							fields_type: fields_type_initial,
							fields_type_edited: false
							})
							">reset filters</span>
						to see more results
					</div>
				</div>
			</div>
			{{/results.length}}
		</div>
	</div>
</template>
@endverbatim
    	</amp-list>
  	</div>
 </section>
<!--/ Results -->