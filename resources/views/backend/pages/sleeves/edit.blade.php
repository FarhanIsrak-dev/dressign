@extends('backend.layouts.master')

@section('content')
  <div class="main-panel">
    <div class="content-wrapper">

      <div class="card">
        <div class="card-header">
          Edit Sleeves
        </div>
        <div class="card-body">
          <form action="{{ route('admin.sleeves.update', $sleeves->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            @include('backend.partials.messages')
            <div class="form-group">
              <label for="code">Name</label>
              <input type="text" class="form-control" name="code" id="code" aria-describedby="emailHelp" value="{{ $sleeves->code }}">
            </div>



            <div class="form-group">
              <label for="oldimage">Sleeves Old Image</label> <br>

              <img src="{!! asset('images/sleeves/'.$sleeves->image) !!}" width="100"> <br>

              <label for="image">Sleeves New  Image </label>

              <input type="file" class="form-control" name="image" id="image" >
            </div>


            <button type="submit" class="btn btn-success">Update Sleeves</button>
          </form>
        </div>
      </div>

    </div>
  </div>
  <!-- main-panel ends -->
@endsection
