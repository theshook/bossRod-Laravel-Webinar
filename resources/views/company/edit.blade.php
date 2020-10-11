@extends('layout')

@section('content')
    <form action="{{ route('company.update', $company->id) }}" method="POST">
        @method('PUT')
        @csrf
        <div class="form-group">
            <label for="exampleInputEmail1">Name</label>
            <input type="text" name="name" value="{{ $company->name }}" class="form-control">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Description</label>
            <textarea name="description" class="form-control">{{ $company->description }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
