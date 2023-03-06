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
  font-family: 'Bebas Neue';
  text-decoration: none;
  font-weight: 500;
  letter-spacing: 1px;
  transition: 0.3s;
  transition-property: none;
}

p {
  color: #fff;
  font-family: 'Bebas Neue';
  text-decoration: none;
  font-weight: 500;
  letter-spacing: 1px;
  transition: 0.3s;
  transition-property: none;
}

.author-btn{
  display: inline-block;
  padding: 15px 25px;
  align-items: center;
  font-family: 'Bebas Neue';
  font-size: 35px;
  cursor: pointer;
  text-align: center;
  text-decoration: none;
  letter-spacing: 1px;
  outline: none;
  color: #fff;
  background-color: #0f639e;
  border: none;
  border-radius: 8px;
  width: 200px;
}

.author-btn:hover{
  background: #0C4F60;
}



.pw-field {
  margin-left: 169px;
  margin-top: -140px;
}

.no-border {
  border: none;
  border-radius: 2px;
}


</style>

<body>
<section>
<h2><?= "Thank you for voting for my Website" ?></h2>
<br>
<h2><?= "To view the others that also filled the form click the button below" ?></h2>
<a href="https://apcwebprog.csf.ph/~jsdurano/lab3/ci4/public/guest" class="author-btn">CLICK HERE</a>
</section>
</body>