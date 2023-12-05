@extends('layouts.app')

@section('content')

    <div class="container">
        <h1>All Users</h1>

        @if ($users->isEmpty())
            <p>No users found.</p>
        @else
            <table class="table table-striped">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">S No.</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Phone</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <th scope="row">{{ $id = $id + 1 }}</th>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->phone }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif


    </div>
@endsection
