<?php

$all_posts = array(
  '1' => array(
    'Title' => "First Post",
    'Content' => "Here's the first post content",
    'Date' => "12/4/21"
  ),
  '2' => array(
    'Title' => "Second Post",
    'Content' => "Here's the second post content",
    'Date' => "12/4/21"
  ),
  '3' => array(
    'Title' => "Third Post",
    'Content' => "Here's the third post content",
    'Date' => "12/4/21"
  ),
);

foreach($all_posts as $post){
  ?>
    <div class="mb-3 bg-light p-5">
      <h5><?php echo $post["Title"]; ?></h5>
      <p><?php echo $post["Content"]; ?></p>
      <span class="badge badge-primary"><?php echo $post["Date"]; ?></span>
    </div>
  <?php
}

 ?>
