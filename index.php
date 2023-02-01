<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="./assets/logo.png" />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200"
    />
    <link rel="stylesheet" href="./src/css/normalize.css" />
    <link rel="stylesheet" href="./src/css/style-index.css" />
    <title>Back to the Time</title>
  </head>
  <body>
    <div class="card__logo">
      <img
        src="./assets/logo.png"
        alt="logo"
        srcset=""
        class="logo__img-principal"
      />
    </div>
    <section class="card__container sign-in">
      <div class="container__card">
        <div class="card__title">
          <h1 class="title">Bienvenido a tu cuenta regresiva</h1>
        </div>

        <form action="./src/php/login.php/" method="POST" class="card__form">
          <div class="form__item">
            <input id="email" class="input" type="email" name="email" required />
            <span class="form__item-icon material-symbols-outlined"
              >person</span
            >
            <div class="label">Email</div>
          </div>
          <div class="form__item">
            <input id="pass1" type="password" name="password" required />
            <span class="form__item-icon material-symbols-outlined">lock</span>
            <div class="label">Contraseña</div>
          </div>
          <div class="form__item-other">
            <div class="checkboxes">

              <div class="checkbox">
                <input type="checkbox" name="" id="remember_me" />
                <label for="remember_me">Recordarme</label>
              </div>
              <div class="checkbox">
              <input type="checkbox" name="ver_pass" id="visor_pass1">
                <label for="label">Mostrar contraseña</label>
              </div>

            </div>
          </div>
          <button type="submit">Ingresar</button>
        </form>
      </div>
      <div class="login__container-footer">
        <div class="footer">
          <div class="footer__register">
            ¿No tenes Cuenta? <a class="underline sign-up-btn" href="#">Registrate Ahora</a>
          </div>
        </div>
      </div>
    </section>
    <section class="card__container sign-up">
      <div class="container__card">
        <div class="card__title">
          <h1 class="title">Bienvenido a tu cuenta regresiva</h1>
        </div>

        <form action="./src/php/register.php/" method="POST" class="card__form">
          <div class="form__item">
            <input type="text" name="name" required />
            <span class="form__item-icon material-symbols-outlined">person</span>
            <div class="label">Nombre y Apellido</div>
          </div>
          <div class="form__item birthday">
          <label class="birthday">Fecha de Nacimiento</label>
            <div class="date">
              <input id="date" type="date" name="date" required />
            </div>
            <span class="form__item-icon icon__date material-symbols-outlined"
              >calendar_month</span
            >
          </div>
          <div class="form__item">
            <input type="email" name="email" required />
            <span class="form__item-icon material-symbols-outlined"
              >mail</span
            >
            <div class="label">Email</div>
          </div>
          <div class="form__item">
            <input id="pass2" type="password" name="password" required />
            <span class="form__item-icon material-symbols-outlined">lock</span>
            <div class="label">Contraseña</div>
          </div>
          <div class="checkbox">
            <input type="checkbox" name="ver_pass" id="visor_pass2">
            <label for="label">Mostrar contraseña</label>
          </div>
          <button type="submit">Registrate</button>
        </form>
      </div>
      <div class="login__container-footer">
        <div class="footer__apis">
          <div class="footer__register">
            ¿Tenes una Cuenta? <a class="underline sign-in-btn" href="#">Inicia Sesión</a>
          </div>
        </div>
      </div>
    </section>
    <div class="card__logo card__right">
        <img
          src="./assets/logo.png"
          alt="logo"
          srcset=""
          class="logo__img-principal"
        />
      </div>

    <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
    <script src="./src/js/changes.js"></script>
    <script src="./src/js/visorPass.js"></script>
    <script src="./src/js/rememberMe.js"></script>
    <script src="./src/js/date.js"></script>

    <script type="text/javascript">
      $(document).ready(function () {
        $('button, input').addClass('browser-default');
      });
    </script>
  </body>
</html>
