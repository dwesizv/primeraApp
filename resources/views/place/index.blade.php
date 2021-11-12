@extends('admin.base')

@section('content')
<div class="modal" id="modalDelete" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Confirm delete</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>Confirm delete <span id="deletePlace">XXX</span>?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
        <form id="modalDeleteResourceForm" action="" method="post">
            @method('delete')
            @csrf
            <input type="submit" class="btn btn-primary" value="Delete place"/>
        </form>
      </div>
    </div>
  </div>
</div>

<h1>Performance Enterprise</h1>
@if(Session::has('message'))
    <div class="alert alert-{{ session()->get('type') }}" role="alert">
        {{ session()->get('message') }}
    </div>
@endif

<a href="{{ url('place/create') }}">Link to add place</a>.

<table class="table table-striped">
    <thead>
        <tr>
            <th scope="col"># id</th>
            <th scope="col">name</th>
            <th scope="col">capacity</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($places as $place)
            <tr>
                <td>
                    {{ $place->id }}
                </td>
                <td>
                    {{ $place->name }}
                </td>
                <td>
                    {{ $place->capacity }}
                </td>
                <td>
                    <a href="{{ url('place/' . $place->id) }}">show</a>
                </td>
                <td>
                    <a href="{{ url('place/' . $place->id . '/edit') }}">edit</a>
                </td>
                <td>
                    <a href="javascript: void(0);" data-name="{{ $place->name }}" data-url="{{ url('place/' . $place->id) }}" data-bs-toggle="modal" data-bs-target="#modalDelete">delete</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

@endsection

@section('js')
<script src="{{ url('assets/js/deletePlace.js') }}"></script>
@endsection