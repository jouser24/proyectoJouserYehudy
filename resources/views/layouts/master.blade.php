
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
  <title>@yield('title') | Proyecto Jouser-Yehudy</title>
  
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        
  <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
  
  <link href="https://fonts.googleapis.com/css?family=Raleway:400,600" rel="stylesheet">
  @yield('head')
</head>
<body>

<header>
  <div class="container">
      <figure class="img1">
          <img src="images/img-big.png" width="1348" height="500" alt="img-big">
      </figure>
      <div class="text-logo">Focus</div>
      <div class="text-logo2">A landing page for your app with focus</div>
  </div>
</header>

  @yield('content')
  
<section class="wrapper">
  <article class="main">
      <p>
          <img src="images/phone.png" alt="img-phone">
      </p>
  </article>

  <aside class="aside aside-1">
      <p class="tittle">Great feature<p>Lorem ipsum dolor sit amet,<br> consectetur adipiscing elit.<br> Mauris interdum velit vitae<br>nulla molestie eu.<p class="tittle"><br>Another great feature</p>Lorem ipsum dolor sit amet,<br> consectetur adipiscing elit.<br> Mauris interdum velit vitae<br>nulla molestie eu. 
  </aside>
              
  <aside class="aside aside-2">
      <p class="tittle">Great feature</p>Lorem ipsum dolor sit amet,<br> consectetur adipiscing elit.<br>Mauris interdum velit vitae<br>nulla molestie eu.<p class="tittle"><br>Another great feature</p>Lorem ipsum dolor sit amet,<br> consectetur adipiscing elit.<br> Mauris interdum velit vitae<br>nulla molestie eu. 
  </aside>
  
</section>
<section id="before-footer">
  <article class="before-footer-article">
      <aside class="inside">
          <h1>Get The App Today!</h1>
      </aside>
      <aside class="inside">
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam</p><br>
          <p>dictum erat finibus libero egestas, vel mollis velit gravida. Ut</p><br> 
          <p>laoreet tincidunt cursus. Vestibulum at ipsum vel lorem auctor</p><br> 
          <p>facilisis non ut leo.</p>
      </aside>
      <aside class="inside icons">
          <figure>
              <img src="images/apple.png" alt="img-apple">
          </figure>
          <figure>
              <img src="images/android.png" alt="img-android">
          </figure>
          <figure>
              <img src="images/windows.png" alt="img-windows">
          </figure>
      </aside>    
  </article>
  <article class="before-footer-article">
      <aside class="inside">
          <figure id="inside-img">
              <img src="images/video.png" alt="img-video">
          </figure>  
      </aside>
  </article>
  <article class="before-footer-article" id="prove">
      <span>"Focus is an app that is extremely useful. I would recomend it to anyone."</span>
      <span><strong>Kyle Turner</strong>, Blogger</span>
  </article>
  <article class="before-footer-people">
      <div id="people">
          <img src="images/people.png" width="1384" height="320" alt="people">
      </div>
  </article>
  <article id="icons-position">
      <aside class="inside">
          <h1>Say Hi & Get in Touch</h1>
      </aside>
      <aside class="inside">
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
      </aside>
      <aside class="inside icons">
          <figure>
              <img src="images/twitter.png">
          </figure>
          <figure>
              <img src="images/facebook.png">
          </figure>
          <figure>
              <img src="images/google.png">
          </figure>
          <figure>
              <img src="images/linkedin.png">
          </figure>
          <figure>
              <img src="images/youtube.png">
          </figure>
      </aside>
  </article>
  <footer>
      <div id="lista">
          <ul>
          <li><a href="#">Contact</a></li>
          <li><a href="#">Download</a></li>
          <li><a href="#">Press</a></li>
          <li><a href="#">Email</a></li>
          <li><a href="#">Support</a></li>
          <li><a href="#">Privacy Policy</a></li>
      </ul>
      </div>
  </footer>
</section>

  <script src="/js/jquery-3.2.1.min.js"></script>
  <script src="/js/code.js"></script>

</body>
</html>
