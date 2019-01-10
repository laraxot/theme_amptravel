<!--
	https://github.com/sryze/amp-google-places-autocomplete
	demo:
	https://amp-google-places-autocomplete.herokuapp.com/autocomplete.html
	---
	https://www.ampproject.org/docs/fundamentals/add_advanced/navigating

	https://ampbyexample.com/samples_templates/product_browse_page/preview/#

	https://ampbyexample.com/advanced/autosuggest/

	https://www.ampproject.org/docs/interaction_dynamic/login_requiring/login !!

	https://github.com/ampproject/amphtml/blob/master/examples/autosuggest.amp.html
	https://ampbyexample.com/components/amp-list/

	https://ampbyexample.com/advanced/autosuggest/

	https://www.ampproject.org/docs/reference/components/amp-bind
	https://stackoverflow.com/questions/46919042/amp-list-amp-bind-dynamic-form

	https://stackoverflow.com/questions/49020895/how-to-remove-this-error-response-must-contain-an-array-at-while-making
	
	acForm.query - current query string entered in the input, default is ""
	acForm.showDropdown - whether the autocomplete dropdown is currently visible
	acForm.isLoading - whether the form is being submitted
	-->

<amp-state id="acForm">
	<script type="application/json">
		{
		    "query": "",
		    "showDropdown": false,
		    "isLoading": false
		}
	</script>
</amp-state>
<!--
	acData holds the data returned by the autocomplete API (address predictions)
	-->
<amp-state id="acData"
	src="autocomplete-api.php"
	[src]="(acForm.query && acForm.query.length > 0)
	? 'autocomplete-api.php?query=' + encodeURIComponent(acForm.query)
	: 'autocomplete-api.php'">
</amp-state>
<div 
	class="travel-hero-search"
	on="tap:AMP.setState({acForm: {showDropdown: false}})"
	role="button"
	tabindex="0"
	aria-label="Tap to close the autocomplete box">
	<form
        id="form"
        class="form"
        action="{{ route('container0.search.index',['container'=>'restaurant']) }}"
        method="GET"
        target="_top"
        on="
            submit: 
                AMP.setState({acForm: {
                    isLoading: true,
                    showDropdown: false
                }});
            submit-success:
                AMP.setState({acForm: {
                    isLoading: false,
                    showDropdown: false
                }});
            submit-error:
                AMP.setState({acForm: {
                    isLoading: false,
                    showDropdown: false
                }});
            invalid:
                AMP.setState({acForm: {
                    isLoading: false
                }});"
        custom-validation-reporting="show-first-on-submit">
		<label class="travel-input-icon travel-shadow flex col-12 relative rounded">
			<input
			id="city"
			class="travel-input travel-input-big travel-input-clear border block col-12 rounded"
			name="city"
			placeholder="Enter a city and state(3)"
			autocomplete="off"
			on="
			input-debounced:
			AMP.setState({acForm: {
			query: event.value,
			showDropdown: true
			}});
			tap:
			AMP.setState({acForm: {
			showDropdown: true
			}})"
			value=""
			[value]="acForm.query || ''"
			required
			>
			
		<svg class="travel-icon" viewbox="0 0 74 100">
			<path fill="currentColor" d="M40.18 95.404A3.944 3.944 0 0 1 37 97a3.944 3.944 0 0 1-3.18-1.596C28.268 87.787 5 54.66 5 34.334 5 17.027 19.327 3 37 3c17.673 0 32 14.028 32 31.333 0 20.327-23.267 53.454-28.82 61.07zM37 14.75c-11.046 0-20 8.768-20 19.583 0 10.816 8.954 19.584 20 19.584s20-8.768 20-19.584c0-5.193-2.107-10.174-5.858-13.847-3.75-3.672-8.838-5.736-14.142-5.736z"></path>
		</svg>
		</label>

		<div class="error-container">
			<div class="errors">
				<span class="error hidden" visible-when-invalid="valueMissing" validation-for="city">
				Please enter a city and state(1)
				</span>
				<span class="error hidden" visible-when-invalid="patternMismatch" validation-for="city">
				Please enter a city and state(2)
				</span>
			</div>
		</div>

		<div
			class="autocomplete-container hidden"
			[class]="(acForm.showDropdown && acForm.query && acData.predictions && acData.predictions.length > 0) ?
			'autocomplete-container' :
			'autocomplete-container hidden'">
			<amp-selector
				id="autocomplete-selector"
				keyboard-select-mode="focus"
				layout="container"
				on="
				select:
				AMP.setState({acForm: {
				query: event.targetOption,
				isLoading: true,
				showDropdown: false
				}}),
				form.submit">
				<amp-list
					id="autocomplete-list"
					class="autocomplete-box"
					layout="fixed-height"
					height="150"
					src="autocomplete-api.php"
					[src]="acData.predictions"
					items=".">
					<template type="amp-mustache">
						<div class="select-option" role="option" tabindex="0" on="tap:AMP.setState({acForm: {showDropdown: false}});" option="@{{description}}">
							@{{description}}
						</div>
					</template>
				</amp-list>
			</amp-selector>
			<div class="google-logo"></div>
		</div>

		<input
			id="submit-button"
			type="submit"
			value="Cerca Ristorante"
			[value]="acForm.isLoading ? 'Caricamento...' : 'Cerca Ristorante'"
			class="ampstart-btn travel-input-big rounded center bold white block col-12"
			[disabled]="acForm.isLoading">
	</form>
<br/><br/><br/>
</div>

