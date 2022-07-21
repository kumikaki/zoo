<?php
  if ( is_category(array('africa','japan','oceania','zoocontact','eurasia','northamerica','southamerica')) ) {
	include(TEMPLATEPATH . '/category-animallist.php');
  }
  elseif ( is_category(array('info','event','others','life')) ) {
	include(TEMPLATEPATH . '/category-newslist.php');
  }
  else {
    include(TEMPLATEPATH.'/category.php');
  }
?>