<html lang="tr">

<head>
	<?php $this->load->view("includes/header.php"); ?>
	<title>Form Uygulamasi Ödev</title>
</head>

<body>
	<div class="container container-table">
		<div class="row justify-content-center vertical-center-row">
			<div class="col-12 pb-5">
				<form action="<?php echo base_url("form/insert") ?> " method="post">
					<div class="card border-primary rounded-0">
						<div class="card-header p-0">
							<div class="bg-info text-white text-center py-2">
								<h3><i class="fa fa-envelope"></i> İletişim Formu</h3>
							</div>
						</div>
						<div class="card-body p-3">

							<!--Body-->
							<div class="form-group">
								<div class="input-group mb-2">
									<div class="input-group-prepend">
										<div class="input-group-text"><i class="fa fa-user text-info"></i></div>
									</div>
									<input type="text" class="form-control" id="ad_soyad" name="ad_soyad" placeholder="Ad Soyad" required="">
								</div>
							</div>
							<div class="form-group">
								<div class="input-group mb-2">
									<div class="input-group-prepend">
										<div class="input-group-text"><i class="fa fa-envelope text-info"></i></div>
									</div>
									<input type="email" class="form-control" id="eposta" name="eposta" placeholder="Eposta Adresi" required="">
								</div>
							</div>

							<div class="form-group">
								<div class="input-group mb-2">
									<div class="input-group-prepend">
										<div class="input-group-text"><i class="fa fa-comment text-info"></i></div>
									</div>
									<textarea class="form-control" id="mesaj" name="mesaj" placeholder="Mesajınız" required=""></textarea>
								</div>
							</div>

							<div class="text-center">
								<input type="submit" value="Gönder" class="btn btn-info btn-block rounded-0 py-2">
							</div>

							<div class="text-center mt-2">
								<a href="<?= base_url("form/list"); ?>" class="btn btn-secondary btn-block rounded-0 py-2">Mesajları Görüntüle</a>
							</div>
						</div>

					</div>
				</form>
				<!--Form with header-->


			</div>
		</div>
	</div>

	<?php $this->load->view("includes/footer.php"); ?>
</body>

</html>