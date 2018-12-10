@extends('layouts.app')

@section('content')
  <div class="container">
      <div class="row">
          <div class="col-md-8 col-md-offset-2">
              <div class="panel panel-default">
                  <div class="panel-heading">Edit Listing <a href="/dashboard" class="pull-right btn btn-default btn-xs">Go Back</a></div>

                  <div class="panel-body">
                      @if (session('status'))
                          <div class="alert alert-success">
                              {{ session('status') }}
                          </div>
                      @endif

                      {!! Form::open(['action' => ['ListingController@update', $listing->id], 'method' => 'POST']) !!}
                        {{ Form::bsText('name', $listing->name, ['placeholder'=>'Company name']) }}
                        {{ Form::bsText('email', $listing->email, ['placeholder'=>'Company email']) }}
                        {{ Form::bsText('phone', $listing->phone, ['placeholder'=>'Company phone']) }}
                        {{ Form::bsText('website', $listing->website, ['placeholder'=>'Company website']) }}
                        {{ Form::bsText('address', $listing->address, ['placeholder'=>'Company address']) }}
                        {{ Form::bsTextArea('bio', $listing->bio, ['placeholder'=>'about your bussiness']) }}
                        {{Form::hidden('_method', 'PUT')}}
                        {{ Form::bsSubmit('submit') }}
                      {!! Form::close() !!}


                  </div>
              </div>
          </div>
      </div>
  </div>
@endsection
