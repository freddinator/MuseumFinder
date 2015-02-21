<?php
session_start();

$data = $_SESSION['data'];

$i = $_GET['id'];
$item = $data[$i];
$choice = $_GET['choice'];

$museum = $item['museum'];


if ($choice == 'y'){
  switch ($museum){
    case 'va':
      $_SESSION['va'] = $_SESSION['va'] +1;
      break;
    case 'science':
      $_SESSION['science'] = $_SESSION['science'] +1;
      break;
    case 'british':
      $_SESSION['british'] = $_SESSION['british'] +1;
      break;
    case 'natural':
      $_SESSION['natural'] = $_SESSION['natural'] +1 ;
      break;

}}

$i++;

header('Location: process.php?id=' . $i);
