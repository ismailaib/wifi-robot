<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- font-awesom -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/brands.min.css" integrity="sha512-G/T7HQJXSeNV7mKMXeJKlYNJ0jrs8RsWzYG7rVACye+qrcUhEAYKYzaa+VFy6eFzM2+/JT1Q+eqBbZFSHmJQew==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- link -->
    <link rel="stylesheet" href="{{url('css/responsive.css')}}">
    <link rel="stylesheet" href="{{url('css/book_place.css')}}">
    <link rel="stylesheet" href="{{url('css/student_dashboard.css')}}">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
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
          <a href="student_dashboard.html" class="fas fa-table-columns"></a>
          <a href="{{url('logout')}}" class="fas fas fa-right-from-bracket"></a>
        </div>
      </div>
    </header>
  </div>
  <h1>Update Student</h1>
  <form action="" id="modification" mrthod="post">
    @csrf
    <input type="hidden" name="id" value="{{$data['id']}}">
    <input type="text" class="field" id="name" name="name" placeholder="{{$data['name']}}" value="{{$data['name']}}" required>
    <input type="email" class="field" id="email" name="email" placeholder="{{$data['email']}}" value="{{$data['email']}}">
    <input type="password" class="field" id="password" name="password" placeholder="Change Your Your Password">
    <button type="submit" class="btn">Change</button>
  </form>
</body>
</html>
<style>
#modification {
    margin-top: 15rem;
}
</style>