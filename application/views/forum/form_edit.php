<div class="w3-col m7">
 <div class="w3-row-padding">
  <div class="w3-card w3-round w3-white">
   <div class="w3-container w3-padding">
   <!-- Konten. Disini -->
   <form action="<?php echo base_url() ?>forum/ubah" method="post" accept-charset="utf-8">
		<input type="hidden" name="id_pertanyaan" value="<?php echo $edit->id_pertanyaan ?>">
		<table>
                <tr>
                  <td><label for="judul"><b>Judul</b></label></td>
                  <td width="100%"><input type="text" class="w3-input"  value="<?php echo $edit->judul_pertanyaan ?>" name="judul" placeholder="isikan pertanyaan mu disini" id="judul"></td>
                </tr>
            </table>
		<br>
		<!-- <label>Isi</label> -->
		<textarea name="isi" class="ckeditor" id="ckeditor"><?php echo $edit->isi ?></textarea>
		<input type="submit" class="w3-button w3-blue" name="update" value="Kirim">
	</form>

   <!-- Akhir Konten -->
   </div>
  </div>
 </div>
</div>
