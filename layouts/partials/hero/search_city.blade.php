@verbatim
<div class="wrapper"
	on="tap:AMP.setState({showDropdown:false})"
	role="button"
	tabindex="0"
	aria-label="Tap to close the autosuggest box">
	<form method="post"
	action-xhr="https://ampbyexample.com/advanced/autosuggest/address"
	target="_blank"
	id="search-form"
	on="
	  submit: autosuggest-list.hide;
	  submit-success: autosuggest-list.hide;
	  submit-error: autosuggest-list.hide">
	<div class="form-grid">
		<div class="form-item city-state">
			<label>City</label>
			<input name="city"
				type="text"
				on="
				input-debounced:
				  AMP.setState({
				    query: event.value,
				    showDropdown: event.value,
				  }),
				  autosuggest-list.show;
				tap:
				  AMP.setState({
				    query: query == null ? '' : query,
				    showDropdown: 'true'
				  }),
				  autosuggest-list.show"
				[value]="query || ''"
				value=""
				required
	  			autocomplete="off" />
		</div>
	  	<div class="suggest">
	    <div class="autosuggest-container hidden"
	      [class]="(showDropdown && query) ?
	        'autosuggest-container' :
	        'autosuggest-container hidden'">
	      <amp-list class="autosuggest-box"
	        layout="fixed-height"
	        height="120"
	        src="/advanced/autosuggest/search_list"
	        [src]="query ?
	          autosuggest.endpoint + query :
	          autosuggest.emptyAndInitialTemplateJson"
	        id="autosuggest-list" >
	        <template type="amp-mustache">
	          	<amp-selector id="autosuggest-selector"
	            	keyboard-select-mode="focus"
	            	layout="container"
	            	on="
	              	select:
	                	AMP.setState({
	                  		query: event.targetOption,
	                  		showDropdown: false
	                	}),
	                	autosuggest-list.hide">
	            {{#predictions}}
	            <div class="select-option no-outline"
	              role="option"
	              tabindex="0"
	              on="tap:autosuggest-list.hide"
	              option="{{.}}">{{.}}
	          	</div>
	            {{/predictions}} 
	            {{^predictions}}
	            <div class="select-option {{#query}}empty{{/query}}">
	              {{#query}}Sorry! We don't ship to your city 😰{{/query}}
	            </div>
	            {{/predictions}}
	          </amp-selector>
	        </template>
	      </amp-list>
	    </div>
	  </div>
	  <div class="form-item submit">
	    <button class="search-submit"
	      type="submit">Submit</button>
	  </div>
	</div>
	<div submit-success>
	  <template type="amp-mustache">
	    {{result}}
	  </template>
	</div>
	<div submit-error>
	  <template type="amp-mustache">
	    {{#result}}{{result}}{{/result}} {{^result}}Sorry! Something went wrong.{{/result}}
	  </template>
	</div>
	</form>
</div>
@endverbatim