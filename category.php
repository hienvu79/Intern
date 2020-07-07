
  <?php
    ini_set('display_errors', '1');
    ini_set('display_startup_errors', '1');
    error_reporting(E_ALL);

    require_once 'dbconnect.php';
  ?>

  <!doctype html>
  <html lang="en">
  <head>
    
    <title>Sản Phẩm</title>
    <?php require_once 'block/block_head.php';?>
  </head>
    
  <style>

  .lead{text-align:center;}
  .lead a{color:#fff;}
  h1{padding-top:30px;}
  .hr{width:30%;border:1px solid #F67777;}
  label {
      text-decoration: line-through;
      font-weight: 400;
      margin-right: 6px;
      text-align:center;
  }
  em {
      font-style: normal;}
  .lead p {
      font-size: 0.9em;
      color: #B4B4B4;
  }
  .my-3 span{
      color:#f67777;}
  .display-5 a{color:#18d0ec;
  }
  </style>
  <body>

  <?php
    
    require_once 'block/block_menu.php';
      
  ?>

  <?php
  require_once 'block/block_banner.php';
  ?>
  <div class="container">
  <h1 align="center">Sản Phẩm</h1>
  <hr class="hr">
    <div class="row">
    <?php 
      foreach($products as $item){
        $id = $item['category_id'];
        $loai = $_GET['cat_id'];
        if($id==$loai){
    ?>
      
      <div class="bg-dark col-sm-4 text-center text-white overflow-hidden">
        <div class="my-3 py-3">
        <h3 class="display-5"><a href="product.php?masp=<?php echo $item['product_id'];?>"><?php echo $item['product_title'];?></a></h3>
        <span class="test">Sale</span><br>
        <p class="lead"><label><?php echo $item['product_price'];?></label><em><?php echo $item['product_discount'];?> 
        <?php echo $item['currency'];?></em></p>
        
        <br>
        </div>
        <div class="bg-light shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;">
          <img src="<?php echo $item['product_img'];?>" style="width: 100%; height: 300px; border-radius: 21px 21px 0 0;"/>
        </div>
      </div>

        <?php
            
          }
        }
        ?>
  </div>
  <hr  width="100%" align="center" size="20px" />
      
      <?php
        require_once 'block/block_footer.php';
      ?>
  </div>
      
          
      
  <?php
        require_once 'block/block_foottag.php';
      ?>
    </body>
  </html>
