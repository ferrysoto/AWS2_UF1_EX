<!-- Ejercicio 3 forms - Ferran Herrero 26/09/2019 -->
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Selector de skins - Ferran H</title>
    <?php
      if (empty($_POST)) {
        echo '<link rel="stylesheet" href="/Ex3_Skins/ex3_default.css">';
      } else {
        echo '<link rel="stylesheet" href="/Ex3_Skins/'. $_POST["selectSkin"].'"/>';
      } ?>

  </head>
  <body>
    <div style="width: 100%; padding: 15px;">
      <div style="float: left;">
        <h1>Hola mundo!</h1>
      </div>

      <div style="float: right">

        <form style="padding-top: 10px; padding-right: 35px;" method="post">
          <label>Elige una skin: </label>
          <select name="selectSkin" action="Ejercicio 3 - Selector de skins.php">
            <option>Skin default</option>
            <option>Skin 1</option>
            <option>Skin 2</option>
          </select>
          <input type="submit">
        </form>

        <?php
          if (!empty($_POST)) {
            $skin = $_POST["selectSkin"];
          } else {
            $skin = "ex3_default.css";
          }
        ?>

      </div>
    </div>

    <p>Este es el ejercicio 3 sobre lectura de directorios realizado por Ferran Herrero.</p>
    <br>

  </body>
</html>
