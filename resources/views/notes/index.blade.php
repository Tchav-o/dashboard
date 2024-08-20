@extends('notes.layout')

@section('content')

    <div class="card mt-5">
        <h2 class="card-header text-center mx-auto">Customizable web dashboard</h2>
        <div class="card-body">

            @if(session('success'))
                <div class="alert alert-success" role="alert">{{ session('success') }}</div>
            @endif


            <div class="container-fluid">
                <div class="row ">

                    @foreach  ($notes as $note)
                        <div class="col text-center card  col-sm-4">
                            <div class="card-body  text-center mx-auto col-sm-4">

                                    <a class="btn btn-primary btn-sm" href="{{ route('notes.edit',$note->id) }}">Edit
                                        Old Note</a>

                            </div>
                            <div class="card-footer  text-center mx-auto col-sm-4">
                                <a class="btn btn-light btn-sm" href="{{ $note->ip_address }}" style="color:{{ $note->color }} ;">{{ $note->ip_address }}</a>
                            </div>
                        </div>

                    @endforeach

                    @for ($i = 8; $i >= count($notes); $i--)
                        <div class="col text-center card col-sm-4">
                            <div class="card-body  text-center mx-auto col-sm-4">
                                <div class="mx-auto">
                                    <a class="btn btn-success btn-sm" href="{{ route('notes.create') }}">Create New
                                        Note</a>
                                </div>

                            </div>
                            <div class="card-footer  text-center mx-auto col-sm-4">
                                <a class="btn btn-light btn-sm" href="{{ route('notes.create') }}" >add link</a>
                            </div>
                        </div>

                    @endfor

                </div>
            </div>

            {!! $notes->links() !!}

        </div>
    </div>

@endsection
