<div class="login-box">
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg"><strong>Iniciar Sesión</strong></p>
    <form id="form-login">
      <div class="form-group has-feedback">
        <input type="email" class="form-control" placeholder="Email" name="nomUsr" maxlength="30" required>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" placeholder="Password" name="passUsr" maxlength="12" required >
      </div>
      <div class="row">
        <!-- /.col -->
        <div class="btn-ingresar">
          <input type="submit" class="btn btn-primary" value="Ingresar">
        </div>
        <div class="respuesta">
          <p><?php echo $_SESSION["mail"]; ?></p>
        </div>
      </div>
      <input type="hidden" name="tipoOperacion" value="iniciarSesion">
    </form>
  </div>
</div>