@extends('backend.layouts.master')

@section('content')
  <div class="main-panel">
    <div class="content-wrapper">

      <div class="card">
        <div class="card-header">
          Manage Design Orders
        </div>
        <div class="card-body">
            @include('backend.partials.messages')
          <table class="table table-hover table-striped">
            <tr>
              <th>No.</th>
              <th>Person Details</th>
              <th>Dress Codes</th>
              <th>Measurements</th>            
                           
              <th>
                Delete
              </th>
            </tr>

            @foreach ($orders as $order)
              <tr>
                <td>
                {{ $loop->index + 1 }}
              </td>
              <td>
                <div class="row">
                  <div class="col-md-6 border-right">
                    <p><strong>Orderer Name : </strong>{{ $order->name }}</p>
                    <p><strong>Orderer Phone : </strong>{{ $order->contact }}</p>
                    <p><strong>Orderer Email : </strong>{{ $order->email }}</p>
                    <p><strong>Orderer Shipping Address : </strong>{{ $order->address }}</p>
                  </div>
                </div>
              </td>
              <td>
                <div class="row">
                  <div class="col-md-6 border-right">
                    <p><strong>Kameez Front : </strong>{{ $order->kf }}</p>
                    <p><strong>Sleeves : </strong>{{ $order->sleeve }}</p>
                    <p><strong>Neck Front : </strong>{{ $order->nf }}</p>
                    <p><strong>Bottom : </strong>{{ $order->bottom }}</p>
                  </div>
                   <div class="col-md-6">
                    <p><strong>Kameez Back: </strong> {{ $order->kb }}</p>
                    <p><strong>Neck Back: </strong> {{ $order->nb }}</p>
                  </div>
                </div>
              </td>
              <td>
                <div class="row">
                  <div class="col-md-6 border-right">
                    <p><strong>Ankle : </strong>{{ $order->ankle }}</p>
                    <p><strong>Armhole : </strong>{{ $order->armhole }}</p>
                    <p><strong>Around Head : </strong>{{ $order->aroundhead }}</p>
                    <p><strong>Back Full Body Kameez Length : </strong>{{ $order->fbklb }}</p>
                    <p><strong>Backwidth : </strong>{{ $order->backwidth }}</p>
                    <p><strong>Bottom Length : </strong>{{ $order->bottomlength }}</p>
                    <p><strong>Bust : </strong>{{ $order->bust }}</p>
                    <p><strong>Elbow : </strong>{{ $order->elbow }}</p>
                    <p><strong>Front Chest : </strong>{{ $order->frontchest }}</p>
                    <p><strong>Front Full Body Kameez Length : </strong>{{ $order->fbklf }}</p>
                    <p><strong>Shoulder to Waist(Front) : </strong>{{ $order->swf }}</p>
                    <p><strong>Full Sleeves : </strong>{{ $order->fullsleeve }}</p>
                  </div>
                   <div class="col-md-6">
                    <p><strong>Inside Leg: </strong> {{ $order->insideleg }}</p>
                    <p><strong>Hips: </strong> {{ $order->hip }}</p>
                    <p><strong>Mid Calf : </strong>{{ $order->midcalf }}</p>
                    <p><strong>Mid Thigh : </strong>{{ $order->midthigh }}</p>
                    <p><strong>Neck to Waist : </strong>{{ $order->nw }}</p>
                    <p><strong>Outside Leg : </strong>{{ $order->outleg }}</p>
                    <p><strong>Shoulder Size : </strong>{{ $order->shoulder }}</p>
                    <p><strong>Shoulder to Elbow : </strong>{{ $order->se }}</p>
                    <p><strong>Waist to Heap : </strong>{{ $order->wh }}</p>
                    <p><strong>Waist : </strong>{{ $order->waist }}</p>
                    <p><strong>Wrist : </strong>{{ $order->wrist }}</p>
                  </div>
                </div>
              </td>

             
              
              <td>
                <form class="form-inline" action="{{ route('admin.designorder.delete', $order->id) }}" method="post">
                  @csrf
                  <input type="hidden" name="order_id" />
                  <button type="submit" class="btn btn-danger">Delete</button>
                </form>
              </td>
              </tr>
            @endforeach

          </table>
        </div>
      </div>

    </div>
  </div>
  <!-- main-panel ends -->
@endsection
