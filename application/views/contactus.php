<?php include ('head.php'); ?>
<?php include ('menu.php'); ?>
<section>
	<div class="container my-lg-5">
	  <div class="row justify-content-center">
        <div class="col-8 my-lg-5">
          <h4 class="text-center">¿Deseas recibir más información o contactarnos?
            <br> <hr>
            <b>¡Dejanos tu comentario!</b>
          </h4>
          <br>
          <p class="text-center">Responderemos tus dudas, comentarios o sugerencias.</p>
          <form  action="signup_submit" method="get" accept-charset="utf-8">

              <div class="row justify-content-center">
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">Email:</span>
                </div>
                <input type="email" class="form-control" placeholder="Username@domain.com" aria-label="Username" aria-describedby="basic-addon1">
              </div>
              <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">Comentario:</span>
                  </div>
                  <textarea class="form-control" aria-label="With textarea"></textarea>
              </div>
                <input class="btn btn-warning d-block mt-lg-3" type="submit" value="Registrarse">
              </div>
          </form>
        </div>
      </div>
    </div>
	</div>
</section>
<?php include ('footer.php'); ?>