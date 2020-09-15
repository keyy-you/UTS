<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <title>Laravel</title>
        <!-- CSS only -->


        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="container justify-content-center">
        <div class="card" style="margin-top=10px">
        <div class="card-body">
        <h3>Hitung Volume Tabung</h3>
        <form method="post" class="form-inline" action="/hitung">
        @csrf
            <div class="form-group">
                <label for="number">Jari-jari :</label>
                <input type="number" class="form-control" placeholder="Masukkan Jari-Jarinya" name="tabung">
            </div>
            <div class="form-group">
                <label for="number">Tinggi:</label>
                <input type="number" class="form-control" placeholder="Masukkan Tingginya" name="tabungtinggi">
            </div>
            <div class="form-group">
                <label for="text">phi:</label>
                <input type="text" class="form-control" placeholder="*3,14 atau 22/7" name="phi2">
            </div>
            <div class="card-body">
            <button type="submit" class="btn btn-primary">Hitung</button>
            </div>
        </form>
  
        </div>
       
        <div class="form-row">
            @if(session('hasil'))
                <div class="alert alert-success">
                    {{ session('hasil')}}
                </div>
            @endif
        
        </div>
        </div>
        </div>

        <div class="container justify-content-center">
        <div class="card">
        <div class="card-body">
        <h3>Hitung Volume Kerucut</h3>
        <form method="post" class="form-inline" action="/hitung2">
        @csrf
  <div class="form-group">
    <label for="number">Jari-Jari :</label>
    <input type="number" class="form-control" placeholder="Masukkan Jari-jarinya" name="kerucut">
  </div>
  <div class="form-group">
    <label for="number">Tinggi:</label>
    <input type="number" class="form-control" placeholder="Masukkan Tingginya" name="kerucuttinggi">
  </div>
  <div class="form-group">
    <label for="text">phi:</label>
    <input type="text" class="form-control" placeholder="*3,14 atau 22/7" name="phi3">
  </div>
 
  <div class="card-body">
  <button type="submit" class="btn btn-primary">Hitung</button>
  </div>
  </form>
        </div>
       
        <div class="form-row">
            @if(session('hasil1'))
                <div class="alert alert-success">
                    {{ session('hasil1')}}
                </div>
            @endif
        </div>
        

        </div>
        </div>

        <div class="container justify-content-center">
        <div class="card">
        <div class="card-body">
        <h3>Hitung Rumus Bola</h3>
        <form method="post" class="form-inline" action="/hitung3">
        @csrf
  <div class="form-group">
    <label for="text">Jari-Jari :</label>
    <input type="text" class="form-control" placeholder="Masukkan Jari-jarinya" name="bola">
  </div>
  <div class="form-group">
    <label for="number">Phi:</label>
    <input type="text" class="form-control" placeholder="*3,14 atau 22/7" name="phi4">
  </div>
  
  <div class="card-body">
  <button type="submit" class="btn btn-primary">Hitung</button>
  </div>
  </form>
        </div>
        <div class="form-row">
            @if(session('hasil2'))
                <div class="alert alert-success">
                    {{ session('hasil2')}}
                </div>
            @endif
        </div>
        </div>
        </div>
    </body>
</html>
