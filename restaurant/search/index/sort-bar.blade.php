<!-- Sort bar -->
<section class="travel-filter-bar md-hide lg-hide">
  <div class="px1 md-px2">
    <amp-selector class="travel-row-selector px1 mxn1 md-px2 md-mxn2" layout="container" name="sort" on="
        select:AMP.setState({
          query_sort: event.targetOption,
          fields_sort: event.targetOption
        })
      " [selected]="fields_sort">
    <ul class="list-reset">
        <li class="bold" option="popularity-desc" selected="">Popular</li>
        <li class="bold" option="rating-desc">Best Rated</li>
        <li class="bold" option="age-asc">New</li>
        <li class="bold" option="price-asc">Lowest Price</li>
    </ul>
    </amp-selector>
  </div>
</section>
<!--/ Sort bar -->