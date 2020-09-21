
@extends('layouts.app')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Blank page
        <small>it all starts here</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Examples</a></li>
        <li class="active">Blank page</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Title</h3>
          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
              <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
        <h2>Add Client </h2>
            <form method="POST" action="{{ route('clients.store',$client->id) }}">           
                    @csrf
                    <input  type="hidden" name="id" value="{{ $client->id }}" > 
                    <div class="row">
						
						<div class="form-group col-md-6">
							<label for="name" class="col-md-12 col-form-label text-md-right">Name</label>
							<div class="col-md-12">
								<input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ $client->name }}" required autofocus>
								@if ($errors->has('name'))
									<span class="invalid-feedback">
										<strong>{{ $errors->first('name') }}</strong>
									</span>
								@endif
							</div>
						</div>
						<div class="form-group col-md-6">
							<label for="code" class="col-md-12 col-form-label text-md-right">email</label>
							<div class="col-md-12">
								<input id="email" type="text" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ $client->email }}" >
								@if ($errors->has('email'))
									<span class="invalid-feedback">
										<strong>{{ $errors->first('email') }}</strong>
									</span>
								@endif
							</div>
						</div>
						
						<div class="form-group col-md-6">
							<label for="phone" class="col-md-12 col-form-label text-md-right">Phone</label>
							<div class="col-md-12">
								<input id="phone" type="text" class="form-control" name="phone" value="{{ $client->phone }}" required>
								@if ($errors->has('phone'))
									<span class="invalid-feedback">
										<strong>{{ $errors->first('phone') }}</strong>
									</span>
								@endif
							</div>
						</div>
						<div class="form-group col-md-6">
							<label for="code" class="col-md-12 col-form-label text-md-right">GST</label>
							<div class="col-md-12">
								<input id="gst" type="text" class="form-control{{ $errors->has('gst') ? ' is-invalid' : '' }}" name="gst" value="{{ $client->gst }}" required>
								@if ($errors->has('gst'))
									<span class="invalid-feedback">
										<strong>{{ $errors->first('gst') }}</strong>
									</span>
								@endif
							</div>
						</div>
						<div class="form-group col-md-6">
							<label for="pan" class="col-md-12 col-form-label text-md-right">PAN</label>
							<div class="col-md-12">
								<input id="pan" type="text" class="form-control{{ $errors->has('pan') ? ' is-invalid' : '' }}" name="pan" value="{{ $client->pan }}"  required>
								@if ($errors->has('pan'))
									<span class="invalid-feedback">
										<strong>{{ $errors->first('pan') }}</strong>
									</span>
								@endif
							</div>
						</div>
						
						<div class="form-group col-md-6">
							<label for="address" class="col-md-12 col-form-label text-md-right">address</label>
							<div class="col-md-12">
								<input id="address" type="text" class="form-control{{ $errors->has('address') ? ' is-invalid' : '' }}" name="address" value="{{ $client->address }}" required autofocus>
								@if ($errors->has('address'))
									<span class="invalid-feedback">
										<strong>{{ $errors->first('address') }}</strong>
									</span>
								@endif
							</div>
						</div>
						
						<div class="form-group col-md-6">
							<label for="city" class="col-md-12 col-form-label text-md-right">city</label>
							<div class="col-md-12">
								<input id="pan" type="text" class="form-control{{ $errors->has('city') ? ' is-invalid' : '' }}" name="city" value="{{ $client->city }}"  required>
								@if ($errors->has('city'))
									<span class="invalid-feedback">
										<strong>{{ $errors->first('city') }}</strong>
									</span>
								@endif
							</div>
						</div>
						<div class="form-group col-md-6">
							<label for="state" class="col-md-12 col-form-label text-md-right">state</label>
							<div class="col-md-12">
							<select class="form-control" name="state">
							@foreach($state as $states)
							<option value="{{ $states->id}}" @if ($client->state==$states->id) selected @endif>{{ $states->state}}</option>                            
							@endforeach    
							</select>
								@if ($errors->has('state'))
									<span class="invalid-feedback">
										<strong>{{ $errors->first('state') }}</strong>
									</span>
								@endif
							</div>
						</div>
						<div class="form-group col-md-6">
							<label for="country" class="col-md-12 col-form-label text-md-right">country</label>
							<div class="col-md-12">
								<input id="country" type="text" class="form-control{{ $errors->has('country') ? ' is-invalid' : '' }}" name="country" value="{{ $client->country }}"  required>
								@if ($errors->has('country'))
									<span class="invalid-feedback">
										<strong>{{ $errors->first('country') }}</strong>
									</span>
								@endif
							</div>
						</div>
						<div class="form-group col-md-6">
							<label for="pincode" class="col-md-12 col-form-label text-md-right">pincode</label>
							<div class="col-md-12">		 
								<input id="pincode" type="text" class="form-control" name="pincode" value="{{ $client->pincode }}" required>
								@if ($errors->has('pincode'))
									<span class="invalid-feedback">
										<strong>{{ $errors->first('pincode') }}</strong>
									</span>
								@endif
							</div>
						</div>
						<div class="form-group col-md-12">
							<div class="col-md-12 ml-auto text-right">
								<button type="submit" class="btn btn-primary">
									Submit
								</button>
							</div>
						</div>
					</div>
            </form>
        </div>
 </div>
        <!-- /.box-body -->
        <div class="box-footer">
          Footer
        </div>
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->
  
    </section>
    <!-- /.content -->
@endsection

