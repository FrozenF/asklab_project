
<br>
<div class="w3-row-padding">
  <div class="w3-card w3-round w3-white">
 

   
    <form action="<?echo base_url() ?>com_ubah" method="post">
		<input type="hidden" name="id_jawaban" value="<?php echo $edited->id_jawaban ?>">
		<input type="hidden" name="id_pertanyaan" value="<?= $edited->pertanyaan_id ?>">		
		<textarea id="ckeditor" class="ckeditor" name="isi_jawaban" ><?php echo $edited->isi_jawaban ?></textarea>

	<input type="submit" name="kirim" value="Submit">

</form>
  </div> 


<!-- End Middle Column -->
</div>
  </div>