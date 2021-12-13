<?php

$data = $pages->find('categories')->children()->published();
$json = [];

foreach($data as $category) {
    

  $json[] = [
    'name' => (string)$category->title(),
    'id' => (string)$category->id(),
    'url'   => (string)$category->url(),
    'description' => (string)$category->info()
  ];

}

echo json_encode($json);
return json_encode($json);