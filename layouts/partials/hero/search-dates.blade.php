<div class="travel-hero-search-dates flex my2 justify-around">
		<label class="travel-date-input relative bold flex-auto" [class]="'travel-date-input relative bold flex-auto' + (fields_departure ? ' travel-date-input-touched' : '')">
			<input class="block relative p0 z1" type="date" placeholder="yyyy-mm-dd" pattern="[0-9]{4}-[0-9]{2}-[0-9]{2}" title="yyyy-mm-dd" name="departure" on="
				change:AMP.setState({
				fields_departure: true,
				fields_departure_edited: true
				})
				">
			<svg class="travel-icon" viewbox="0 0 100 100">
				<path fill="currentColor" d="M7.93 79.476h84.32v8.876H7.93v-8.876zm86.848-41.538c-.932-3.55-4.615-5.68-8.165-4.704l-23.566 6.302L32.427 11l-8.566 2.263 18.374 31.82-22.056 5.902-8.743-6.834L5 45.883l8.077 14.023 3.417 5.903 7.1-1.91 23.566-6.3 19.305-5.148 23.565-6.302c3.594-1.02 5.68-4.66 4.748-8.21z"></path>
			</svg>
			<div class="travel-date-input-label">
				Departure
			</div>
		</label>
		<label class="travel-date-input relative bold flex-auto" [class]="'travel-date-input relative bold flex-auto' + (fields_return ? ' travel-date-input-touched' : '')">
			<input class="block relative p0 z1" type="date" placeholder="yyyy-mm-dd" pattern="[0-9]{4}-[0-9]{2}-[0-9]{2}" title="yyyy-mm-dd" name="return" on="
				change:AMP.setState({
				fields_return: true,
				fields_return_edited: true
				})
				" disabled="" [disabled]="!fields_departure">
			<svg class="travel-icon" viewbox="0 0 100 100">
				<path fill="currentColor" d="M7.929 79.476h84.32v8.876H7.929v-8.876zm81.693-15.409c1.03-3.523-1.03-7.246-4.576-8.238L61.6 49.094 50.051 8.863l-8.508-2.471-.64 36.737-21.946-6.3-3.974-10.361-6.407-1.831-.3 16.18-.11 6.82 7.069 2.021 23.445 6.735 19.199 5.53 23.445 6.736c3.607.976 7.269-1.069 8.298-4.592z"></path>
			</svg>
			<div class="travel-date-input-label">
				Return
			</div>
		</label>
	</div>