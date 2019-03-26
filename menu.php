<?php 

//create a session for all the pages
	session_start();


//if the user trys to open this page from url, send the user to homepage

if(!isset($_SESSION['userid'])){
	
	header("Location: index.php");
	
}

?>

<!--Menu page. Author: Heejeong Kim-->
<!DOCTYPE html>
<html>
	<head>
		<title> Web Dev Noodle House </title>
		<link rel="stylesheet" type="text/css" href="index.css"/>
		<link rel="stylesheet" href="basic.css" type="text/css" />
	</head>
	<body>
		<div class="container">
			<header>
				<h1> Noodle House </h1>
			</header>
			<nav>
				<ul class="page-nav">
					<li><a href="index.php">Home</a></li>
					<li><a href="menu.php">Menu</a></li>
					<li><a href="aboutus.php">About Us</a></li>
					<li><a href="contactus.php">Contact Us</a></li>
					
				</ul>
			</nav>
			<div class="midsection">
				<main>
				
				<!--Display Menu with pictures, name and price. Author: Chris Xie-->
				<table>
      <thead>
        <tr>
          <th>Name/price</th>
          <th>Dishes</th>
          <th>Dishes</th>
		  <th>Name/price</th>
        </tr>
      </thead>
      <tbody>
<?php

   $menu = array(
  'Beef Rice: $7.99',
  'Beef noodles: $8.99',
  'Veggie Rice: $9.99',
  'Veggie noodles: $7.99',
  'Fish Rice: $11.99',
  'Fish noodles: $7.99',
  'Chicken Rice: $7.99',
  'Chicken noodles: $7.99',
  'Shrimp Rice: $7.99',
  'Shrimp noodles: $7.99',
  'Spicy Seafood Rice: $17.99',
  'Spicy Seafood noodles: $17.99',
  'Meatball Rice: $7.99',
  'Meatball noodles: $10.99',
  'Pork Rice: $6.99',
  'Pork noodles: $7.99',
  'Mushroom Rice: $5.99',
  'Mushroom noodles: $4.99',

);

	  $n=0;
	  $j=1;
	   
	  
  for ($i=0; $i <= 8; $i++)
  {
	  
	  
?>



        <tr>
          <td style ="width: 100px; height: 100px;"><?php echo $menu[$n]; ?></td>
          <td ><img style ="display: block; width: 200px; height: 200px;" src="pic.php?i=<?php echo $i; ?>&purpose=g" /></td>
          <td ><img style ="display: block; width: 200px; height: 200px;" src="pic.php?i=<?php echo $i; ?>&purpose=a" /></td>
		   <td style ="width: 100px; height: 100px;"><?php echo $menu[$j]; ?></td>
        </tr>
		
		
		
		
<?php
	$n+=2;
    $j+=2;
  }
?>
        <tr>
          <td>Juice: $2.00 </td>
          <td>Soda: $1.50</td>
          <td>Beer: $2.00</td>
		  <td>Wine: $4.99</td>
        </tr>
      </tbody>
    </table>
	
	<!--Display Menu with pictures, name and price. Author: Chris Xie-->
				</main>
				
				<aside>
					<div class="aside-block login">
					
					
					<?php
				
					if(isset($_SESSION['userid'])){
			
						echo '<form action="includes/logout.inc.php" method="post">

							<button type="submit" name="logout-submit">Logout</button>
				
							</form>';
			
			
					}
				
				?>
				

					</div>
				</aside>
			</div>
		</div>
	</body>
</html>