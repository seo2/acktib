	<footer id="contacto" class="page-footer scrollspy">
    <div class="container">
      <div class="row">
        <div class="col l4 s12">
<!--           <img src="<? bloginfo('template_url'); ?>/assets/img/logo.png" width="115" height="65"/> -->
          <img src="<? bloginfo('template_url'); ?>/assets/img/logo_bn.png" width="115" height="65"/>
          <p class="">
			Felix de Amesti 157<br>
			Las Condes<br><br>
			+56 2 2411 9000<br>
			contacto@acktib.com<br><br>
			<a href="http://www.acktib.com" target="_blank">www.acktib.com</a><br><br>
			<a href="https://www.linkedin.com/company/10130563?trk=tyah&trkInfo=clickedVertical%3Acompany%2CclickedEntityId%3A10130563%2Cidx%3A1-1-1%2CtarId%3A1473418441135%2Ctas%3Aacktib" target="_blank"><i class="fa fa-linkedin-square" aria-hidden="true"></i> linkedin.com/acktib</a><br><br>
          </p>
          
			<img src="<? bloginfo('template_url'); ?>/assets/img/itil-logo.png" width="115" /><br><br>
			<img src="<? bloginfo('template_url'); ?>/assets/img/cobit-5-logo-small.png" width="115" />
     
        </div>
        <div class="col l8 s12">
          <h5 class="sub_titulos_blancos">Contacto</h5>
        	<div class="row">
				<form class="col s12" id="formContacto" action="<? bloginfo('template_url'); ?>/ajax/graba-formulario.php" method="post">
					<div class="row">
						<div class="input-field col s6">
							<input id="first_name" type="text" class="validate" name="conNom" required>
							<label for="first_name">Nombre</label>
						</div>
						<div class="input-field col s6">
							<input id="last_name" type="text" class="validate" name="conApe" required>
							<label for="last_name">Apellido</label>
						</div>
					</div>
					<div class="row">
						<div class="input-field col s12">
							<input id="email" type="email" class="validate" name="conMail" required>
							<label for="email">Email</label>
						</div>
					</div>
					<div class="row">
						<div class="input-field col s12">
							<textarea id="textarea1" class="materialize-textarea" name="conTxt" required></textarea>
							<label for="textarea1">Mensaje</label>
						</div>
					</div>
					<div class="row">
						<div class="col m3">
							<button class="btn" type="submit" name="action" id="btnEnviar">Enviar</button>
						</div>
					</div><!-- /row -->
				</form>
			</div>
      </div>
    </div>
	  <div class="footer-copyright">
      	<div class="container center">
	  		©<?php echo date("Y"); ?> Acktib acknowledge TI & business
	  	</div>
      </div>
    </div>
  </footer>

	<?php wp_footer(); ?>

  </body>
</html>