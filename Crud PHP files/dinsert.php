<?php
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
&nbsp
<form action="" method="GET">
DONOR NAME:<input type="text" name="donorname" value=""/><br></br>
DONOR ID:<input type="integer" name="donorid" value=""/><br></br>
DONOR BLOOD GROUP:<input type="text" name="donorbloodgroup" value=""/><br></br>
DONOR MEDICAL REPORT:<input type="text" name="donormedrep" value=""/><br></br>
DONOR ADDRESS:<input type="text" name="donoraddress" value=""/><br></br>
DONOR CONTACT NUMBER:<input type="integer" name="donorcontact" value=""/><br></br>
<input type="submit" name="submit" value="submit"/>
</form>
</div>
<?php
if($_GET['submit'])
{
	$dname=$_GET['donorname'];
    $did=$_GET['donorid'];
    $dblood=$_GET['donorbloodgroup'];
    $ddisease=$_GET['donormedrep'];
	$daddress=$_GET['donoraddress'];
	$dnumbr=$_GET['donorcontact'];
	
	if($dname!="" && $did!="" && $dblood!="" && $ddisease!="" && $daddress!="" && $dnumbr!="")
	{
		$query="INSERT INTO DONOR VALUES('$dname','$did','$dblood','$ddisease','$daddress','$dnumbr')";
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
</body>
</html>