@extends('template')
@section('layout')
      
    @include('components.sidebar')
    <main class="o-page__content"> 
        @include('components.navbar')
        @yield('content')
    </main>

@endsection