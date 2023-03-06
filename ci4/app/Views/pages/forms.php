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

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = test_input($_POST["name"]);
  $email = test_input($_POST["email"]);
  $website = test_input($_POST["website"]);
  $vtuber = test_input($_POST["vtuber"]);
  $gender = test_input($_POST["gender"]);
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