<div class="w3-col m7">
	<div class="w3-row-padding">

		<div class="w3-col m12">
			<?php if ($this->session->flashdata('pesan')!=NULL): ?>
				<div class="w3-panel w3-green w3-display-container">
					<span onclick="this.parentElement.style.display='none'"
					class="w3-button w3-green w3-large w3-display-topright">&times;</span>
					<h3>Success!</h3>
					<p><?= $this->session->flashdata('pesan'); ?></p>
				</div>
			<?php endif ?>
			<div class="w3-card w3-round w3-white">
				<div class="w3-container w3-padding">
					<h6 class="w3-opacity">Social Media Njajal</h6>
					<form action="<?php echo base_url();?>/Tambah" method="post" accept-charset="utf-8">
						<input type="text" class="w3-input" name="judul" value="<? echo $pertanyaan->judul_pertanyaan?>" disabled>
						<input type="text" class="w3-input" name="isi" value="<? echo $pertanyaan->isi?>" disabled>
					</form>
				</div>
			</div>
		</div>
	</div>
