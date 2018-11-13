<!-- Filter Bar -->
<section class="travel-filter-bar sm-hide xs-hide relative z2">
  <div class="flex mxn2 px1 md-px2">
    <div class="travel-no-focus flex flex-auto overflow-hidden" role="button" tabindex="0" on="tap:AMP.setState({ui_filterPane: !ui_filterPane, ui_sortPane: false})">
      <div class="pl2 pr1 py2 nowrap border-bottom travel-border-gray flex-none">
        <span class="bold">Filters</span>
        <span class="travel-flip travel-filters-text inline-block" [class]="'travel-flip travel-filters-text inline-block' + (ui_filterPane ? ' travel-flip-flipped' : '')">
<svg class="travel-icon" viewbox="0 0 66 100"><path fill="currentColor" d="M33.5 56.172l-18.96-18.1c-1.497-1.43-3.922-1.43-5.418 0a3.539 3.539 0 0 0 0 5.17l21.67 20.687a3.914 3.914 0 0 0 2.708 1.07c.98 0 1.96-.357 2.71-1.07l21.668-20.687a3.541 3.541 0 0 0 0-5.172c-1.496-1.427-3.92-1.427-5.417 0L33.5 56.173z"></path></svg>        </span>
      </div>

      <div class="pl1 py2 nowrap border-bottom travel-border-gray flex-none">
        <span class="travel-filters-text">Price</span>
      </div>

      <div class="pr1 py2 nowrap border-bottom travel-border-gray">
        <span class="travel-badge" [class]="query_maxPrice < 801 ? 'travel-badge green' : 'travel-badge'" [text]="query_maxPrice < 801 ? 'Up to $' + round(query_maxPrice) : 'Any price'">Any price</span>
      </div>

      <div class="pl1 py2 nowrap border-bottom travel-border-gray flex-none">
        <span class="travel-filters-text">Type</span>
      </div>

      <div class="border-bottom travel-border-gray">
        <div class="travel-fade-right pr1 py2">
          <span class="travel-badge" [class]="'travel-badge' + (query_type.length > 0 && query_type.length < 10 ? ' hide' : '')">All types</span>

          <span class="travel-badge green hide" [class]="'travel-badge green' + (query_type.includes('active') ? '' : ' hide')">Active</span><span class="travel-badge green hide" [class]="'travel-badge green' + (query_type.includes('artistic') ? '' : ' hide')">Artistic</span><span class="travel-badge green hide" [class]="'travel-badge green' + (query_type.includes('drinks') ? '' : ' hide')">Drinks</span><span class="travel-badge green hide" [class]="'travel-badge green' + (query_type.includes('fashion') ? '' : ' hide')">Fashion</span><span class="travel-badge green hide" [class]="'travel-badge green' + (query_type.includes('food') ? '' : ' hide')">Food</span><span class="travel-badge green hide" [class]="'travel-badge green' + (query_type.includes('music') ? '' : ' hide')">Music</span><span class="travel-badge green hide" [class]="'travel-badge green' + (query_type.includes('nature') ? '' : ' hide')">Nature</span><span class="travel-badge green hide" [class]="'travel-badge green' + (query_type.includes('nightlife') ? '' : ' hide')">Nightlife</span><span class="travel-badge green hide" [class]="'travel-badge green' + (query_type.includes('tours') ? '' : ' hide')">Tours</span><span class="travel-badge green hide" [class]="'travel-badge green' + (query_type.includes('water') ? '' : ' hide')">Water</span>
        </div>
      </div>

      <div class="pl1 py2 nowrap border-bottom travel-border-gray flex-none">
        <span class="travel-filters-text">City</span>
      </div>

      <div class="flex-auto border-bottom travel-border-gray">
        <div class="travel-fade-right pr1 py2">
          <amp-list class="travel-inline-list" layout="flex-item" src="/api/it/restaurant/search?maxPrice=800&query=&sort=popularity-desc" [src]="
  '/api/it/restaurant/search?maxPrice=' + (query_maxPrice < 801 ? query_maxPrice : 0) +
  '&query=' + query_query +
  (query_city.length ? '&cities[]=' + query_city.join('&cities[]=') : '') +
  (query_type.length ? '&types[]=' + query_type.join('&types[]=') : '') +
  '&sort=' + query_sort
