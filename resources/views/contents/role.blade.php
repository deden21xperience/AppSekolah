@extends('administrasi.template')
@section('title_section', 'Manajemen Permisions')
@section('main-content')

<div class="card shadow mb-4">
  <div class="card-header py-3">
    <!-- Button trigger modal -->
    <button style="float: right;" type="button" class="btn btn-primary" data-toggle="modal"
      data-target="#staticBackdrop"> <i class="fas fa-plus"></i> Role
    </button>
  </div>
  <div class="card-body">
    <table class="table table-striped">
      <thead class="thead-light">
        <tr>
          <th>No</th>
          <th>Role</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($role as $item)
        <tr>
          <td>{{ $loop->iteration}}</td>
          <td>{{ $item->name }}</td>
          <td>
            <form action="{{ route('delete_role',$item->id) }}" method="post" class="d-inline">
              @csrf
              @method('delete')
              <button type="submit" class="btn btn-danger">delete</button>
            </form>
            <a href="#" class="btn btn-warning">edit</a>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1"
  aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Role</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="{{ route('create_role') }}" method="POST" id="create_role_form">
          @csrf
          <div class="form-group">
            <label for="">Role</label>
            <input type="text" class="form-control @error ('role_title') is-invalid @enderror" name="role_title">
            @error ('role_title') <div class="invalid-feedback">{{ $message }}</div> @enderror
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        {{-- <button type="submit" class="btn btn-primary">Save changes</button> --}}
        <a class="btn btn-primary" href="{{ route('create_permission') }}"
          onclick="event.preventDefault();
                                                                               document.getElementById('create_role_form').submit();">
          <i class="fas fa-save"></i> {{ __('Save Changes') }}
        </a>
        {{-- <form id="create_role_form" action="{{ route('create_permission') }}" method="POST" class="d-none">
        @csrf
        </form> --}}
      </div>
    </div>
  </div>
</div>
@endsection