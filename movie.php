<html>
<head>

<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
	
    
	
	<link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.css" rel="stylesheet"  type='text/css'>
	<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.0/css/bootstrap.min.css" integrity="sha384-SI27wrMjH3ZZ89r4o+fGIJtnzkAnFs3E4qz9DIYioCQ5l9Rd/7UAa8DHcaL8jkWt" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	<link rel="stylesheet" href="css/style.css"/>
</head>
<body>

<?php
	require('header.php');
?>

<h2> Movie Review </h2>
<div class="wrap">
   <div class="search">
   <form action="movie.php" method="post" style="display:flex;">
      <input type="text" name="search" class="searchTerm" placeholder="What are you looking for?">
      <input type="hidden" name="submit-search" value="true">
	  <button type="submit" class="searchButton">
        <i class="fa fa-search"></i>
     </button>
	 </form>
   </div>
</div>



<?php
if(isset ($_POST['submit-search'])){

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";
$con = mysqli_connect($servername, $username, $password, $dbname);

$search = mysqli_real_escape_string($con, $_POST['search']);
$res = mysqli_query($con,"Select * from movie WHERE MovieName LIKE '$search%' ");
$queryResult = mysqli_num_rows($res);


if($queryResult > 0){
while($row =mysqli_fetch_array($res))
{
	echo"
			<div id='movie'>
			<img src=' ".$row['Images']." '/>

    
			<div id='absolute'>
			<h1> ".$row['MovieName']." </h1>
			<br>
			<br>
			<i style='font-size:25px'>
			".$row['Summary']."
			</i>
			<br>
			<br>
			<i class='fa ' style='font-size:25px'>
			<p>Director: &nbsp;" .$row['Director']." </p>
			</i>
			<br>
			<br>
			<i class='fa ' style='font-size:25px'>
			<p>Release Date: &nbsp; " .$row['ReleaseDate']." </p>
			</i>
			<br>
			<br>
			<i class='fa ' style='font-size:25px'>
			<p>Average Rating: &nbsp; " .$row['averagerating']."/5 </p>
			</i>
			<br>
			<br>
			<i class='fa ' style='font-size:25px'>
			<div class='container'>
				<div class='row' style='display:block;'>
				
				
	<form action='movie.php' method='post'>
	
		<div style='color: #ffcc00 !important;'>
			<h3> Rate This Movie </h3>
		</div>
		
		<div class='rateyo' id= 'rating'
				data-rateyo-rating='4'
				data-rateyo-num-stars='5'
				data-rateyo-score='3'
				style='padding-top:20px;'>
		</div>
		
		<div class='form-group' style='display:flex; padding-top: 30px;'>
			<input type='email' name='txtEmail' class='form-control' id='exampleInputEmail1' aria-describedby='emailHelp' placeholder='Enter your email here'>
			<input type='submit' name='submit' style='padding-right:30px; margin-left: 70px; '>
		</div>
		
	         
		 
			<input type='text' name='name' value=" .$row['MovieName']." style='display:none;'>
			<input type='text' name='id' value=" .$row['ID']." style='display:none;'>
			<input type='hidden' name='rating'> 
	
		
	</form>
				</div>
			</div>
			
			   
			</i>
			</div>
			</div>

	";

}

}
else
	{
		echo"No result found!";
	}
}else
{
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";
$con = mysqli_connect($servername, $username, $password, $dbname);


$res = mysqli_query($con,"Select * from movie");
$queryResult = mysqli_num_rows($res);


if($queryResult > 0){
while($row =mysqli_fetch_array($res))
{
	echo"
			<div id='movie'>
			<img src=' ".$row['Images']." '/>

    
			<div id='absolute'>
			<h1> ".$row['MovieName']." </h1>
			<br>
			<br>
			<i style='font-size:25px'>
			".$row['Summary']."
			</i>
			<br>
			<br>
			<i class='fa ' style='font-size:25px'>
			<p>Director: &nbsp;" .$row['Director']." </p>
			</i>
			<br>
			<br>
			<i class='fa ' style='font-size:25px'>
			<p>Release Date: &nbsp; " .$row['ReleaseDate']." </p>
			</i>
			<br>
			<br>
			<i class='fa ' style='font-size:25px'>
			<p>Average Rating: &nbsp; " .$row['averagerating']."/5 </p>
			</i>
			<br>
			<br>
			<i class='fa ' style='font-size:25px'>
			<div class='container'>
				<div class='row'>
				
				
	<form action='movie.php' method='post'>
	
		<div style='color: #ffcc00 !important;'>
			<h3> Rate This Movie </h3>
		</div>
		
		<div class='rateyo' id= 'rating'
				data-rateyo-rating='4'
				data-rateyo-num-stars='5'
				data-rateyo-score='3'
				
				style='padding-top:20px;'>
		</div>
		
		<div class='form-group' style='display:flex; padding-top: 30px;'>
			<input type='email' name='txtEmail' class='form-control' id='exampleInputEmail1' aria-describedby='emailHelp' placeholder='Enter your email here'>
			<input type='submit' name='submit' style='padding-right:30px; margin-left: 70px; '>
		</div>
		
	         
		 
			<input type='text' name='name' value=" .$row['MovieName']." style='display:none;'>
			<input type='text' name='id' value=" .$row['ID']." style='display:none;'>
			<input type='hidden' name='rating'> 
	
		
	</form>
				</div>
			</div>
			
			   
			</i>
			</div>
			</div>

	";

}



}
else{
	echo "No results found!";
}
}



	require('footer.php');
?>


<?php
if(isset($_POST['submit']))
{
	$email = $_POST['txtEmail'];
	$rating = $_POST['rating'];
	$name = $_POST['name'];
	$id = $_POST['id'];
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "test";
	$con = mysqli_connect($servername, $username, $password, $dbname);
	
	if(!empty($email))
{
	$sql ="INSERT INTO movierating (MovieID,Movie,Email,Rating,DateEntered) VALUES ('$id','$name','$email', '$rating', NOW())";
	$sql2= "SELECT AVG(Rating) AS myAvg FROM movierating WHERE MovieID='$id' GROUP BY MovieID";

	if (mysqli_query($con, $sql))
{
	$result = mysqli_query($con, $sql2);
	while($row = mysqli_fetch_array($result)) 
	{
		$sql= "UPDATE movie SET averagerating='".$row["myAvg"]."' WHERE ID='$id'";
		if (mysqli_query($con, $sql)) 
		{
			echo "<script> alert('Thanks for completing the form $email !'); </script>";   
		}
		else
		{
			echo "<script> alert('Cannot calculate the average rating'); </script>";  
		}
	}
	
}
	else
	{
		echo "<script> alert('Cannot update'); </script>";  
		
	}
}
else
{
	echo "<script> alert('Please Fill in the email!'); </script>";
}

}


?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.js"></script>

<script>


    $(function () {
        $(".rateyo").rateYo().on("rateyo.change", function (e, data) {
            var rating = data.rating;
            $(this).parent().find('.score').text('score :'+ $(this).attr('data-rateyo-score'));
            $(this).parent().find('.result').text('rating :'+ rating);
            $(this).parent().find('input[name=rating]').val(rating); //add rating value to input field
        });
    });

</script>





	<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY&callback=myMap"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.js"></script>
	
</body>





</html>