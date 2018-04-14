<!-- Middle Column -->
<?php foreach ($jawaban as $key): ?>
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
		<img src="/w3images/avatar5.png" alt="Avatar" class="w3-left w3-circle w3-margin-right" style="width:60px">
		<span class="w3-right w3-opacity"><?= $timeDiff ?></span>
		<hr class="w3-clear">
		<p><?php echo $key->isi_jawaban ?></p>
		<button type="button" class="w3-button w3-theme-d1 w3-margin-bottom"><i class="fa fa-thumbs-up"></i>  Like</button>  
		<a href="<?php echo base_url(); ?>com_edit/<?php echo $key->id_jawaban; ?>/<?= $key->pertanyaan_id?>" type="button" class="w3-button w3-orange w3-margin-bottom"><i class="fa fa-edit"></i>  Edit</a>
		<a href="<?php echo base_url(); ?>com_hapus/<?php echo $key->id_jawaban; ?>/<?= $key->pertanyaan_id?>" type="button" class="w3-button w3-red w3-margin-bottom"><i class="fa fa-trash"></i>  Hapus</a>
	</div> 
<?php endforeach ?>

<!-- End Middle Column -->


