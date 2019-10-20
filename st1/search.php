
<html>
<body>
<?php
$con = mysqli_connect("localhost","root","");
if (!$con)
{

die('Could not connect: ' . mysqli_error());
}
mysqli_select_db( $con,"userregistration");
$s =("select *from studentreigster where name='$_POST[name]'");
$result=mysqli_query($con,$s);
while($rowval = mysqli_fetch_array($result))
{
$uname = $rowval['uname'];
$name=$rowval['name'];
$address=$rowval['address'];
$gender= $rowval['gender'];
$std= $rowval['std'];
$email= $rowval['email'];
$phone= $rowval['phone'];
}

mysqli_close($con);
?>

<pre><form>
<?php

 ?>

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

            <td>STD:</td>

            <td>

                <input id="Text5" type="text" value='<?php echo  $std; ?>' /></td>

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
</form></pre>
</body>
</html>