
 <div class="w3-row-padding">
  <div class="w3-card w3-round w3-white">
 

   
    <form action="<?echo base_url() ?>com_tambah" method="post">
      <input type="hidden" name="id_pertanyaan" value="<?echo $pertanyaan->id_pertanyaan?>">
      <textarea id="ckeditor" class="ckeditor" cols="80" rows="10" name="isi_jawaban"> 
      </textarea> 
      <input type="submit" name="kirim" value="Submit">
    </form>
  </div> 


<!-- End Middle Column -->
</div>
  </div>


