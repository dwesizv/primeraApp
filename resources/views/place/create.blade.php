@extends('admin.base')

@section('content')
<h1>Performance Enterprise</h1>
@if(Session::has('message'))
    <div class="alert alert-{{ session()->get('type') }}" role="alert">
        {{ session()->get('message') }}
    </div>
@endif
<form action="{{ url('place') }}" method="post">
    @csrf
    <input value="{{ old('name') }}" type="text" name="name" placeholder="Name of the place" minlength="2" maxlength="150" required />
    <input value="{{ old('capacity') }}" type="number" name="capacity" placeholder="#maximum of capacity" min="1" step="1" required />
    <input value="{{ old('budget') }}" type="number" name="budget" placeholder="amount" min="0.01" step="0.01" required />
    <input type="submit" value="Create"/>
</form>

<form action="{{ url('place') }}" method="post">
    @csrf
    <input value="{{ old('name') }}" type="text" name="name" placeholder="Name of the place" minlength="2" maxlength="100" required />
    <input value="{{ old('capacity') }}" type="number" name="capacity" placeholder="#maximum of capacity" min="1" step="1" required />
    <input type="submit" value="Create"/>
</form>

<a href="{{ url('place') }}">back</a>
<br>
<a href="{{ url()->previous() }}">back</a>.
@endsection