
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

                    <div class="form-group row">
                        <label for="name" class="col-md-4 col-form-label text-md-right">Name</label>

                        <div class="col-md-6">
                            <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ $client->name }}" required autofocus>

                            @if ($errors->has('name'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="code" class="col-md-4 col-form-label text-md-right">GST</label>

                        <div class="col-md-6">
                            <input id="gst" type="text" class="form-control{{ $errors->has('gst') ? ' is-invalid' : '' }}" name="gst" value="{{ $client->gst }}" required>

                            @if ($errors->has('gst'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('gst') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="pan" class="col-md-4 col-form-label text-md-right">PAN</label>

                        <div class="col-md-6">
                            <input id="pan" type="text" class="form-control{{ $errors->has('pan') ? ' is-invalid' : '' }}" name="pan" value="{{ $client->pan }}"  required>

                            @if ($errors->has('pan'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('pan') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="phone" class="col-md-4 col-form-label text-md-right">Phone</label>

                        <div class="col-md-6">
                            <input id="phone" type="text" class="form-control" name="phone" value="{{ $client->phone }}" required>
                            @if ($errors->has('phone'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('phone') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group row mb-0">
                        <div class="col-md-6 offset-md-4">
                            <button type="submit" class="btn btn-primary">
                                Submit
                            </button>
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

