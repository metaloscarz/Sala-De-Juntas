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
      <form class="sombra_formulario" action="#" method="post" autocomplete="on">
        <div class="cabeza_formulario aquamarina">
          <span class="txt_1 bold t_blanco">Iniciar sesión</span>
        </div>
        <div class="cuerpo_formulario">
          <div class="form-content"><br>
            <div class="inputWithIcon">
              <input id="email" class="txt_4" name="email" type="email" placeholder="Correo electrónico" value="" autocomplete="on" required>
              <i class="fa fa-envelope fa-lg fa-fw" aria-hidden="true"></i>
            </div>
            <div class="inputWithIcon">
              <input id="password" class="txt_4" name="password" type="password" placeholder="Contraseña" autocomplete="on" required="">
              <i id="ic-pass" class="fa fa-lock fa-lg fa-fw" aria-hidden="true"></i>
            </div>
            <br><br>
            <a href="register">¿Aún no ha creado su cuenta?, haz click aquí</a>
            <br><br>
            <button type="submit" class="boton azul width_100 txt_3">Acceder</button>
            <br>
          </div>
        </div>
      </form>
    </div>
    </center>
  </body>
</html>