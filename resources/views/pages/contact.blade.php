@extends('layout.master')

@section('title', 'Contact me')
@section('content')
    <div class="container">
        <h3>Contact</h3>
    </div>
@stop

@section('sidebar' )
    @parent {{-- parent gives everything from master that is defined as sidebar and paste it in the place '@parent' --}}
    contact widged
@endsection
