<!-- Home Page -->
<?php 
    include 'dbcon.php';
    $connection = OpenCon();
    $sql="SELECT * FROM products";
    $read=mysqli_query($connection,$sql);
    $data=mysqli_fetch_assoc($read);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="css/index.css">
    <title></title>
</head>
<body>
<nav class="navbar navbar-expand-lg bg-dark">
  <div class="container-fluid">
    <div class="collapse navbar-collapse " id="navbarSupportedContent" >
      <ul class="navbar-nav justify-content-end">
        <li class="nav-item">
            <h6 class="h6"><a class="nav-link active text-white" aria-current="page" href="#">Home</a></h6>
        </li>
        <li class="nav-item">
            <h6 class="h6"><a class="nav-link text-white" href="#">Sell</a></h6>
        </li>
        <li class="nav-item">
            <h6 class="h6"><a class="nav-link text-white" href="cart.php">Cart</a></h6>
        </li>
        <li class="nav-item">
            <h6 class="h6"><a class="nav-link text-white" href="login.php">Profile</a></h6>
        </li>
      </ul>
    </div>
  </div>
</nav>
        
   


    <div id="package-title"><h1 >Sell Items</h1></div>
    <section class="packages">
        
        <div class="product-card">
            <div class="product-image">
                <img src="images/Sony-PlayStation-5.jpg" alt="playstation">
            </div>
            <div class="product-description">
                <h3>Sony Playstation-5</h3>
                
				<div class="ratings">
					<span class="stars">
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
						<i class="far fa-star"></i>
					</span>
					<span class="rating-number">
						4/5
					</span>
				</div>
				<span class="price-range">From</span> <span class="currency">LKR 20000.00</span><br>
                <button type="button" class="btn btn-outline-dark add-button">Add To Cart</button>
            </div>
        </div>
        <div class="product-card">
            <div class="product-image">
                <img src="images/Sony-PlayStation-5.jpg" alt="playstation">
            </div>
            <div class="product-description">
                <h3>Sony Playstation-5</h3>
                
				<div class="ratings">
					<span class="stars">
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
						<i class="far fa-star"></i>
					</span>
					<span class="rating-number">
						4/5
					</span>
				</div>
				<span class="price-range">From</span> <span class="currency">LKR 30000.00</span>
                <button type="button" class="btn btn-outline-dark add-button">Add To Cart</button>
            </div>
        </div>
        <div class="product-card">
            <div class="product-image">
                <img src="images/Sony-PlayStation-5.jpg" alt="playstation">
            </div>
            <div class="product-description">
                <h3>Sony Playstation-5</h3>
                
				<div class="ratings">
					<span class="stars">
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
						<i class="far fa-star"></i>
						<i class="far fa-star"></i>
					</span>
					<span class="rating-number">
						3/5
					</span>
				</div>
				<span class="price-range">From</span> <span class="currency">LKR 10000.00</span>
                <button type="button" class="btn btn-outline-dark add-button">Add To Cart</button>
            </div>
        </div>
        <div class="product-card">
            <div class="product-image">
                <img src="images/Sony-PlayStation-5.jpg" alt="playstation">
            </div>
            <div class="product-description">
                <h3>Sony Playstation-5</h3>
                
				<div class="ratings">
					<span class="stars">
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
						<i class="far fa-star"></i>
					</span>
					<span class="rating-number">
						4/5
					</span>
				</div>
				<span class="price-range">From</span> <span class="currency">LKR 135000.00</span>
                <button type="button" class="btn btn-outline-dark add-button">Add To Cart</button>
            </div>
        </div>
        
        
        
        
    </section>


    <!-- Banner -->

    <section>
        <div class="flex-container banner">
            <div class="banner-icon">
                <div class="icon">
                    <i class="fas fa-dollar-sign icon"></i>
                </div>
                <div class="title">
                    <h3>15 Day Money Back Guarantee</h3>
                </div>
                
            </div>
            <div class="banner-icon">
                <div class="icon">
                    <i class="fas fa-percentage icon"></i>
                </div>
                <div class="title">
                    <h3>Special & Seasonal Offers</h3>
                </div>
                
            </div>
            <div class="banner-icon">
                <div class="icon">
                    <i class="fas fa-shield-virus icon"></i>
                </div>
                <div class="title">
                    <h3>Covid-19 Safety Measures</h3>
                </div>
                
            </div>	
        </div>
    </section>

    <!-- Recommended Packages -->

    <h1 id="package-title">Best Sellers</h1>
    <section class="packages">
        
        <div class="product-card">
            <div class="product-image">
                <img src="images/Sony-PlayStation-5.jpg" alt="playstation">
            </div>
            <div class="product-description">
                <h3>Sony Playstation-5</h3>
                
				<div class="ratings">
					<span class="stars">
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
						<i class="far fa-star"></i>
						<i class="far fa-star"></i>
					</span>
					<span class="rating-number">
						3/5
					</span>
				</div>
				<span class="price-range">From</span> <span class="currency">LKR 15000.00</span>
                <button type="button" class="btn btn-outline-dark add-button">Add To Cart</button>
            </div>
        </div>
        <div class="product-card">
            <div class="product-image">
                <img src="images/Sony-PlayStation-5.jpg" alt="playstation">
            </div>
            <div class="product-description">
                <h3>Sony Playstation-5</h3>
                
				<div class="ratings">
					<span class="stars">
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
						<i class="far fa-star"></i>
					</span>
					<span class="rating-number">
						4/5
					</span>
				</div>
				<span class="price-range">From</span> <span class="currency">LKR 30000.00</span>
                <button type="button" class="btn btn-outline-dark add-button">Add To Cart</button>
            </div>
        </div>
        <div class="product-card">
            <div class="product-image">
                <img src="images/Sony-PlayStation-5.jpg" alt="playstation">
            </div>
            <div class="product-description">
                <h3>Sony Playstation-5</h3>
                
				<div class="ratings">
					<span class="stars">
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
						<i class="far fa-star"></i>
						<i class="far fa-star"></i>
					</span>
					<span class="rating-number">
						3/5
					</span>
				</div>
				<span class="price-range">From</span> <span class="currency">LKR 85000.00</span>
                <button type="button" class="btn btn-outline-dark add-button">Add To Cart</button>
            </div>
        </div>
        <div class="product-card">
            <div class="product-image">
                <img src="images/Sony-PlayStation-5.jpg" alt="playstation">
            </div>
            <div class="product-description">
                <h3>Sony Playstation-5</h3>
                
				<div class="ratings">
					<span class="stars">
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
						<i class="far fa-star"></i>
					</span>
					<span class="rating-number">
						4/5
					</span>
				</div>
				<span class="price-range">From</span> <span class="currency">LKR 35000.00</span>
                <button type="button" class="btn btn-outline-dark add-button">Add To Cart</button>
            </div>
        </div>
    </section>
        <!-- Best Offers -->

    <div id="package-title"><h1 >Best Offers</h1></div>
    <section class="packages">
        
        <div class="product-card">
            <div class="product-image">
                <img src="images/Sony-PlayStation-5.jpg" alt="playstation">
            </div>
            <div class="product-description">
                <h3>Sony Playstation-5</h3>
                
				<div class="ratings">
					<span class="stars">
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
						<i class="far fa-star"></i>
					</span>
					<span class="rating-number">
						4/5
					</span>
				</div>
				<span class="price-range">From</span> <span class="currency">LKR 20000.00</span>
                <button type="button" class="btn btn-outline-dark add-button">Add To Cart</button>
            </div>
        </div>
        <div class="product-card">
            <div class="product-image">
                <img src="images/Sony-PlayStation-5.jpg" alt="playstation">
            </div>
            <div class="product-description">
                <h3>Sony Playstation-5</h3>
                
				<div class="ratings">
					<span class="stars">
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
						<i class="far fa-star"></i>
					</span>
					<span class="rating-number">
						4/5
					</span>
				</div>
				<span class="price-range">From</span> <span class="currency">LKR 30000.00</span>
                <button type="button" class="btn btn-outline-dark add-button">Add To Cart</button>
            </div>
        </div>
        <div class="product-card">
            <div class="product-image">
                <img src="images/Sony-PlayStation-5.jpg" alt="playstation">
            </div>
            <div class="product-description">
                <h3>Sony Playstation-5</h3>
                
				<div class="ratings">
					<span class="stars">
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
						<i class="far fa-star"></i>
						<i class="far fa-star"></i>
					</span>
					<span class="rating-number">
						3/5
					</span>
				</div>
				<span class="price-range">From</span> <span class="currency">LKR 10000.00</span>
                <button type="button" class="btn btn-outline-dark add-button">Add To Cart</button>
            </div>
        </div>
        <div class="product-card">
            <div class="product-image">
                <img src="images/Sony-PlayStation-5.jpg" alt="playstation">
            </div>
            <div class="product-description">
                <h3>Sony Playstation-5</h3>
                
				<div class="ratings">
					<span class="stars">
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
						<i class="far fa-star"></i>
					</span>
					<span class="rating-number">
						4/5
					</span>
				</div>
				<span class="price-range">From</span> <span class="currency">LKR 135000.00</span>
                <button type="button" class="btn btn-outline-dark add-button">Add To Cart</button>
            </div>
        </div>
        
        
        
        
    </section>
</body>
</html>