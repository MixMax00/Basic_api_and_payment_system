<div class="bg-title">
	<div class="container">
		<div class="row">
			<div class="col-6">
				<div>
					<span>{{ __('text.lang') }}: </span>

						<select class="changeLog">
							<option  value="en" {{ session()->get('locale') == 'en' ? "selected": " "}}>{{ __('text.langEng') }}</option>
	                        <option value="bn" {{ session()->get('locale') == 'bn' ? "selected": " "}}>{{ __('text.langBang') }}</option>
						</select>
	
				</div>
			</div>
			<div class="col-6">
				<div class="d-flex justify-content-end">
					<a href="" class="nav-link mr-5">{{ __('text.wishlist') }}</a> |
					<!-- //<a href="" class="nav-link mr-5"></a> | -->
					<a href="" class="nav-link ml-5">{{ __('text.login') }}</a>
				</div>
			</div>
		</div>
	</div>
</div>