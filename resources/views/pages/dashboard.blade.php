@extends('layouts.app')

@section('content')

<div class="container" >
    <h1 class="text-left pt-5 display-4"><strong>Dashboard</strong></h2>
    <p>Wed feb 23,2022</p>
    <div style="position: relative; height: 740px; overflow: auto; display: block; background: rgba(9, 9, 9, 0.8); border-radius: 10px;" id="carouselExampleControls" class="carousel slide" data-bs-interval="false" data-ride="carousel" data-pause="hover">
      <div class="carousel-inner">
        <div class="carousel-item active " style="color: #FFFFFF; font-family: 'Signika SC';" >
          <h2 class="text-center display-4"><strong>Table 1</strong></h2> 
            <table class="table table-bordered mb-0 " style="color: #FFFFFF; font-family: 'Roboto';" >
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
            <table class="table table-bordered mb-0 " style="color: #FFFFFF; font-family: 'Roboto';">
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
      <a class="carousel-control-prev d-flex align-items-start mt-4" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next d-flex align-items-start mt-4" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>

    <div class="container pb-5 pt-5" >
      <div class="row">
        <div class="col-sm">
          <div class="card" style="width: 18rem; border-radius: 25px; background: rgba(9, 9, 9, 0.8);">
              <div class="card-body" style="color: #EA7101;">
                <h5 class="text-right">Occupied</h5>
                <img src="{{URL('images/occupied.png') }}" class="figure-img img-fluid rounded" >
                <h1 class="text-right">-14</h1>
              </div>
          </div>
        </div>
        <div class="col-sm">
          <div class="card" style="width: 18rem; border-radius: 25px; background: rgba(9, 9, 9, 0.8);">
              <div class="card-body" style="color: #EA7101;">
                  <h5 class="text-right">Reserved</h5>
                  <img src="{{URL('images/reserved.png') }}" class="figure-img img-fluid rounded">
                  <h1 class="text-right">+80</h1>
              </div>
          </div>
        </div>
        <div class="col-sm">
          <div class="card" style="width: 18rem; border-radius: 25px; background: rgba(9, 9, 9, 0.8);">
              <div class="card-body" style="color: #EA7101;">
                  <h5 class="text-right">Available</h5>
                  <img src="{{URL('images/available.png') }}" class="figure-img img-fluid rounded">
                  <h1 class="text-right">+56</h1>
              </div>
          </div>
        </div>
      </div>
    </div>
</div>

<style type="text/css">
  .my-custom-scrollbar {
position: relative;
height: 200px;
overflow: auto;
}
.table-wrapper-scroll-y {
display: block;
}
</style>

@endsection