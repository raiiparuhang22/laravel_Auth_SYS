@extends('welcome')

@section('title', 'Add User')

@section('content')
<div class="container mt-4">
    <h2>Add New User</h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('users.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label>Name</label>
            <input type="text" name="name" class="form-control" required value="{{ old('name') }}">
        </div>

        <div class="mb-3">
            <label>Email</label>
            <input type="email" name="email" class="form-control" required value="{{ old('email') }}">
        </div>

        <div class="mb-3">
            <label>Password</label>
            <input type="password" name="password" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Confirm Password</label>
            <input type="password" name="password_confirmation" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Position</label>
            <input type="text" name="position" class="form-control" value="{{ old('position') }}">
        </div>

        <div class="mb-3">
            <label>Office</label>
            <input type="text" name="office" class="form-control" value="{{ old('office') }}">
        </div>

        <div class="mb-3">
            <label>Age</label>
            <input type="number" name="age" class="form-control" value="{{ old('age') }}">
        </div>

        <div class="mb-3">
            <label>Start Date</label>
            <input type="date" name="start_date" class="form-control" value="{{ old('start_date') }}">
        </div>

        <div class="mb-3">
            <label>Salary</label>
            <input type="number" name="salary" class="form-control" step="0.01" value="{{ old('salary') }}">
        </div>

        <button type="submit" class="btn btn-primary">Add User</button>
        <a href="{{ route('users.index') }}" class="btn btn-secondary">Back</a>
    </form>
</div>
@endsection
