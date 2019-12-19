@extends('backend.layouts.master')

@section('content')
  <div class="main-panel">
    <div class="content-wrapper">

      <div class="card">
        <div class="card-header">
          Edit Kameez Front
        </div>
        <div class="card-body">
          <form action="{{ route('admin.kameez_front.update', $kameez_front->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            @include('backend.partials.messages')
            <div class="form-group">
              <label for="code">Name</label>
              <input type="text" class="form-control" name="code" id="code" aria-describedby="emailHelp" value="{{ $kameez_front->code }}">
            </div>



            <div class="form-group">
              <label for="oldimage">Kameez Front Old Image</label> <br>

              <img src="{!! asset('images/kameez_front/'.$kameez_front->image) !!}" width="100"> <br>

              <label for="image">Kameez Front New  Image </label>

              <input type="file" class="form-control" name="image" id="image" >
            </div>


            <button type="submit" class="btn btn-success">Update Kameez Front</button>
          </form>
        </div>
      </div>

    </div>
  </div>
  <!-- main-panel ends -->
@endsection
