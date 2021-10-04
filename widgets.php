<?php

$all_widgets = array(
  '1' => array(
    'Title' => "Sign up for Updates",
    'ButtonText' => "Subscribe",
    
  ),
  '2' => array(
    'Title' => "Get your free Guide",
    'ButtonText' => "Guide",
    'ImgURL' => "https://via.placeholder.com/150"

  ),
  '3' => array(
    'Title' => "Check Out Our Studio",
    'ButtonText' => "Music Studio",
    'ImgURL' =>"https://via.placeholder.com/150"

  ),
);

foreach($all_widgets as $widget){
  ?>
    <div class="mb-3 bg-light p-5">
      <?php
      if($widget["ImgURL"]){
        echo "<img src='" . $widget["ImgURL"] . "' alt='widget image' class='mb-3'>";
      };
      ?>
      <h5><?php echo $widget["Title"]; ?></h5>
      <p><?php echo $widget["ButtonText"]; ?></p>
    </div>
  <?php
}

 ?>
