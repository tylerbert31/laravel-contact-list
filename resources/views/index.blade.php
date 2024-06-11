@extends('layouts.app')
@section('content')
<div class="">
    <div class="overflow-x-auto">
    <table class="table">
        <!-- head -->
        <thead>
        <tr>
            <th>Name</th>
            <th>Phone</th>
            <th>Email</th>
            <th>Address</th>
            <th>Birthday</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($users as $user)
        <tr>
            <th>{{ $user->fullName() }}x</th>
            <td>{{ $user->phone }}</td>
            <td>{{ $user->email }}</td>
            <td>{{ $user->address }}</td>
            <td>{{ $user->birthday }}</td>
            <td>
                <form action="/delete/{{ $user->id }}" method="POST">
                    @method('DELETE')
                    @csrf
                    <button type="submit" class="btn btn-ghost">🗑️</button>
                </form>
            </td>
        </tr>
        @endforeach
        
        @if (count($users) == 0)
        <tr>
            <td colspan="6" class="text-center">No contacts found.</td>
        </tr>
        @endif
        </tbody>
    </table>
    </div>
</div>
@endsection