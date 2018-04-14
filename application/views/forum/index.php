<!-- Middle Column -->
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
          <h5>Pertanyaanmu</h5>
          <form action="<?=base_url();?>forum/tambah" method="post" accept-charset="utf-8">
            <table>
              <tr>
                <td><label for="judul"><b>Judul</b></label></td>
                <td width="100%"><input type="text" class="w3-input" name="judul" placeholder="isikan pertanyaan mu disini" id="judul"></td>
              </tr>
            </table>
            <textarea name="isi" class="ckeditor" id="ckeditor"></textarea>

            <button type="submit" class="w3-button w3-blue" name="kirim"><i class="fa fa-send"></i> Kirim</button>
          </form>
        </div>
      </div>
    </div>
  </div>
  <?php foreach ($pertanyaan as $key): ?>
    <?php 
    $originalTime = mysql_to_unix($key->created_at);  // Convert orignal date time of the post to unix timestamp
    $currentTime = time();  // Current date and time 
    $timeDiff = abs($currentTime - $originalTime);

    switch ($timeDiff) 
      {
       case ($timeDiff < 60):
       $timeDiff = $timeDiff." seconds ago";                  
       break;

       case ($timeDiff > 60 && $timeDiff < 3600):
       $min = floor($timeDiff/60);
       $timeDiff = $min.' minutes ago';                  
       break;

       case ($timeDiff > 3600 && $timeDiff < 86400):
       $hour = floor($timeDiff/3600);
       $timeDiff = $hour.' hour ago';
       break;

       case ($timeDiff > 86400 && $timeDiff < 604800):
       $timeDiff = date("g:i A M jS",$originalTime);
       break;

       case ($timeDiff > 604800 && $timeDiff < 2419200):
       $timeDiff = date("g:i A M jS",$originalTime);
       break;

       case ($timeDiff > 2419200 && $timeDiff < 29030400):
       $timeDiff = date("g:i A M jS",$originalTime);
       break;

       case ($timeDiff > 29030400):
       $timeDiff = date("g:i A M jS",$originalTime);
       break;
   } 
  ?>


 <div class="w3-container w3-card w3-white w3-round w3-margin"><br>
  <span class="w3-right w3-opacity"><?= $timeDiff ?></span>
  <h4><?= $key->judul_pertanyaan ?></h4><br>
  <p><?= $key->isi = substr(strip_tags($key->isi), 0, 150)."..."; ?></p>
  <button type="button" class="w3-button w3-blue w3-margin-bottom"><i class="fa fa-thumbs-up"></i>  Like</button> 
  <button type="button" class="w3-button w3-green w3-margin-bottom"><i class="fa fa-comment"></i>  Comment</button>
  <a href="<?php echo base_url(); ?>forum/form_edit/<?echo $key->id_pertanyaan;?>" type="button" class="w3-button  w3-orange w3-margin-bottom"><i class="fa fa-edit"></i>  Edit</a> 
  <a href="<?php echo base_url(); ?>forum/hapus/<?echo $key->id_pertanyaan;?>" type="button" class="w3-button  w3-red w3-margin-bottom"><i class="fa fa-trash"></i>  Hapus</a>
</div>
<?php endforeach ?>
<!-- End Middle Column -->
</div>
