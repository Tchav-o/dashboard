@extends('notes.layout')

@section('content')

<div class="card mt-5">
    <h2 class="card-header">Edit Note</h2>
    <div class="card-body">

        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <a class="btn btn-primary btn-sm" href="{{ route('notes.index') }}"><i class="fa fa-arrow-left"></i> Back</a>
        </div>

        <form action="{{ route('notes.update',$note->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="name" class="form-label"><strong>Title:</strong></label>
                <input
                    type="text"
                    name="name"
                    value="{{ $note->name }}"
                    class="form-control @error('name') is-invalid @enderror"
                    id="name"
                    placeholder="name">
                @error('name')
                    <div class="form-text text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="ip_address" class="form-label"><strong>IP Address:</strong></label>
                <input
                    type="text"
                    name="ip_address"
                    value="{{ $note->ip_address }}"
                    class="form-control @error('ip_address') is-invalid @enderror"
                    id="ip_address"
                    placeholder="ip_address">
                @error('name')
                <div class="form-text text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">

                <label for="color" class="form-label"><strong>color:</strong></label>

                <select class="form-select" name="color" class="form-control @error('color') is-invalid @enderror"
                        id="color"
                        style="color:{{$note->color}} "
                        placeholder="color" aria-label=" select ">
                    <option  value="black"  @if($note->color =="black") selected @endif style="color:black;" >black</option>
                    <option value="red" @if($note->color =="red") selected @endif style="color:red;">red</option>
                    <option value="blue"  @if($note->color =="blue") selected @endif style="color:blue;">blue</option>
                    <option value="green"  @if($note->color =="green") selected @endif style="color:green;">green</option>
                </select>
                @error('color')
                <div class="form-text text-danger">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-success"><i class="fa-solid fa-floppy-disk"></i> Update</button>
        </form>

    </div>
</div>
@endsection
