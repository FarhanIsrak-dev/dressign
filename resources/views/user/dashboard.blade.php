
@extends('user.layouts.master')
@section('content')
<!-- /banner_bottom_agile_info -->
<div class='container'>
	<br><br><br><br>
    <h2>Welcome {{ $user->first_name . ' '. $user->last_name }}</h2>
    <p>You can change your profile and every informations here..</p>
    <hr>

    <div class="row">
      <div class="col-md-4">
        <div class="card card-body mt-2 pointer" onclick="location.href='{{ route('user.profile') }}'">
          <button type="submit" class="btn btn-primary"><h3>Update Profile</h3></button>
        </div>
      </div>
    </div>
  </div>

@endsection