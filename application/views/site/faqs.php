<div class="container">
	<div class="col-lg-12 text-center mt-3">
		<h2 class="heading-dark"><?php echo _t("Perguntas e") ?> <strong><?php echo _t("Respostas") ?></strong></h2>
	</div>	
	<div class="col-lg-12">
		<hr class="d-lg-none tall" />
		<h4><?php echo _t("Entenda como funciona nossos seguros") ?></h4>
		<div class="toggle toggle-primary" data-plugin-toggle data-plugin-options="{ 'isAccordion': true }">
			<section class="toggle active">
				<label><?php echo _t("Quem é a Shelps?") ?></label>
				<div class="toggle-content">
					<p><?php echo _t("Shelps é uma prestadora de serviços de emergência veicular, atendendo usuários cadastros.") ?></p>
				</div>
			</section>
			<section class="toggle">
				<label><?php echo _t("Quais cidades estão cobertas?") ?></label>
				<div class="toggle-content">
					<div class="row">
						<div class="col-md-6">
							<h4 style="margin-top:15px">Shizuoka</h4>
							<ul>
								<li>Kosai</li>
								<li>Hamamatsu</li>
								<li>Iwata</li>
								<li>Fukuroi</li>
								<li>Kakegawa</li>
								<li>Kikugawa</li>
							</ul>
						</div>
						<div class="col-md-6">
							<h4 style="margin-top:15px">Aichi</h4>
							<ul>
								<li>Toyohashi</li>
								<li>Toyokawa</li>
							</ul>							
						</div>
					</div>
				</div>
			</section>
			<section class="toggle">
				<label><?php echo _t("Quais planos posso contratar?") ?></label>
				<div class="toggle-content">
					<div class="row">
						<div class="col-md-6">
							<?php echo _t('<h4 style="margin-top:15px">Plano Standart</h4>') ?>
							<?php echo _t('<h5><strong>100 km a partir da Matriz da empresa</strong></h5>') ?>
						</div>
						<div class="col-md-6">
							<?php echo _t('<h4 style="margin-top:15px">Plano Premium</h4>') ?>
							<?php echo _t('<h5><strong>150 km a partir da Matriz da empresa</strong></h5>') ?>
						</div>					
					</div>
				</div>
			</section>
			<section class="toggle">
				<label><?php echo _t("Quais são os serviços prestados pela Shelps?") ?></label>
				<div class="toggle-content">
					<h4 style="margin-top:15px"><?php echo _t("Serviços") ?></h4>
					<ul>
						<?php echo _t("<li>Pane Seca (Falta de combustível)</li>") ?>
						<?php echo _t("<li>Chave (Assistência ao Chaveiro)</li>") ?>
						<?php echo _t("<li>Bateria</li>") ?>
						<?php echo _t("<li>Pneu</li>") ?>
						<?php echo _t("<li>Guincho</li>") ?>
					</ul>
				</div>
			</section>
			<section class="toggle">
				<label><?php echo _t("Quem são os dependentes?") ?></label>
				<div class="toggle-content">
					<p><?php echo _t("A Shelps permite o cadastro de 2 dependentes, que são usuários do mesmo veículo e que residam no mesmo endereço do TITULAR da conta.") ?></p>
				</div>
			</section>
			<section class="toggle">
				<label><?php echo _t("Quais são os documentos necessários para cadastro?") ?></label>
				<div class="toggle-content">
					<h4 style="margin-top:15px"><?php echo _t("Titular") ?></h4>
					<ul>
						<?php echo _t("<li>Carteira de Habilitação Japonesa</li>") ?>
						<?php echo _t("<li>Documento de licenciamento do automóvel</li>") ?>
					</ul>
					<h4 style="margin-top:15px"><?php echo _t("Dependentes") ?></h4>
					<ul>
						<?php echo _t("<li>Carteira de Habilitação com o mesmo endereço do TITULAR</li>") ?>
					</ul>
				</div>
			</section>
			<section class="toggle">
				<label><?php echo _t("Como funciona o pagamento?") ?></label>
				<div class="toggle-content">
					<p><?php echo _t("Para todos os planos disponíveis, o pagamento é anual.") ?></p>
				</div>
			</section>
			<section class="toggle">
				<label><?php echo _t("Quais são as diferenças entre os Planos Standart e Premium?") ?></label>
				<div class="toggle-content">
					<?php $data = null; $this->load->view('site/includes/prices', $data); ?>
				</div>
			</section>			
			<section class="toggle">
				<label><?php echo _t("Exceções para Marca, Modelos ou Tipos de veículos") ?></label>
				<div class="toggle-content">
					<h4 style="margin-top:15px"><?php echo _t("Há excessões por plano:") ?></h4>
					<h4 style="margin-top:15px"><?php echo _t("Plano Standart") ?></h4>
					<ul>
						<?php echo _t("<li>Veículos preparados para DRIFT</li>") ?>
						<?php echo _t("<li>Veículos rebaixados (menos de 10 centímetros do solo</li>") ?>
						<?php echo _t("<li>Veículos com peso maior que 2500 Kg</li>") ?>
					</ul>
					<h4 style="margin-top:15px"><?php echo _t("Plano Premiun") ?></h4>
					<ul>
						<?php echo _t("<li>Veículos preparados para DRIFT</li>") ?>
						<?php echo _t("<li>Veículos rebaixados (menos de 10 centímetros do solo</li>") ?>
						<?php echo _t("<li>Veículos com peso maior que 2500 Kg</li>") ?>
						<?php echo _t("<li>Veículos Importados</li>") ?>
					</ul>
				</div>
			</section>
			<section class="toggle">
				<label><?php echo _t("Licenciamento Veicular (Shaken)") ?></label>
				<div class="toggle-content">
					<p><?php echo _t("A Shelps atua como Agente de licenciamento veicular, serviço de agenciamento é disponível apenas aos associados PREMIUM.") ?></p>
				</div>
			</section>
			<section class="toggle">
				<label><?php echo _t("Posso pagar o Licenciamento no cartão de crédito") ?></label>
				<div class="toggle-content">
					<p><?php echo _t("Não. A Shelps, para reduzir os custos aos nossos associados, somente aceita os valores decorrentes ao licenciamento e em espécie e em moeda local.") ?></p>
				</div>
			</section>
			<section class="toggle">
				<label><?php echo _t("O que é Carro Reserva?") ?></label>
				<div class="toggle-content">
					<p><?php echo _t("É o veículo que substituirá, em caso de não haver possibilidade de reparos no local o veículo do associado.") ?></p>
				</div>
			</section>
			<section class="toggle">
				<label><?php echo _t("Quantas horas posso utilizar o Carro Reserva?") ?></label>
				<div class="toggle-content">
					<p><?php echo _t("O veículo deve ser devolvido no prazo máximo de 6 horas. Associados Premium, o prazo de devolução é até o final do reparo do veículo.") ?></p>
				</div>
			</section>
			<section class="toggle">
				<label><?php echo _t("Posso escolher o Carro Reserva?") ?></label>
				<div class="toggle-content">
					<p><?php echo _t("Não. O carro disponibilizado aos associados são de acordo com o assinalado no cadastro.") ?></p>
					<h4 style="margin-top:15px"><?php echo _t("Kei Jidousha (Placa Amarela)") ?></h4>
					<ul>
						<?php echo _t("<li>Disponibilizamos um veículo da mesma categoria.</li>") ?>
					</ul>	
					<h4 style="margin-top:15px"><?php echo _t("Até 5 passageiros (Placa Branca)") ?></h4>
					<ul>
						<?php echo _t("<li>Disponibilizamos um veículo da mesma categoria.</li>") ?>
					</ul>	
					<h4 style="margin-top:15px"><?php echo _t("Acima de 5 passageiros (Placa Branca)") ?></h4>
					<ul>
						<?php echo _t("<li>Disponibilizamos um veículo da classe Wagon.</li>") ?>
					</ul>					
				</div>
			</section>
		</div>
	</div>
</div>