<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>{{ $theme }}</title>
    <style>
        body { font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial; padding: 2rem; background: #f7f7fb; color: #111; }
        .container { max-width: 900px; margin: 0 auto; }
        h1 { margin-bottom: 0.5rem; }
        .grid { display: grid; grid-template-columns: repeat(auto-fill,minmax(260px,1fr)); gap: 1rem; margin-top: 1rem; }
        .card { background: #fff; border: 1px solid #e6e6ef; padding: 1rem; border-radius: 8px; box-shadow: 0 1px 2px rgba(16,24,40,0.03); }
        .meta { color: #555; font-size: 0.9rem; margin-bottom: 0.5rem; }
        .tags { margin-top: 0.75rem; }
        .tag { display:inline-block; background:#eef2ff; color:#312e81; padding:0.15rem 0.5rem; border-radius:999px; font-size:0.75rem; margin-right:0.35rem; }
        a.home { display:inline-block; margin-top: 1rem; color:#2563eb; text-decoration:none; }
    </style>
</head>
<body>
    <div class="container">
        <a class="home" href="{{ url('/') }}">&larr; Home</a>
        <h1>{{ $theme }}</h1>
        <p class="meta">A small curated list of books with sapphic / women-loving-women themes.</p>

        <div class="grid">
            @foreach($products as $product)
                <div class="card">
                    <h2>{{ $product['title'] }}</h2>
                    <div class="meta">by {{ $product['author'] }} — {{ $product['year'] }}</div>
                    <div class="desc">{{ $product['description'] }}</div>
                    <div class="tags">
                        @foreach($product['tags'] as $tag)
                            <span class="tag">{{ $tag }}</span>
                        @endforeach
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</body>
</html>
