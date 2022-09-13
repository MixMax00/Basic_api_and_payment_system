@extends('layouts.app')


@section('content')

<div class="container">
	<div class="row">
		<div class="col-6 offset-3">
			<div class="card">
				<div class="card-header bg-warning">
					<h3>Theme Setting</h3>
				</div>
				<div class="card-body">
					<form method="post" action="{{ route('admin.save') }}">
						@csrf
						<div class="row mb-2">
							<div class="col-md-3">
								<label for="exampleColorInput" class="form-label">Background Color</label>
							</div>
                            <div class="col-md-9">
                            	<input type="hidden" name="id" value="{{ $theme->id }}">
                            	<input type="color" name="bg_color" class="form-control form-control-color" id="exampleColorInput" value="{{ $theme->bg_color }}" title="Choose your color">
                            </div>
						</div>
						<div class="row mb-2">
							<div class="col-md-3">
								<label for="exampleColorInput" class="form-label">Primary Color</label>
							</div>
                            <div class="col-md-9">
                            	<input type="color" name="primary_color" class="form-control form-control-color" id="exampleColorInput" value="{{ $theme->primary_color }}" title="Choose your color">
                            </div>
						</div>
						<div class="row mb-2">
							<div class="col-md-3">
								<label for="exampleColorInput" class="form-label">Secondery Color</label>
							</div>
                            <div class="col-md-9">
                            	<input type="color" name="secondery_color" class="form-control form-control-color" id="exampleColorInput" value="{{ $theme->secondery_color }}" title="Choose your color">
                            </div>
						</div>
						<div class="row mb-2">
							<div class="col-md-3">
								<label for="exampleColorInput" class="form-label">Text Color</label>
							</div>
                            <div class="col-md-9">
                            	<input type="color" name="text_color" class="form-control form-control-color" id="exampleColorInput" value="{{ $theme->text_color }}" title="Choose your color">
                            </div>
						</div>
						<div class="row mb-2">
                            <div class="col-md-8 offset-md-2">
                            	<input type="submit" class="btn btn-primary w-100" value="Save">
                            </div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>


@endsection