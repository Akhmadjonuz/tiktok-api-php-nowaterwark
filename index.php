<?php
# Mualliflik huquqi saqlansin!
# dadabayev.uz
# +998902224311
# telegram: @Akhmadjon

# Copyright reserved!
# dadabayev.uz
# +998902224311
# telegram: @Akhmadjon

# Авторские права защищены!
# dadabayev.uz
# +998902224311
# telegram: @Akhmadjon

$url = $_GET["url"];
$id = $_GET["id"];
$video = file_get_contents("https://tikdown.org/getAjax?url=" . urlencode($url) . "&_token=t4JdZ9etWtvCbI68c77THtVyYJEtEp4DrGg2Af8W");
$live_video = json_decode($video, true);
mkdir("tiktok");

$links = [];

$ex = explode('href="', $live_video['html']);

$result = explode('" name="download"', $ex[1]);

array_push($links, $result[0]);

file_put_contents('tiktok/' . $id . '.mp4', file_get_contents($result[0]));

$result = explode('" name="download"', $ex[2]);

array_push($links,  $result[0]);
file_put_contents('tiktok/' . $id . '.mp3', file_get_contents($result[0]));

echo json_encode($links);
