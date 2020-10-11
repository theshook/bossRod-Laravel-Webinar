@extends('layout')

@section('content')
    <h1>
        {{ $company->name }}
    </h1>
    <p>
        {{ $company->description }}
    </p>
    <a href="{{ route('company.edit', $company->id) }}" class="btn btn-secondary">Edit</a>
    <form action="{{ route('company.destroy', $company->id) }}" method="POST">
        @method('DELETE')
        @csrf
        <button type="submit" class="btn btn-danger">Delete</button>
    </form>
@endsection
