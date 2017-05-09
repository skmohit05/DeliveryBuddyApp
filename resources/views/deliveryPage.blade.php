@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="navigation">
                  <ul class="nav nav-pills">
                    <li role="presentation" class="active"><a href="{{ route('home') }}">Pickup Location</a></li>
                    <li role="presentation"><a href="{{ route('deliveryRoute') }}">Delivery Location</a></li>
                  </ul>
                </div>

                <div class="pick-up-pallete">
                  <table class="table" style="background-color:yellow;">
                    <tr>
                      <th>Item 1</th>
                      <td>Sambhar</td>
                    </tr>
                    <tr>
                      <th>Delivery Time</th>
                      <td>10:45pm</td>
                    </tr>
                    <tr>
                      <th>Name</th>
                      <td>Mohit Kumar Meena</td>
                    </tr>
                    <tr>
                      <th>Delivery Address</th>
                      <td>room no. 212 mandakini hostel iit madras chennai</td>
                    </tr>
                  </table>

                  <table class="table" style="background-color:yellow;">
                    <tr>
                      <th>Item 1</th>
                      <td>Sambhar</td>
                    </tr>
                    <tr>
                      <th>Delivery Time</th>
                      <td>10:45pm</td>
                    </tr>
                    <tr>
                      <th>Name</th>
                      <td>Mohit Kumar Meena</td>
                    </tr>
                    <tr>
                      <th>Delivery Address</th>
                      <td>room no. 212 mandakini hostel iit madras chennai</td>
                    </tr>
                  </table>

                  <table class="table" style="background-color:yellow;">
                    <tr>
                      <th>Item 1</th>
                      <td>Sambhar</td>
                    </tr>
                    <tr>
                      <th>Delivery Time</th>
                      <td>10:45pm</td>
                    </tr>
                    <tr>
                      <th>Name</th>
                      <td>Mohit Kumar Meena</td>
                    </tr>
                    <tr>
                      <th>Delivery Address</th>
                      <td>room no. 212 mandakini hostel iit madras chennai</td>
                    </tr>
                  </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
