@extends('voyager::master')

@section('content')
<div class="page-content">
        @include('voyager::alerts')
        @include('voyager::dimmers')


        {{-- Idealmente esta validacion se deberia de hacer basado en un permiso de acceso de un determinado rol a un menu --}}
        @if(Auth::check())
            @if (Auth::user()->hasRole('admin') || Auth::user()->hasRole('encargado'))
            {{-- Inicio Dashboard Admin --}}
                <div class="analytics-container">
                    <div class="Titles">
                        <p class="text-center h2">Hola {{ Auth::user()->name}}, estas en Home.</p>
                    </div>
                </div>
                @endif
            @endif
</div>
@endsection
