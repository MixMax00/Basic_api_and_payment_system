<nav class="navbar navbar-expand-custom navbar-mainbg bg-title">
	<div class="container">
		<a class="navbar-brand navbar-logo" href="#">Dev Codding</a>
		<button class="navbar-toggler" type="button" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<i class="fas fa-bars text-white"></i>
		</button>
		<div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
			<ul class="navbar-nav f-right">
				<div class="hori-selector">
					<div class="left"></div>
					<div class="right"></div>
				</div>
				<li class="nav-item {{ (request()->is('/')) ? 'active' : '' }}">
					<a class="nav-link" href="{{ route('frontend.home') }}">{{ __('text.home') }}</a>
				</li>
				<li class="nav-item {{ (request()->is('posts*')) ? 'active' : '' }}">
					<a class="nav-link" href="{{ route('frontend.post') }}">{{ __('text.post') }}</a>
				</li>
				<li class="nav-item {{ (request()->is('product*')) ? 'active' : '' }}">
					<a class="nav-link" href="{{ route('frontend.product') }}">{{ __('text.product') }}</a>
				</li>
				<li class="nav-item ">
					<a class="nav-link" href="{{ url('/resource/') }}">{{ __('text.resurch') }}</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="javascript:void(0);">{{ __('text.tutorials') }}</a>
				</li>
				<li class="nav-item {{ (request()->is('cart*')) ? 'active' : '' }}">
					<a class="nav-link" href="{{ route('frontend.cart') }}">{{ __('text.cart') }}(5)</a>
				</li>
			</ul>
		</div>
	</div>
</nav>