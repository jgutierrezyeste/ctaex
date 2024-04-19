

<!doctype html>
<html lang="en">
  <head>
    <title>IDENTIFICACION</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <!-- Bootstrap CSS v5.2.1 -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
      crossorigin="anonymous"
    />
  </head>

  <body>
              @extends ('layouts.landing')
             
              @section ('content')

              <x-saludo saludo="BIENVENIDO AL CENTRO TUTELAR DE ADULTOS" extenso="Identifiquese o regístrese"></x-saludo>
             

            <section>
                <div class="container-fluid h-custom">
                  <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-md-9 col-lg-6 col-xl-5">
                      <img src="{{asset('assets/img/escudo_final.png')}}"  
                        class="img-fluid" alt="Sample image">
                    </div>
                    <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
                      <form method = "POST" action = "{{ route('iniciar_sesion') }}">                       
                         @csrf
                        <!-- Email input -->
                        <div data-mdb-input-init class="form-outline mb-4">
                          <label class="form-label" for="email">Correo electrónico</label>
                          <input type="email" id="email" name="email" class="form-control form-control-lg"
                            placeholder="Introduzca un correo electrónico valido" />
                        </div>

                        <!-- Password input -->
                        <div data-mdb-input-init class="form-outline mb-3">
                          <label class="form-label" for="password">Contraseña</label>
                          <input type="password" pattern=".{6,}" id="password" name="password" class="form-control form-control-lg"
                            placeholder="Introduzca la contraseña" />
                        </div>

                        <div class="d-flex justify-content-between align-items-center">
                          <!-- Checkbox -->
                          <div class="form-check mb-0">
                            <input class="form-check-input me-2" type="checkbox" name="remember" value="" id="form2Example3" />
                            <label class="form-check-label" for="form2Example3">
                              Recordarme
                            </label>
                          </div>
                          <a href="#!" class="text-body">¿Olvidaste la contraseña?</a>
                        </div>

                        <div class="text-center text-lg-start mt-4 pt-2">
                          <button type="submit" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-lg"
                            style="padding-left: 2.5rem; padding-right: 2.5rem;">Inicio Sesión</button>
                          <p class="small fw-bold mt-2 pt-1 mb-0">¿No tienes cuenta? <a href="{{route('vista_registro')}}"
                              class="link-danger">Resgistrarse</a></p>
                        </div>

                      </form>
                    </div>
                  </div>
                </div>
                <div
                  class="d-flex flex-column flex-md-row text-center text-md-start justify-content-between py-4 px-4 px-xl-5 bg-primary">
                  <!-- Copyright -->
                  <div class="text-white mb-3 mb-md-0">
                    Copyright © 2020. All rights reserved.
                  </div>
                  <!-- Copyright -->

                  
                </div>
              
              </section>
              @endsection




    
  </body>
</html>
