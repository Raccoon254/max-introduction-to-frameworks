@extends('layouts.app')

@section('content')
    <div class="flex flex-col gap-4 w-full items-center justify-center h-[50vh]">
        <h1 class=" text-4xl uppercase font-semibold">
            This is a test
        </h1>

        <section class="tooltip tooltip-warning"  data-tip="this is a button">
            <a title="this is a button" class="btn btn-circle ring" href="{{ route('home') }}">
                ⚡
            </a>
        </section>
    </div>
<div>

    @if($users->isEmpty())
        No users
    @else
        <table class="table table-zebra">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Age</th>
                </tr>

            </thead>

            <tbody>
                @foreach($users as $user)
                    <tr>
                        <td>{{ $user->name }}</td>
                        <td>
                            <a href="mailto:{{ $user->email }}">
                                {{ $user->email }}
                            </a>
                        </td>
                        <td>{{ $user->age }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</div>
@endsection
