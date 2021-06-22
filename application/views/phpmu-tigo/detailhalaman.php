<div class="full-width">
	<div class="article-title">
		<div class="share-block right">
			<div>
				<div class="share-article left">
					<span>Social media</span>
					<strong>Share this article</strong>
				</div>
				<div class="left">
					<script language="javascript">
					document.write("<a href='http://www.facebook.com/share.php?u=" + document.URL + " ' target='_blank' class='custom-soc icon-text'>&#62220;</a> <a href='http://twitter.com/home/?status=" + document.URL + "' target='_blank' class='custom-soc icon-text'>&#62217;</a> <a href='https://plus.google.com/share?url=" + document.URL + "' target='_blank' class='custom-soc icon-text'>&#62223;</a>");
					</script>
					<a href="#" class="custom-soc icon-text">&#62232;</a>
					<a href="#" class="custom-soc icon-text">&#62226;</a>
				</div>
				<div class="clear-float"></div>
			</div>
		</div>

		<h1><?php echo "<b>$rows[judul]</b>"; ?></h1>
	</div>
</div>

<div class="main-page left">
	<div class="single-block">
		<div class="content-block main left">
			<div class="block">
				<div class="block-content">
					<div class="shortcode-content">
						<div class="paragraph-row">

							<div class="column9">
								<?php
									if (trim($rows['gambar'])!=''){
										echo "<img center style='width:50%' src='".base_url()."asset/foto_statis/$rows[gambar]'>";
									}
									if ($rows['isi_halaman']==''){
										echo "<center style='padding:15%; font-weight:bold; color:red'>Maaf, Belum ada Informasi pada Halaman ini.</center>";
									}else{
										echo "$rows[isi_halaman]";
									}
								?>
							</div>
						</div><br>

						<?php
						$ia = $this->model_utama->view_ordering_limit('iklantengah','id_iklantengah','ASC',8,1)->row_array();
						echo "<a href='$ia[url]' target='_blank'>";
							$string = $ia['gambar'];
							if ($ia['gambar'] != ''){
								if(preg_match("/swf\z/i", $string)) {
									echo "<embed style='margin-top:-10px' src='".base_url()."asset/foto_iklantengah/$ia[gambar]' width='100%' height=90px quality='high' type='application/x-shockwave-flash'>";
								} else {
									echo "<img style='margin-top:-10px; margin-bottom:5px' width='100%' src='".base_url()."asset/foto_iklantengah/$ia[gambar]' title='$ia[judul]' />";
								}
							}
						echo "</a>";
						?>

						<div class="article-title">
							<div class="share-block right">
							</div>

							<div style="margin-top:0px" class="article-tags tag-cloud">
								<strong>Author : </strong>
								<?php echo "<a href='#'>$rows[nama_lengkap] - $rows[email]</a>";	?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class='main-sidebar right'>
	<?php include "sidebar_halaman.php"; ?>
</div>
