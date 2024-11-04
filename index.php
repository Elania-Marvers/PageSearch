<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="static/styles/index.css">
    <link rel="icon" type="image/png" href="static/favicon.png">
    <title>PageSearch</title>
</head>
<body>
    <div id="app">
        <h1>Welcome to PageSearch</h1>
        <form id="searchForm">
            <input type="text" name="query" id="query" placeholder="Search..." required>
            <button type="submit">Search</button>
        </form>
        <div id="results"></div>
    </div>

    <script src="static/scripts/index.js"></script>
</body>
</html>
