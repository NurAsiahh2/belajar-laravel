@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Edit Attendance') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('attendance.update', $attendance->id) }}">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">Nama</label>
                            <input type="text" id="name" name="name" class="form-control" value="{{ $attendance->name }}" required>
                        </div>
                        <div class="mb-3">
                            <label for="date" class="form-label">Tanggal</label>
                            <input type="date" id="date" name="date" class="form-control" value="{{ $attendance->date }}" required>
                        </div>
                        <div class="mb-3">
                            <label for="time_in" class="form-label">Jam Masuk</label>
                            <input type="time" id="time_in" name="time_in" class="form-control" value="{{ $attendance->time_in }}" required>
                        </div>
                        <div class="mb-3">
                            <label for="description" class="form-label">Deskripsi</label>
                            <input type="text" id="description" name="description" class="form-control" value="{{ $attendance->description }}">
                        </div>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
