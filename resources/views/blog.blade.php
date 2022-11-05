<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Blog</title>

  <link rel="stylesheet" href="/css/blog.css">
</head>
<body>

<nav>
    <span><a href="/">Home</a></span>
    <span><a href="/about">About</a></span>
    <span><a href="/blog">Blog</a></span>
</nav>

<div class="support-grid"></div>

  <div class="band">
    @foreach ($data as $val)
    <div class="item-2">
          <a href="{{ route('byId', [ 'id' => $val->id ]) }}" class="card">
            <div class="thumb" style="background-image: url(https://insights.dice.com/wp-content/uploads/2020/02/shutterstock_552355783.jpg);"></div>
            <article>
              <h1>{{$val->title}}</h1>
              <span>{{$val->author}}</span>
            </article>
          </a>
    </div>
    @endforeach
  </div>
  
</body>
</html>