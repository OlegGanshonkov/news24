<!DOCTYPE html>
<html>
<head>
    <title>My view</title>
</head>
<body>
<header>
    хедер
</header>
<aside>
    сайдбар
</aside>
<main>
    контент
</main>
<footer>
    футер
</footer>


<ul>
    @foreach($arr as $item)
        <li>{{ $loop->iteration }}</li>
    @endforeach
</ul>

</body>
</html>
