@extends('layout')

@section('title') Home @endsection

@section('content')
    <!--Top slider-->
	<div class="container">
		<div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-ride="carousel">
			<ol class="carousel-indicators">
			  <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
			  <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
			  <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
			</ol>
			<div class="carousel-inner">
			  <div class="carousel-item active">
				<img class="d-block w-100" src="img/slider_img_1.jpg" alt="First slide">
			  </div>
			  <div class="carousel-item">
				<img class="d-block w-100" src="img/slider_img_2.jpg" alt="Second slide">
			  </div>
			  <div class="carousel-item">
				<img class="d-block w-100" src="img/slider_img_3.jpg" alt="Third slide">
			  </div>
			</div>
			<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
			  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
			  <span class="sr-only">Previous</span>
			</a>
			<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
			  <span class="carousel-control-next-icon" aria-hidden="true"></span>
			  <span class="sr-only">Next</span>
			</a>
		</div>
	</div>
	<!--/.Top slider -->
	<!--Process container , title h4  "How to start"-->
	<div class="container">
		<div class="process_title mt-5 ">
			<h4 class="text-center mb-3">How to start?</h4>
			<p class="text-center mb-5">GymSystem one of the best fitness clubs in Moldova.You will train not only muscle mass but also your spiritual state.</p>
		</div>
		<div class="row">
			<div class="col-md-6">
				<div class="d-flex justify-content-end align-items-center process_item">
					<div>
						<p class="text-right">GYM</p>
						<p class="text-right">Spacious gym equipped with professional equipment Technogym и Panatta</p>
					</div>
					<div class="ml-4 mr-4">
						<img src="img/gym_img.png" alt="gym image"> <!--image color #415260-->
					</div>
				</div>
				<div class="d-flex justify-content-end align-items-center process_item">
					<div>
						<p class="text-right">MASSAGE</p>
						<p class="text-right">What could be better than a relaxing massage after a hard workout</p>
					</div>
					<div class="ml-4 mr-4">
						<img src="img/massage_img.png" alt="massage image">
					</div>
				</div>
				<div class="d-flex justify-content-end process_item align-items-center">
					<div>
						<p class="text-right">SOLARIUM</p>
						<p class="text-right">A beautiful and even tan all year round! Preparing your body for the summer season is easy</p>
					</div>
					<div class="ml-4 mr-4">
						<img src="img/solarium_img.png" alt="solarium image">
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="d-flex flex-row-reverse justify-content-end align-items-center process_item">
					<div>
						<p class="text-left">GROUP LESSONS</p>
						<p class="text-left">What could be more exciting and exciting than playing sports in a company under the clear guidance of coaches</p>
					</div>
					<div class="ml-4 mr-4">
						<img src="img/group_lesson_img.png" alt="group lesson image">
					</div>
				</div>
				<div class="d-flex flex-row-reverse justify-content-end align-items-center process_item">
					<div>
						<p class="text-left">PERSONAL TRAINER</p>
						<p class="text-left">Our coaches are champions, people with vast experience. They will help you achieve your goals.</p>
					</div>
					<div class="ml-4 mr-4">
						<img src="img/personal_trainer_img.png" alt="personal trainer image">
					</div>
				</div>
				<div class="d-flex flex-row-reverse justify-content-end process_item align-items-center">
					<div>
						<p class="text-left">SAUNA</p>
						<p class="text-left">What&#8217;s better than relaxing after a hard workout? Your body will be grateful to you</p>
					</div>
					<div class="ml-4 mr-4">
						<img src="img/sauna_img.png" alt="sauna image">
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--/.Process container ,title h4  "How to start"-->
	<!--Popular products, title h4 "Top popular exercise complexes" -->
	<div class="container text-center popular_products">
		<div class="mt-5 popular_products_title">
			<h4 class="text-center mb-3">Top popular exercise complexes</h4>
			<p class="text-center mb-5">Some sets of exercises are gaining in popularity. Try it yourself, maybe this is exactly what you need.</p>
		</div>
		<div class="row d-md-flex justify-content-center">
			<div class="col-lg-4 col-md-9 mb-4">
				<div class="card bg-secondary">
					<img src="img/popular_products_image.jpg" alt="legs butts image"/>
					<div class="card-body">
						<h5 class="card-title">Legs muscles</h5>
						<p class="card-text">
							A strength class aimed at working out the lower back, buttocks, legs and abs. Sports equipment is used.
						</p>
						<!-- Modal button for 'Bike exercise' block-->
						<button type="button" class="btn btn-light" data-toggle="modal" data-target="#exampleModalCenter1">
							More info
						</button>
						<!-- /Modal button for 'Bike exercise' block-->
						<!-- Modal for 'Bike exercise' block-->
						<div class="modal fade" id="exampleModalCenter1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
							<div class="modal-dialog modal-dialog-centered" role="document">
								<div class="modal-content">
									<div class="modal-header">
										<h2 class="modal-title" id="exampleModalLongTitle">Legs muscles</h2>
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
										</button>
									</div>
									<div class="modal-body text-left">
										<h3>For beginners </h3>
										<p>Stepup exercise</p>
										<p><b>How to do it:</b> Find a box, ledge, or step that’s about 6–12 inches tall. 
											“Place one foot on the step and rise up, keeping your shoulders back and chest up,
											” Lowe says. Step down and repeat with the other leg.
										</p>
										<p><b>Why it works:</b> “This exercise strengthens all the muscles in your legs and challenges balance as well,
											” Lowe says. “An added perk: You indirectly work your core by keeping your torso upright when you step up.
											” For a greater challenge, hold dumbbells or make the movement explosive by driving your trail leg up as you pump your arms 
											,imagine you’re sprinting or doing high-knees.
										</p>
										<p>
											<b>Prescription:</b> 2 sets of 6 reps (each leg) with 60 seconds of rest between sets.
										</p>
									</div>
									<div class="modal-footer">
										<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
									</div>
								</div>
							</div>
						</div>
						<!--/Modal for 'Bike exercise' block-->
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-9 mb-4">
				<div class="card bg-secondary">
					<img src="img/popular_products_image2.jpg" alt="Bike exercise"/>
					<div class="card-body">
						<h5 class="card-title">Bike exercise</h5>
						<p class="card-text">
							Exercise on a stationary bike, train our heart, as well as blood vessels and lungs: this type of exercise is called cardio.
						</p>
						<!-- Modal button for 'Bike exercise' block-->
						<button type="button" class="btn btn-light" data-toggle="modal" data-target="#exampleModalCenter2">
							More info
						</button>
						<!-- /Modal button for 'Bike exercise' block-->
						<!-- Modal for 'Bike exercise' block-->
						<div class="modal fade" id="exampleModalCenter2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
							<div class="modal-dialog modal-dialog-centered" role="document">
								<div class="modal-content">
									<div class="modal-header">
										<h2 class="modal-title" id="exampleModalLongTitle">Bike exercise</h2>
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
										</button>
									</div>
									<div class="modal-body text-left">
										<h3>For beginners </h3>
										<p>If you’re just beginning to building your fitness, the key is to start slowly and to gradually add more time and intensity. </p>
										<p>Start with a 25- to 35-minute workout and progress from there, adding time in 1-minute increments as you build up your fitness. </p>
										<p>Here’s a sample beginner’s workout: </p>
										<ol>
											<li>Start off pedaling at a low intensity for 5-10 minutes.</li>
											<li>Switch to medium intensity for 5 minutes, followed by:
												<ul>
													<li>high intensity for 1-2 minutes</li>
													<li>medium intensity for 5 minutes</li>
													<li>high intensity for 1-2 minutes</li>
													<li>medium intensity for 5 minutes</li>
												</ul>
											</li>
											<li>Finish by pedaling at a low intensity for 5 minutes.</li>
										</ol>
									</div>
									<div class="modal-footer">
										<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
									</div>
								</div>
							</div>
						</div>
						<!--/Modal for 'Bike exercise' block-->
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-9 mb-4">
				<div class="card bg-secondary">
					<img class="" src="img/popular_products_image3.jpg" alt="Kickboxing and K1 image"/>
					<div class="card-body">
						<h5 class="card-title">Kickboxing and K1</h5>
						<p class="card-text">
							Street fighting skills and self-defense ability. Training includes intense physical and psychological training.
						</p>
						<!-- Modal button for 'Kickboxing and K1' block-->
						<button type="button" class="btn btn-light" data-toggle="modal" data-target="#exampleModalCenter3">
							More info
						</button>
						<!-- /Modal button for 'Kickboxing and K1' block-->
						<!-- Modal for 'Kickboxing and K1' block-->
						<div class="modal fade" id="exampleModalCenter3" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
							<div class="modal-dialog modal-dialog-centered" role="document">
								<div class="modal-content">
									<div class="modal-header">
										<h2 class="modal-title" id="exampleModalLongTitle">Kickboxing and K1</h2>
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
										</button>
									</div>
									<div class="modal-body text-left">
										<h3>For beginners </h3>
										<p>Kick butt kickboxing workout</p>
										<p>Want to give kickboxing a try, but not quite ready to hit the gym for a class? Give Miguel Ortiz’s kick butt kickboxing circuit a shot right at home — no equipment required. </p>
										<p>Repeat the circuit below 4 times, with a 1-minute rest between each circuit: </p>
										<ol>
											<li>criss-cross jumping jacks for 30 seconds</li>
											<li>knee-ups for 30 seconds</li>
											<li>split squat jumps for 30 seconds</li>
											<li>squats into front kicks or jump front kicks for 30 seconds</li>
											<li>burpees for 30 seconds</li>
											<li>mountain climbers for 30 seconds</li>
											<li>Spider-Man pushups for 30 seconds</li>
										</ol>
									</div>
									<div class="modal-footer">
										<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
									</div>
								</div>
							</div>
						</div>
						<!--/Modal for 'Kickboxing and K1' block-->
					</div>
				</div>
			</div>
		</div>
	</div>
	 <!--/.Popular products, title h4 "Top popular exercise complexes" -->
	 <!--Short about us , title h4 "WHY CHOOSE GYMSYSTEM"-->
	<div class="container mt-5 mb-5">
		<div class="row d-flex align-items-center">
			<div class="col-lg-6">
				<img class="w-100" src="img/about_us_image.jpg" alt="gym training system">
			</div>
			<div class="col-lg-6 mt-md-3">
				<h4>WHY CHOOSE GYMSYSTEM</h4>
				<p>GYMSYSTEM is more than a fitness club. We are a fitness family! Here are ambitions, here are sports, here are energy, health, will and spirit, here we are working for the RESULT!</p>
				<a class="btn btn-primary" href="{{ route('contact') }}">Contact us</a> 
			</div>
		</div>
	</div>
	 <!--/.Short about us , title h4 "WHY CHOOSE GYMSYSTEM"-->
	 <!--Muscle training programs  , title h3 "Muscle training programs"-->
	<div class="pt-5 pb-5">
		<div class="container">
		  	<div class="row">
			  	<div class="col-6">
				  	<h3 class="mb-3">Muscle training programs</h3>
			  	</div>
				<div class="col-6 text-right">
					<a class="btn btn-primary mb-3 mr-1" href="#carouselExampleIndicators2" role="button" data-slide="prev">
						<i class="bi bi-arrow-left"></i>
					</a>
					<a class="btn btn-primary mb-3 " href="#carouselExampleIndicators2" role="button" data-slide="next">
						<i class="bi bi-arrow-right"></i>
					</a>
				</div>
				<div class="col-12 text-dark">
				  	<div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel">
					  	<div class="carousel-inner">
						   	<div class="carousel-item active">
							  	<div class="row">
								  	<div class="col-md-4 mb-3 d-sm-none d-md-block">
									  	<div class="card">
										  	<img class="img-fluid" src="img/chest_muscles.jpg" alt="chest muscles">
										  	<div class="card-body">
											  <h4 class="card-title">Chest muscles</h4>
											  <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
											</div>
									  	</div>
								  	</div>
								  	<div class="col-md-4 mb-3 d-sm-none d-md-block">
									  	<div class="card">
										  	<img class="img-fluid" src="img/arm_muscles.jpg" alt="arm muscles"> 
										  	<div class="card-body">
											  	<h4 class="card-title">Arm muscles</h4>
											  	<p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
										  	</div>
									  	</div>
								  	</div>
								  	<div class="col-md-4 mb-3">
									  	<div class="card">
										  	<img class="img-fluid" src="img/leg_muscles.jpg" alt="leg muscles">
											<div class="card-body">
											  	<h4 class="card-title">Leg muscles</h4>
											  	<p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
										  	</div>
									  	</div>
								  	</div>
							  	</div>
						  	</div>
						  	<div class="carousel-item">
							  	<div class="row">
								  	<div class="col-md-4 mb-3 d-sm-none d-md-block">
									  	<div class="card">
										  	<img class="img-fluid" src="img/back_muscles.jpg" alt="back muscles">
										  	<div class="card-body">
											  	<h4 class="card-title">Back muscles</h4>
											  	<p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
											</div>
									  	</div>
								  	</div>
									<div class="col-md-4 mb-3 d-sm-none d-md-block">
									  	<div class="card">
										  	<img class="img-fluid" src="img/abdominal_muscles.jpg" alt="abdominal muscles">
										  	<div class="card-body">
											  	<h4 class="card-title">Abdominal muscles</h4>
											  	<p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
										 	</div>
									  	</div>
								  	</div>
								  	<div class="col-md-4 mb-3">
									  	<div class="card">
										  	<img class="img-fluid" src="img/slimming.jpg" alt="slimming">
										  	<div class="card-body">
												<h4 class="card-title">Slimming</h4>
											  	<p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
										  	</div>
									  	</div>
								  	</div>
							  	</div>
						  	</div>
						  	<div class="carousel-item">
							  	<div class="row">
								 	<div class="col-md-4 mb-3 d-sm-none d-md-block">
									  	<div class="card">
										  	<img class="img-fluid" src="img/yoga.jpg" alt="basic yoga">
										  	<div class="card-body">
												<h4 class="card-title">Basic yoga</h4>
												<p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
										  	</div>
									  	</div>
								  	</div>
								  	<div class="col-md-4 mb-3 d-sm-none d-md-block">
									  	<div class="card">
										  	<img class="img-fluid" src="img/kickboxing.jpg" alt="kickboxing">
										  	<div class="card-body">
											  	<h4 class="card-title">Kickboxing</h4>
											  	<p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
	  									  	</div>
									  	</div>
								  	</div>
								  	<div class="col-md-4 mb-3">
									  	<div class="card">
										  	<img class="img-fluid" src="img/fit_ball.jpg" alt="fit ball">
										  	<div class="card-body">
											  	<h4 class="card-title">Fit ball</h4>
											  	<p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
										  	</div>
									  	</div>
								  	</div>
							  	</div>
						  	</div>
					  	</div>
				  	</div>
			  	</div>
		  	</div>
	  	</div>
	</div>
	<!--/.Muscle training programs  , title h3 "Muscle training programs"-->
	<!--Bottom slider-->
	<div class="container d-flex justify-content-center">
		<div class="wrapper">
			<div class="slides">
				<div class="slides_item">
					<div class="row">
						<div class="col-md-4 mb-3">
							<div class="card">
								<img class="img-fluid" src="img/back_muscles.jpg" alt="back muscles">
								<div class="card-body">
									<h4 class="card-title">Back muscles</h4>
									<p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
								</div>
							</div>
						</div>
						<div class="col-md-4 mb-3">
							<div class="card">
								<img class="img-fluid" src="img/abdominal_muscles.jpg" alt="abdominal muscles">
								<div class="card-body">
									<h4 class="card-title">Abdominal muscles</h4>
									<p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
								</div>
							</div>
						</div>
						<div class="col-md-4 mb-3">
							<div class="card">
								<img class="img-fluid" src="img/slimming.jpg" alt="slimming">
								<div class="card-body">
									<h4 class="card-title">Slimming</h4>
									<p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="slides_item">
					<div class="row">
						<div class="col-md-4 mb-3">
							<div class="card">
								<img class="img-fluid" src="img/yoga.jpg" alt="basic yoga">
								<div class="card-body">
									<h4 class="card-title">Basic yoga</h4>
									<p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
								</div>
							</div>
						</div>
						<div class="col-md-4 mb-3">
							<div class="card">
								<img class="img-fluid" src="img/arm_muscles.jpg" alt="arm muscles"> 
								<div class="card-body">
									<h4 class="card-title">Arm muscles</h4>
									<p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
								</div>
							</div>
						</div>
						<div class="col-md-4 mb-3">
							<div class="card">
								<img class="img-fluid" src="img/leg_muscles.jpg" alt="leg muscles">
								<div class="card-body">
									<h4 class="card-title">Leg muscles</h4>
									<p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="slides_item">
					<div class="row">
						<div class="col-md-4 mb-3">
							<div class="card">
								<img class="img-fluid" src="img/chest_muscles.jpg" alt="chest muscles">
								<div class="card-body">
									<h4 class="card-title">Chest muscles</h4>
									<p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
								</div>
							</div>
						</div>
						<div class="col-md-4 mb-3">
							<div class="card">
								<img class="img-fluid" src="img/kickboxing.jpg" alt="kickboxing">
								<div class="card-body">
									<h4 class="card-title">Kickboxing</h4>
									<p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
								</div>
							</div>
						</div>
						<div class="col-md-4 mb-3">
							<div class="card">
								<img class="img-fluid" src="img/fit_ball.jpg" alt="fit ball">
								<div class="card-body">
									<h4 class="card-title">Fit ball</h4>
									<p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="buttons-block">
				<div class="btn btn-primary" id="left_button">
				<i class="bi bi-arrow-left"></i>
				</div>
				<div class="btn btn-primary" id="right_button">
					<i class="bi bi-arrow-right"></i>
				</div>
			</div>
			<div class="dots_block">
				<div class="dots_item dot-active"></div>
				<div class="dots_item"></div>
				<div class="dots_item"></div>
			</div>
		</div>
	</div>
	<!--/.Bottom slider-->
@endsection