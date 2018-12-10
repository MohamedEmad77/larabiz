@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">{{$listing->name}}</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif



                        <ul class="list-group">

                          <li class="list-group-item">Address: {{$listing->address}}</li>
                          <li class="list-group-item">Website: {{$listing->website}}</li>
                          <li class="list-group-item">email: {{$listing->email}}</li>
                          <li class="list-group-item">phone: {{$listing->phone}}</li>
                          <li class="list-group-item">Address: {{$listing->address}}</li>

                        </ul>
                        <hr>
                        <div class="well">
                          {{$listing->bio}}
                        </div>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
