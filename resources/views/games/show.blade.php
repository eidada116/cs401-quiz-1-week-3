<!DOCTYPE html>
<html>
<head>
    <title>Game Details</title>
</head>
<body>
    <h1>{{ $game['name'] }}</h1>
    <p><strong>Genre:</strong> {{ $game['genre'] }}</p>
    <p><strong>Developer:</strong> {{ $game['developer'] }}</p>
    <p><strong>Release Date:</strong> {{ $game['release_date'] }}</p>
</body>
</html>
