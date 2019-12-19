@extends('backend.layouts.master')

@section('content')
  <div class="main-panel">
    <div class="content-wrapper">

      <div class="card">
        <div class="card-header">
          Edit Neck Front
        </div>
        <div class="card-body">
          <form action="{{ route('admin.neck_front.update', $neck_front->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            @include('backend.partials.messages')
            <div class="form-group">
              <label for="code">Name</label>
              <input type="text" class="form-control" name="code" id="code" aria-describedby="emailHelp" value="{{ $neck_front->code }}">
            </div>



            <div class="form-group">
              <label for="oldimage">Neck Front Old Image</label> <br>

              <img src="{!! asset('images/neck_front/'.$neck_front->image) !!}" width="100"> <br>

              <label for="image">Neck Front New  Image </label>

              <input type="file" class="form-control" name="image" id="image" >
            </div>


            <button type="submit" class="btn btn-success">Update Neck Front</button>
          </form>
        </div>
      </div>

    </div>
  </div>
  <!-- main-panel ends -->
@endsection
