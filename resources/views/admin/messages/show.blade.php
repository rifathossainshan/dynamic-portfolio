@extends('layouts.admin')

@section('title', 'Message Details')

@section('content')
<div class="admin-header">
    <h2>Message from {{ $message->name }}</h2>
    <div class="header-actions">
        <a href="{{ route('admin.messages.index') }}" class="btn btn-secondary">Back to Messages</a>
        <form action="{{ route('admin.messages.destroy', $message) }}" method="POST" style="display: inline;">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete Message</button>
        </form>
    </div>
</div>

<div class="message-details">
    <div class="message-info">
        <h3>From: {{ $message->name }} ({{ $message->email }})</h3>
        <h4>Subject: {{ $message->subject }}</h4>
        <p><strong>Received:</strong> {{ $message->created_at->format('M d, Y \a\t H:i') }}</p>
    </div>

    <div class="message-content">
        <h3>Message:</h3>
        <p>{{ $message->message }}</p>
    </div>
</div>
@endsection
