<style>

* {
  margin: auto;
  padding: 0;
  box-sizing: border-box;
  font-family: "Poppins", sans-serif;
}

body {
  font-family: 'Bebas Neue';
}

section {
  position: relative;
  min-height: 84.3vh;
  display: flex;
  flex-direction: column;
  justify-content: flex-start;
  background-color: #03253d;
}

h2 {
  color: #fff;
  font-size: 40px;
  font-family: 'Bebas Neue';
  text-decoration: none;
  font-weight: 500;
  letter-spacing: 1px;
  padding: 2px 15px;
  border-radius: 20px;
  transition: 0.3s;
  transition-property: none;
}

header .navigation a:not(:last-child){
  margin-right: 30px;
}

header .navigation a:hover{
  background: #1D3FB4;
  color: #fff;
}

.main {
  float: left;
  width: 60%;
  padding: 0 20px;
  padding-top: 25px;
  padding-left: 170px;
  font-size: 30px;
  text-align: justify;
  color: aliceblue;
}





@media only screen and (max-width: 620px) {
  .main {
    width: 100%;
  }
}
</style>

<body> 
<section>
<?php

$name = $email = $gender = $messages = $website = $vtuber = "";
$nameErr = $emailErr = $genderErr = $messagesErr = $websiteErr = $vtuberErr = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["gstname"])){
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["gstname"]);
    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)){
      $name = "Only letters and white space allowed";
    }
  }
  if (empty($_POST["email"])){
    $emailErr = "Email is required";
  } else {
    if(!filter_var("email")){
      $emailErr = "Invalid email format";
    }
  }
  if (empty($_POST["website"])) {
    $website = "";
  } else {
    $website = test_inpput($_POST["website"]);
    if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
      $websiteErr = "Invalid URL";
    }
  }
  if (empty($_POST["vtuber"])){
    $nameErr = "The name of a vtuber is required";
  } else {
    $name = test_input($_POST["vtuber"]);
    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)){
      $name = "Only letters and white space allowed";
    }
  if (empty($_POST["comment"])) {
    $comment = "";
  } else {
    $comment = test_input($_POST["comment"]);
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h2>Input your details.</h2>;

<form method="post";action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" style="color: aliceblue; text-align:right">  

  <?= csrf_field() ?>

  Name: <input type="text" name="name">
  <br><br>
  E-mail: <input type="text" name="email">
  <br><br>
  Website: <input type="text" name="website">
  <br><br>
  Favorite Vtuber: <input type="text" name="vtuber"><br><br>
  Gender:
  <input type="radio" name="gender" value="male">Male
  <input type="radio" name="gender" value="female">Female
  <input type="radio" name="gender" value="other">Other
  <br><br>
  Message: <textarea name="message" rows="5" cols="40"></textarea>
  <br><br>
  <input type="submit" name="submit" value="Submit">
</form>
</section>
</body>