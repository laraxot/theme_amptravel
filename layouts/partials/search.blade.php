<!-- Search -->
<section class="travel-search py4 xs-hide sm-hide relative">
  <div class="px1 md-px2 pb1 relative">
    <h3 class="travel-search-heading travel-spacing-none h1 bold mb2 center">Have a specific destination in mind?</h3>

    <div class="flex justify-center pb2">
      <div class="travel-input-group flex items-center col-8">
          <input class="travel-input travel-input-big line-height-2 block col-12 flex-auto rounded-left" type="text" name="query" placeholder="Where would you like to go?" on="change:AMP.setState({fields_query: event.value})" value="" [value]="fields_query">
          <span class="travel-input-group-sep travel-border-gray relative z1 block"></span>
          <a href="travel-results.amp" class="travel-link travel-input travel-input-big line-height-2 link rounded-right nowrap text-decoration-none" on="
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
            Find my next adventure
          </a>
      </div>
    </div>
  </div>
</section>
<!--/ Search -->
