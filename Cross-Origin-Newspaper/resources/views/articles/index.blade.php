<!DOCTYPE html>
<html>
<head>
    <title>Articles's list</title>
</head>
<body>
    <h1>Articles</h1>
    <ul>
        @foreach ($articles as $article)
            <li>
                <h2>{{ $article->Title }}</h2>
                <p>{{ $article->Content }}</p>
                <p>Publication date : {{ $article->Publication_Date }}</p>
            </li>
        @endforeach
    </ul>
</body>
</html>
