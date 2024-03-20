@extends('admin.app')

@section('content')
    <div class="container-fluid px-4">
        <h1 class="mt-4">Create</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
            <li class="breadcrumb-item active">Admin</li>
            <li class="breadcrumb-item active">create</li>
        </ol>
        <div class="card mb-4">
            <button><a href="{{ route('student.create') }}">Add Student</a></button>
        </div>
        <div class="card mb-4">
            <form action="{{ route('student.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text"
                        class="form-control @error('name')
                    is-valid
                    @enderror "
                        name="name" id="name" aria-describedby="nameHelp">
                    @error('name')
                        <div id="nameHelp" class="form-text">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="address" class="form-label">Address</label>
                    <textarea type="text"
                        class="form-control @error('address')
                    is-valid
                    @enderror" name="address"
                        id="address" aria-describedby="addressError"></textarea>
                    @error('address')
                        <div id="addressError" class="form-text">{{ $message }}</div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection
