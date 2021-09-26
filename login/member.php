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
      สวัสดี <?php echo $name; ?> 
      <div class="header_img"> <img src="pic/avatar.png" alt=""></div>

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
      <h2>&nbsp;อัพเดทข่าวสารทุนการศึกษา</h2>
      <h3>&nbsp;นักศึกษาสามารถติดตามข่าวสารเกี่ยวกับทุนศึกษาได้ตามลิ้งค์ด้านล่างนี้</h3>
      <div class="container">
        <div class="card-body bg-light">
          <h2 class="card-title">• ทุนการศึกษา A <span class="badge badge-secondary">ใหม่</span></h2>
          <p class="card-text">ทุนการศึกษา A สำหรับนักศึกษา ปี 1 - 2 ทุนละ 5,000 บาท จำนวนจำกัด</p>
          <a href="#" class="card-link">อ่านรายละเอียดเพิ่มเติม</a>
        </div>
        <br />
        <div class="card-body bg-light">
          <h2 class="card-title">• ทุนการศึกษา B <span class="badge badge-secondary">ใหม่</span></h2>
          <p class="card-text">ทุนการศึกษา B สำหรับนักศึกษา ปี 3 ทุนละ 3,500 บาท จำนวนจำกัด</p>
          <a href="#" class="card-link">อ่านรายละเอียดเพิ่มเติม</a>
        </div>
        <br />
        <div class="card-body bg-light">
          <h2 class="card-title">• ทุนการศึกษา C <span class="badge badge-secondary">ใหม่</span></h2>
          <p class="card-text">ทุนการศึกษา C สำหรับนักศึกษา ปี 2 - 4 ทุนละ 10,500 บาท จำนวน 3 คน</p>
          <a href="#" class="card-link">อ่านรายละเอียดเพิ่มเติม</a>
        </div>
        <br />
        <div class="card-body bg-light">
          <h2 class="card-title">• ทุนการศึกษา D <span class="badge badge-secondary">หมดเวลา</span></h2>
          <p class="card-text">ทุนการศึกษา D สำหรับนักศึกษา ปี 2 - 4 ทุนละ 10,500 บาท จำนวน 3 คน</p>
          <a href="#" class="card-link">อ่านรายละเอียดเพิ่มเติม</a>
        </div>
        <br />
      </div>

  </body>

</html>