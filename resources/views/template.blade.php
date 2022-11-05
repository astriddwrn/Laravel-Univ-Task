<link rel="stylesheet" href="style.css">

<nav>
    <span><a href="/">Home</a></span>
    <span><a href="/about">About</a></span>
    <span><a href="/blog">Blog</a></span>
</nav>

<div class="header">
  <td>@yield('header')</td><br>
</div>

<div class="img">
  <input type="image" src="logobinus.jpg" width=200px height=100px>  
</div>

<div class="header">
  <td> About Us </td><br>
</div>

<div class ="nama">
  <div class="column">
    @foreach ($data as $value)
      <div>
          <input type="image" src={{$value->image}}><br>
          <td>{{$value->name}}</td><br>
          <td>{{$value->nim}}</td><br>
          <td>{{$value->email}}</td><br>
      </div>
    @endforeach
  </div>
 
</div>