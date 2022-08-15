	<!DOCTYPE html>
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Resit</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script type='text/javascript' src='x3dom/x3dom.js'></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
    <link rel='stylesheet' type='text/css' href='http://www.x3dom.org/x3dom/release/x3dom.css'></link>
    <script type='text/javascript' src='http://www.x3dom.org/x3dom/release/x3dom.js'></script>
    <link href="style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://m.w3newbie.com/you-tube.css">
    <script type='text/javascript' src='http://www.x3dom.org/release/x3dom.js'></script>
    <link rel='stylesheet' type='text/css' href='http://www.x3dom.org/release/x3dom.css'></link>
		
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>JavaScript Swap Page Contents Function</title>

<!-- JavaScript document.getElementById(parameter) where paramer is usually a div tag ID -->
<script type="text/javascript">

var counter = 0;

function swap(selected)
{
	<!-- First do not display all div id contents -->	
	document.getElementById('home').style.display = 'none';
	document.getElementById('coke').style.display = 'none';
	document.getElementById('sprite').style.display = 'none';
	document.getElementById('fanta').style.display = 'none';
	
	<!-- Then display the selected div id contents -->
	document.getElementById(selected).style.display = 'block';

}
function changeLook()
{
	<!-- Use chnge the style dynamically -->
	document.getElementById('theme').style.backgroundColor = '#000000';
	document.getElementById('home').style.backgroundColor = '#3350FF';
	document.getElementById('coke').style.backgroundColor = '#770000';
	document.getElementById('sprite').style.backgroundColor = '#75FF33';
	document.getElementById('fanta').style.backgroundColor = '#FFBD33';
	document.getElementById('theme').style.fontFamily = 'arial,sans-serif';
	document.getElementById('theme').style.color = 'white';
}
function countUp()
{
	<!-- Simple incremental counter -->
	counter += 1;
	<!-- Assign the counter result to the inn HTML of the result ID div tag -->
	document.getElementById('result').innerHTML = counter;
}
function changeColor(newColor) {
    var elem = document.getElementById("para1");
    elem.style.color = newColor;
}
</script>

</head>

<body id="theme">
	<?php include_once('./view/header.php') ?>

	<!-- Navigation menu -->
	<p> 
		<a href="javascript:swap('home')" style="#3350FF" >Drinks</a> |
    	<a href="javascript:swap('coke')" style="color:#FF0000;">Coca Cola</a> |
        <a href="javascript:swap('sprite')" style="color:#75FF33;">Sprite</a> |
        <a href="javascript:swap('fanta')" style="color:#FFBD33" >Fanta</a>
    </p>
   
    <!--Single page contents, each set of contents in a container div    	.
    	Initially, the home page will be displayed until one of the other nav menu links are clicked 
    	Then the JavaScript swap function will prcess the 'selected' contents, 
    	first ensuring all pages are not displayed, then displaying the selected conetnts as a block element-->
    <div id="home"><h2><b>Coca Cola:</b></h2> <h3>Welcome to my basic 3D App. Select your drink of choice!</h3>
		<div class="container-fluid" style="padding-bottom: 5%;"> <img src="pg2.jpg"> 
			<?php ini_set('memory_limit', '1024M'); ?> 
		</div>
	</div>
    <div id="coke" style="display:none;"><h2><b>Coca Cola:</b></h2> <h3>Check out my Coke 3D model. </h3>
		<?php include_once('./view/x3d_coke.php') ?>
	</div>
    <div id="sprite" style="display:none;"><h2><b>Sprite:</b></h2> <h3>Check out my Sprite 3D model. </h3>
		<?php include_once('./view/x3d_sprite.php') ?>
	</div>
    <div id="fanta" style="display:none;"><h2><b>Fanta:</b></h2> <h3>Check out my Fanta 3D model. </h3>
		<?php include_once('./view/x3d_fanta.php') ?>
	</div>

	<div class="row test-center padding">

		<div class="card container-fluid padding text-black bg-danger mb-3" style="max-width: 25rem;">
				<div class="card-header"><h3>How many do you drink in a week?</h3></div>
					<div class="card-body">
						<!-- Click to activate the counter -->
						<h3><p>Click <a href='javascript:countUp()'>here</a> to count: 
							<div id="result"></div>
						</p> </h3>
					</div>
		</div>

		<div class="card container-fluid padding text-black bg-danger mb-3" style="max-width: 25rem;">
				<div class="card-header"><h3>Restyle the page</h3></div>
					<div class="card-body">
						<!-- Simple button -->
						<h3><p><input type="button" class="btn btn-warning btn-lg" value="Click me!" onClick="changeLook()" /></p></h3>
					</div>
		</div>

		<div class="card container-fluid padding text-black bg-danger mb-3" style="max-width: 25rem;">
				<div class="card-header"><h3><p id="para1">Vote for your favourite!</p></h3></div>
					<div class="card-body">
						<button class="btn btn-success btn-lg" onclick="changeColor('green');">SPRITE</button>
  						<button class="btn btn-danger btn-lg" onclick="changeColor('red');">COCA COLA</button>
						<button class="btn btn-warning btn-lg"onclick="changeColor('orange');">FANTA</button>
					</div>
		</div>
    </div>
    
  	<footer>
       <?php include_once('./view/footer.php') ?>
    </footer>
   
</body>
</html>
