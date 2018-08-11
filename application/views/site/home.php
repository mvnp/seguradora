				<div class="container">
					<div class="row mb-5">
						<div class="col-lg-12 text-center">
							<?php echo _t('<h2 class="mb-5">O que temos <strong>pra você?</strong></h2>') ?>
							<p><?php echo _t("Nós <strong>da Shelps</strong>, temos o imenso prazer em apresentar um trabalho de socorro com uma frota de carros de excelente qualidade. O foco dos nossos serviços e produtos é atender toda a comunidade podendo enviar o socorro no momento em que você mais precisa. Além de um ótimo atendimento com profissionais competentes enviando um carro e um guincho no momento em que você mais precisa, vamos evitar que o valor da franquia do seu seguro automotivo mais completo seja alterado devido ao imprevisto que acabou de acontecer. O foco é te ajudar em todas as etapas arrumando seu carro enquanto você é socorrido.") ?></p>
							<a href="<?php echo base_url("site/quemsomos") ?>" class="btn btn-outline btn-light mr-1 mb-2"><?php echo _t("Saiba mais") ?></a>
						</div>
					</div>
				</div>
				<section class="section section-tertiary section-no-border mb-0">
					<div class="container">
						<div class="row">
							<div class="col-lg-12 text-center">
								<?php echo _t('<h2 class="heading-dark">Nossos <strong>Serviços</strong></h2>') ?>
							</div>
						</div>
						<div class="row">
							<div class="col-lg-4">
								<div class="feature-box feature-box-style-4 appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="0">
									<div class="feature-box-icon">
										<i class="icon-grid icons"></i>
									</div>
									<div class="feature-box-info">
										<h4 class="mb-2"><?php echo _t("Guinchos novos") ?></h4>
										<p class="mb-4"><?php echo _t("Todos os nossos guinchos são de excelente qualidade permitindo que o seu veículo seja transportado com a maior segurança.") ?></p>
									</div>
								</div>
							</div>
							<div class="col-lg-4">
								<div class="feature-box feature-box-style-4 appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="300">
									<div class="feature-box-icon">
										<i class="icon-grid icons"></i>
									</div>
									<div class="feature-box-info">
										<h4 class="mb-2"><?php echo _t("Socorro 24 horas") ?></h4>
										<p class="mb-4"><?php echo _t("Estamos prontos com nossos profissionais e frotas de carro para lhe atender a qualquer momento do dia ou da noite. É só chamar!") ?></p>
									</div>
								</div>
							</div>
							<div class="col-lg-4">
								<div class="feature-box feature-box-style-4 appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="600">
									<div class="feature-box-icon">
										<i class="icon-grid icons"></i>
									</div>
									<div class="feature-box-info">
										<h4 class="mb-2"><?php echo _t("Mecânica de veículos") ?></h4>
										<p class="mb-4"><?php echo _t("Temos oficinas especializados para detectar e consertar o seu veículo. Sabemos que o veículo é essencial para o seu dia a dia.") ?></p>
									</div>
								</div>
							</div>
						</div>
						<div class="row mt-lg-3">
							<div class="col-lg-4">
								<div class="feature-box feature-box-style-4 appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="0">
									<div class="feature-box-icon">
										<i class="icon-grid icons"></i>
									</div>
									<div class="feature-box-info">
										<h4 class="mb-2"><?php echo _t("Carro substituto") ?></h4>
										<p class="mb-4"><?php echo _t("Enquanto consertamos o seu veículo, um outro veículo ficará a disposição e você faltará em seus compromissos importantes.") ?></p>
									</div>
								</div>
							</div>
							<div class="col-lg-4">
								<div class="feature-box feature-box-style-4 appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="300">
									<div class="feature-box-icon">
										<i class="icon-grid icons"></i>
									</div>
									<div class="feature-box-info">
										<h4 class="mb-2"><?php echo _t("Assessoria e interpretes") ?></h4>
										<p class="mb-4"><?php echo _t("Você se envolveu em um acidente e precisa de alguém para te ajudar com a conversar com os envolvidos? Podemos ajudar.") ?></p>
									</div>
								</div>
							</div>
							<div class="col-lg-4">
								<div class="feature-box feature-box-style-4 appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="600">
									<div class="feature-box-icon">
										<i class="icon-grid icons"></i>
									</div>
									<div class="feature-box-info">
										<h4 class="mb-2"><?php echo _t("Funilaria e pintura") ?></h4>
										<p class="mb-4"><?php echo _t("Poderemos também oferecer serviços de funilaria e pintura além de mecânica para deixar o seu carro preparado para a estrada.") ?></p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
				<?php $data = null; $this->load->view('site/includes/prices', $data); ?>
				<section class="section section-tertiary section-no-border mb-5">
					<?php $data = null; $this->load->view('site/includes/comments', $data); ?>
				</section>
			</div>
		</div>
	</div>