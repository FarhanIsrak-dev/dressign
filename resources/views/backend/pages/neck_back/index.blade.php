@extends('backend.layouts.master')

@section('content')
  <div class="main-panel">
    <div class="content-wrapper">

      <div class="card">
        <div class="card-header">
          Manage Neck Back
        </div>
        <div class="card-body">
            @include('backend.partials.messages')
          <table class="table table-hover table-striped">
            <tr>
              <th>#</th>
              <th>Neck Back Name</th>
              <th>Neck Back Image</th>
              <th>Action</th>
            </tr>

            @foreach ($neck_back as $neck_back)
              <tr>
                <td>#</td>
                <td>{{ $neck_back->code }}</td>
                <td>
                  <img src="{!! asset('images/neck_back/'.$neck_back->image) !!}" width="100">
                </td>

                <td>
                  <a href="{{ route('admin.neck_back.edit', $neck_back->id) }}" class="btn btn-success">Edit</a>

                  <a href="#deleteModal{{ $neck_back->id }}" data-toggle="modal" class="btn btn-danger">Delete</a>

                  <!-- Delete Modal -->
                  <div class="modal fade" id="deleteModal{{ $neck_back->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Are sure to delete?</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <form action="{!! route('admin.neck_back.delete', $neck_back->id) !!}"  method="post">
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
