@extends('backend.layouts.master')

@section('content')
  <div class="main-panel">
    <div class="content-wrapper">

      <div class="card">
        <div class="card-header">
          Edit Neck Back
        </div>
        <div class="card-body">
          <form action="{{ route('admin.neck_back.update', $neck_back->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            @include('backend.partials.messages')
            <div class="form-group">
              <label for="code">Name</label>
              <input type="text" class="form-control" name="code" id="code" aria-describedby="emailHelp" value="{{ $neck_back->code }}">
            </div>



            <div class="form-group">
              <label for="oldimage">Neck Back Old Image</label> <br>

              <img src="{!! asset('images/neck_back/'.$neck_back->image) !!}" width="100"> <br>

              <label for="image">Neck Back New  Image </label>

              <input type="file" class="form-control" name="image" id="image" >
            </div>


            <button type="submit" class="btn btn-success">Update Neck Back</button>
          </form>
        </div>
      </div>

    </div>
  </div>
  <!-- main-panel ends -->
@endsection
