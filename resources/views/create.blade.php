@extends('layouts.app')

@section('content')
    <form method="POST" action="{{ route('store') }}" class="max-w-md mx-auto p-6">
        @csrf

        <div class="space-y-4">
            <div>
                <label for="name" class="text-gray-700">Name</label>
                <input type="text" id="name" name="name" placeholder="Type here" class="input input-bordered input-primary w-full" />
            </div>

            <div>
                <label for="email" class="text-gray-700">Email</label>
                <input type="email" id="email" name="email" placeholder="Type here" class="input input-bordered input-primary w-full" />
            </div>

            <div>
                <label for="password" class="text-gray-700">Password</label>
                <input type="password" id="password" name="password" placeholder="Type here" class="input input-bordered input-primary w-full" />
            </div>

            <div>
                <label for="age" class="text-gray-700">Age</label>
                <input type="text" id="age" name="age" placeholder="Type here" class="input input-bordered input-primary w-full max-w-xs" />
            </div>

            <div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
@endsection
