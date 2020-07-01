<?php
ob_start();
include("connection.php");
?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
<header class="text-gray-500 bg-gray-900 body-font">
  <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
    <nav class="flex lg:w-2/5 flex-wrap items-center text-base md:ml-auto">
      <a href="index.php" class="mr-5 hover:text-white">Home</a>
      <a href="services.php"class="mr-5 hover:text-white">Our Services</a>
      <a href="donate.php"class="mr-5 hover:text-white">Donate US</a>
      <a href="contact.php"class="hover:text-white">Contact US</a>
    </nav>
    
  
    <a class="flex order-first lg:order-none lg:w-1/5 title-font font-medium items-center text-white lg:items-center lg:justify-center mb-4 md:mb-0">
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-10 h-10 text-white p-2 bg-red-500 rounded-full" viewBox="0 0 24 24">
        <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"></path>
      </svg>
      <span class="ml-3 text-xl xl:block lg:hidden">BLOOD DONORS PAKISTAN</span>
      &nbsp
    </a>
    <div class="lg:w-2/5 inline-flex lg:justify-end ml-5 lg:ml-0">
      <button class="inline-flex items-center bg-gray-800 border-0 py-1 px-3 focus:outline-none hover:bg-gray-700 rounded text-base mt-4 md:mt-0">CALL TO DONATE BLOOD:03356702776

        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-1" viewBox="0 0 24 24">
          <path d="M5 12h14M12 5l7 7-7 7"></path>
        </svg>
      </button>
    </div>
  </div>
</header>
<form method="get" class="text-gray-500 bg-gray-900 body-font">
  <div class="container px-5 py-24 mx-auto flex flex-wrap items-center">
    <div class="lg:w-3/5 md:w-1/2 md:pr-16 lg:pr-0 pr-0">
      <h1 class="title-font font-medium text-3xl text-white">Signup now and contribute for a good cause.</h1>
      <p class="leading-relaxed mt-4">DONATE BLOOD SAVE LIFE.</p>
    </div>
    <div class="lg:w-2/6 md:w-1/2 bg-gray-800 rounded-lg p-8 flex flex-col md:ml-auto w-full mt-10 md:mt-0">
      <h2 class="text-white text-lg font-medium title-font mb-5">Sign Up</h2>
      <input class="bg-gray-900 rounded border text-white border-gray-900 focus:outline-none focus:border-red-500 text-base px-4 py-2 mb-4" placeholder="username" type="text" name="username">
      <input class="bg-gray-900 rounded border text-white border-gray-900 focus:outline-none focus:border-red-500 text-base px-4 py-2 mb-4" placeholder="password" type="password" name="password">
      <input type="submit" name="submit" value="signup" class="text-white bg-red-500 border-0 py-2 px-8 focus:outline-none hover:bg-red-600 rounded text-lg"></input>
    
    </div>
  </div>
</form>
</body>
</html>
<?php
if($_GET['submit'])
{
	$username=$_GET['username'];
    $password=$_GET['password'];
	if($username!="" && $password!="")
	{
		$query="INSERT INTO login VALUES('$username','$password')";
        $data=mysqli_query($conn,$query);
	}
	if($data)
	{
		echo "DATA ENTERED INTO DATABASE SUCCESSFULLY!";
	}
	else
	{
		echo "ALL FIELDS ARE REQUIRED!";
	}
}
?>