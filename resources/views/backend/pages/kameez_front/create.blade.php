@extends('backend.layouts.master')

@section('content')
  <div class="main-panel">
    <div class="content-wrapper">

      <div class="card">
        <div class="card-header">
          Add Kameez Front
        </div>
        <div class="card-body">
          <form action="{{ route('admin.kameez_front.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            @include('backend.partials.messages')
            <div class="form-group">
              <label for="code">Name</label>
              <input type="text" class="form-control" name="code" id="code" aria-describedby="emailHelp" placeholder="Enter Kameez Front Name">
            </div>

            <div class="form-group">
              <label for="image">Kameez Front Image</label>
              <input type="file" class="form-control" name="image" id="image" >
            </div>


            <button type="submit" class="btn btn-primary">Add Kameez Front</button>
          </form>
        </div>
      </div>

    </div>
  </div>
  <!-- main-panel ends -->
@endsection