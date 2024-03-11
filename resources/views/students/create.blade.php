@extends('layouts.layout')

@section('title', 'Create')

@section('content')
    <div class="row mt-3">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <div class="text-start mb-2">
                <a href="{{ route('students.index') }}" class="btn btn-secondary">Back</a>
            </div>
            <div class="card">
                <div class="card-header">
                    <h1 class="text-center">Create Student</h1>
                </div>
                <div class="card-body">
                    <form action="{{ route('students.store') }}" method="post">
                        @csrf
                        <div class="mb-3">
                            <label>Name</label>
                            <input type="text" class="form-control" name="name" placeholder="Enter Student Name..." required>
                        </div>
                        <div class="mb-3">
                            <label>Email</label>
                            <input type="text" class="form-control" name="email" placeholder="Enter Student Email..." required>
                        </div>
                        <div class="mb-3">
                            <label>Gender</label>
                            <select class="form-control" name="gender" required>
                                <option value="">Choose gender</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                                <option value="Other">Other</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label>Phone</label>
                            <input type="text" class="form-control" name="phone" placeholder="Enter Student Phone..." required>
                        </div>
                        <div class="mb-3">
                            <div class="text-end">
                                <input type="submit" value="Submit" class="btn btn-primary">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-2"></div>
    </div>
@endsection