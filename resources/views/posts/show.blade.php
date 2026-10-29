<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $post->title }}</title>
    <style>
        * { box-sizing: border-box; margin: 0; padding: 0; }
        body { font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, sans-serif; background-color: #f3f4f6; color: #1f2937; padding: 40px 20px; }
        .card { max-width: 700px; margin: 0 auto; background-color: #ffffff; border: 1px solid #e5e7eb; border-radius: 8px; padding: 32px; box-shadow: 0 1px 3px rgba(0,0,0,0.05); }
        .card h1 { font-size: 28px; color: #111827; margin-bottom: 16px; }
        .card-body { color: #374151; font-size: 16px; line-height: 1.6; border-top: 1px solid #f3f4f6; padding-top: 20px; margin-bottom: 28px; }
        .card-actions { display: flex; justify-content: space-between; align-items: center; border-top: 1px solid #e5e7eb; padding-top: 20px; }
        .btn { display: inline-block; padding: 8px 16px; border-radius: 6px; text-decoration: none; font-size: 14px; font-weight: 600; border: none; }
        .btn-warning { background-color: #f59e0b; color: #ffffff; }
        .btn-warning:hover { background-color: #d97706; }
        .back-link { color: #2563eb; text-decoration: none; font-size: 14px; font-weight: 500; }
        .back-link:hover { text-decoration: underline; }
    </style>
</head>
<body>
    <div class="card">
        <h1>{{ $post->title }}</h1>
        <div class="card-body">
            <p>{{ $post->body }}</p>
        </div>

        <div class="card-actions">
            <a href="{{ route('posts.index') }}" class="back-link">← Back to all posts</a>
            <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-warning">Edit</a>
        </div>
    </div>
</body>
</html>