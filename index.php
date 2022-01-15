<?php require_once("elements/functions.php"); ?>
<?php require_once("header.php"); ?>
<div class="sct-main">
	<?php require_once("elements/menu-default.php"); ?>
	<?php require_once("elements/header-default.php"); ?>
	<div class="sct-body auto-height auto-width-force">
		<section class="sct-banner auto-height center-parent sct-bg auto-parallax target-inicio">
			<div class="container center-child">
				<div class="row">
					<div class="col-md-12">
						<div class="text-banner">
							<h1>Welison Menezes</h1>
							<h2>Web Designer e Programador</h2>
							<div class="action">
								<span class="btn btn-default big go-to hvr-buzz-out" data-anchor="contact">
								hello talk to me
								</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="sct-about target-sobre-mim">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="text-about">
							<h2 class="title-main with-line">
								<span>Sobre Mim</span>
							</h2>
							<figure class="figure-circle">
								<img src="img/avatares/edwin-perez-avatar.jpg" alt="Edwin Perez - Web Designer and Developer">
							</figure>
							<div class="text">
								<p>
								Hello, I'm a Web Developer and Web Designer with over 6 years of experience, passionate about what I do and what I produce.
								</p>
								<p>
								My work philosophy is: <strong>If you're going to do it, do it right</strong>. That's why I always look for the best solutions to do a great job..
								</p>
								<p class="last">
								My main focus is web development. However, I have a talent for creating layouts and graphic pieces.
									<a href="#contato" class="go-to" data-anchor="contato" title="Entre em contato">Contact</a>.
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="sct-skills auto-height center-parent sct-bg target-skills">
			<div class="container center-child">
				<div class="row">
					<div class="col-md-12">
						<h2 class="title-main">
							<span>Skills</span>
						</h2>
					</div>
				</div>
				<?php require_once("elements/skills-desktop.php"); ?>
				<?php require_once("elements/skills-mobile.php"); ?>
			</div>
		</section>
		<section class="sct-testimonials auto-height center-parent target-depoimentos">
			<div class="container center-child">
				<div class="row">
					<div class="col-md-12">
						<h2 class="title-main with-line">
							<span>Deposition</span>
						</h2>
						<div class="slick-testimony-wrap">
							<div class="slick-testimony">
								<?php foreach ($data_testimonials as $k => $v): ?>
								<div class="slick-testimony-item">
									<div class="testimony-box">
										<figure class="figure-circle">
											<img src="<?php echo $v['avatar']; ?>" alt="Avatar <?php echo $v['name']; ?>">
										</figure>
										<div class="who-testimony">
											<span class="name"><?php echo $v['name']; ?></span>
											<span class="role"><?php echo $v['role'] ;?></span>
										</div>
										<p><?php echo $v['testimony']; ?></p>
									</div>
								</div>
								<?php endforeach; ?>
							</div>
							<div class="slick-testimony-navigation"></div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="sct-cases auto-height center-parent target-cases">
			<div class="container center-child">
				<div class="row">
					<div class="col-md-12">
						<h2 class="title-main with-line">
							<span>Cases</span>
						</h2>
					</div>
				</div>
				<?php require_once("elements/cases-desktop.php"); ?>
				<?php require_once("elements/cases-mobile.php"); ?>
			</div>
		</section>
		<?php require_once("elements/footer-default.php"); ?>
	</div>
</div>
<?php require_once("footer.php"); ?>