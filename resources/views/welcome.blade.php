@extends('layouts.app')

@section('content')

    <div class="flex flex-col gap-4 w-full items-center justify-center h-[100vh]">
        <h1 class="text-4xl uppercase font-semibold">
            Welcome
        </h1>
        <a class="btn ring hover:btn-warning" href="{{ route('test') }}">
            Test
        </a>
    </div>

@endsection
