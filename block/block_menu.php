<style>
.btn-secondary {
    color: #fff;
    background-color: #aea79f;
    border-color: #aea79f;
    border-top-left-radius: 0;
    border-bottom-left-radius: 0; 
}
.form-inline .form-control {
    border-top-right-radius: 0;
    border-bottom-right-radius: 0;    
}
.bg-danger {background-color: #772953!important;}

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

<nav class="navbar fixed-top navbar-expand-sm bg-danger navbar-dark">
  <a class="navbar-brand" href="#">
    <img src="https://i.imgur.com/AAFRpDU.png" width="40" height="40" alt="">
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <?php 
        foreach($menus as $menu){
      ?>
      <li class="nav-item dropdown">
        <a class="nav-link" href="<?php echo $menu['href'];?>"><i class="<?php echo  $menu['icon'];?>"></i><?php echo $menu['name'];?></a>
      </li>
        <?php }?>
    </ul>
    <div class="nav navbar-nav navbar-right">
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-secondary my-2 my-sm-0" type="button"><i class="fas fa-fw fa-search"></i></button>
    </form>
    </div>
  </div>  
</nav>
<br><br><br><br>