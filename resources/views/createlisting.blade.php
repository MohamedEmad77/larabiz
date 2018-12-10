@extends('layouts.app')

@section('content')
  <div class="container">
      <div class="row">
          <div class="col-md-8 col-md-offset-2">
              <div class="panel panel-default">
                  <div class="panel-heading">Create Listing<a href="/dashboard" class="pull-right btn btn-default btn-xs">Go Back</a></div>

                  <div class="panel-body">
                      @if (session('status'))
                          <div class="alert alert-success">
                              {{ session('status') }}
                          </div>
                      @endif

                      {!! Form::open(['action' => 'ListingController@store', 'method' => 'POST']) !!}
                        {{ Form::bsText('name', '', ['placeholder'=>'Company name']) }}
                        {{ Form::bsText('email', '', ['placeholder'=>'Company email']) }}
                        {{ Form::bsText('phone', '', ['placeholder'=>'Company phone']) }}
                        {{ Form::bsText('website', '', ['placeholder'=>'Company website']) }}
                        {{ Form::bsText('address', '', ['placeholder'=>'Company address']) }}
                        {{ Form::bsTextArea('bio', '', ['placeholder'=>'about your bussiness']) }}
                        {{ Form::bsSubmit('submit') }}
                      {!! Form::close() !!}


                  </div>
              </div>
          </div>
      </div>
  </div>
@endsection
