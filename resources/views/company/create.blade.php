@extends('layout')

@section('content')
    <form action="{{ route('company.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="exampleInputEmail1">Name</label>
            <input type="text" name="name" class="form-control">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Description</label>
            <textarea name="description" class="form-control"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
