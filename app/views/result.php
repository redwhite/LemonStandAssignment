<!DOCTYPE html>
<html lang="en">
  <head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>RESULTS</title>

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
        <table border="1" style="padding:30px">
            
            <?php            
                    foreach($testdata as $data){                        
                        echo '<tr>';
                        echo '<td>'.$data['name'].'</td>';
                        echo '<td>'.$data['sku'].'</td>';
                        echo '<td>'.$data['description'].'</td>';      
                        echo '<td>'.$data['base_price'].'</td>';
                        echo '</tr>';
                        
                        $product = new Product;
                        $product->productname = $data['name'];
                        $product->sku = $data['sku'];
                        $product->description = $data['description'];
                        $product->price = $data['base_price'];
                        
                        $product->save();
                        
                    }
        

            ?>
            
        </table>
    </body>
</html>