	<!-- Wrapper -->
	<?php include('header.php'); ?>
	<div id="wrapper">

		<!-- Intro -->
		<?php
		echo validation_errors('<div class="alert alret-warning">', '</div>');

		if ($this->session->flashdata('warning')) {
			echo '<div class="alert alert-warning">';
			echo $this->session->flashdata('warning');
			echo '</div>';
		}

		if ($this->session->flashdata('sukses')) {
			echo '<div class="alert alert-warning">';
			echo $this->session->flashdata('sukses');
			echo '</div>';
		} ?>
		<section id="intro" class="wrapper style1 fullscreen fade-up">
			<div class="inner">
				<h1>SIGDRK
				</h1>
				<p>Diharapkan memberikan gambaran yang berguna bagi masyarakat<br>
					terhadap Daerah Rawan Kriminalitas di Kota Bogor</p>
				<ul class="actions">
					<li><a href="#one" class="button scrolly">Learn more</a></li>
				</ul>
			</div>
		</section>
		<br>
		<!-- One -->
		<section id="one" class="wrapper style2 spotlights">

			<section>
				<a href="#" class="image"><img src="assets/images/pic01.jpg" alt="" data-position="25% 25%" /></a>
				<div class="content">
					<div class="inner">
						<h2>GRAFIK</h2>
						<p>Gambaran berupa grafik untuk tingkat kriminalitas yang terjadi di kota bogor</p>
						<ul class="actions">
							<li><a href="<?php echo base_url("gis/grapik"); ?>" class="button">Learn More</a></li>
						</ul>
					</div>
				</div>
			</section>
		</section>
		<br>
		<section id="one" class="wrapper style3 spotlights">

			<section>
				<a href="#" class="image"><img src="assets/images/pic03.jpg" alt="" data-position="25% 25%" /></a>
				<div class="content">
					<div class="inner">
						<h2>DATA KEJAHATAN</h2>
						<p>mencakup data data kriminalitas yang terjadi di kota bogor <br>
							khususnya Kejahatan Berat</p>
						<ul class="actions">
							<li><a href="<?php echo base_url("gis/datakejahatan"); ?>" class="button">Learn More</a></li>
						</ul>
					</div>
				</div>
			</section>
		</section>

		<!-- Two -->
		<section id="two" class="wrapper style3 fade-up">
			<div class="inner">
				<div class="features">
					<section>
						<span class="icon solid major fa-code"></span>
						<h3>Pencurian</h3>
						<p>
							pengambilan properti milik orang lain secara tidak sah tanpa seizin pemilik. Kata ini juga digunakan sebagai sebutan informal untuk sejumlah kejahatan terhadap properti orang lain, seperti perampokan rumah, penggelapan, larseni, penjarahan, perampokan, pencurian toko, penipuan dan kadang pertukaran kriminal.</p>
					</section>
					<section>
						<span class="icon solid major fa-lock"></span>
						<h3>Penculikan</h3>
						<p>
							penyimpangan yang melanggar hukum dan pengurungan seseorang terhadap kehendaknya. Dengan demikian, penculikan adalah kejahatan gabungan. Ini juga dapat didefinisikan sebagai penjara palsu dengan cara penculikan, keduanya merupakan kejahatan terpisah yang ketika dilakukan secara bersamaan pada orang yang sama bergabung sebagai satu-satunya kejahatan penculikan </p>
					</section>
					<section>
						<span class="icon solid major fa-cog"></span>
						<h3>Narkoba</h3>
						<p> obat/bahan berbahaya. Selain "narkoba", istilah lain yang diperkenalkan khususnya oleh Kementerian Kesehatan Republik Indonesia adalah Napza yang merupakan singkatan dari narkotika, psikotropika, dan zat adiktif.
							Semua istilah ini, baik "narkoba" ataupun "napza", mengacu pada kelompok senyawa yang umumnya memiliki risiko kecanduan bagi penggunanya. Menurut pakar kesehatan, narkoba sebenarnya adalah senyawa-senyawa psikotropika yang biasa dipakai untuk membius pasien saat hendak dioperasi atau obat-obatan untuk penyakit tertentu.[butuh rujukan] Namun kini persepsi itu disalahartikan akibat pemakaian di luar peruntukan dan dosis yang semestinya. </p>
					</section>
					<section>
						<span class="icon solid major fa-desktop"></span>
						<h3>Pembunuhan</h3>
						<p>suatu tindakan untuk menghilangkan nyawa seseorang dengan cara yang melanggar hukum, maupun yang tidak melawan hukum. Pembunuhan biasanya dilatarbelakangi oleh bermacam-macam motif, misalnya politik, kecemburuan, dendam, membela diri, dan sebagainya.</p>
					</section>
					<section>
						<span class="icon solid major fa-link"></span>
						<h3>Pemerkosaan</h3>
						<p>suatu tindakan kriminal berwatak seksual yang terjadi ketika seorang manusia (atau lebih) memaksa manusia lain untuk melakukan hubungan seksual dalam bentuk penetrasi vagina atau anus dengan penis, anggota tubuh lainnya seperti tangan, atau dengan benda-benda tertentu secara paksa baik dengan kekerasan atau ancaman kekerasan. </p>
					</section>
				</div>
				<ul class="actions">
					<li><a href="<?php echo base_url("gis/datakejahatan"); ?>" class="button">Learn More</a></li>
				</ul>
			</div>
		</section>
		<br>
		<!-- Three -->
		<section id="three" class="wrapper style2 fade-up">
			<div class="inner">
				<h2>Perseberan Daerah Rawan Kejahatan</h2>

				<input type="text" id="myPlaceTextBox" /> <br>

				<?php echo $map['html']; ?>



			</div>
		</section>


		<section id="four" class="wrapper style1 fade-up">


			<?php
			echo form_open(base_url('login'), 'class="form-horizontal" entype="multipart/formdata"');
			?>

			<?php echo form_close(); ?>


			<section>
				<div class="align-center">
					<ul class="contact">
						<li>
							<h3>Devoloper</h3>
							<span>Rizaldi Naldian Putra
							</span>
						<li>
							<h3>Address</h3>
							<span>Kebon Kopi RT:004 / RW:009 <br>
								Kelurahan : Kebon Kelapa <br>
								Kecamatan : Kota Bogor Tengah
							</span>
						</li>
						<li>
							<h3>Email</h3>
							<a href="#">Rizaldi.naldian@gmail.com </a>
						</li>
						<li>
							<h3>Phone</h3>
							<span>081-380-244-442 </span>
						</li>
						<li>
							<h3>Social</h3>
							<ul class="icons">
								<li><a href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
								<li><a href="#" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
								<li><a href="#" class="icon brands fa-github"><span class="label">GitHub</span></a></li>
								<li><a href="#" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
								<li><a href="#" class="icon brands fa-linkedin-in"><span class="label">LinkedIn</span></a></li>
							</ul>
						</li>
					</ul>
				</div>
			</section>
	</div>
	</div>
	</section>
	</div>
	<?php include('footer.php'); ?>