">
		@verbatim
            <template type="amp-mustache">
              {{#stats.allCities}}<span class="travel-badge">All cities</span>{{/stats.allCities}}
              {{^stats.allCities}} 
              {{#stats.cities}}{{#isSelected}}<span class="travel-badge green">{{name}}</span>{{/isSelected}}{{/stats.cities}}
              {{/stats.allCities}}
            </template>
        @endverbatim
          </amp-list>
        </div>
      </div>

      <div class="travel-border-gray px1 md-pr2 py2 nowrap border-bottom flex-none">
        <amp-list class="travel-inline-list" layout="flex-item" src="/api/it/restaurant/search?maxPrice=800&query=&sort=popularity-desc" [src]="
  '/api/it/restaurant/search?maxPrice=' + (query_maxPrice < 801 ? query_maxPrice : 0) +
  '&query=' + query_query +
  (query_city.length ? '&cities[]=' + query_city.join('&cities[]=') : '') +
  (query_type.length ? '&types[]=' + query_type.join('&types[]=') : '') +
  '&sort=' + query_sort
">

		@verbatim
          <template type="amp-mustache">
            <span class="travel-filters-results-text">
              {{stats.resultCount}}
              <span class="sm-hide xs-hide md-hide">Tours & Activities Found</span>
              <span class="lg-hide">Results</span>
            </span>
          </template>
        @endverbatim
        </amp-list>
      </div>
    </div>

    <div class="flex-none">
      <div class="travel-no-focus travel-border-gray pl1 pr2 py2 md-pl2 nowrap border-left border-bottom relative z2" role="button" tabindex="0" on="tap:AMP.setState({ui_filterPane: false, ui_reset: false, ui_sortPane: !ui_sortPane})">
        <span class="travel-filters-text">Sort by</span>
        <div class="inline-block">
          <!--
            Render an invisible set of labels to force the element to always be
            the width of the widest label.
          -->
            <div aria-hidden="" class="travel-filter-bar-collapse bold">Popular</div>
            <div aria-hidden="" class="travel-filter-bar-collapse bold">Best Rated</div>
            <div aria-hidden="" class="travel-filter-bar-collapse bold">New</div>
            <div aria-hidden="" class="travel-filter-bar-collapse bold">Lowest Price</div>

          <span class="bold">
              <span [class]="fields_sort == 'popularity-desc' ? '' : 'hide'">
                Popular
              </span>
              <span class="hide" [class]="fields_sort == 'rating-desc' ? '' : 'hide'">
                Best Rated
              </span>
              <span class="hide" [class]="fields_sort == 'age-asc' ? '' : 'hide'">
                New
              </span>
              <span class="hide" [class]="fields_sort == 'price-asc' ? '' : 'hide'">
                Lowest Price
              </span>
          </span>
        </div>
        <span class="travel-flip travel-filters-text inline-block" [class]="'travel-flip travel-filters-text inline-block ' + (ui_sortPane ? ' travel-flip-flipped' : '')">
<svg class="travel-icon" viewbox="0 0 66 100"><path fill="currentColor" d="M33.5 56.172l-18.96-18.1c-1.497-1.43-3.922-1.43-5.418 0a3.539 3.539 0 0 0 0 5.17l21.67 20.687a3.914 3.914 0 0 0 2.708 1.07c.98 0 1.96-.357 2.71-1.07l21.668-20.687a3.541 3.541 0 0 0 0-5.172c-1.496-1.427-3.92-1.427-5.417 0L33.5 56.173z"></path></svg>        </span>
      </div>
<!-- Sort pane -->
<div class="travel-pane" [class]="'travel-pane' + (ui_sortPane ? ' travel-pane-visible' : '')">
  <div class="travel-pane-overflow absolute overflow-hidden left-0 right-0 pb2 px2 mxn2">
    <div class="travel-pane-content travel-shadow travel-border-gray border-bottom border-left z1">
      <div class="p1 pr2 mdp2">
        <amp-selector class="travel-list-selector" layout="container" name="sort" on="
            select:AMP.setState({
              query_sort: event.targetOption,
              fields_sort: event.targetOption
            })
          " [selected]="fields_sort">
            <div class="bold" option="popularity-desc" selected="">Popular</div>
            <div class="bold" option="rating-desc">Best Rated</div>
            <div class="bold" option="age-asc">New</div>
            <div class="bold" option="price-asc">Lowest Price</div>
        </amp-selector>
      </div>
    </div>
  </div>
</div>
<!--/ Sort pane -->
    </div>
  </div>
</section>
<!--/ Filter Bar -->