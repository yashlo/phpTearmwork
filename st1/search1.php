<?php

$con = mysql_connect("localhost","root","");

if (!$con)

{

die('Could not connect: ' . mysql_error());

}

mysql_select_db("userregistration", $con);

$con = mysql_connect("localhost","root","");

if (!$con)

{

die('Could not connect: ' . mysql_error());

}

mysql_select_db("userregistration", $con);

$result = mysql_query("select * from studentreigster where name='$_POST[name]'");

while($rowval = mysql_fetch_array($result))

 {

$uname = $rowval['uname'];

$name=$rowval['name'];

$address=$rowval['address'];

$gender= $rowval['gender'];

$std= $rowval['std'];

$email= $rowval['email'];

$phone= $rowval['phone'];
}
mysql_close($con);
?>

<html>

<body>

<from >

 

  <table  style="color:purple;border-style:groove; height:150px;width:350px" background="3.jpg">

        <tr>

           

            <td style="font-family:Copperplate Gothic Bold">&nbsp;</td>

        </tr>

        <tr>

            <td style="color:red;background-color:aqua;" class="auto-style3">User Name:</td>

            <td class="auto-style4">

                <input id="Text1" type="text" value='<?php echo  $uname; ?>'/></td>

        </tr>

        <tr>

            <td style="color:red;background-color:aqua;" class="auto-style3">name</td>

            <td class="auto-style4">

                <input id="Text2" type="text" value='<?php echo  $name; ?>'/></td>

        </tr>

        <tr>

             <td style="color:red;background-color:aqua;" class="auto-style3">address:</td>

            <td class="auto-style4">

                <input id="Text3" type="text" value='<?php echo  $address; ?>' /></td>

        </tr>

        <tr>

             <td style="color:red;background-color:aqua;" class="auto-style3">gender:</td>

            <td class="auto-style4">

                <input id="Text4" type="text" value='<?php echo  $gender; ?>' /></td>

        </tr>

        <tr>

            <td style="color:red;background-color:aqua;" class="auto-style3">STD:</td>

            <td class="auto-style4">

                <input id="Text5" type="text" value='<?php echo  $std; ?>' /></td>

        </tr>

        <tr>

           <td style="color:red;background-color:aqua;" class="auto-style3:">Email:</td>

            <td class="auto-style4">

                <input id="Text6" type="text" value='<?php echo  $email; ?>' ></td>

        </tr>

        <tr>

             <td style="color:red;background-color:aqua;" class="auto-style3">Contact Number:</td>

            <td class="auto-style4">

                <input id="Text7" type="text" value='<?php echo  $phone; ?>'/></td>

        </tr>

    </table>

</form>

</body>

</html>