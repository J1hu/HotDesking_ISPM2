@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="text-left pt-5 display-4"><strong>Dashboard</strong></h2>
    <p>Wed feb 23,2022</p>
    <div class="divTable" style="display: flex; align-items: center;">
             <div class="headRow">
                <div class="divCell">Customer ID</div>
                <div  class="divCell">Customer Name</div>
                <div  class="divCell">Customer Address</div>
             </div>
            <div class="divRow">
                  <div class="divCell">001</div>
                <div class="divCell">002</div>
                <div class="divCell">003</div>
            </div>
            <div class="divRow">
                <div class="divCell">xxx</div>
                <div class="divCell">yyy</div>
                <div class="divCell">www</div>
           </div>
            <div class="divRow">
                <div class="divCell">ttt</div>
                <div class="divCell">uuu</div>
                <div class="divCell">Mkkk</div>
           </div>
      </div>

    <div class="container pb-5" style="margin: 35px;">
        <div class="row">
          <div class="col-sm">
            <div class="card" style="width: 18rem; border-radius: 25px; padding: 35px; background: rgba(9, 9, 9, 0.8);">
                <div class="card-body" style="color: #EA7101;">
                  <h5 class="text-right">Occupied</h5>
                  <img src="{{URL('images/occupied.png') }}" class="figure-img img-fluid rounded">
                </div>
            </div>
          </div>
          <div class="col-sm">
            <div class="card" style="width: 18rem; border-radius: 25px; padding: 35px; background: rgba(9, 9, 9, 0.8);">
                <div class="card-body" style="color: #EA7101;">
                    <h5 class="text-right">Reserved</h5>
                    <img src="{{URL('images/reserved.png') }}" class="figure-img img-fluid rounded">
                </div>
            </div>
          </div>
          <div class="col-sm">
            <div class="card" style="width: 18rem; border-radius: 25px; padding: 35px; background: rgba(9, 9, 9, 0.8);">
                <div class="card-body" style="color: #EA7101;">
                    <h5 class="text-right">Available</h5>
                    <img src="{{URL('images/available.png') }}" class="figure-img img-fluid rounded">
                </div>
            </div>
          </div>
        </div>
      </div>
      <style type="text/css">
    .divTable
    {
        display:  table;
        width:auto;
        background-color:#eee;
        border:1px solid  #666666;
        border-spacing:5px;
    }

    .divRow
    {
       display:table-row;
       width:auto;
    }

    .divCell
    {
        float:left;/*fix for  buggy browsers*/
        display:table-column;
        width:200px;
        background-color:#ccc;
    }
</style>



</div>
@endsection