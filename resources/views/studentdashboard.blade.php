<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- font-awesom -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/brands.min.css" integrity="sha512-G/T7HQJXSeNV7mKMXeJKlYNJ0jrs8RsWzYG7rVACye+qrcUhEAYKYzaa+VFy6eFzM2+/JT1Q+eqBbZFSHmJQew==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- link -->
    <link rel="stylesheet" href="{{url('css/book_place.css')}}">
    <link rel="stylesheet" href="{{url('css/student_dashboard.css')}}">
    <link rel="stylesheet" href="{{url('css/responsive.css')}}">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <title>Document</title>
</head>
<body>
  <div class="top">
    <header class="header">
      <div class="header-1">
        <a href="#" class="logo"> <i class="fas fa-book"></i> library </a>
        <form action="" class="search-form">
          <input type="search" name="" placeholder="By ismail aib ..." id="search-box">
          <label for="search-box" class="fas fa-search"></label>
        </form>
        <div class="icons" id="header-icons">
          <div id="search-btn" class="fas fa-search"></div>
          <a href="#" class="fas fa-heart"></a>
          <a href="{{url('bookplace')}}" class="fas fa-home"></a>
          <a href="{{url('logout')}}" class="fas fas fa-right-from-bracket"></a>
        </div>
      </div>
    </header>
  </div>
  <nav class="bottom-navbar">
    <a href="#" class="fas fa-heart"></a>
    <a href="{{url('bookplace')}}" class="fas fa-home"></a>
    <a href="{{url('login')}}" class="fas fas fa-user"></a>
  </nav>
  
  
  <section class="main">
    <div class="welcome">
      <h1>Welcome back , {{ Auth::user()->name }}</h1>
    </div>
    <div class="cards">
        <div class="card" id="mysettings">
          <a href="#" class="fas fa-gear"></a>
          <h3>Settings</h3>
        </div>
        <div class="card" id="myrequest">
          <a href="#" class="fas fa-book-open-reader"></a>
          <h3>MyRequest</h3>
        </div>
        <div class="card" id="myprogress">
          <a href="#" class="fas fa-list-check"></a>
          <h3>MyProgress</h3>
        </div>
    </div>
    <div class="text">
      <h2>choose frome the categories</h2>
    </div>
    <div class="progress">
    </div>
    <div class="settings">
      <div class="title">
        <h2>Change Your Informations</h2>
      </div>
      <form action="" id="modification">
        <input type="text" class="field" id="name" name="name" value="{{ Auth::user()->name }}" placeholder="{{ Auth::user()->name }}" required>
        <input type="email" class="field" id="email" name="email" value="{{ Auth::user()->email }}" placeholder="{{ Auth::user()->email }}">
        <input type="password" class="field" id="password" name="password" placeholder="Change Your Your Password">
        <input type="password" class="field" id="password" name="password" placeholder="Confirme password">
        <input type="button" value="Change">
      </form>
    </div>
    <div class="request">
        <table class="books">
            <tr>
              <th>ID</th>
              <th>Name</th>
              <th>Category</th>
              <th>Status</th>
              <th>Action</th>
            </tr>
        </table>
        <table class="date">
          <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Category</th>
            <th>Receipt day</th>
            <th>Return day</th>
          </tr>
          <tr>
            
      </table>
    </div>
  </section>

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="{{url('js/book_place.js')}}"></script>
  <script src="{{url('js/student_dashboard.js')}}"></script>
</body>
</html>