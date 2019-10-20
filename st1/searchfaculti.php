
<html>

<body>
<?php

$con = mysqli_connect("localhost","root","");

if (!$con)

{

die('Could not connect: ' . mysqli_error());

}

mysqli_select_db( $con,"userregistration");

$s =("select * from  facultireigster where name='$_POST[name]'");
$result=mysqli_query($con,$s);
while($rowval = mysqli_fetch_array($result))

 {

$uname = $rowval['name1'];
$name=$rowval['name'];
$address=$rowval['area'];

$gender= $rowval['gen'];
$stb1= $rowval['stb1'];
$stb2= $rowval['stb2'];
$stb3= $rowval['stb3'];
$email= $rowval['email'];
$phone= $rowval['phone'];
}

mysqli_close($con);
?>

<form>

  <table  style="color:purple;border-style:groove; height:150px;width:350px" background="3.jpg">

        <tr>



            <td>&nbsp;</td>

        </tr>

        <tr>

            <td>User Name:</td>

            <td>

                <input id="Text1" type="text" value='<?php echo  $uname; ?>'/></td>

        </tr>

        <tr>

            <td>name</td>

            <td>

                <input id="Text2" type="text" value='<?php echo  $name; ?>'/></td>

        </tr>

        <tr>

             <td>address:</td>

            <td>

                <input id="Text3" type="text" value='<?php echo  $address; ?>' /></td>

        </tr>

        <tr>

             <td>gender:</td>

            <td>

                <input id="Text4" type="text" value='<?php echo  $gender; ?>' /></td>

        </tr>

        <tr>

            <td>Subject1:</td>

            <td>

                <input id="Text5" type="text" value='<?php echo  $stb1; ?>' /></td>

        </tr>
         <tr>

		            <td>Subject2:</td>

		            <td>

		                <input id="Text6" type="text" value='<?php echo  $stb2; ?>' /></td>

        </tr>
         <tr>

		            <td>Subject3:</td>

		            <td>

		                <input id="Text7" type="text" value='<?php echo  $stb3; ?>' /></td>

        </tr>

        <tr>

           <td>Email:</td>

            <td>

                <input id="Text6" type="text" value='<?php echo  $email; ?>' ></td>

        </tr>

        <tr>

             <td>Contact Number:</td>

            <td>

                <input id="Text7" type="text" value='<?php echo  $phone; ?>'/></td>

        </tr>

    </table>

</form>

</body>

</html>