@extends('admin.layouts.app')

@section('title', 'Message Details')

@section('content')
    <section class="dashboard-header">
        <div>
            <p class="dashboard-eyebrow">CUSTOMER ENQUIRY</p>
            <h2>Message from {{ $contactMessage->name }}</h2>
            <p>Received on {{ $contactMessage->created_at->format('d M Y, h:i A') }}</p>
        </div>
    </section>

    @if (session('success'))
        <div class="admin-alert admin-alert--success">
            {{ session('success') }}
        </div>
    @endif

    <section class="admin-card admin-message-card">
        <div class="message-detail">
            <span class="message-detail__label">Name</span>
            <span class="message-detail__value">{{ $contactMessage->name }}</span>
        </div>

        <div class="message-detail">
            <span class="message-detail__label">Email</span>
            <a href="mailto:{{ $contactMessage->email }}" class="message-detail__value">
                {{ $contactMessage->email }}
            </a>
        </div>

        @if ($contactMessage->phone)
            <div class="message-detail">
                <span class="message-detail__label">Phone</span>
                <a href="tel:{{ $contactMessage->phone }}" class="message-detail__value">
                    {{ $contactMessage->phone }}
                </a>
            </div>
        @endif

        <div class="message-detail">
            <span class="message-detail__label">Subject</span>
            <span class="message-detail__value">{{ $contactMessage->subject ?? 'No subject' }}</span>
        </div>

        <div class="message-detail message-detail--content">
            <span class="message-detail__label">Message</span>
            <div class="message-content">
                {!! nl2br(e($contactMessage->message)) !!}
            </div>
        </div>
    </section>

    <section class="admin-card admin-message-actions">
        <form method="POST" action="{{ route('admin.messages.update', $contactMessage) }}">
            @csrf
            @method('PATCH')

            <label for="status">Message Status</label>
            <div class="message-status-form">
                <select name="status" id="status">
                    <option value="read" @selected($contactMessage->status === 'read')>Read</option>
                    <option value="responded" @selected($contactMessage->status === 'responded')>Responded</option>
                    <option value="archived" @selected($contactMessage->status === 'archived')>Archived</option>
                </select>
                <button type="submit" class="admin-button">Update Status</button>
            </div>
        </form>

        <form method="POST" action="{{ route('admin.messages.destroy', $contactMessage) }}"
            onsubmit="return confirm('Are you sure you want to delete this message?');">
            @csrf
            @method('DELETE')
            <button type="submit" class="admin-button admin-button--danger">Delete Message</button>
        </form>
    </section>
@endsection
