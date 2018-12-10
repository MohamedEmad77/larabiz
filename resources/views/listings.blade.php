@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Latest Bussiness listings</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <!-- <h3>YouListings</h3> -->
                    @if(count($listings))

                        <ul>
                          @foreach($listings as $listing)
                            <li class="list-group-item"><a href="/listings/{{$listing->id}}">{{$listing->name}}</a></li>
                          @endforeach
                        </ul>

                    @else
                      <p>No listing found</p>

                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
