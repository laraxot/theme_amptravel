<!-- Search Form -->
<div class="travel-hero-search">
	<label class="travel-input-icon travel-shadow flex col-12 relative rounded">
		<input class="travel-input travel-input-big travel-input-clear border block col-12 rounded" list="locations" type="text" name="query" placeholder="Where would you like to go?" on="
			change:AMP.setState({
			fields_query: event.value,
			fields_query_live: event.value,
			fields_query_edited: query_query != event.value
			});
			input-debounced:AMP.setState({
			fields_query_live: event.value
			});
			" value="" [value]="fields_query">
		<svg class="travel-icon" viewbox="0 0 74 100">
			<path fill="currentColor" d="M40.18 95.404A3.944 3.944 0 0 1 37 97a3.944 3.944 0 0 1-3.18-1.596C28.268 87.787 5 54.66 5 34.334 5 17.027 19.327 3 37 3c17.673 0 32 14.028 32 31.333 0 20.327-23.267 53.454-28.82 61.07zM37 14.75c-11.046 0-20 8.768-20 19.583 0 10.816 8.954 19.584 20 19.584s20-8.768 20-19.584c0-5.193-2.107-10.174-5.858-13.847-3.75-3.672-8.838-5.736-14.142-5.736z"></path>
		</svg>
	</label>
	@verbatim 
	<datalist id="locations">
		<amp-list layout="flex-item" height="50" src="/autocomplete-api.php?query=" [src]="'/autocomplete-api.php?query=' + fields_query_live"  items="predictions">
  			<template type="amp-mustache" >
				<option value="{{description}}">{{description}}</option>
			</template>
		</amp-list>
	</datalist>
	@endverbatim
	
	
	{{--
	@verbatim 
	<amp-list layout="flex-item" src="autocomplete-api.php?query=" [src]="'autocomplete-api.php?query=' + fields_query_live">
		<template type="amp-mustache">
			<datalist id="locations">
				{{#predictions}}
				<option value="{{description}}">
					{{/predictions}}
				</option>
			</datalist>
		</template>
	</amp-list>
	@endverbatim
	@include('pub_theme::layouts.partials.hero.search-dates')
	--}}

	
	<a href="travel-results.amp" class="ampstart-btn travel-input-big rounded center bold white block col-12" on="
		tap:AMP.setState({
		ui_reset: false,
		ui_filterPane: false,
		query_query: fields_query,
		fields_query_edited: false,
		query_departure: fields_departure,
		fields_departure_edited: false,
		query_return: fields_return,
		fields_return_edited: false,
		query_maxPrice: fields_maxPrice,
		fields_maxPrice_edited: false,
		query_city: fields_city,
		fields_city_edited: false,
		query_type: fields_type,
		fields_type_edited: false,
		query_sort: fields_sort,
		fields_sort_edited: false,
		})
		">
	Find Adventures & Tours
	</a>
	<a class="travel-hero-discover block center mx-auto mt1 md-hide lg-hide" on="tap:travel-landing-content.scrollTo">
		Explore 
		<svg class="travel-icon" viewbox="0 0 66 100">
			<path fill="currentColor" d="M33.5 56.172l-18.96-18.1c-1.497-1.43-3.922-1.43-5.418 0a3.539 3.539 0 0 0 0 5.17l21.67 20.687a3.914 3.914 0 0 0 2.708 1.07c.98 0 1.96-.357 2.71-1.07l21.668-20.687a3.541 3.541 0 0 0 0-5.172c-1.496-1.427-3.92-1.427-5.417 0L33.5 56.173z"></path>
		</svg>
	</a>
	<br/><br/><br/>
</div>
<!--/ Search Form -->