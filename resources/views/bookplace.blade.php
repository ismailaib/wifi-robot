<h1>test</h1><!-- ismailaib :) :) :) :) :) :) -->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, user-scalable=no">
  <!-- font-awesom -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/brands.min.css" integrity="sha512-G/T7HQJXSeNV7mKMXeJKlYNJ0jrs8RsWzYG7rVACye+qrcUhEAYKYzaa+VFy6eFzM2+/JT1Q+eqBbZFSHmJQew==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- link -->
  <link rel="stylesheet" href="{{url('css/book_place.css')}}">
  <link rel="stylesheet" href="{{url('css/responsive.css')}}">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <title>library | by ismailaib</title>
</head>

<body>
  <ul class="notifications"></ul>
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
          <a href="{{url('studentdashboard')}}" class="fas fa-table-columns"></a>
          <a href="{{url('studentdashboard')}}" class="fas fas fa-user"></a>
          <a href="{{url('logout')}}" class="fas fas fa-right-from-bracket"></a>
        </div>
      </div>
    </header>
  </div>
  <nav class="bottom-navbar">
    <a href="#wrapper" class="fas fa-list"></a>
    <a href="{{url('studentdashboard')}}" id="cart-icon" class="fas fa-table-columns"></a>
    <a href="#deal" class="fas fa-home"></a>
    <a href="#" class="fas fa-heart"></a>
    <a href="student_register.html" class="fas fas fa-user"></a>
  </nav>

  <section class="deal" id="deal">
    <div class="content">
      <h1>Story Of Today</h1>
      <h4>david copperfield</h4>
      <p>The story follows the life of David Copperfield from childhood to maturity. David was born in Blunderstone, Suffolk, England, six months after the death of his father. David spends his early years in relative happiness with his loving, childish mother and their kindly housekeeper, Clara Peggotty. They call him Davy.</p>
      <h5>Biographie</h5>
      <div class="bottom">
        <div class="Quantity">2 in stock</div>
      <div class="stars">
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star"></span>
        <span class="fa fa-star"></span>
      </div>
      </div>
    </div>

    <div class="image">
      <img src="img/book-5.jpg" alt="">
    </div>
  </section>
  <div class="wrapper" id="wrapper">
    <div class="icon"><i id="left" class="fa-solid fa-angle-left"></i></div>
    <ul class="tabs-box">
      <li class="tab active">All</li>
      <li class="tab">Top sells</li>
      <li class="tab">Adventure stories</li>
      <li class="tab">Classics</li>
      <li class="tab">Crime</li>
      <li class="tab">Horror</li>
      <li class="tab">War</li>
      <li class="tab">Biography</li>
      <li class="tab">Short stories</li>
      <li class="tab">Fantasy</li>
      <li class="tab">Comedy</li>
      <li class="tab">War</li>
      <li class="tab">Biography</li>
      <li class="tab">Short stories</li>
      <li class="tab">Fantasy</li>
      <li class="tab">Comedy</li>
    </ul>
    <div class="icon"><i id="right" class="fa-solid fa-angle-right"></i></div>
  </div>
  <section class="featured" id="featured">
    <div class="swiper featured-slider">
      <div class="swiper-wrapper">
        <!-- the cards here -->
        @foreach($books as $book)
        <div class="swiper-slide box">
        <div class="icons">
          <a href="#" class="fas fa-heart" id="heart"></a>
          <a href="#" class="fas fa-eye" id="eye"></a>
        </div>
        <div class="image">
          <img src="{{ asset('img/' . $book->Img) }}" alt="">
        </div>
        <div class="content">
          <h3> {{ $book->Name }} </h3>
          <p> {{ $book->Info }} </p>
          <h5> {{ $book->Type }} </h5>
        <div class="Quantity"> {{ $book->Quantity }} </div>
        </div>
        <a href="#" class="btn" id="success">Command</a>
      </div>
      @endforeach
    </div>

  </section>
  <script src="{{url('js/book-place.js')}}"></script>
  <script src="{{url('js/student_dashboard.js')}}"></script>

<script>

</script>
</body>
</html>