<?php
function getRandom(){

  $data = array();


   // VA Media Route "http://media.vam.ac.uk/media/thira/";
  $data[] = array("name" => "Gold Ring", "image" => "http://media.vam.ac.uk/media/thira/collection_images/2008BT/2008BT2028.jpg", "viewed" => false,  "museum" => "va");
  $data[] = array("name" => "Horseman's Hammer", "image" => "http://media.vam.ac.uk/media/thira/collection_images/2006BB/2006BB9761.jpg", "viewed" => false,  "museum" => "va");
  $data[] = array("name" => "Leaf from Gospel Book", "image" => "http://media.vam.ac.uk/media/thira/collection_images/2006BG/2006BG0510.jpg", "viewed" => false, "museum" => "va");

  //Science Museum Media Route "http://www.sciencemuseum.org.uk/images/object_images/";
  $data[] = array("name" => "Electrical Chimes", "image" => "http://www.sciencemuseum.org.uk/images/object_images/277x265/10211982.jpg", "viewed" => false, "museum" => "science");
  $data[] = array("name" => "Vacum Pump", "image" => "http://www.sciencemuseum.org.uk/images/object_images/277x265/10326301.jpg", "viewed" => false, "museum" => "science");
  $data[] = array("name" => "ATLAS Circuit Board", "image" => "http://www.sciencemuseum.org.uk/images/object_images/277x265/10303417.jpg", "viewed" => false , "museum" => "science");

  // British Museum "http://www.britishmuseum.org/images/";
  $data[] = array("name" => "Horous Statue", "image" => "http://www.britishmuseum.org/images/ps318724_l.jpg", "viewed" => false, "museum" => "british");
  $data[] = array("name" => "Gold Figure", "image" => "http://www.britishmuseum.org/images/capacocha_l.jpg", "viewed" => false, "museum" => "british");
  $data[] = array("name" => "Rosetta Stone", "image" => "http://www.britishmuseum.org/images/an16456b_m.jpg", "viewed" => false, "museum" => "british");

  //NHM "http://piclib.nhm.ac.uk/pr/";
  $data[] = array("name" => "Diplodocus", "image" => "http://www.nhm.ac.uk/resources/nature-online/life/dinosaurs/dinosaur-directory/flash/models/diplodocus.jpg" , "viewed" => false, "museum" => "natural");
  $data[] = array("name" => "Cardinal Pandoriana", "image" => "http://farm6.static.flickr.com/5030/5840517308_3a689d217e_m.jpg", "viewed" => false, "museum" => "natural");
  $data[] = array("name" => "Fern", "image" => "http://en.canadianflowerdelivery.com/Images/fern_195x195.jpg", "viewed" => false, "museum" => "natural");

  return $data;
}



?>
