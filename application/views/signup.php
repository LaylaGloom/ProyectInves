<?php include ('head.php'); ?>
<?php include ('menu.php'); ?>
<section>
	<div class="container my-lg-5">
	  <div class="row justify-content-center">
        <div class="col-8 my-lg-5">
          <h4 class="text-center">¿Deseas recibir información acerca de los cambios de horario del camión recolector de tu comunidad?
            <br> <hr>
            <b>¡Registrate!</b>
          </h4>
          <br>
          <p class="text-center">Enviaremos notificaciones a tu correo electónico cuando ocurra algún cambio.</p>
          <form  action="signup_submit" method="get" accept-charset="utf-8">
            <div class="row justify-content-center">
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">Email</span>
                </div>
                <input type="email" class="form-control" placeholder="Username@domain.com" aria-label="Username" aria-describedby="basic-addon1">
              </div>
              <input class="btn btn-warning" type="submit" value="Registrarse">
            </div>
          </form>
        </div>
      </div>
    </div>
	</div>
</section>
<?php include ('footer.php'); ?><!--f0d1->codigo de camioncito tipo basura para hr customizado*futuro*-->