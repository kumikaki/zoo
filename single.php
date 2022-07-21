<?php
  if ( in_category(array('africa','japan','oceania','zoocontact','eurasia','northamerica','southamerica')) ) {
	include(TEMPLATEPATH . '/single-animal.php');
  }
  elseif ( in_category(array('info','event','others','life')) ) {
	include(TEMPLATEPATH . '/single-news.php');
  }
  else {
    include(TEMPLATEPATH.'/single.php');
  }
?>