<?php session_start();
include('condb.php');
include('mcss.php');

$ID = $_SESSION['ID'];
$name = $_SESSION['name'];
$level = $_SESSION['level'];
if ($level != 'Student') {
    Header("Location: ../logout.php");
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>News</title>
    <link rel="stylesheet" href="sidebar.css">
</head>

<body>

<body id="body-pd">
    <header class="header" id="header">
      <div class="header_toggle"> <i class='bx bx-menu' id="header-toggle"></i> </div>
      <div class="header_img"> <img src="pic/avatar.png" alt="" > </div>
    </header>
    <div class="l-navbar" id="nav-bar">
      <nav class="nav">
        <div>
          <a href="#" class="nav_logo"> <i class='bx bx-layer nav_logo-icon'></i> <span class="nav_logo-name">Menu</span> </a>
          <div class="nav_list">
            <a href="member.php" class="nav_link active"> <i class='bx bx-grid-alt nav_icon'></i> <span class="nav_name">News</span> </a>
            <a href="profile.php" class="nav_link"> <i class='bx bx-user nav_icon'></i> <span class="nav_name">Users</span> </a>
            <a href="#" class="nav_link"> <i class='bx bx-message-square-detail nav_icon'></i> <span class="nav_name">Messages</span> </a>
            <a href="#" class="nav_link"> <i class='bx bx-bookmark nav_icon'></i> <span class="nav_name">Bookmark</span> </a>
            <a href="#" class="nav_link"> <i class='bx bx-folder nav_icon'></i> <span class="nav_name">Files</span> </a>
            <a href="#" class="nav_link"> <i class='bx bx-bar-chart-alt-2 nav_icon'></i> <span class="nav_name">Stats</span> </a>
          </div>
        </div> <a href="logout.php" class="nav_link"> <i class='bx bx-log-out nav_icon'></i> <span class="nav_name">SignOut</span> </a>
      </nav>
    </div>

    <div>
        <div class="container" align="center">
            <h2>โปรไฟล์</h2>
            <br />
            <img src="pic/avatar.png">
            <h3></h3>
            <div class="container" style="background-color: white; width:30%; border: 2px solid #555; margin:5%; padding:15px; height: 100%;">
                <p>ชื่อผู้ใช้ : <?php echo $name; ?></p>
                <p>สถานะผู้ใช้ : <?php echo $level; ?></p>
                <p>ทุนที่ขอ : 0</p>
                <p>ทุนที่รับ : 0</p>
            </div>

        </div>



</body>

</html>