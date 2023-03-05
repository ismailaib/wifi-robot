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
  <link rel="stylesheet" href="{{url('css/responsive.css')}}">
  <link rel="stylesheet" href="{{url('css/book_place.css')}}">
  <link rel="stylesheet" href="{{url('css/admindashboard.css')}}">
  <title>Document</title>
</head>

<body>
  <div class="top">
    <header class="header">
      <div class="header-1">
        <a href="#" class="logo"> <i class="fas fa-book"></i> library </a>
        <form action="" class="search-form">
          <input type="search" name="" placeholder="Searsh here" id="searchInput">
          <label for="search-box" class="fas fa-search"></label>
        </form>
        <div class="icons" id="header-icons">
          <div id="search-btn" class="fas fa-search"></div>
          <a href="#" class="fas fa-heart"></a>
          <a href="{{url('bookplace')}}" class="fas fa-table-columns"></a>
          <a href="{{url('logout')}}" class="fas fas fa-right-from-bracket"></a>
        </div>
      </div>
    </header>
  </div>
  <section class="main">
    <div class="welcome">
      <h1>Welcome back , {{ Auth::user()->name }}</h1>
    </div>
    <div class="cards">
      <div class="card" id="students">
        <div class="title">
        <a href="#" class="fas fa-users"></a>
          <h3>Students</h3>
        </div>
        <div class="counter">
          <h3>{{ $numberOfStu - 1 }}</h3>
        </div>
      </div>
      <div class="card" id="books">
        <div class="title">
          <a href="#" class="fas fa-book"></a>
          <h3>Books</h3>
        </div>
        <div class="counter">
          <h3>{{ $numberOfBooks }}</h3>
        </div>
      </div>
      <div class="card" id="requests">
        <div class="title">
          <a href="#" class="fas fa-list-check"></a>
          <h3>Requests</h3>
        </div>
        <div class="counter">
          <h3>0</h3>
        </div>
      </div>
      <div class="card" id="statistiques">
        <div class="title">
          <a href="#" class="fas fa-chart-simple"></a>
          <h3>statistiques</h3>
        </div>
        <div class="counter">
          <h3>3</h3>
        </div>
      </div>
    </div>
    <div class="text">
      <h2>choose frome the categories</h2>
    </div>
    <div class="students">
      <a href="#" class="fas fa-student fa-plus" onclick="openadd()">
        <h2>Add Student</h2>
      </a>
      <table id="studentsTable">
  <tr>
    <th>Id</th>
    <th>Name</th>
    <th>Email</th>
    <th>Created at</th>
    <th>Level</th>
    <th>Edit</th>
    <th>Delete</th>
  </tr>
  @foreach($students as $student)
  <tr>
    <td>{{$student['id']}}</td>
    <td>{{$student['name']}}</td>
    <td>{{$student['email']}}</td>
    <td>{{$student['created_at']}}</td>
    <td></td>
    <td>
      <a href="#" onclick="openupdate()"><i class="fa-solid fa-pen-to-square"></i></a>
    </td>
    <td>
      <a id="deletebtn" href={{"delete/".$student['id']}}><i class="fa-solid fa-trash"></i></a>
    </td>
  </tr>
  @endforeach
</table>
    </div>
    <!-- add -->
    <div class="form-popup" id="add">
      <form action="" class="form-container" method="post">
        <div class="title">
          <h2>Add Student</h2>
          <a onclick="closeadd()" href=""><i class="fa-solid fa-xmark"></i></a>
        </div>
        <div style="color:red;">
          @foreach($errors->all() as $error)
          {{$error}}<br>
          @endforeach
        </div>
        @csrf
        <input type="text" class="field" id="name" name="name" placeholder="Your Name Here">
        <input type="email" class="field" id="email" name="email" placeholder="E-mail">
        <input type="password" class="field" id="password" name="password" placeholder="Your Password">
        <button type="submit" class="btn">Add</button>
      </form>
    </div>
    <!-- update -->
    <div class="form-popup" id="update">
    <form action="{{ route('update', $student->id) }}" class="form-container" method="post">
    <div class="title">
      <h2>Update Student</h2>
      <a onclick="closeupdate()" href="#"><i class="fa-solid fa-xmark"></i></a>
    </div>
    <div style="color:red;">
      @foreach($errors->all() as $error)
        {{$error}}<br>
      @endforeach
    </div>
    @csrf
    <input type="hidden" name="_method" value="PUT">
    <input type="" name="id" value="{{$student['id']}}">
    <input type="text" class="field" id="name" name="name" value="{{$student['name']}}">
    <input type="email" class="field" id="email" name="email" value="{{$student['email']}}">
    <input type="password" class="field" id="password" name="password" placeholder="Your Password">
    <button type="submit" class="btn">Update</button>
  </form>
