@extends('notes.layout')

@section('content')

<div class="card mt-5">
    <h2 class="card-header">Add New Note</h2>
    <div class="card-body">

        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <a class="btn btn-primary btn-sm" href="{{ route('notes.index') }}"><i class="fa fa-arrow-left"></i> Back</a>
        </div>

        <form action="{{ route('notes.store') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label for="name" class="form-label"><strong>Title:</strong></label>
                <input
                    type="text"
                    name="name"
                    class="form-control @error('name') is-invalid @enderror"
                    id="name"
                    placeholder="inputName">
                @error('name')
                    <div class="form-text text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="ip_address" class="form-label"><strong>IP Address:</strong></label>
                <input
                    type="text"
                    name="ip_address"
                    class="form-control @error('ip_address') is-invalid @enderror"
                    id="ip_address"
                    placeholder="ip_address">
                @error('ip_address')
                    <div class="form-text text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="color" class="form-label"><strong>color:</strong></label>

                <select class="form-select" name="color" class="form-control @error('color') is-invalid @enderror"
                        id="color"
                        placeholder="color" aria-label="Default select example">
                    <option  value="black" style="color:black;" >black</option>
                    <option value="red" style="color:red;">red</option>
                    <option value="blue" style="color:blue;">blue</option>
                    <option value="green" style="color:green;">green</option>
                </select>
                @error('color')
                    <div class="form-text text-danger">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-success"><i class="fa-solid fa-floppy-disk"></i> Submit</button>
        </form>

    </div>
</div>
@endsection
