<?php
$filename = substr(strrchr($_SERVER['SCRIPT_NAME'], "/"), 1); // missing '' around index - notice error
$name = substr($filename, 0, strrpos($filename, ".")); ?>

<header id="pageHeader">
  <aside id="login">
    <form action="login.php?page=<?php echo $name; ?>" method="post" onsubmit="return validateForm()">
      <input name="username" id="username" type="text" placeholder="Username">
      <input name="submit" type="submit" value="Login">
    </form>
  </aside>
  <a href="index.php"><h1><span class="glyphicon glyphicon-ok"></span> The Advice Shop</h1></a>
</header>

<script>
  function validateForm() {
    var username = document.getElementById("username").value;
    var containsNumeral = /\d/.test(username);
    var containsCapitalLetter = /[A-Z]/.test(username);
    
    while (!containsNumeral || !containsCapitalLetter) {
      alert("Username must contain at least one numeral and one capital letter.");
      return false;
    }
    return true;
  }
</script>
