<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog | Renaldi Nurmazid</title>
    <link rel="stylesheet" href="{{ asset("style/css/bootstrap.min.css") }}">
    <script src="{{ asset("style/js/bootstrap.min.js") }}"></script>
</head>
<body>
    <nav class="navbar bg-dark shadow">
        <div class="container-fluid">
          <a class="navbar-brand fw-bold text-light" href="#">
            renaldinurmazid
          </a>
        </div>
      </nav>
    <div class="row row-cols-1 row-cols-md-3 g-4 m-5">
      <div class="col">
        <div class="card h-100">
          <img src="{{ asset("img/item1.png") }}" height="235px" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title"><a style="text-decoration:none;color:black" href="{{ '/news' }}">SEJARAH PERKEMBANGAN KOMPUTER</a></h5>
            <p class="card-text">Komputer adalah alat yang dipakai untuk mengolah data menurut perintah yang telah diprogram.</p>
          </div>
          <div class="card-footer">
            <small class="text-muted">2 Desember 2022</small>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card h-100">
          <img src="{{ asset("img/bg4.jpg") }}" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title"><a style="text-decoration:none;color:black" href="{{ '/news1' }}">TEKNOLOGI INFORMASI UMUM</a></h5>
            <p class="card-text">sistem operasi dalam laptop ada windows,linux,dan mac os lalu untuk sistem operasi di hp ada android dan ios.</p>
          </div>
          <div class="card-footer">
            <small class="text-muted">6 Desember 2022</small>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card h-100">
          <img src="{{ asset("img/bg2.jpeg") }}" class="card-img-top"   height="240px" alt="Tokoh Hebat Dunia">
          <div class="card-body">
            <h5 class="card-title"><a style="text-decoration:none;color:black" href="{{ '/news2' }}">TOKOH-TOKOH HEBAT DUNIA</a></h5>
            <p class="card-text">
              <ol type="1">
              <li>William Henry Gates III</li>
              <li>Steven Paul Jobs</li>
              <li>Mark Elliot Zuckerberg</li>
              <li>Jeffrey Preston Bezos</li>
              </ol>
              <p  class="fw-bold">. . .</p>  
            </p>
          </div>
          <div class="card-footer">
            <small class="text-muted">8 Desember 2022</small>
          </div>
        </div>
      </div>
    </div>
    <div class="row row-cols-1 row-cols-md-3 g-4 m-5">
      <div class="col">
        <div class="card h-100">
          <img src="{{ asset("img/bg rakit.jpg") }}" height="235px" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title"><a style="text-decoration:none;color:black" href="{{ '/news3' }}">Langkah-langkah Merakit PC</a></h5>
            <p class="card-text">PC atau personal computer adalah komputer yang digunakan untuk pemakaian pribadi. Misalnya untuk perseorangan, rumah, toko, kantor dan seterusnya yang masih erat kaitannya dengan kebutuhan secara personal.</p>
          </div>
          <div class="card-footer">
            <small class="text-muted">13 Desember 2022</small>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card h-100">
          <img src="{{ asset("img/bg6.jpg") }}" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
          </div>
          <div class="card-footer">
            <small class="text-muted">Last updated 3 mins ago</small>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card h-100">
          <img src="{{ asset("img/react.jpg") }}" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
          </div>
          <div class="card-footer">
            <small class="text-muted">Last updated 3 mins ago</small>
          </div>
        </div>
      </div>
    </div>
    <div>
      <footer class="text-center text-white bg-dark">
        <!-- Copyright -->
        <div class="text-center text-light p-3" style="background-color: rgba(0, 0, 0, 0.2);">
          Peserta Beasiswa PT Protonema 2022-2023
          <p style="margin: 0">renaldinurmazid.</p>
          
        </div>
        <!-- Copyright -->
      </footer>
     </div>
</body>
</html>