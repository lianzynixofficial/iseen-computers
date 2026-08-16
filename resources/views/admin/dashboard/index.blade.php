@extends('admin.layouts.app')

@section('title', 'Dashboard')

@section('content')
    <section class="dashboard-header">
        <div>
            <p class="dashboard-eyebrow">ADMIN OVERVIEW</p>
            <h2>Welcome back, {{ auth()->user()->name }}</h2>
            <p>Manage and monitor your I Seen Computer website from one place.</p>
        </div>
    </section>

    <section class="admin-card" style="padding: 40px;">
        <div class="dashboard-placeholder" style="max-width: 100%;">
            <h3>Dashboard is ready</h3>
            <p>Contact message statistics and recent enquiries will be added next.</p>
        </div>
    </section>
@endsection
