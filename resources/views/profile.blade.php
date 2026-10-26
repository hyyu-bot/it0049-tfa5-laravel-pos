@extends('layouts.app')

@section('content')
    <h1>My Profile</h1>

    @if($user)
        <div class="profile-card">
            <div class="profile-field">
                <label>Username:</label>
                <span>{{ $user->username }}</span>
            </div>
            <div class="profile-field">
                <label>Full Name:</label>
                <span>{{ $user->full_name }}</span>
            </div>
            <div class="profile-field">
                <label>Email:</label>
                <span>{{ $user->email }}</span>
            </div>
        </div>
    @else
        <div class="empty">
            <p>No user profile found.</p>
        </div>
    @endif
@endsection
