<?php
$i = 0;
foreach ($reviews as $item) {
	if($item['rating'] >= 4 and $i != 2){
    $i++
?>
<div>
<div class="media">
  <a href="<?php echo $item['author_url'] ?>" target="_blank"><img width="50" src="<?php echo $item['profile_photo_url'] ?>" class="align-self-start mr-3" alt="profile_photo"></a>
  
  <div class="media-body">
    <h5 class="mt-0"><a href="<?php echo $item['author_url'] ?>" target="_blank"><?php echo $item['author_name'] ?></a></h5>
    <p><?php
      if($item['rating'] < 5){
        echo str_repeat('<span style="color: red">&#9733</span>', $item['rating']) . str_repeat('<span style="color: DimGrey">&#9734</span>', 5 - $item['rating']);
      }else{
        echo str_repeat('<span style="color: red">&#9733</span>', $item['rating']);
      }
    ?></p>
    <p style="line-height: 0.1"><b><?php echo $item['relative_time_description'] ?></b></p>
    <p><?php //echo $item['text'] ?></p>
  </div>

</div>
<br>
</div>

<?php
	}
  }

?>