<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Posts</title>
    <style>
        * { box-sizing: border-box; margin: 0; padding: 0; }
        body { font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, sans-serif; background-color: #f3f4f6; color: #1f2937; padding: 40px 20px; }
        .container { max-width: 800px; margin: 0 auto; }
        .header { display: flex; justify-content: space-between; align-items: center; margin-bottom: 24px; }
        .header h1 { font-size: 28px; color: #111827; }
        .btn { display: inline-block; padding: 10px 18px; border-radius: 6px; text-decoration: none; font-size: 14px; font-weight: 600; border: none; cursor: pointer; transition: background-color 0.2s; }
        .btn-primary { background-color: #2563eb; color: #ffffff; }
        .btn-primary:hover { background-color: #1d4ed8; }
        .btn-secondary { background-color: #e5e7eb; color: #374151; }
        .btn-secondary:hover { background-color: #d1d5db; }
        .btn-warning { background-color: #f59e0b; color: #ffffff; }
        .btn-warning:hover { background-color: #d97706; }
        .btn-danger { background-color: #dc2626; color: #ffffff; }
        .btn-danger:hover { background-color: #b91c1c; }
        .alert-success { background-color: #d1fae5; color: #065f46; border-left: 4px solid #10b981; padding: 14px; border-radius: 6px; margin-bottom: 20px; font-size: 14px; }
        .card { background-color: #ffffff; border: 1px solid #e5e7eb; border-radius: 8px; padding: 20px; margin-bottom: 16px; box-shadow: 0 1px 3px rgba(0,0,0,0.05); }
        .card h3 { font-size: 20px; margin-bottom: 8px; color: #111827; }
        .card p { color: #4b5563; font-size: 15px; line-height: 1.5; margin-bottom: 16px; }
        .actions { display: flex; gap: 8px; align-items: center; }
        .empty-state { background-color: #ffffff; border: 1px solid #e5e7eb; border-radius: 8px; padding: 40px; text-align: center; color: #6b7280; }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Blog Posts</h1>
            <a href="{{ route('posts.create') }}" class="btn btn-primary">+ Create New Post</a>
        </div>

        @if(session('success'))
            <div class="alert-success">
                {{ session('success') }}
            </div>
        @endif

        @forelse($posts as $post)
            <div class="card">
                <h3>{{ $post->title }}</h3>
                <p>{{ $post->body }}</p>

                <div class="actions">
                    <a href="{{ route('posts.show', $post->id) }}" class="btn btn-secondary">View</a>
                    <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('posts.destroy', $post->id) }}" method="POST" onsubmit="return confirm('Delete this post?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </div>
            </div>
        @empty
            <div class="empty-state">
                <p>No posts found yet. Create your first post!</p>
            </div>
        @endforelse
    </div>
</body>
</html>