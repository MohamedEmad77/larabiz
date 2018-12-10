@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard <span class="pull-right"><a href="/listings/create" class="btn btn-success btn-xs">Create Listing</a></span></div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h3>Your Listings</h3>
                    @if(count($listings))
                      <table class="table table-striped">
                        <tr>
                          <th>Company Name</th>
                          <!-- <th>Company Email</th>
                          <th>Company phone</th>
                          <th>Company Website</th>
                          <th>Company address</th>
                          <th>Company bio</th> -->
                        </tr>

                          @foreach($listings as $listing)
                            <tr>
                              <td>{{$listing->name}}</td>
                              <!-- <td>{{$listing->email}}</td>
                              <td>{{$listing->phone}}</td>
                              <td>{{$listing->website}}</td>
                              <td>{{$listing->address}}</td>
                              <td>{{$listing->bio}}</td> -->
                              <td><a class="pull-right btn btn-default" href="/listings/{{$listing->id}}/edit">Edit</a></td>
                              <td>
                                {!! Form::open(['action' => ['ListingController@destroy', $listing->id], 'method' => 'POST', 'class'=> 'pull-left']) !!}

                                  {{Form::hidden('_method', 'DELETE')}}
                                  {{ Form::bsSubmit('Delete', ['class'=>'btn btn-danger pull-left']) }}
                                {!! Form::close() !!}
                              </td>

                            </tr>
                          @endforeach

                      </table>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
