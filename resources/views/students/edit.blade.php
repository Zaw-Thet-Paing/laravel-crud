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
                    <h1 class="text-center">Edit Student</h1>
                </div>
                <div class="card-body">
                    <form action="{{ route('students.update', ['id' => $student->id]) }}" method="post">
                        @csrf
                        <div class="mb-3">
                            <label>Name</label>
                            <input type="text" class="form-control" value="{{ $student->name }}" name="name" placeholder="Enter Student Name..." required>
                        </div>
                        <div class="mb-3">
                            <label>Email</label>
                            <input type="text" class="form-control" value="{{ $student->email }}" name="email" placeholder="Enter Student Email..." required>
                        </div>
                        <div class="mb-3">
                            <label>Gender</label>
                            <select class="form-control" name="gender" required>
                                @if ($student->gender === 'Male')
                                    <option value="">Choose gender</option>
                                    <option value="Male" selected>Male</option>
                                    <option value="Female">Female</option>
                                    <option value="Other">Other</option>
                                @elseif ($student->gender === 'Female')
                                    <option value="">Choose gender</option>
                                    <option value="Male">Male</option>
                                    <option value="Female" selected>Female</option>
                                    <option value="Other">Other</option>
                                @elseif ($student->gender === 'Other')
                                    <option value="">Choose gender</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                    <option value="Other" selected>Other</option>
                                @endif
                                
                            </select>
                        </div>
                        <div class="mb-3">
                            <label>Phone</label>
                            <input type="text" class="form-control" value="{{ $student->phone }}" name="phone" placeholder="Enter Student Phone..." required>
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