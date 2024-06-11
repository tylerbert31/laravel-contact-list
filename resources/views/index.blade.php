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
            <th>{{ $user->fullName() }}</th>
            <td>{{ $user->phone }}</td>
            <td>{{ $user->email }}</td>
            <td>{{ $user->address }}</td>
            <td>{{ $user->birthday }}</td>
            <td class="flex">
                <button type="submit" data-name="{{ $user->fname }}" data-id="{{ $user->id }}" class="btn btn-ghost delete_btn">🗑️</button>
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
<script>
    $('.delete_btn').click(function() {
        var id = $(this).data('id');
        var name = $(this).data('name');
        Swal.fire({
            title: `Do you want to remove ${name}?`,
            showDenyButton: true,
            showCancelButton: true,
            denyButtonText: `Delete`,
            showConfirmButton: false,
        }).then(async (result) => {
            if (result.isDenied) {
                await axios.post(`/delete/${id}`).then(() => {
                    location.reload();
                });
            }
        });
    });
</script>
@endsection