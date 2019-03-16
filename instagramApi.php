<?php
$access_token = "507771294.2268c89.bde021deec974bbf9a2d5e95dfd57662";
$photo_count = 9;
$json_link = "https://api.instagram.com/v1/users/self/media/recent/?access_token={$access_token}&count={$photo_count}";
$json = file_get_contents($json_link);
$content = json_decode($json);
foreach ($content->data as $c) {
  echo '<img src="'.$c->images->standard_resolution->url.'" alt="">';
}
?>
