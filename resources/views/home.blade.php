@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="text-left pt-5 display-4"><strong>Dashboard</strong></h2>
    <p>Wed feb 23,2022</p>
    <div class="container pb-5">
        <div class="row">
          <div class="col-sm">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                  <h5 class="text-right">Occupied</h5>
                  <img src="{{URL('images/occupied.png') }}" class="figure-img img-fluid rounded">
                </div>
            </div>
          </div>
          <div class="col-sm">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="text-right">Reserved</h5>
                    <img src="{{URL('images/reserved.png') }}" class="figure-img img-fluid rounded">
                </div>
            </div>
          </div>
          <div class="col-sm">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="text-right">Available</h5>
                    <img src="{{URL('images/available.png') }}" class="figure-img img-fluid rounded">
                </div>
            </div>
          </div>
        </div>
      </div>



</div>
@endsection