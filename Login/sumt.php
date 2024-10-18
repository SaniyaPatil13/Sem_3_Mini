<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>VL HOMEPAGE</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<style>
body
{
	font-family: "Lato", sans-serif;
}
.sidenav
{
	background: #002240;
	position: fixed;
	height: 100%;
	width: 20%;
	top: 0;
	left: 0;
	z-index: 1;
	overflow-x: hidden;
	padding-top: 20px;
}
.sidenav a
{
	color: #fff;
	padding: 10px 15px 10px 16px;
	text-decoration: none;
	font-size: 25px;
	display: block;
}
.sidenav a:hover
{
	background: blue;
}
h2
{
	padding: 10px 15px 10px 16px;
	color: #fff;
	border-bottom-style: solid;
}
.main
{
	background: #002240;
	margin-left: 20%;
	padding: 4px 10px;
	color: #fff;
	display: inline-block;
}

/*Making responsive*/
@media screen and (max-width: 600px)
{
	.sidenav
	{
		padding-top: 15px;
		width: 155px;

	}
	.sidenav a
	{
		padding-left: 20px;
		font-size: 18px;
	}
	.main
	{
		margin-left: 32%;
		font-size: 15px;
	}
	p
	{
		display: inline-block;
	}
}
.flag h1{
  color: rgb(154, 4, 4);
  font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
  font-size: 40px;
  text-align: center;
}
.buton{
  display: flex;
  flex-direction: column;
  justify-content: center;
  padding: 50px;
  margin-left: 350px;
  margin-right: 350px;
  display: inline;
}
.button{
  display: flex;
  flex-direction: column;
  justify-content: center;
  padding: 50px;
  margin-left: 350px;
  margin-right: 350px;
  display: inline;
}
footer{
    height:14rem;
    margin-top: 19%;
}
footer p{
    line-height:1.3;
    font-size:20px;
    display: flex;
    justify-content: center;
    flex-direction: column;
    background-color:rgb(154, 4, 4) ;
    color: white;
    margin-top: 30px;
    text-align: center;
    padding-top: 40px;
    padding-bottom: 40px;
}
.container{
    line-height:1.3;
    font-size:20px;
    display: flex;
    justify-content: left;
    flex-direction: row;
    background-color:rgb(154, 4, 4) ;
    color: rgb(255, 255, 255);
    padding-left: 0px;
    padding-right: 0px;
    width: fit-content;
    position: absolute;
    left: 50%;
    top: 50%;
    height: 200px;
    
}
.box
{
    display: flex;
     flex-direction: row;
     justify-content: center;
     align-items: center;
     width: 50wh;
  height: 70vh;
  border: 5px solid  rgb(154, 4, 4);
  border-radius: 9px ;
  margin-top: 52px;
  margin-left: auto;
  margin-right: auto;
}
</style>
<body>
  <Body background="https://img.freepik.com/premium-photo/abstract-white-background-product-display-with-banner-background_655634-81.jpg" style="background-size: cover;">
  <div class="pat">
    <figure class="figure">
      <img src="Somaiya Full Logo.png" class="figure-img img-fluid rounded" alt="KJSIT" style="height: 100px; width: 500px;">
      <figcaption class="figure-caption"></figcaption>
    </figure>
    <figure class="figure">
      <img src="download.png" class="figure-img img-fluid rounded" alt="Somaiya Trust" style="height: 90px; width: 110px;margin-left: 900px;">
      <figcaption class="figure-caption"></figcaption>
    </figure>
    
    <div class="sidebar">
        <div class="logo-details">
    
          <div class="logo_name">Experiment No 1</div>
          <i class='bx bx-menu' id="btn"></i>
        </div>
    
        <ul class="nav-list">
    
        <li>
        <button type="button" class="btn btn-primary"
        style="background-color: rgb(156, 1, 1);color: rgb(247, 246, 246) ; --bs-btn-font-size:18px;border: rgb(156, 1, 1);"><a
             style="color: #ffffff" ;>Sum rule</a>

    </button>
</li>
          
<li>
    <button type="button" class="btn btn-primary"
    style="background-color: rgb(156, 1, 1);color: rgb(247, 246, 246) ; --bs-btn-font-size:18px;border: rgb(156, 1, 1);"><a
        href="home.php" style="color: #ffffff" ;>Theory</a>

</button>
</li>
<li>
    <button type="button" class="btn btn-primary"
    style="background-color: rgb(156, 1, 1);color: rgb(247, 246, 246) ; --bs-btn-font-size:18px;border: rgb(156, 1, 1);"><a
        href="sumt.php" style="color: #ffffff" ;>Simulator</a>

</button>
</li>
    
<li>
    <button type="button" class="btn btn-primary"
    style="background-color: rgb(156, 1, 1);color: rgb(247, 246, 246) ; --bs-btn-font-size:18px;border: rgb(156, 1, 1);"><a
        href="home.php" style="color: #ffffff" ;>Numericals</a>

</button>
</li>
    
<li>
    <button type="button" class="btn btn-primary"
    style="background-color: rgb(156, 1, 1);color: rgb(247, 246, 246) ; --bs-btn-font-size:18px;border: rgb(156, 1, 1);"><a
        href="sumquiz.php" style="color: #ffffff" ;>Quiz</a>

</button>
</li>
    
<li>
    <button type="button" class="btn btn-primary"
    style="background-color: rgb(156, 1, 1);color: rgb(247, 246, 246) ; --bs-btn-font-size:18px;border: rgb(156, 1, 1);"><a
        href="home.php" style="color: #ffffff" ;>References</a>

</button>
</li>
    
<li>
    <button type="button" class="btn btn-primary"
    style="background-color: rgb(156, 1, 1);color: rgb(247, 246, 246) ; --bs-btn-font-size:18px;border: rgb(156, 1, 1);"><a
        href="home.php" style="color: #ffffff" ;>Feedback</a>

</button>
</li>
    
<li>
    <button type="button" class="btn btn-primary"
    style="background-color: rgb(156, 1, 1);color: rgb(247, 246, 246) ; --bs-btn-font-size:18px;border: rgb(156, 1, 1);"><a
        href="home.php" style="color: #ffffff" ;>Home</a>

</button>
</li>
    
<li>
    <button type="button" class="btn btn-primary"
    style="background-color: rgb(156, 1, 1);color: rgb(247, 246, 246) ; --bs-btn-font-size:18px;border: rgb(156, 1, 1);"><a
        href="login.php" style="color: #ffffff" ;>logout</a>

</button>
</li>
        </ul>
      </div>
      <div class="main">
        <h2>India</h2>
        <p>
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
          quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
          consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
          cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
          proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
          quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
          consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
          cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
          proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
          quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
          consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
          cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
          proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
          <br><br>
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
          quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
          consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
          cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
          proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        </p>
        </div>
  <footer>
    <p>
        Department Of Computer Engineering<br>
     2023-24<br>
   Guided by:  Prof. Pradnya Patil, Prof. Aarti Sahitya<br>
 
   Developed by: Saniya Patil, Kinjal Patel, Tanisha Patel, Urja Patel, Meet Nayak, Nikhil Panchal, Prem Panchal, Ravi Panchal</p>
  
</footer>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
    crossorigin="anonymous"></script>
</body>
</html>