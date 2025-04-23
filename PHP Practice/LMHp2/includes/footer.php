<footer>
  <div>
    <h4>Last Updated 11/05/2019</h4>
      <?php
if (!isset($_COOKIE['count'])) {
  echo "Welcome! This is the first time you have visited this website.";
  $cookie = 1;
  setcookie("count", $cookie);
}else{
  $cookie = ++$_COOKIE['count'];
  setcookie("count", $cookie);
  echo "You have viewed this website ".$_COOKIE['count']." times.";
  }
      ?>
  </div>
</footer>
