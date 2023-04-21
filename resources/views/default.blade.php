@extends('layouts.base')

@section('content')

    @includeIf('layouts.navigation')


    <div class="content flex-grow py-4">
        
        @foreach($components as $component)

            @includeIf('components/' .$component['type'])

        @endforeach

    </div>

    @includeIf('layouts.footer')

@endsection
