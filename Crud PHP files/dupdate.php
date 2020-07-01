<?php
include("connection.php");
$_GET['dname'];
$_GET['did'];
$_GET['dbloodgroup'];
$_GET['dmedreport'];
$_GET['dcontact'];
$_GET['daddress'];
?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
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
</head>
<body>
	&nbsp
<form action="" method="GET">
DONOR NAME:<input type="text" name="dname" value="<?php echo $_GET['dname']; ?>"/><br></br>
DONOR ID:<input type="integer" name="did" value="<?php echo $_GET['did']; ?>"/><br></br>
DONOR BLOOD GROUP:<input type="text" name="dbloodgroup" value="<?php echo $_GET['dbloodgroup']; ?>"/><br></br>
DONOR MEDICAL REPORT:<input type="text" name="dmedreport" value="<?php echo $_GET['dmedreport']; ?>"/><br></br>
DONOR ADDRESS:<input type="text" name="daddress" value="<?php echo $_GET['daddress']; ?>"/><br></br>
DONOR CONTACT:<input type="integer" name="dcontact" value="<?php echo $_GET['dcontact']; ?>"/><br></br>
<input type="submit" name="submit" value="UPDATE"/>
</form>
<?php
if($_GET['submit'])
{
	$dname=$_GET['dname'];
    $did=$_GET['did'];
    $dbloodgroup=$_GET['dbloodgroup'];
    $dmedreport=$_GET['dmedreport'];
	$daddress=$_GET['daddress'];
	$dcontact=$_GET['dcontact'];
	$query="update donor set dname='$dname',dbloodgroup='$dbloodgroup',dmedreport='$dmedreport',daddress='$daddress',dcontact='$dcontact' where did='$did'";
	$data=mysqli_query($conn,$query);
	if($data)
	{
		echo "RECORD UPDATED SUCCESSFULLY";
	}
	else
	{
		echo "THERE WAS PROBLEM UPDATING THE DATA";
	}
}
?>
</body>
</html>