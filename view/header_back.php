<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Scientic</title>
</head>
<body class="body">
    <header class="header">
      <p><a href="#" id="btn_aside"><i class="fa-solid fa-bars"></i></a></p>
      <p><strong>SCIEN<span>TIC</span></strong></p> 
    </header>
    <aside class="aside">
        <nav>
          <div id="user_back">
            <p><i class="fa-solid fa-user"></i></p>
            <p><?= $_SESSION["prenom"];?></p>
            <p><?= $_SESSION["nom"];?></p>
          </div>
          <ul class="menu_back">
              <li>
                <a href="?action=insertp"><i class="fa-solid fa-pen-to-square"></i><span>Insert Post</span></a>
              </li>
              <li>
                <a href="?action=activatep"><i class="fa-solid fa-upload"></i><span>Activate Post</span></a>
              </li>
              <li>
                <a href="?action=editp"><i class="fa-solid fa-user-pen"></i><span>Edit Profile</span></a>
              </li>
              <li>
                <a href="?action=disablea"><i class="fa-solid fa-user-slash"></i><span>Disable Account</span></a>
              </li>
          </ul>
          <li class="logout_back">
            <a href="?action=logout"><i class="fa-solid fa-right-from-bracket"></i><span>Logout</span></a>
          </li>
        </nav>
    </aside>