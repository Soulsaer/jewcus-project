@extends('adminlte::page')

@section('content')
<section>
  	<div class="container my-4">
  		<div class="row">
  			<div class="col-md-12">
		  		<div class="card">
			  		<div class="card-header">
			  			<h5>Profile</h5>
			  		</div>
			  		<div class="card-body">
				  		<form method="post" action="{{ route('update.profile') }}">
				  			@csrf
				    		<div class="row">
					    		<div class="col-md-6 mt-3">
					    			<div class="form-outline">
					    				<label class="form-label" for="name">Name</label>
									  	<input type="text" id="name" name="name" class="form-control form-control-lg" value="{{ old('name', auth()->user()->name) }}" />
									</div>
					    		</div>
					    		<div class="col-md-6 mt-3">
					    			<div class="form-outline">
					    				<label class="form-label" for="email">Email</label>
									  	<input type="text" id="email" name="email" class="form-control form-control-lg" value="{{ old('email', auth()->user()->email) }}" />
									</div>
					    		</div>
					    		<div class="col-md-6 mt-3">
					    			<div class="form-outline">
					    				<label class="form-label" for="mobile">Mobile</label>
									  	<input type="text" id="mobile" name="mobile" class="form-control form-control-lg" value="{{ old('mobile', auth()->user()->mobile) }}" />
									</div>
					    		</div>
					    		<div class="col-md-12 mt-3">
					    			<button type="submit" class="btn btn-primary">Update</button>
					    		</div>
				    		</div>
				    	</form>
				    </div>
			    </div>
			</div>

			<div class="col-md-12">
		  		<div class="card">
			  		<div class="card-header">
			  			<h5>Change Password</h5>
			  		</div>
			  		<div class="card-body">
				  		<form method="post" action="{{ route('change.password') }}">
				  			@csrf
				    		<div class="row">
					    		<div class="col-md-6 mt-3">
					    			<div class="form-outline">
					    				<label class="form-label" for="old_password">Old Password</label>
									  	<input type="text" id="old_password" name="old_password" class="form-control form-control-lg" value="{{ old('old_password') }}" required/>
									</div>
									@error('old_password')
									    <div class="error text-danger">{{ $message }}</div>
									@enderror
					    		</div>
					    		<div class="col-md-6 mt-3">
					    			<div class="form-outline">
					    				<label class="form-label" for="new_password">New Password</label>
									  	<input type="text" id="new_password" name="new_password" class="form-control form-control-lg" value="{{ old('new_password') }}" required/>
									</div>
									@error('new_password')
									    <div class="error text-danger">{{ $message }}</div>
									@enderror
					    		</div>
					    		<div class="col-md-6 mt-3">
					    			<div class="form-outline">
					    				<label class="form-label" for="confirm_new_password">Confirm New Password</label>
									  	<input type="text" id="confirm_new_password" name="confirm_new_password" class="form-control form-control-lg" value="{{ old('confirm_new_password') }}" required/>
									</div>
									@error('confirm_new_password')
									    <div class="error text-danger">{{ $message }}</div>
									@enderror
					    		</div>
					    		<div class="col-md-12 mt-3">
					    			<button type="submit" class="btn btn-primary">Update</button>
					    		</div>
				    		</div>
				    	</form>
				    </div>
			    </div>
			</div>
		</div>
    </div>
</section>
@endsection
