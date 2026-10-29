<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Post</title>
    <style>
        * { box-sizing: border-box; margin: 0; padding: 0; }
        body { font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, sans-serif; background-color: #f3f4f6; color: #1f2937; padding: 40px 20px; }
        .form-card { max-width: 600px; margin: 0 auto; background-color: #ffffff; border: 1px solid #e5e7eb; border-radius: 8px; padding: 32px; box-shadow: 0 1px 3px rgba(0,0,0,0.05); }
        .form-card h1 { font-size: 24px; margin-bottom: 24px; color: #111827; }
        .form-group { margin-bottom: 20px; }
        .form-group label { display: block; font-size: 14px; font-weight: 600; margin-bottom: 8px; color: #374151; }
        .form-control { width: 100%; padding: 10px 14px; border: 1px solid #d1d5db; border-radius: 6px; font-size: 15px; outline: none; transition: border-color 0.2s; }
        .form-control:focus { border-color: #2563eb; box-shadow: 0 0 0 3px rgba(37,99,235,0.1); }
        textarea.form-control { resize: vertical; min-height: 120px; }
        .form-actions { display: flex; justify-content: space-between; align-items: center; margin-top: 28px; }
        .btn { display: inline-block; padding: 10px 18px; border-radius: 6px; text-decoration: none; font-size: 14px; font-weight: 600; border: none; cursor: pointer; }
        .btn-primary { background-color: #2563eb; color: #ffffff; }
        .btn-primary:hover { background-color: #1d4ed8; }
        .back-link { color: #6b7280; text-decoration: none; font-size: 14px; }
        .back-link:hover { color: #111827; }
    </style>
</head>
<body>
    <div class="form-card">
        <h1>Create New Post</h1>

        <form action="{{ route('posts.store') }}" method="POST">
            @csrf

            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" id="title" name="title" class="form-control" placeholder="Enter post title" required>
            </div>

            <div class="form-group">
                <label for="body">Body</label>
                <textarea id="body" name="body" class="form-control" placeholder="Write your post content..." required></textarea>
            </div>

            <div class="form-actions">
                <a href="{{ route('posts.index') }}" class="back-link">← Cancel</a>
                <button type="submit" class="btn btn-primary">Save Post</button>
            </div>
        </form>
    </div>
</body>
</html>