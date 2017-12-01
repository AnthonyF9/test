<?php

function debug($array)
{
  echo '<pre>';
  print_r($array);
  echo '</pre>';
}

function getImage()
{
  global $movies;

  foreach ($movies as $movie) {
    echo '<div class="film">';
    echo '<p>' . '<a href="details.php?id='.$movie['id'].'">' . '<img src="http://www.weblitzer.fr/formation/posters/'.$movie['id'].'.jpg" alt="'.$movie['title'].'">' . '</a>' . '</p>'  ;
    echo '</div>';
  }

  
}





//php echo peut s'écrire <?=  ? >
