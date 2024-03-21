<!doctype html>
<html lang="en">

<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <link rel="stylesheet" href="{{asset('assets/estilosr.css')}}" >

</head>

<body>
  
<section class="vh-100 bg-image"
  style="background-image: url('https://mdbcdn.b-cdn.net/img/Photos/new-templates/search-box/img4.webp');">
  <div class="mask d-flex align-items-center h-100 gradient-custom-3">
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-9 col-lg-7 col-xl-6">
          <div class="card" style="border-radius: 15px;">
            <div class="card-body p-5">
              <h2 class="text-uppercase text-center mb-5">CREAR CUENTA</h2>

              <form acticon="{{route('register')}}" method="post">
                @csrf
              
                <div class="form-outline mb-4">
                  <input type="text" id="form3Example3cg" name="email" class="form-control form-control-lg" />
                  <label class="form-label" for="form3Example3cg">Email</label>
                </div>

                <div class="form-outline mb-4">
                  <input type="text" id="form3Example1cg" name="usuario" class="form-control form-control-lg" />
                  <label class="form-label" for="form3Example1cg">Usuario</label>
                </div>

               
                <div class="form-outline mb-4">
                  <input type="password" name="contrasena" id="form3Example4cg" class="form-control form-control-lg" />
                  <label class="form-label" for="form3Example4cg">Contraseña</label>
                </div>

                <div class="form-outline mb-4">
                  <input type="password" id="form3Example4cdg" class="form-control form-control-lg" />
                  <label class="form-label" for="form3Example4cdg">Repita la contraseña</label>
                </div>

                <div class="d-flex justify-content-center">
                  <button type="submit" class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3">REGISTARSE</button>
                </div>

                <p class="text-center text-muted mt-5 mb-0">¿Ya tienes una cuenta? <a href="{{route('login')}}"
                    class="fw-bold text-body"><u>Iniciar</u></a></p>

              </form>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
    integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
    integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
  </script>
</body>

</html>