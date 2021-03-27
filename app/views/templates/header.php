<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?= BASEURL;?>css/component.css">
  <title><?= $data['title']?></title>
</head>

<body>
  <nav class="nav-top">
    <div class="main-logo">
      <div class="left-menu">
        <ul>
          <li>
            <p class="main-logo_img">KAGUNGAN</p>
          </li>
          <li>
            <select name="house" id="">
              <option value="one">Rumah 1</option>
              <option value="two">Rumah 2</option>
              <option value="three">Rumah 3</option>
            </select>
          </li>
          <li>
            <select name="land" id="">
              <option value="one">Land 1</option>
              <option value="two">Land 2</option>
              <option value="three">Land 3</option>
            </select>
          </li>
        </ul>
      </div>
      <div class="rigth-menu">
        <ul>
          <li>
            <p>Kontak</p>
            <p>Login</p>
          </li>
        </ul>
      </div>
    </div>
  </nav>
