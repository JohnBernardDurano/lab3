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
</style>

<body>
<section>
<h2><?= esc($title) ?></h2>

<?php if (! empty($guest) && is_array($guest)): ?>

    <?php foreach ($guest as $guest_item): ?>

        <h2> <?= esc($guest_item['gstname']) ?> </h3>
            <p><?= esc($guest_item['email']) ?> 
            <p> <?= esc($guest_item['messages']) ?>

    <?php endforeach ?>

<?php else: ?>

    <h3>No guest</h3>

    <p>Unable to find any guest for you.</p>

<?php endif ?>
</section>
</body>