@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="/store" enctype="multipart/form-data">
                    @csrf 
                    <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Nama</label>
                    <input type="text" name="name" class="form-control"  >
                    </div>
                    <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Tanggal</label>
                    <input type="date" name="date" class="form-control" >
                    </div>
                    <div class="mb-3">
                    <label class="form-label">jam masuk</label>
                    <input type="time" name="time_in" class="form-control" >
                    </div>
                    <div class="mb-3">
                    <label class="form-label">deskripsi</label>
                    <input type="text" name="description"class="form-control" >
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                    
                    <table class="table">
                    <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Tanggal</th>
                    <th scope="col">Jam masuk</th>
                    <th scope="col">Deskripsi</th>
                    <th scope="col">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                     @foreach ($data_attendances as $item)
                    <tr>
                    <th scope="row"> {{ $loop->iteration }}</th>
                    <td>{{$item->name}}</td>
                    <td>{{$item->date}}</td>
                    <td>{{$item->time_in}}</td>
                    <td>{{$item->description}}</td>
                    <td class="btn btn-secondary">edit</td>
                    <td class="btn btn-denger">hapus</td>
                    </tr>
                    </tbody>
                    @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
