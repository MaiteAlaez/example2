<?php include "menu.php"; ?>

<h2>Forms</h2>

<form class="" action="forms.php" method="post">
<label for="country">Choose the country</label>
<select name="country" id="country">
    <option value="">Choose</option>
    <option value="Finland">Finland</option>
    <option value="Russia">Russia</option>
    <option value="Nepal">Nepal</option>
    <option value="Vietnam">Vietnam</option>
    <option value="Latvia">Latvia</option>
    <option value="Spain">Spain</option>
</select>

<label for="gender">Choose your gender</label><br />
<input type="radio" name="gender" value="female">Female<br />
<input type="radio" name="gender" value="male">Male<br />
<input type="submit" name="btnSend" value="Send"><br />

<label for="status">Choose your status</label><br />
<input type="radio" name="status" value="student">Student<br />
<input type="radio" name="status" value="teacher">Teacher<br />
<input type="submit" name="btnSend" value="Send"><br />
</form>

<?php
$btn=$_POST['btnSend'];
if(isset($btn))
{
    $country=$_POST['country'] ;
    $gender=$_POST['gender'] ;
    echo 'Hello '.$gender.' from '.$country.'.' ;
}
?>

<?php include "footer.php"; ?>
