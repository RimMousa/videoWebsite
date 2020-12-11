@extends('back-end.layout.app')

@section('title')
    {{ $pageTitle }}
@endsection

@push('css')
    <style>
        input[type] {
            border-radius: 5px;
            padding-left: 5px;
            font-size: 18px;
        }

    </style>
@endpush

@section('content')
    @component('back-end.layout.nav-bar', ['navBar_title' => 'Create User'])

    @endcomponent
    <div class="container">
        <div class="row">
            <div class="card">
                <div class="col-8">
                    <div class="card-body" style="color: white;">
                        <h3 class="card-title" style="color: white;">{{$modelName}} create</h3>
                        <p class="card-text">
                            {{ $pageDesc }}
                        </p>
                    </div>
                </div>

            </div>
        </div>

        <div class="row">
            <div class="col-10 mx-auto">
                <form action="{{ route('users.store') }}" method="POST">
                    @include('back-end.users.form')
                    <button type="submit" class="btn btn-primary">Add User</button>
                    <a href='{{ route('users.index') }}' class="btn btn-primary">Back to users</a>
                </form>
            </div>

        </div>

    </div>

@endsection
