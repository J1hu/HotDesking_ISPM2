@extends('layouts.app')

@section('content')

<div class="container" >
  <h1 class="text-left pt-5 pb-5 display-4"><strong>Dashboard</strong></h2>
  <p>Wed feb 23,2022</p>
  <div style="position: relative; height: 740px; overflow: auto; display: block; background: rgba(9, 9, 9, 0.8); border-radius: 10px;" id="carouselExampleControls" class="carousel slide" data-bs-interval="false" data-ride="carousel" data-pause="hover">
   <div class="col-auto ml-5 mt-4" >
    <div class="input-group mb-2" style="border-radius: 20px;">
      <div class="input-group-prepend">
        <div class="input-group-text">
          <img src="{{URL('images/calendar-icon.png')}}" width="10" height="10">
        </div>
      </div>
      <input style=" max-width: 300px; width: 18rem; background: #C4C4C4;" type="text" class="date form-control align-left" placeholder="Datepicker"/>
      <span class="input-group-addon">
        <span class="glyphicon glyphicon-calendar"></span>
      </span>
    </div>
  </div>
    <div class="carousel-inner">
      <div class="carousel-item active " style="color: #FFFFFF; font-family: 'Signika SC';" >
        <h2 class="text-center display-4"><strong>Table 1</strong></h2> 
          <table class="table table-bordered mb-0 " style="color: #FFFFFF; font-family: 'Roboto'; text-align: center;" >
            <thead>
              <tr>
                <th scope="col">Time</th>
                <th scope="col">Chair #1</th>
                <th scope="col">Chair #2</th>
                <th scope="col">Chair #3</th>
                <th scope="col">Chair #4</th>
              </tr>
            </thead>
            <tbody>
              <tr style="color: #F7B51F;">
                <td scope="row">12:00 am</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              <tr style="color: #F7B51F;">
                <td scope="row">1:00 am</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              <tr style="color: #F7B51F;">
                <td scope="row">2:00 am</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              <tr style="color: #F7B51F;">
                <td scope="row">3:00 am</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              <tr style="color: #F7B51F;">
                <td scope="row">4:00 am</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              <tr style="color: #F7B51F;">
                <td scope="row">5:00 am</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              <tr style="color: #F7B51F;">
                <td scope="row">6:00 am</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              <tr style="color: #F7B51F;">
                <td scope="row">7:00 am</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              <tr style="color: #F7B51F;">
                <td scope="row">8:00 am</td>
                <td></td>
                <td></td>
                <td><b>Occupied<b></td>
                <td><b>Occupied<b></td>
              </tr>
              <tr style="color: #F7B51F;">
                <td scope="row">9:00 am</td>
                <td></td>
                <td></td>
                <td><b>Occupied<b></td>
                <td><b>Occupied<b></td>
              </tr>
              <tr style="color: #F7B51F;">
                <td scope="row">10:00 am</td>
                <td></td>
                <td></td>
                <td></td>
                <td><b>Occupied<b></td>
              </tr>
              <tr style="color: #F7B51F;">
                <td scope="row">11:00 am</td>
                <td></td>
                <td><b>Occupied<b></td>
                <td></td>
                <td></td>
              </tr>
              <tr style="color: #F7B51F;">
                <td scope="row">12:00 pm</td>
                <td></td>
                <td><b>Occupied<b></td>
                <td></td>
              </tr>
              <tr style="color: #F7B51F;">
                <td scope="row">1:00 pm</td>
                <td><b>Occupied<b></td>
                <td><b>Occupied<b></td>
                <td></td>
                <td></td>
              </tr>
              <tr style="color: #F7B51F;">
                <td scope="row">2:00 pm</td>
                <td><b>Occupied<b></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              <tr style="color: #F7B51F;">
                <td scope="row">3:00 pm</td>
                <td><b>Occupied<b></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              <tr style="color: #F7B51F;">
                <td scope="row">4:00 pm</td>
                <td></td>
                <td></td>
                <td><b>Occupied<b></td>
                <td></td>
              </tr>
              <tr style="color: #F7B51F;">
                <td scope="row">5:00 pm</td>
                <td></td>
                <td></td>
                <td><b>Occupied<b></td>
                <td></td>
              </tr>
              <tr style="color: #F7B51F;">
                <td scope="row">6:00 pm</td>
                <td><b>Occupied<b></td>
                <td></td>
                <td><b>Occupied<b></td>
                <td></td>
              </tr>
              <tr style="color: #F7B51F;">
                <td scope="row">7:00 pm</td>
                <td><b>Occupied<b></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              <tr style="color: #F7B51F;">
                <td scope="row">8:00 pm</td>
                <td><b>Occupied<b></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              <tr style="color: #F7B51F;">
                <td scope="row">9:00 pm</td>
                <td><b>Occupied<b></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              <tr style="color: #F7B51F;">
                <td scope="row">10:00 pm</td>
                <td><b>Occupied<b></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              <tr style="color: #F7B51F;">
                <td scope="row">11:00 pm</td>
                <td><b>Occupied<b></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
            </tbody>
          </table>
      </div>
      <div class="carousel-item" style="color: #FFFFFF; font-family: 'Signika SC';">
        <h2 class="text-center display-4"><strong>Table 2</strong></h2>  
          <table class="table table-bordered mb-0 " style="color: #FFFFFF; font-family: 'Roboto'; text-align: center;">
            <thead>
              <tr>
                <th scope="col">Time</th>
                <th scope="col">Chair #5</th>
                <th scope="col">Chair #6</th>
                <th scope="col">Chair #7</th>
                <th scope="col">Chair #8</th>
              </tr>
            </thead>
            <tbody>
              <tr style="color: #F7B51F;">
                <td scope="row">12:00 am</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              <tr style="color: #F7B51F;">
                <td scope="row">1:00 am</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              <tr style="color: #F7B51F;">
                <td scope="row">2:00 am</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              <tr style="color: #F7B51F;">
                <td scope="row">3:00 am</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              <tr style="color: #F7B51F;">
                <td scope="row">4:00 am</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              <tr style="color: #F7B51F;">
                <td scope="row">5:00 am</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              <tr style="color: #F7B51F;">
                <td scope="row">6:00 am</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              <tr style="color: #F7B51F;">
                <td scope="row">7:00 am</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              <tr style="color: #F7B51F;">
                <td scope="row">8:00 am</td>
                <td></td>
                <td></td>
                <td><b>Occupied<b></td>
                <td><b>Occupied<b></td>
              </tr>
              <tr style="color: #F7B51F;">
                <td scope="row">9:00 am</td>
                <td></td>
                <td></td>
                <td><b>Occupied<b></td>
                <td><b>Occupied<b></td>
              </tr>
              <tr style="color: #F7B51F;">
                <td scope="row">10:00 am</td>
                <td></td>
                <td></td>
                <td></td>
                <td><b>Occupied<b></td>
              </tr>
              <tr style="color: #F7B51F;">
                <td scope="row">11:00 am</td>
                <td></td>
                <td><b>Occupied<b></td>
                <td></td>
                <td></td>
              </tr>
              <tr style="color: #F7B51F;">
                <td scope="row">12:00 pm</td>
                <td></td>
                <td><b>Occupied<b></td>
                <td></td>
              </tr>
              <tr style="color: #F7B51F;">
                <td scope="row">1:00 pm</td>
                <td><b>Occupied<b></td>
                <td><b>Occupied<b></td>
                <td></td>
                <td></td>
              </tr>
              <tr style="color: #F7B51F;">
                <td scope="row">2:00 pm</td>
                <td><b>Occupied<b></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              <tr style="color: #F7B51F;">
                <td scope="row">3:00 pm</td>
                <td><b>Occupied<b></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              <tr style="color: #F7B51F;">
                <td scope="row">4:00 pm</td>
                <td></td>
                <td></td>
                <td><b>Occupied<b></td>
                <td></td>
              </tr>
              <tr style="color: #F7B51F;">
                <td scope="row">5:00 pm</td>
                <td></td>
                <td></td>
                <td><b>Occupied<b></td>
                <td></td>
              </tr>
              <tr style="color: #F7B51F;">
                <td scope="row">6:00 pm</td>
                <td><b>Occupied<b></td>
                <td></td>
                <td><b>Occupied<b></td>
                <td></td>
              </tr>
              <tr style="color: #F7B51F;">
                <td scope="row">7:00 pm</td>
                <td><b>Occupied<b></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              <tr style="color: #F7B51F;">
                <td scope="row">8:00 pm</td>
                <td><b>Occupied<b></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              <tr style="color: #F7B51F;">
                <td scope="row">9:00 pm</td>
                <td><b>Occupied<b></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              <tr style="color: #F7B51F;">
                <td scope="row">10:00 pm</td>
                <td><b>Occupied<b></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              <tr style="color: #F7B51F;">
                <td scope="row">11:00 pm</td>
                <td><b>Occupied<b></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
            </tbody>
          </table>
      </div>
    </div>
    <a class="carousel-control-prev d-flex align-items-start mt-5 pt-5" href="#carouselExampleControls" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next d-flex align-items-start mt-5 pt-5" href="#carouselExampleControls" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

  <div class="container pb-5 pt-5" >
    <div class="row">
      <div class="col-sm pb-3 pt-3 d-flex justify-content-center">
        <div class="card" style="width: 18rem; border-radius: 15px; background: rgba(9, 9, 9, 0.8);">
            <div class="card-body" style="color: #EA7101;">
              <div class="d-flex justify-content-center">
                <img src="{{URL('images/occupied.png') }}" class="figure-img img-fluid rounded mt-4 ml-3 mb-4" width="66" height="59" >
                <div class="col-sm mt-2">
                  <h5 class="text-left align-center mt-3">Occupied</h5>
                  <h1 class="text-left">-14</h1>
                </div>
              </div>
            </div>
        </div>
      </div>
      <div class="col-sm pb-3 pt-3 d-flex justify-content-center">
        <div class="card" style="width: 18rem; border-radius: 15px; background: rgba(9, 9, 9, 0.8);">
            <div class="card-body" style="color: #EA7101;">
              <div class="d-flex justify-content-center">
                <img src="{{URL('images/reserved.png') }}" class="figure-img img-fluid rounded mt-4 ml-3 mb-4" width="66" height="59" >
                <div class="col-sm mt-2">
                  <h5 class="text-left align-center mt-3">Reserved</h5>
                  <h1 class="text-left">+80</h1>
                </div>
              </div>
            </div>
        </div>
      </div>
      <div class="col-sm pb-3 pt-3 d-flex justify-content-center">
        <div class="card" style="width: 18rem; border-radius: 15px; background: rgba(9, 9, 9, 0.8);">
            <div class="card-body" style="color: #EA7101;">
              <div class="d-flex justify-content-center">
                <img src="{{URL('images/available.png') }}" class="figure-img img-fluid rounded mt-4 ml-3 mb-4" width="66" height="59" >
                <div class="col-sm mt-2">
                  <h5 class="text-left align-center mt-3">Available</h5>
                  <h1 class="text-left">+56</h1>
                </div>
              </div>
            </div>
        </div>
      </div>
</div>

@endsection