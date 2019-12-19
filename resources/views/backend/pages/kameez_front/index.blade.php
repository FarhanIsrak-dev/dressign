@extends('backend.layouts.master')

@section('content')
  <div class="main-panel">
    <div class="content-wrapper">

      <div class="card">
        <div class="card-header">
          Manage Kameez Front
        </div>
        <div class="card-body">
            @include('backend.partials.messages')
          <table class="table table-hover table-striped">
            <tr>
              <th>#</th>
              <th>Kameez Front Name</th>
              <th>Kameez Front Image</th>
              <th>Action</th>
            </tr>

            @foreach ($kameez_front as $kameez_front)
              <tr>
                <td>#</td>
                <td>{{ $kameez_front->code }}</td>
                <td>
                  <img src="{!! asset('images/kameez_front/'.$kameez_front->image) !!}" width="100">
                </td>

                <td>
                  <a href="{{ route('admin.kameez_front.edit', $kameez_front->id) }}" class="btn btn-success">Edit</a>

                  <a href="#deleteModal{{ $kameez_front->id }}" data-toggle="modal" class="btn btn-danger">Delete</a>

                  <!-- Delete Modal -->
                  <div class="modal fade" id="deleteModal{{ $kameez_front->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Are sure to delete?</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <form action="{!! route('admin.kameez_front.delete', $kameez_front->id) !!}"  method="post">
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger">Permanent Delete</button>
                          </form>

                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                        </div>
                      </div>
                    </div>
                  </div>

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
