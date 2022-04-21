@extends('layouts.app')

@section('content')

<div class="container pb-5" >
  <h1 class="text-left pt-5 pb-5 display-4"><b>Calendar</b></h2>
  <p>Wed feb 23,2022</p>
  <div style="position: relative; height: 740px; overflow: auto; display: block; background: rgba(9, 9, 9, 0.8); border-radius: 10px;" >
   <div class="col-auto mt-4 " >
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
        <table class="table table-bordered" style="color: #FFFFFF; font-family: 'Roboto'; text-align: center;">
            <thead>
              <tr>
                <th scope="col">Title</th>
                <th scope="col">Description</th>
                <th scope="col">Date</th>
                <th scope="col">Location</th>
              </tr>
            </thead>
            <tbody>
              <tr style="color: #F7B51F;">
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              <tr style="color: #F7B51F;">
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              <tr style="color: #F7B51F;">
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              <tr style="color: #F7B51F;">
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              <tr style="color: #F7B51F;">
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              <tr style="color: #F7B51F;">
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              <tr style="color: #F7B51F;">
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              <tr style="color: #F7B51F;">
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              <tr style="color: #F7B51F;">
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              <tr style="color: #F7B51F;">
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              <tr style="color: #F7B51F;">
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              <tr style="color: #F7B51F;">
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              <tr style="color: #F7B51F;">
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              <tr style="color: #F7B51F;">
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              <tr style="color: #F7B51F;">
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              <tr style="color: #F7B51F;">
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              <tr style="color: #F7B51F;">
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              <tr style="color: #F7B51F;">
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              <tr style="color: #F7B51F;">
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              <tr style="color: #F7B51F;">
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              <tr style="color: #F7B51F;">
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              <tr style="color: #F7B51F;">
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              <tr style="color: #F7B51F;">
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              <tr style="color: #F7B51F;">
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
            </tbody>
          </table>
    </div>

@endsection