@extends('layout/master')

@section('title', 'About me')
@section('content')
    <div class="container">
        <h3>About</h3>
    </div>
@stop

@section('sidebar' )
    @parent {{-- parent gives everything from master that is defined as sidebar and paste it in the place '@parent' --}}
    about widged
@endsection
