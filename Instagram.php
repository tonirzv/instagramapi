<?php
class Instagram {
  private $accessToken;
  private $picturesNumber;

  function __construct(string $accessToken, int $picturesNumber) {
    $this->accessToken = $accessToken;
    $this->picturesNumber = $picturesNumber;
  }

  public function getPictures() : string {
    try {
      $pictures = [];
      $json = file_get_contents('https://api.instagram.com/v1/users/self/media/recent/?access_token='. $this->accessToken . '&count=' . $this->picturesNumber);
      $content = json_decode($json);
      $pictures = array_map([$this, 'standardResolution'], $content->data);
      return json_encode($pictures);
    } catch (Exception $e) {
       return $e->getMessage();
    }
  }

  private function standardResolution($n) {
    return $n->images->standard_resolution->url;
  }
}
 ?>
