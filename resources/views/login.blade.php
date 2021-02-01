<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="index.css" />
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
    <title>Login</title>
  </head>
  <body>
    <center>
    <div class="contenedor_formulario">
      <form class="sombra_formulario" action="login" method="post" autocomplete="on">
        <div class="cabeza_formulario aquamarina">
          <span class="txt_1 bold t_blanco">Sign in</span>
        </div>
        <div class="cuerpo_formulario">
          <div class="form-content"><br>
            <div class="inputWithIcon">
              <input id="email" class="txt_4" name="email" type="email" placeholder="Email" autocomplete="on" required>
              <i class="fa fa-envelope fa-lg fa-fw" aria-hidden="true"></i>
            </div>
            <div class="inputWithIcon">
              <input id="password" class="txt_4" name="password" type="password" placeholder="Password" autocomplete="on" required="">
              <i id="ic-pass" class="fa fa-lock fa-lg fa-fw" aria-hidden="true"></i>
            </div>
            <br><br>
            <span class="txt_4">No account </span><a href="register"><span class="txt_4">Create one!</span></a>
            <br><br>
            <button type="submit" class="boton azul width_100 txt_3">Next</button>
            <br>
          </div>
        </div>
      </form>
    </div>
    </center>
  </body>
</html>