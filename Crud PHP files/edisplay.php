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
&nbsp
</head>
</html>
<?php
include("connection.php");
$query="select * from employee";
$data=mysqli_query($conn ,$query);
$total=mysqli_num_rows($data);
echo $total;
$result=mysqli_fetch_assoc($data);
if($total != 0)
{
	?>
	<table>
	<tr>
	<th> EMPLOYEE NAME </th>
	<th> EMPLOYEE ID </th>
	<th> ADDRESS </th>
	<th> CONTACT NUMBER </th>
    <th> DESIGNATION AT WORK</th>
    <th> SALARY </th>
	<th colspan="3">  OPERATIONS </th>
	</tr>
	<?php
	while($result=mysqli_fetch_assoc($data))
	{
		echo"<tr>
	<th> ".$result['name']."</th>
	<th>".$result['id']."  </th>
	<th> ".$result['address']." </th>
    <th>".$result['contact']." </th>
    <th>".$result['designation']." </th>
    <th>".$result['salary']." </th>
	<th> <a href='eupdate.php?name=$result[name]&id=$result[id]&address=$result[address]&contact=$result[contact]&designation=$result[designation]&salary=$result[salary]'> EDIT <a/> </th>
	<th> <a href='edelete.php?id=$result[id]' > DELETE<a/> </th>
	</tr>";
	}
	
}
else
{
	echo"NO RECORD FOUND!";
}
?>
</table>