</div>

    <div class="books">
    @if(isset($books))
    <table>
  <thead>
    <tr>
      <th>id</th>
      <th>Name</th>
      <th>Quantity</th>
      <th>Img</th>
      <th>Info</th>
      <th>Type</th>
    </tr>
  </thead>
  <tbody id="book-table">
    @foreach($books as $book)
    <tr>
      <td>{{ $book->id }}</td>
      <td>{{ $book->Name }}</td>
      <td>{{ $book->Quantity }}</td>
      <td>{{ $book->Img }}</td>
      <td>{{ $book->Info }}</td>
      <td>{{ $book->Type }}</td>
    </tr>
    @endforeach
  </tbody>
</table>
    @endif

    </div>
    </div>
    <div class="requests"><h1>requests</h1></div>
  </section>
  <script src="{{url('js/admindashboard.js')}}"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <style>
    .students {
      padding: 3rem 0 0 0;
    }

    .main {
      padding: 12rem;
    }

    .welcome h1 {
      color: var(--black);
      font-size: 3rem;
      padding-bottom: 3rem;
    }

    .cards {
      display: grid;
      grid-template-columns: auto auto auto;
      gap: 2rem;
      height: fit-content;
    }

    .cards .card {
      background: #807ef7;
      border-radius: 20px;
      cursor: pointer;
      display: flex;
      align-items: center;
      justify-content: flex-start;
    }

    .bottom-navbar a,
    .cards a {
      font-size: 2.5rem;
      padding: 2rem;
      color: #fff;
    }

    .card h3 {
      color: #fff;
      font-size: 1.5rem;
    }

    .text {
      display: flex;
      justify-content: center;
      color: var(--black);
      align-items: center;
      height: 50vh;
    }

    .students,
    .books,
    .requests {
      display: none;
    }

    .books {
      padding-top: 2rem;
    }
    .cards .card {
    background: #807ef7;
    border-radius: 20px;
    cursor: pointer;
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding-right: 30px;
}
  </style>
  <script>

    $(document).ready(function() {
      $("#students").click(function() {
        $(".students").show();
        $(".books, .requests, .text").hide();
      });
      $("#books").click(function() {
        $(".books").show();
        $(".students, .requests, .text").hide();
      });
      $("#requests").click(function() {
        $(".requests").show();
        $(".students, .books, .text").hide();
      });
    });

    function openadd() {
    document.getElementById("add").style.display = "block";
  }
  
  function closeadd() {
    document.getElementById("add").style.display = "none";
  }

  function openupdate() {
    document.getElementById("update").style.display = "block";
  }
  
  function closeupdate() {
    document.getElementById("update").style.display = "none";
  }

  </script>
<script>
  let searchInput = document.getElementById('searchInput');
  let studentsTable = document.getElementById('studentsTable');

searchInput.addEventListener('keyup', function() {
  let filter = searchInput.value.toLowerCase();
  let rows = studentsTable.getElementsByTagName('tr');

  for (let i = 0; i < rows.length; i++) {
    let name = rows[i].getElementsByTagName('td')[1];
    let email = rows[i].getElementsByTagName('td')[2];

    if (name || email) {
      let nameValue = name.textContent || name.innerText;
      let emailValue = email.textContent || email.innerText;

      if (nameValue.toLowerCase().indexOf(filter) > -1 || emailValue.toLowerCase().indexOf(filter) > -1) {
        rows[i].style.display = '';
      } else {
        rows[i].style.display = 'none';
      }
    }
  }
});
</script>
<script>
document.getElementById('searchInput').addEventListener('input', function() {
  let filter = this.value.toLowerCase();
  let rows = document.getElementById('book-table').rows;

  for (let i = 1; i < rows.length; i++) {
    let nameValue = rows[i].cells[1].innerText.toLowerCase();
    let quantityValue = rows[i].cells[2].innerText.toLowerCase();
    let typeValue = rows[i].cells[5].innerText.toLowerCase();

    if (nameValue.indexOf(filter) > -1 || quantityValue.indexOf(filter) > -1 || typeValue.indexOf(filter) > -1) {
      rows[i].style.display = '';
    } else {
      rows[i].style.display = 'none';
    }
  }
});
</script>
</body>

</html>





