<!DOCTYPE html>
<html lang="en">
<head>
  <?php require_once 'block/block_head.php';?>

</head>
<style>
</style>
<?php

$menus = [
  [
    'name' => 'Trang Chủ',
    'icon' => 'fas fa-home',
    'href' => 'index.php'
  ],
  [
    'name' => 'Áo',
    'icon' => 'fas fa-tshirt',
    'href' => 'category.php?cat_id=1',
    'subs' => [
      [
        'name' => 'Ao khoac',
        'icon' => 'fas fa-tshirt',
        'href' => 'category.php?cat_id=12'
      ],
      [
        'name' => 'Ao len',
        'icon' => 'fas fa-tshirt',
        'href' => 'category.php?cat_id=13'
      ]
    ]
  ],
  [
    'name' => 'Quần',
    'icon' => 'fas fa-socks',
    'href' => 'category.php?cat_id=2'
  ],
  [
    'name' => 'Phụ Kiện',
    'icon' => 'fas fa-user-secret',
    'href' => 'category.php?cat_id=3'
  ],
  [
    'name' => 'Liên Hệ',
    'icon' => 'fas fa-fw fa-address-card',
    'href' => 'contact.php'
  ],
  [
    'name' => 'Tài Khoản',
    'icon' => 'fas fa-user-secret',
    'href' => '#'
  ],
];

?>

<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">
    <span><img src="https://i.imgur.com/AAFRpDU.png" width="40" height="40" alt=""></span>
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
    
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <?php 
        foreach($menus as $menu){
      ?>
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo $menu['href'];?>"><i class="<?php echo  $menu['icon'];?>"></i><?php echo $menu['name'];?></a>
      </li>
        <?php }?>
    </ul>
    <ul class="nav navbar-nav navbar-right">
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-secondary my-2 my-sm-0" type="submit"><i class="fas fa-fw fa-search"></i></button>
    </form>
    </ul>
  </div>
</nav>

</body>
<?php require_once 'block/block_foottag.php'?>
</html>
