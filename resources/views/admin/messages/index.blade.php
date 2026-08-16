@extends('admin.layouts.app')

@section('title', 'Contact Messages')

@section('content')
    <section class="dashboard-header">
        <div>
            <p class="dashboard-eyebrow">CUSTOMER ENQUIRIES</p>
            <h2>Contact Messages</h2>
            <p>View and manage customer enquiries received through the website.</p>
        </div>
    </section>

    @if (session('success'))
        <div class="admin-alert admin-alert--success">
            {{ session('success') }}
        </div>
    @endif

    <section class="admin-card">
        @if ($messages->count())
            <div class="admin-table-wrapper">
                <table class="admin-table">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Contact</th>
                            <th>Subject</th>
                            <th>Date</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($messages as $message)
                            <tr>
                                <td><strong>{{ $message->name }}</strong></td>
                                <td>
                                    <div>{{ $message->email }}</div>
                                    @if ($message->phone)
                                        <small>{{ $message->phone }}</small>
                                    @endif
                                </td>
                                <td>{{ $message->subject ?? 'No subject' }}</td>
                                <td>
                                    {{ $message->created_at->timezone(config('app.timezone'))->format('d M Y') }}
                                    <small>
                                        {{ $message->created_at->timezone(config('app.timezone'))->format('h:i A') }}
                                    </small>
                                </td>
                                <td>
                                    <span class="status-badge status-badge--{{ $message->status }}">
                                        {{ ucfirst($message->status) }}
                                    </span>
                                </td>
                                <td>
                                    <a href="{{ route('admin.messages.show', $message) }}" class="admin-action-link">
                                        View
                                    </a>
                                </td>
                                <td>
                                    <form method="POST" action="{{ route('admin.messages.destroy', $message) }}"
                                            onsubmit="return confirm('Are you sure you want to delete this message from {{ $message->name }}?');"
                                            style="display: inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="admin-action-link admin-action-link--danger" title="Delete Message">
                                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                <path d="M3 6h18"/>
                                                <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"/>
                                                <line x1="10" y1="11" x2="10" y2="17"/>
                                                <line x1="14" y1="11" x2="14" y2="17"/>
                                            </svg>
                                        </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <div class="admin-pagination">
                {{ $messages->links('vendor.pagination.custom') }}
            </div>
        @else
            <div class="admin-empty-state">
                <h3>No contact messages yet</h3>
                <p>Customer enquiries submitted through the contact form will appear here.</p>
            </div>
        @endif
    </section>
@endsection
