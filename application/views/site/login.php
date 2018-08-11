<style>
#home-intro{margin-bottom:0}
.mb-5 {margin-bottom: 1rem!important;margin-top: 1rem!important}
</style>
<div class="container" style="margin-bottom:0px">
	<div role="main" class="main">
		<div class="slider-with-overlay">
			<div class="slider-container rev_slider_wrapper" style="height: 660px;">
				<div id="revolutionSlider" class="slider rev_slider" data-version="5.4.7" data-plugin-revolution-slider data-plugin-options="{'delay': 9000, 'gridwidth': 1170, 'gridheight': 590, 'responsiveLevels': [4096,1200,992,500]}">
					<ul>
						<li data-transition="fade">
							<img src="<?php echo base_url("assets/frontend/img/slides/banner-1_1.jpg") ?>"  
								alt=""
								data-bgposition="center center" 
								data-bgfit="cover" 
								data-bgrepeat="no-repeat" 
								class="rev-slidebg">

							<div class="tp-caption"
								data-x="['177','177','center','center']" data-hoffset="['0','0','-150','-220']"
								data-y="280"
								data-start="1000"
								data-transform_in="x:[-300%];opacity:0;s:500;"><img src="img/slides/slide-title-border.png" alt=""></div>

							<div class="tp-caption top-label"
								data-x="['227','227','center','center']"
								data-y="272"
								data-fontsize="['24','24','24','36']"	
								data-start="500"
								data-transform_in="y:[-300%];opacity:0;s:500;"><?php echo _t("O SEU CARRO PRECISA") ?></div>

							<div class="tp-caption"
								data-x="['480','480','center','center']" data-hoffset="['0','0','150','220']"
								data-y="280"
								data-start="1000"
								data-transform_in="x:[300%];opacity:0;s:500;"><img src="img/slides/slide-title-border.png" alt=""></div>

							<div class="tp-caption main-label"
								data-x="['135','135','center','center']"
								data-y="['310','310','310','310']"
								data-start="1500"
								data-whitespace="nowrap"	
								data-fontsize="['62','62','62','82']"					 
								data-transform_in="y:[100%];s:500;"
								data-transform_out="opacity:0;s:500;"
								data-mask_in="x:0px;y:0px;"><?php echo _t("DE UM SEGURO?") ?></div>

							<div class="tp-caption bottom-label"
								data-x="['185','185','center','center']"
								data-y="['380','380','380','380']"
								data-start="2000"
								data-fontsize="['20','20','20','30']"
								data-transform_in="y:[100%];opacity:0;s:500;"><?php echo _t("A SHELPS TEM O SEGURO CERTO PRA VOCÊ.") ?></div>
						</li>
					</ul>
				</div>
			</div>
			<div class="slider-contact-form">
				<div class="container">
					<div class="row justify-content-end">
						<div class="col-lg-5">
							<div class="featured-boxes mt-0 mb-0">
								<div class="featured-box featured-box-primary mt-5">
									<div class="box-content">
										<h4 class="mb-0"><?php echo _t("ÁREA ADMINISTRATIVA") ?></h4>
										<p class="mt-3"><?php echo _t('A Shelps oferece seguro e excelente preço para urgências automotivas. Confira nossos planos e assine com a gente agora. Se você já é assinante, <strong>faça login.</strong>') ?></p>
										<form id="contactForm" action="php/contact-form.php" method="POST">
											<div class="form-row">
												<div class="form-group col-lg-12">
													<label><?php echo _t("E-mail de cadastro: ") ?></label>
													<input type="email" value="" data-msg-required="<?php echo _t("Insira o seu e-mail de cadastro.") ?>" data-msg-email="<?php echo _t("Insira o seu e-mail de cadastro.") ?>" maxlength="100" class="form-control" name="email" id="email" required />
												</div>
											</div>
											<div class="form-row">
												<div class="form-group col-lg-12">
													<label><?php echo _t("Senha de cadastro: ") ?></label>
													<input type="password" data-msg-required="<?php echo _t("Insira a sua senha de cadastro.") ?>" data-msg-email="<?php echo _t("Insira a sua senha de cadastro.") ?>" maxlength="100" class="form-control" name="password" id="password" required />
												</div>
											</div>
											<div class="form-row">
												<div class="form-group offset-lg-3 col-lg-6">
													<input type="submit" value="<?php echo _t("Acessar") ?>" class="btn btn-block btn-primary mb-5" data-loading-text="<?php echo _t("Acessando...") ?>">
												</div>
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>