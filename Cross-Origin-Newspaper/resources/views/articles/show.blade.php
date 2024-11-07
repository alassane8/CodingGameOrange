<!DOCTYPE html>
<html>
<head>
    <title>{{ $article->Title }}</title>
</head>
<body>
    <h1>{{ $article->Title }}</h1>
    <p>{{ $article->Content }}</p>
    <p><strong>Author :</strong> {{ $article->Author }}</p>
    <p><small>Source :</small> {{ $article->Source }}</p>
    <p><small>Category :</small> {{ $article->Category }}</p>
    <p><small>Publication Date:</small> {{ $article->Publication_Date }}</p>
</body>
</html>
