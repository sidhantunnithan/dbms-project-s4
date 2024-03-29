<?php

$username = "root";
$password = "";

?>


<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<script src="https://kit.fontawesome.com/914f58546c.js" crossorigin="anonymous"></script>
	<title>
		Home
	</title>

	<link rel = "icon" href = "https://freepngimg.com/download/popcorn/23057-2-popcorn-transparent-image.png">
</head>
<body style="background: rgb(255, 194, 195);">
	<nav class="navbar navbar-dark" style="background:rgb(232, 0, 0);">
		<div class="container">
			<a class="navbar-brand"><i class="fas fa-comment-dollar mr-3"></i>Booking</a>
			<ul class="nav navbar-nav navbar-right">
				
				<form method = "post" action = "dbmsAdmin.php">
					<div class = "row">
						<div class = "col">
							<input type = "password" name = "pass" class = "form-control" placeholder="Enter Password"/>
						</div>
						<div class = "col">
							<input type = "submit" name = "adminButton" value = "Admin Page" class="btn btn-primary"/>
						</div>
					</div>
				</form>
				
			</ul>
		</div>
	</nav>

	<section id="header" class="jumbotron text-center" style="background: url(https://images.pexels.com/photos/33129/popcorn-movie-party-entertainment.jpg?auto=compress&cs=tinysrgb&dpr=3&h=750&w=1260) center center/cover no-repeat;">
		<h1 class="display-3">Book Your Tickets Now!</h1>
		<p><strong>50% off form Dec 20 - Jan 1</strong></p>

	</section>	

	<section id="movies">
		<div class="container">
			<div class="row">

				<!-- Parasite -->

				<div class="col-lg-6 mb-3">
					<div class="card" style="background: rgb(255, 194, 195);">
				<img class="card-img-top" src="https://m.media-amazon.com/images/M/MV5BYWZjMjk3ZTItODQ2ZC00NTY5LWE0ZDYtZTI3MjcwN2Q5NTVkXkEyXkFqcGdeQXVyODk4OTc3MTY@._V1_.jpg">
				<div class="card-body">
					<h5 class="card-title"><strong>Screen 1</strong></h5>
					<p class="card-text">Bong Joon Ho brings his work home to Korea in this pitch-black modern fairytale. Meet the Park Family: the picture of aspirational wealth. And the Kim Family, rich in street smarts but not much else. Be it chance or fate, these two houses are brought together and the Kims sense a golden opportunity. Masterminded by college-aged Ki-woo, the Kim children expediently install themselves as tutor and art therapist, to the Parks. Soon, a symbiotic relationship forms between the two families. The Kims provide "indispensable" luxury services while the Parks obliviously bankroll their entire household. When a parasitic interloper threatens the Kims' newfound comfort, a savage, underhanded battle for dominance breaks out, threatening to destroy the fragile ecosystem between the Kims and the Parks.</p>
					<a href="http://localhost/dbmsProject.php?movie=Parasite" class="btn btn-outline-success" btn-sm>Book</a>
					<a href="" class="btn btn-outline-danger" btn-sm><i class="fas fa-heart"></i></a>
				</div>
			</div>
				</div>

				<!-- ----- -->

				<!-- Zombieland Double Tap -->

					<div class="col-lg-6">
					<div class="card" style="background: rgb(255, 194, 195);">
				<img class="card-img-top" src="https://media2.fdncms.com/clevescene/imager/u/slideshow/31526923/zombieland-double-tap">
				<div class="card-body">
					<h5 class="card-title"><strong>Screen 2</strong></h5>
					<p class="card-text">A decade after Zombieland became a hit film and a cult classic, the lead cast (Woody Harrelson, Jesse Eisenberg, Abigail Breslin, and Emma Stone) have reunited with director Ruben Fleischer (Venom) and the original writers Rhett Reese & Paul Wernick (Deadpool) for Zombieland: Double Tap. In the sequel, written by Rhett Reese & Paul Wernick and Dave Callaham, through comic mayhem that stretches from the White House and through the heartland, these four slayers must face off against the many new kinds of zombies that have evolved since the first movie, as well as some new human survivors. But most of all, they have to face the growing pains of their own snarky, makeshift family.
					</p>
					<a href="http://localhost/dbmsProject.php?movie=Zombie" class="btn btn-outline-success" btn-sm>Book</a>
					<a href="" class="btn btn-outline-danger" btn-sm><i class="fas fa-heart"></i></a>
				</div>
			</div>
				</div>

				<!-- ------- -->

				<!-- 1917 -->

					<div class="col-lg-6">
					<div class="card"  style="background: rgb(255, 194, 195);">
				<img class="card-img-top" src="https://upload.wikimedia.org/wikipedia/en/7/7a/1917poster.jpg">
				<div class="card-body">
					<h5 class="card-title"><strong>Screen 3</strong></h5>
					<p class="card-text">At the height of the First World War, two young British soldiers, Schofield (Captain Fantastic's George MacKay) and Blake (Game of Thrones' Dean-Charles Chapman) are given a seemingly impossible mission. In a race against time, they must cross enemy territory and deliver a message that will stop a deadly attack on hundreds of soldiers--Blake's own brother among them.</p>
					<a href="http://localhost/dbmsProject.php?movie=1917" class="btn btn-outline-success" btn-sm>Book</a>
					<a href="" class="btn btn-outline-danger" btn-sm><i class="fas fa-heart"></i></a>
				</div>
			</div>

			<!-- -------- -->


			<!-- Joker -->

				</div>

					<div class="col-lg-6">
					<div class="card" style="background: rgb(255, 194, 195);">
				<img class="card-img-top" src="https://www.joblo.com/assets/images/joblo/posters/2019/08/joker-poster-main3.jpg">
				<div class="card-body">
					<h5 class="card-title"><strong>Screen 4</strong></h5>
					<p class="card-text">"Joker" centers around the iconic arch nemesis and is an original, standalone fictional story not seen before on the big screen. Phillips' exploration of Arthur Fleck, who is indelibly portrayed by Joaquin Phoenix, is of a man struggling to find his way in Gotham's fracturedsociety. A clown-for-hire by day, he aspires to be a stand-up comic at night...but finds the joke always seems to be on him. Caught in a cyclical existence between apathy and cruelty, Arthur makes one bad decision that brings about a chain reaction of escalating events in this gritty character study.</p>
					<a href="http://localhost/dbmsProject.php?movie=Joker" class="btn btn-outline-success" btn-sm>Book</a>
					<a href="" class="btn btn-outline-danger" btn-sm><i class="fas fa-heart"></i></a>
				</div>
			</div>
				</div>
			</div>
		</div>

		<!-- ------- -->
		
	</section>




	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>