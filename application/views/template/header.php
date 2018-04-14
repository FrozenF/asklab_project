 <!DOCTYPE html>
 <html>
 <head>
  <title>ASKLAB</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/w3.css">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/w3-theme.css">
  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- <script type="text/javascript" src="<? echo base_url();?>assets/tinymce/tinymce.min.js"></script>
  <script>tinymce.init({ selector:'textarea' });</script> -->
  <script src="<?php echo base_url();?>assets/ckeditor/ckeditor.js" type="text/javascript"></script>
  <style>
    html,body,h1,h2,h3,h4,h5 {font-family: "Open Sans", sans-serif}

    input{
      font-family: sans-serif;
      background-color: #CFCDCD;
      color: black;
      border: 1px solid black;  
    }
  </style>
</head>
<body class="w3-theme-l5">

  <div class="w3-top">
   <div class="w3-bar w3-theme-d2 w3-left-align w3-large">
    <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-theme-d2" href="javascript:void(0);" onclick="openNav()"><i class="fa fa-bars"></i></a>
    <a href="<?= base_url(); ?>forum" class="w3-bar-item w3-button w3-padding-large w3-theme-d4"><i class="fa fa-home w3-margin-right"></i>ASKLAB</a>
    <a href="#" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white" title="News"><i class="fa fa-globe"></i></a>
    <a href="#" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white" title="Account Settings"><i class="fa fa-user"></i></a>
    <a href="#" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white" title="Messages"><i class="fa fa-envelope"></i></a>
    <div class="w3-dropdown-hover w3-hide-small">
      <button class="w3-button w3-padding-large" title="Notifications"><i class="fa fa-bell"></i><span class="w3-badge w3-right w3-small w3-green">3</span></button>     
      <div class="w3-dropdown-content w3-card-4 w3-bar-block" style="width:300px">
        <a href="#" class="w3-bar-item w3-button">One new friend request</a>
        <a href="#" class="w3-bar-item w3-button">John Doe posted on your wall</a>
        <a href="#" class="w3-bar-item w3-button">Jane likes your post</a>
      </div>
    </div>
    <a href="#" class="w3-bar-item w3-button w3-hide-small w3-right w3-padding-large w3-hover-white w3-dropdown-hover" title="My Account">John Doe
      <img src="<?= base_url(); ?>assets/img/cat.jpg" class="w3-circle" style="height:25px;width:25px" alt="Avatar">
    </a>

  </div>
</div>

<div id="navDemo" class="w3-bar-block w3-theme-d2 w3-hide w3-hide-large w3-hide-medium w3-large">
  <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 1</a>
  <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 2</a>
  <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 3</a>
  <a href="#" class="w3-bar-item w3-button w3-padding-large">My Profile</a>
</div>
<div class="w3-container w3-content" style="max-width:1400px;margin-top:80px">    

  <div class="w3-row">
    <div class="w3-col m2">
      <div class="w3-card w3-round w3-white w3-center">
        <div class="w3-container">
          <p>Upcoming Events:</p>
          <img src="/w3images/forest.jpg" alt="Forest" style="width:100%;">
          <p><strong>Nope</strong></p>
          <p>Friday 15:00</p>
          <p><button class="w3-button w3-block w3-theme-l4">Info</button></p>
        </div>
      </div>
      <br>
      <div class="w3-card w3-round w3-white w3-center">
        <div class="w3-container">
          <p>Friend Request</p>
          <img src="/w3images/avatar6.png" alt="Avatar" style="width:50%"><br>
          <span>Jane Doe</span>
          <div class="w3-row w3-opacity">
            <div class="w3-half">
              <button class="w3-button w3-block w3-green w3-section" title="Accept"><i class="fa fa-check"></i></button>
            </div>
            <div class="w3-half">
              <button class="w3-button w3-block w3-red w3-section" title="Decline"><i class="fa fa-remove"></i></button>
            </div>
          </div>
        </div>
      </div>
      <br>

      <div class="w3-card w3-round w3-white w3-padding-16 w3-center">
        <p>ADS</p>
      </div>
      <br>


      <div class="w3-card w3-round w3-white w3-padding-32 w3-center">
        <p><i class="fa fa-bug w3-xxlarge"></i></p>
      </div>

      
    </div>
