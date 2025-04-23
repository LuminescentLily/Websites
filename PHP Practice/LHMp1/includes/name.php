<?php

  include 'name.html';

  $words="Please enter your name.";

  if(isset($_POST['submit'])){
      $name=$_POST['name'];

      if($name == "Laurie Crawford"){
          $words = "Welcome to my site, Professor!";
      }else{

          $words = "Welcome to my site, " . $name;
      }
  }
?>
