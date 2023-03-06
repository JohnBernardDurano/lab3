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

</style>

<body>
<section>
<h2><?= "Input your Information" ?></h2>

<?= session()->getFlashdata('error') ?>
<?= validation_list_errors() ?>

<form action="create" method="post" style="text-align: right;">
    <?= csrf_field() ?>

    <label style="color:aliceblue;" for="gstname">Name: </label>
    <input type="input" name="gstname" value="<?= set_value('gstname') ?>">
    <br><br>

    <label style="color:aliceblue;" for="email">Email: </label>
    <input type="input" name="email" value="<?= set_value('email') ?>">
    <br><br>

    <label style="color:aliceblue;" for="website">Website: </label>
    <input type="input" name="website" value="<?= set_value('website') ?>">
    <br><br>

    <label style="color:aliceblue;" for="vtuber">Vtuber: </label>
    <input type="input" name="vtuber" value="<?= set_value('vtuber') ?>">
    <br><br>
    
    <label style="color:aliceblue;" for="messages">Messages: </label>
    <textarea name="messages" cols="45" rows="4"><?= set_value('messages') ?></textarea>
    <br><br>

    <input type="submit" name="submit" value="Create guest entry">
</form>
</section>
</body>