@extends('layouts.admin')

@section('title', 'Dashboard')

@push('styles')
<style>
.dashboard-welcome {
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    color: white;
    border-radius: 16px;
    padding: 2rem;
    margin-bottom: 2rem;
    box-shadow: 0 10px 30px rgba(102, 126, 234, 0.3);
}

.stat-card {
    background: white;
    border-radius: 16px;
    padding: 2rem;
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
    border: 1px solid rgba(255, 255, 255, 0.8);
    transition: all 0.3s ease;
    position: relative;
    overflow: hidden;
}

.stat-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 8px 30px rgba(0, 0, 0, 0.12);
}

.stat-card::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    height: 4px;
    background: linear-gradient(90deg, #667eea, #764ba2);
}

.stat-card:nth-child(2)::before {
    background: linear-gradient(90deg, #f093fb, #f5576c);
}

.stat-card:nth-child(3)::before {
    background: linear-gradient(90deg, #4facfe, #00f2fe);
}

.stat-icon {
    width: 60px;
    height: 60px;
    border-radius: 12px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.5rem;
    margin-bottom: 1rem;
    background: linear-gradient(135deg, #667eea, #764ba2);
    color: white;
}

.stat-card:nth-child(2) .stat-icon {
    background: linear-gradient(135deg, #f093fb, #f5576c);
}

.stat-card:nth-child(3) .stat-icon {
    background: linear-gradient(135deg, #4facfe, #00f2fe);
}

.stat-number {
    font-size: 2.5rem;
    font-weight: 700;
    color: #1f2937;
    margin-bottom: 0.5rem;
}

.stat-label {
    color: #6b7280;
    font-weight: 500;
    text-transform: uppercase;
    letter-spacing: 0.5px;
    font-size: 0.875rem;
}

.recent-section {
    background: white;
    border-radius: 16px;
    padding: 2rem;
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
    border: 1px solid rgba(255, 255, 255, 0.8);
}

.section-header {
    display: flex;
    justify-content: between;
    align-items: center;
    margin-bottom: 1.5rem;
    padding-bottom: 1rem;
    border-bottom: 2px solid #f3f4f6;
}

.section-title {
    font-size: 1.5rem;
    font-weight: 700;
    color: #1f2937;
    margin: 0;
}

.section-action {
    background: linear-gradient(135deg, #667eea, #764ba2);
    color: white;
    padding: 0.5rem 1rem;
    border-radius: 8px;
    text-decoration: none;
    font-weight: 500;
    font-size: 0.875rem;
    transition: all 0.3s ease;
}

.section-action:hover {
    transform: translateY(-2px);
    box-shadow: 0 4px 15px rgba(102, 126, 234, 0.4);
}

.recent-item {
    padding: 1.5rem;
    border: 1px solid #e5e7eb;
    border-radius: 12px;
    margin-bottom: 1rem;
    transition: all 0.3s ease;
    background: #fafafa;
}

.recent-item:hover {
    border-color: #d1d5db;
    background: white;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
}

.recent-item-title {
    font-size: 1.125rem;
    font-weight: 600;
    color: #1f2937;
    margin-bottom: 0.5rem;
}

.recent-item-description {
    color: #6b7280;
    margin-bottom: 0.75rem;
    line-height: 1.5;
}

.recent-item-meta {
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.recent-item-time {
    color: #9ca3af;
    font-size: 0.875rem;
}

.recent-item-actions {
    display: flex;
    gap: 0.5rem;
}

.recent-item-action {
    background: #f3f4f6;
    color: #374151;
    padding: 0.375rem 0.75rem;
    border-radius: 6px;
    text-decoration: none;
    font-size: 0.75rem;
    font-weight: 500;
    transition: all 0.3s ease;
}

.recent-item-action:hover {
    background: #e5e7eb;
    color: #1f2937;
}

.recent-item-action.edit {
    background: #dbeafe;
    color: #1e40af;
}

.recent-item-action.edit:hover {
    background: #bfdbfe;
    color: #1d4ed8;
}

.recent-item-action.delete {
    background: #fee2e2;
    color: #dc2626;
}

.recent-item-action.delete:hover {
    background: #fecaca;
    color: #b91c1c;
}

.empty-state {
    text-align: center;
    padding: 3rem 2rem;
    color: #6b7280;
}

.empty-state-icon {
    font-size: 3rem;
    color: #d1d5db;
    margin-bottom: 1rem;
}

.empty-state-text {
    font-size: 1.125rem;
    margin-bottom: 1rem;
}

.quick-actions {
    background: white;
    border-radius: 16px;
    padding: 2rem;
    margin-bottom: 2rem;
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
}

.quick-actions-title {
    font-size: 1.25rem;
    font-weight: 700;
    color: #1f2937;
    margin-bottom: 1.5rem;
}

.action-buttons {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
    gap: 1rem;
}

.action-btn {
    display: flex;
    align-items: center;
    padding: 1rem;
    background: linear-gradient(135deg, #f8fafc, #f1f5f9);
    border: 1px solid #e2e8f0;
    border-radius: 12px;
    text-decoration: none;
    color: #374151;
    font-weight: 500;
    transition: all 0.3s ease;
}

.action-btn:hover {
    background: linear-gradient(135deg, #667eea, #764ba2);
    color: white;
    transform: translateY(-2px);
    box-shadow: 0 4px 15px rgba(102, 126, 234, 0.3);
}

.action-btn-icon {
    width: 40px;
    height: 40px;
    border-radius: 8px;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-right: 1rem;
    background: rgba(255, 255, 255, 0.2);
}

.action-btn:hover .action-btn-icon {
    background: rgba(255, 255, 255, 0.3);
}

@media (max-width: 768px) {
    .dashboard-welcome {
        padding: 1.5rem;
        margin-bottom: 1.5rem;
    }

    .stat-card {
        padding: 1.5rem;
    }

    .recent-section {
        padding: 1.5rem;
    }

    .action-buttons {
        grid-template-columns: 1fr;
    }
}
</style>
@endpush

@section('content')
<!-- Welcome Section -->
<div class="dashboard-welcome">
    <div class="flex items-center justify-between">
        <div>
            <h1 class="text-3xl font-bold mb-2">Welcome back, {{ Auth::user()->name }}! 👋</h1>
            <p class="text-blue-100">Here's what's happening with your portfolio today.</p>
        </div>
        <div class="hidden md:block">
            <i class="fas fa-chart-line text-6xl opacity-20"></i>
        </div>
    </div>
</div>

<!-- Quick Actions -->
<div class="quick-actions">
    <h2 class="quick-actions-title">Quick Actions</h2>
    <div class="action-buttons">
        <a href="{{ route('admin.projects.create') }}" class="action-btn">
            <div class="action-btn-icon">
                <i class="fas fa-plus"></i>
            </div>
            <div>
                <div class="font-semibold">Add New Project</div>
                <div class="text-sm opacity-75">Create and showcase your work</div>
            </div>
        </a>
        <a href="{{ route('admin.messages.index') }}" class="action-btn">
            <div class="action-btn-icon">
                <i class="fas fa-envelope"></i>
            </div>
            <div>
                <div class="font-semibold">View Messages</div>
                <div class="text-sm opacity-75">Check contact inquiries</div>
            </div>
        </a>
        <a href="{{ route('admin.projects.index') }}" class="action-btn">
            <div class="action-btn-icon">
                <i class="fas fa-list"></i>
            </div>
            <div>
                <div class="font-semibold">Manage Projects</div>
                <div class="text-sm opacity-75">Edit and organize your portfolio</div>
            </div>
        </a>
    </div>
</div>

<!-- Statistics Cards -->
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-8">
    <div class="stat-card">
        <div class="stat-icon">
            <i class="fas fa-project-diagram"></i>
        </div>
        <div class="stat-info">
            <div class="stat-number">{{ $projectCount }}</div>
            <div class="stat-label">Total Projects</div>
        </div>
    </div>

    <div class="stat-card">
        <div class="stat-icon">
            <i class="fas fa-envelope"></i>
        </div>
        <div class="stat-info">
            <div class="stat-number">{{ $messageCount }}</div>
            <div class="stat-label">Total Messages</div>
        </div>
    </div>

    <div class="stat-card">
        <div class="stat-icon">
            <i class="fas fa-eye"></i>
        </div>
        <div class="stat-info">
            <div class="stat-number">{{ $projectCount * 42 }}</div>
            <div class="stat-label">Portfolio Views</div>
        </div>
    </div>
</div>

<!-- Recent Activity -->
<div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
    <!-- Recent Projects -->
    <div class="recent-section">
        <div class="section-header">
            <h3 class="section-title">Recent Projects</h3>
            <a href="{{ route('admin.projects.create') }}" class="section-action">
                <i class="fas fa-plus mr-2"></i>Add New
            </a>
        </div>
        <div class="space-y-4">
            @forelse($recentProjects as $project)
                <div class="recent-item">
                    <h4 class="recent-item-title">{{ $project->title }}</h4>
                    <p class="recent-item-description">{{ Str::limit($project->description, 80) }}</p>
                    <div class="recent-item-meta">
                        <span class="recent-item-time">
                            <i class="fas fa-clock mr-1"></i>{{ $project->created_at->diffForHumans() }}
                        </span>
                        <div class="recent-item-actions">
                            <a href="{{ route('admin.projects.show', $project) }}" class="recent-item-action">
                                View
                            </a>
                            <a href="{{ route('admin.projects.edit', $project) }}" class="recent-item-action edit">
                                Edit
                            </a>
                            <form action="{{ route('admin.projects.destroy', $project) }}" method="POST" class="inline" onsubmit="return confirm('Are you sure you want to delete this project?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="recent-item-action delete">
                                    Delete
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            @empty
                <div class="empty-state">
                    <div class="empty-state-icon">
                        <i class="fas fa-project-diagram"></i>
                    </div>
                    <p class="empty-state-text">No projects yet</p>
                    <a href="{{ route('admin.projects.create') }}" class="section-action">
                        Create your first project
                    </a>
                </div>
            @endforelse
        </div>
    </div>

    <!-- Recent Messages -->
    <div class="recent-section">
        <div class="section-header">
            <h3 class="section-title">Recent Messages</h3>
            <a href="{{ route('admin.messages.index') }}" class="section-action">
                <i class="fas fa-eye mr-2"></i>View All
            </a>
        </div>
        <div class="space-y-4">
            @forelse($recentMessages as $message)
                <div class="recent-item">
                    <h4 class="recent-item-title">{{ $message->subject }}</h4>
                    <p class="recent-item-description">
                        From: <strong>{{ $message->name }}</strong> ({{ $message->email }})
                    </p>
                    <div class="recent-item-meta">
                        <span class="recent-item-time">
                            <i class="fas fa-clock mr-1"></i>{{ $message->created_at->diffForHumans() }}
                        </span>
                        <a href="{{ route('admin.messages.show', $message) }}" class="recent-item-action">
                            Read Message
                        </a>
                    </div>
                </div>
            @empty
                <div class="empty-state">
                    <div class="empty-state-icon">
                        <i class="fas fa-envelope"></i>
                    </div>
                    <p class="empty-state-text">No messages yet</p>
                    <p class="text-sm text-gray-500">Messages from your contact form will appear here</p>
                </div>
            @endforelse
        </div>
    </div>
</div>
@endsection
