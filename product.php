<?php
  require_once 'dbconnect.php';
?>


  <!doctype html>
  <html lang="en">
  <?php 
    foreach($products as $item){
      $id = $item['product_id'];
      $masp = $_GET['masp'];
      if($masp==$id){
  ?>
  <head>
    <title><?php echo $item['product_title'];?></title>
    <link rel="icon" href="https://i.imgur.com/AAFRpDU.png">
    <?php require_once 'block/block_head.php';?>
    
    <link href="css/style.css" rel="stylesheet">
    <link href="css/product.css" rel="stylesheet">
  <body>

    <?php
    
    require_once 'block/block_menu.php';
      
  ?>

  <?php
  require_once 'block/block_banner.php';
  ?>
  
<div class="container"> 
  <div class="row">
    <div class="col-md-7 col-sm-12 col-xs-12">
      <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
          <li data-target="#myCarousel" data-slide-to="3"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
          <div class="item active">
            <img src="https://i.imgur.com/qV499ig.jpg" alt="hinh" width="50%" height="300px">   
          </div>

          <div class="item">
            <img src="https://i.imgur.com/X6EdUyH.jpg" alt="hinh1" width="50%" height="300px">   
          </div>
        
          <div class="item">
            <img src="https://i.imgur.com/2CSRMKt.jpg" alt="hinh2" width="50%" height="300px">     
          </div>
          <div class="item">
            <img src="https://i.imgur.com/UTJTs3i.jpg" alt="hinh2" width="50%" height="300px">     
          </div>
        </div>

        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
    </div>
  </div>
    <div class="col-md-5 col-sm-12 col-xs-12">
      <div class="product_title"><h3><?php echo $item['product_title'];?></h3></div>
      <div class="category"><span><a href="category.php?cat_id=<?php echo $item['category_id'];?>">#<?php echo $item['category'];?></a></span></div>
      <hr style="border: 1px rotated gray">
      <div class="price"><h4><?php echo $item['product_price'];?></h4></div>
      <div class="buttons_added">
        <input class="minus is-form" type="button" value="-">
        <input aria-label="quantity" class="input-qty" max="10" min="1" name="" type="number" value="1">
        <input class="plus is-form" type="button" value="+">
      </div>
      <br><br>
      <div class="cart">
        <button type="button" id="add-to-cart" class="add-to-cart" name="add">
        <span>Thêm vào giỏ</span></button>
        <button type="button" id="buy-now" class="buy-now" name="buy">
        <span>Mua ngay</span></button>
      </div>
      <br>
      <div class="description"><h4>Mô tả</h4></div>
        <p><?php echo $item['product_description'];?></p>
    </div>
</div> 
<?php
            
          }
        }
        ?>
  <hr  width="100%" align="center" size="20px" />
      
      <?php
        require_once 'block/block_footer.php';
      ?>
  </div>
  <?php
        require_once 'block/block_foottag.php';
      ?>
    </body>
    <script>//<![CDATA[
$('input.input-qty').each(function() {
  var $this = $(this),
    qty = $this.parent().find('.is-form'),
    min = Number($this.attr('min')),
    max = Number($this.attr('max'))
  if (min == 0) {
    var d = 0
  } else d = min
  $(qty).on('click', function() {
    if ($(this).hasClass('minus')) {
      if (d > min) d += -1
    } else if ($(this).hasClass('plus')) {
      var x = Number($this.val()) + 1
      if (x <= max) d += 1
    }
    $this.attr('value', d).val(d)
  })
})
//]]></script>
  </html>