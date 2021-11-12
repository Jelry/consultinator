<!DOCTYPE HTML>
<!--
	Massively by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Create Account</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">

		<!-- Wrapper -->
		
			<div id="wrapper" class="fade-in">
				
				<!-- Intro -->
					<!-- <div id="intro">
						
						<h1>
						Consultinator</h1>
					
					</div> -->

				<!-- Header -->
					<!-- <header id="header">
						<a href="index.html" class="logo">Massively</a>
					</header> -->

				<!-- Nav -->
				

				<!-- Main -->
					<div id="main">

						<!-- Featured Post -->
							<article class="post featured">
								
								<header class="major" style="display:flex;justify-content:center;">
									
									
                                    <form action="{{route ('auth.save')}}" method="post" id="myform">
										@if($errors->any())
										<div style="background-color: rgb(212, 69, 69);color:rgb(255, 255, 255);width:14em; padding:1em;border-radius:1em;">
											{{ implode('', $errors->all(':message')) }}
										</div>
    									
										@endif
										@if(Session::get('success'))

                                        <div style="background-color: rgb(74, 212, 69);color:rgb(255, 255, 255);width:14em; padding:1em;border-radius:1em;">
                                            {{Session::get('success')}}
                                        </div>
								
                                        @endif
            							
                                       		@if(Session::get('fail'))
										
                                        <div style="background-color: rgb(74, 212, 69);color:#a83242;width:14em; padding:1em;border-radius:1em;">
                                            {{Session::get('fail')}}
                                        </div>
								
                                        @endif
                                       
                                        @csrf
                                     
                                           <label for="">Create your Account</label>
                                            <input type="text" name="name" required value="{{old('name')}}" placeholder="Complete Name">
                                            <span>@error('name'){{$message}}@enderror</span>
            
                                            
                                            <input type="email" name="email" required value="{{old('email')}}" placeholder="Email/Gmail">
                                            <span>@error('email'){{$message}}@enderror</span>
                                        <br>
                                            <label style="padding-bottom: 0;margin-bottom:0;">User Type</label>
                                            <select name="usertype" id="select" required >
												<option value=""></option>
                                                <option value="student">Student</option>
                                                <option value="instructor">Instructor</option>
                                            </select>
                                        
                                      
                                        <input type="text" name="username" required value="{{old('username')}}" placeholder="Username"> 
                                        <span>@error('username'){{$message}}@enderror</span>
            
                                        
                                        <input type="password" name="password" required placeholder="Password(must exceed 8 characters" >
                                        <span>@error('password'){{$message}}@enderror</span>
                                        
                                        <button type="submit">Create Account</button>
                                        <a href="log" style="margin-top:1em;">I already have an account</a>
										<a href="/">Home</a>
                                    </form>
									
								
								</header>
							
								
							</article>


					</div>

				

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>