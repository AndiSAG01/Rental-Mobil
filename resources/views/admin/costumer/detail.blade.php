@extends('layouts.admin')

@section('content')
    <div class="card-fluid">
        <div class="card">
            <img class="card-img-top" src="{{ Storage::url($data->ktp_photo) }}" alt="">
            <div class="card-body">
                <h5 class="card-title">{{ $data->name }}</h5>
                <p class="card-text">{{ $data->alamat }}</p>
                <p class="card-text">{{ $data->gender }}</p>
                <p class="card-text">{{ $data->phone_number }}</p>
                <p class="card-text">{{ $data->ktp_number }}</p>
            </div>
        </div>
    </div>
@endsection
