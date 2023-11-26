@extends('layouts.masterlayout')

@foreach ($pages as $page)
    @section('$page')
        @include('pages.'.$page)
    @endsection
@endforeach

