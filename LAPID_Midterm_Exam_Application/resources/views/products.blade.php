<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="icon" href="https://cdn-icons-png.flaticon.com/512/5780/5780661.png">
    <title>{{ $theme }}</title>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body { 
            font-family: 'Georgia', 'Garamond', serif; 
            background: #f5f1e8; 
            color: #4a4a4a; 
            line-height: 1.6;
            padding: 2rem;
        }
        .container { 
            max-width: 1000px; 
            margin: 0 auto; 
            border-radius: 10px;
        }
        .header {
            background: #fff;
            padding: 3rem 2rem;
            margin-bottom: 3rem;
            border-bottom: 4px solid #8b7355;
            text-align: center;
        }
        .header a {
            display: inline-block;
            margin-bottom: 1rem;
            color: #8b7355;
            text-decoration: none;
            font-size: 0.95rem;
            font-family: sans-serif;
            letter-spacing: 0.5px;
        }
        .header a:hover { text-decoration: underline; }
        h1 {
            font-size: 2.5rem;
            margin-bottom: 0.5rem;
            color: #5a3a2a;
            font-weight: normal;
            letter-spacing: -0.5px;
        }
        .subtitle {
            color: #8b7355;
            font-style: italic;
            font-size: 1.1rem;
            margin-top: 1rem;
        }
        .works-list {
            background: #fff;
            border: 1px solid #e0d9cc;
            border-radius: 10px;
        }
        .work-item {
            display: grid;
            grid-template-columns: 150px 1fr;
            gap: 2rem;
            padding: 2rem;
            border-bottom: 1px solid #e0d9cc;
            align-items: start;
        }
        .work-item:last-child {
            border-bottom: none;
        }
        .work-cover {
            display: flex;
            justify-content: center;
  
        }
        .work-cover img {
            width: 150px;
            height: auto;
            box-shadow: 0 2px 8px rgba(0,0,0,0.15);
            border: 1px solid #ddd;
            border-radius: 5px;
        }
        .work-content h2 {
            font-size: 1.5rem;
            margin-bottom: 0.3rem;
            color: #5a3a2a;
            font-weight: normal;
        }
        .work-content h2 a {
            color: #8b7355;
            text-decoration: none;
        }
        .work-content h2 a:hover {
            text-decoration: underline;
        }
        .work-meta {
            font-size: 0.95rem;
            color: #7a7a7a;
            margin-bottom: 1rem;
            font-family: sans-serif;
        }
        .work-meta strong {
            font-weight: 600;
        }
        .work-description {
            font-size: 1rem;
            line-height: 1.7;
            margin-bottom: 1.5rem;
            color: #4a4a4a;
        }
        .work-tags {
            display: flex;
            flex-wrap: wrap;
            gap: 0.5rem;
        
        }
        .tag {
            display: inline-block;
            background: #f0ebe3;
            color: #5a4a3a;
            padding: 0.35rem 0.75rem;
            font-size: 0.85rem;
            border: 1px solid #ddd;
            font-family: sans-serif;
            letter-spacing: 0.3px;
            border-radius: 10px;
        }
        .tag:hover {
            background: #e8dfd5;
        }
        @media (max-width: 768px) {
            .work-item {
                grid-template-columns: 1fr;
                gap: 1rem;
            }
            .work-cover {
                justify-content: flex-start;
            }
            h1 {
                font-size: 1.8rem;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <img src="https://cdn-icons-png.flaticon.com/512/5780/5780661.png" alt="Logo" style="width: 60px; margin-bottom: 1rem;">
            <h1>{{ $theme }}</h1>
            <p class="subtitle">A carefully curated collection of sapphic & women-loving-women literature</p>
        </div>

        <div class="works-list">
            @foreach($products as $product)
                <div class="work-item">
                    <div class="work-cover">
                        @if(!empty($product['cover']))
                            <img src="{{ $product['cover'] }}" alt="{{ $product['title'] }} cover">
                        @endif
                    </div>
                    <div class="work-content">
                        <h2>{{ $product['title'] }}</h2>
                        <div class="work-meta">
                            by <strong>{{ $product['author'] }}</strong> ({{ $product['year'] }})
                        </div>
                        <div class="work-description">
                            {{ $product['description'] }}
                        </div>
                        <div class="work-tags">
                            @foreach($product['tags'] as $tag)
                                <span class="tag">{{ $tag }}</span>
                            @endforeach
                        </div>
                        
                        @if(!empty($product['link']))
                            <a href="{{ $product['link'] }}" target="_blank" style="display: inline-block; margin-top: 1.5rem; padding: 0.6rem 1.2rem; background: #8b735565; color: #fff; text-decoration: none; border-radius: 10px; font-family: monospace; font-size: 0.9rem; letter-spacing: 0.3px; transition: background 0.2s;" onmouseover="this.style.background='#6d5845'" onmouseout="this.style.background='#8b7355'">Learn More →</a>
                        @endif
     
                    </div>
                </div>
            @endforeach
        </div>
        <footer style="text-align: center; margin-top: 3rem; color: #7a7a7a; font-size: 0.9rem; font-family: monospace;">
            &copy; {{ date('Y') }} ZAIREN V. LAPID | CIT18- MASTERY IN WEB 
        </footer>
    </div>
</body>
</html>
