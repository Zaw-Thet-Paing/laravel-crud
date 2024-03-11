@extends('layouts.layout')

@section('title', 'Home')

@section('content')
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <div class="text-end mb-2">
                <a href="{{ route('students.create') }}" class="btn btn-primary">Add New</a>
            </div>
            <div class="card">
                <div class="card-header">
                    <h1 class="text-center">Student Lists</h1>
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Gender</th>
                                <th>Phone</th>
                                <th>Options</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($students as $student)
                                <tr>
                                    <td>{{ $student->id }}</td>
                                    <td>{{ $student->name }}</td>
                                    <td>{{ $student->email }}</td>
                                    <td>{{ $student->gender }}</td>
                                    <td>{{ $student->phone }}</td>
                                    <td>
                                        <div class="row">
                                        <a href="{{ route('students.edit', ['id' => $student->id]) }}" class="btn btn-sm btn-secondary me-1" style="width: 60px;">Edit</a>
                                        <a href="{{ route('students.destroy', ['id' => $student->id]) }}" class="btn btn-sm btn-danger" style="width: 60px;" onclick="return confirm('Are you sure?')">Delete</a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-md-2"></div>
    </div>
@endsection