<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>API Food - Backend</title>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body { 
            font-family: system-ui, -apple-system, sans-serif; 
            display: flex; 
            align-items: center; 
            justify-content: center; 
            min-height: 100vh; 
            background: #f5f5f5;
        }
        .container { 
            text-align: center; 
            padding: 2rem; 
            background: white; 
            border-radius: 8px; 
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            max-width: 500px;
        }
        h1 { font-size: 2rem; margin-bottom: 0.5rem; color: #333; }
        p { color: #666; margin-bottom: 1.5rem; }
        .badge { 
            display: inline-block; 
            padding: 0.5rem 1rem; 
            background: #10b981; 
            color: white; 
            border-radius: 4px; 
            font-weight: 500;
        }
        .info { margin-top: 1.5rem; font-size: 0.875rem; color: #888; }
    </style>
</head>
<body>
    <div class="container">
        <h1>🍔 API Food</h1>
        <p>API Backend Laravel - Version {{ app()->version() }}</p>
        <div class="badge">✅ API Active</div>
        <div class="info">Frontend: <a href="http://localhost:5173">http://localhost:5173</a></div>
    </div>
</body>
</html>
