<!-- Results Navbar -->
<header class="travel-results-navbar pt4 pr4 pl4">
  <div class="px1 md-px2 flex justify-between items-stretch">
    <div class="flex items-stretch">
      <a href="travel.amp" class="travel-results-navbar-icon h2 circle my1 md-my2">
<svg class="travel-icon travel-icon-logo h2" viewbox="0 0 100 100"><g fill="none" fill-rule="evenodd" stroke="currentColor" stroke-width="7.5"><circle cx="50" cy="50" r="45"></circle><path d="M20.395 83.158c-2.37-10.263-.79-18.553 4.737-24.87 8.29-9.472 17.763-1.183 26.052-9.472 8.29-8.29 2.37-18.948 10.658-26.053 5.526-4.737 12.237-6.316 20.132-4.737M39.084 95c-2.788-10.2-1.912-17.304 2.627-21.316 6.808-6.017 14.956-.68 24.088-9.623 9.13-8.94 3.062-17.133 10.255-23.534 4.795-4.267 10.282-5.668 16.46-4.203"></path></g></svg>      </a>
      <div class="ml3 flex items-center xs-hide sm-hide">
        <amp-list class="travel-block-list flex items-center" layout="flex-item" noloading="" src="/api/it/restaurant/search?maxPrice=800&query=&sort=popularity-desc" [src]="
  '/api/it/restaurant/search?maxPrice=' + (query_maxPrice < 801 ? query_maxPrice : 0) +
  '&query=' + query_query +
  (query_city.length ? '&cities[]=' + query_city.join('&cities[]=') : '') +
  (query_type.length ? '&types[]=' + query_type.join('&types[]=') : '') +
  '&sort=' + query_sort
">		
			@verbatim
			<template type="amp-mustache">
				<div class="flex items-center">
					<label class="travel-input-icon relative">
					<input class="travel-input travel-input-dark rounded" type="text" name="query" placeholder="Location" on="
						change:
						AMP.setState({fields_query: event.value}),
						AMP.setState({query_query: event.value})
						" value="{{stats.location}}">
					<span class="travel-icon travel-img-icon-map-pin-transparent"></span>
					</label>
				</div>
			</template>
			@endverbatim
        </amp-list>
      </div>
    </div>
    <div class="flex flex-auto items-center md-hide lg-hide">
      <amp-list class="travel-block-list flex flex-auto center" layout="flex-item" noloading="" src="/api/it/restaurant/search?maxPrice=800&query=&sort=popularity-desc" [src]="
  '/api/it/restaurant/search?maxPrice=' + (query_maxPrice < 801 ? query_maxPrice : 0) +
  '&query=' + query_query +
  (query_city.length ? '&cities[]=' + query_city.join('&cities[]=') : '') +
  (query_type.length ? '&types[]=' + query_type.join('&types[]=') : '') +
  '&sort=' + query_sort
">
	@verbatim
        <template type="amp-mustache">
            <div class="h3 line-height-2 bold">
              {{stats.resultCount}} Results
            </div>
            <div class="travel-results-navbar-subheading h6 caps line-height-4">
              {{stats.location}}
            </div>
        </template>
    @endverbatim
      </amp-list>
    </div>
    <div class="travel-results-navbar-icon h3 my1 md-my2 md-hide lg-hide" role="button" tabindex="0" on="tap:AMP.setState({ui_filterPane: !ui_filterPane, ui_sortPane: false})">
<svg class="travel-icon" viewbox="0 0 100 100"><g fill="currentColor"><path d="M77 74v18.312C77 94.35 78.79 96 81 96s4-1.65 4-3.688V74h-8zm0-37V6.778C77 4.69 78.79 3 81 3s4 1.69 4 3.778V37h-8zM47 52v41.24c0 2.076 1.79 3.76 4 3.76s4-1.684 4-3.76V52h-8zm0-38V6.667C47 4.642 48.79 3 51 3s4 1.642 4 3.667V14h-8zM16 86v7.29c0 2.05 1.79 3.71 4 3.71s4-1.66 4-3.71V86h-8zm0-38V6.75C16 4.68 17.79 3 20 3s4 1.68 4 3.75V48h-8z"></path><circle cx="20.5" cy="67.5" r="11.5"></circle><circle cx="50.5" cy="33.5" r="11.5"></circle><circle cx="80.5" cy="55.5" r="11.5"></circle></g></svg>    </div>
  </div>
</header>
<!--/ Results Navbar -->