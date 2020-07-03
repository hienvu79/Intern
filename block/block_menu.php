<head>
  <link href="css/menu.css" rel="stylesheet">
</head>
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

<nav class="navbar fixed-top navbar-expand-sm bg-danger navbar-dark">
  <a class="navbar-brand" href="index.php"><img src="https://i.imgur.com/AAFRpDU.png" alt="Logo" class="nav-logo"></a>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
    <?php 
      foreach($menus as $menu){
    ?>
      <li class="nav-item dropdown">
        <a class="nav-link" href="<?php echo $menu['href'];?>"><i class="<?php echo  $menu['icon'];?>"></i><?php echo $menu['name'];?></a>
      </li>
      <?php }?>
    </ul>
  </div>  
  <form class="form-inline" action="/action_page.php">
    <input class="form-control mr-sm-2" type="text" placeholder="Search">
    <a href="#" class="btn btn-info btn-lg"><span class="fas fa-search"></span></a>
  </form>
</nav>