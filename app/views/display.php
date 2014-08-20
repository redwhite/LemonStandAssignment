<!DOCTYPE html>
<html lang="en">
  <head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>DISPLAY</title>

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
	<!-- Optional theme -->
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<!-- Latest compiled and minified JavaScript -->
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	  <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->
  </head>
    <body>
        
        <div class="container">
            <div class="row">
                <div class="span12">
                <h1 class="text-center">Available Products at the Banana Store</h1>
                </div>
            </div>
            
            <div class="row">
                <div class="col-md-12">
                    <?php foreach($data as $product){ ?>
                    <div class="col-sm-6 col-md-4" style="height:500px">
                        <div class="thumbnail">
                            <img data-src ="holder.js/300x300" src="https://dd6vif294zh3b.cloudfront.net/store-bananastore-53f417de6a372/uploaded/thumbnails/adult-chiquita-banana-costume_746xauto-jpg-keep-ratio.png?1408538235" style="height: 200px; width: 100%; display: block;" alt="thumbnail"/>
                            
                              <div class="caption">
                                <? echo '<h3>'.'<a href=http://bananastore.lemonstand.com/product/'.$product['sku'].'>'.$product['productname'].'</a>'.'</h3>' ?>
                                <? echo '<h4>Price: '.$product['price'].'</h5>' ?>
                                <? echo '<h5>SKU: '.$product['sku'].'</h5>' ?>                                
                                <? echo '<p>'.$product['description'].'</p>' ?>
                              </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
                
            </div>
        
    </body>
</html>