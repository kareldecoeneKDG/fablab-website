<?php

$data = $pages->find('categories')->children()->children()->published();
$json = [];
$imageSource;
foreach($data as $machine) {
    
    if ($machine->images()->isNotEmpty()){
        $imageSource =  $machine->images()->first()->url();
    }
  $json[] = [
    'name' => (string)$machine->title(),
    'url'   => (string)$machine->url(),
    'category' => (string)$machine->parent()->title(),
    'image-source' => (string)$imageSource,
    'available' => (string)$machine->isAvailable()
  ];

}

echo json_encode($json);
return json_encode($json);