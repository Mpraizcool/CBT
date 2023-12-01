<?php
session_start();
//error_reporting(0);
include('config.php');
include('checklogin.php');
check_login();

if(isset($_POST['submit']))
{
$q1=$_POST['q1'];
$q2=$_POST['q2'];
$q3=$_POST['q3'];
$q4=$_POST['q4'];
$q5=$_POST['q5'];
$q6=$_POST['q6'];
$q7=$_POST['q7'];
$q8=$_POST['q8'];
$q9=$_POST['q9'];
$q10=$_POST['q10'];
$q11=$_POST['q11'];
$q12=$_POST['q12'];
$q13=$_POST['q13'];
$q14=$_POST['q14'];
$q15=$_POST['q15'];
$q16=$_POST['q16'];
$q17=$_POST['q17'];
$q18=$_POST['q18'];
$q19=$_POST['q19'];
$q20=$_POST['q20'];
/*$q21=$_POST['q21'];
$q22=$_POST['q22'];
$q23=$_POST['q23'];
$q24=$_POST['q24'];
$q25=$_POST['q25'];
$q26=$_POST['q26'];
$q27=$_POST['q27'];
$q28=$_POST['q28'];
$q29=$_POST['q29'];
$q30=$_POST['q30'];
$q31=$_POST['q31'];
$q32=$_POST['q32'];
$q33=$_POST['q33'];
$q34=$_POST['q34'];
$q35=$_POST['q35'];
$q36=$_POST['q36'];
$q37=$_POST['q37'];
$q38=$_POST['q38'];
$q39=$_POST['q39'];
$q40=$_POST['q40'];*/
$a = $_SESSION['login'];
$ret1=mysqli_query($con,"select * from maths where id=1");
while ($row=mysqli_fetch_array($ret1)) {
    if ($row["correctans"]==$q1) {
    $good1=1;
    }else {
    $good1=0;
    }
}
$ret2=mysqli_query($con,"select * from maths where id=2");
while ($row=mysqli_fetch_array($ret2)) {
    if ($row["correctans"]==$q2) {
    $good2=1;
    }else {
    $good2=0;
    }
}
$ret3=mysqli_query($con,"select * from maths where id=3");
while ($row=mysqli_fetch_array($ret3)) {
    if ($row["correctans"]==$q3) {
    $good3=1;
    }else {
    $good3=0;
    }
}
$ret4=mysqli_query($con,"select * from maths where id=4");
while ($row=mysqli_fetch_array($ret4)) {
    if ($row["correctans"]==$q4) {
    $good4=1;
    }else {
    $good4=0;
    }
}
$ret5=mysqli_query($con,"select * from maths where id=5");
while ($row=mysqli_fetch_array($ret5)) {
    if ($row["correctans"]==$q5) {
    $good5=1;
    }else {
    $good5=0;
    }
}
$ret6=mysqli_query($con,"select * from maths where id=6");
while ($row=mysqli_fetch_array($ret6)) {
    if ($row["correctans"]==$q6) {
    $good6=1;
    }else {
    $good6=0;
    }
}
$ret7=mysqli_query($con,"select * from maths where id=7");
while ($row=mysqli_fetch_array($ret7)) {
    if ($row["correctans"]==$q7) {
    $good7=1;
    }else {
    $good7=0;
    }
}
$ret8=mysqli_query($con,"select * from maths where id=8");
while ($row=mysqli_fetch_array($ret8)) {
    if ($row["correctans"]==$q8) {
    $good8=1;
    }else {
    $good8=0;
    }
}
$ret9=mysqli_query($con,"select * from maths where id=9");
while ($row=mysqli_fetch_array($ret9)) {
    if ($row["correctans"]==$q9) {
    $good9=1;
    }else {
    $good9=0;
    }
}
$ret10=mysqli_query($con,"select * from maths where id=10");
while ($row=mysqli_fetch_array($ret10)) {
    if ($row["correctans"]==$q10) {
    $good10=1;
    }else {
    $good10=0;
    }
}
$ret11=mysqli_query($con,"select * from maths where id=11");
while ($row=mysqli_fetch_array($ret11)) {
    if ($row["correctans"]==$q11) {
    $good11=1;
    }else {
    $good11=0;
    }
}
$ret12=mysqli_query($con,"select * from maths where id=12");
while ($row=mysqli_fetch_array($ret12)) {
    if ($row["correctans"]==$q12) {
    $good12=1;
    }else {
    $good12=0;
    }
}
$ret13=mysqli_query($con,"select * from maths where id=13");
while ($row=mysqli_fetch_array($ret13)) {
    if ($row["correctans"]==$q13) {
    $good13=1;
    }else {
    $good13=0;
    }
}
$ret14=mysqli_query($con,"select * from maths where id=14");
while ($row=mysqli_fetch_array($ret14)) {
    if ($row["correctans"]==$q14) {
    $good14=1;
    }else {
    $good14=0;
    }
}
$ret15=mysqli_query($con,"select * from maths where id=15");
while ($row=mysqli_fetch_array($ret15)) {
    if ($row["correctans"]==$q15) {
    $good15=1;
    }else {
    $good15=0;
    }
}
$ret16=mysqli_query($con,"select * from maths where id=16");
while ($row=mysqli_fetch_array($ret16)) {
    if ($row["correctans"]==$q16) {
    $good16=1;
    }else {
    $good16=0;
    }
}
$ret17=mysqli_query($con,"select * from maths where id=17");
while ($row=mysqli_fetch_array($ret17)) {
    if ($row["correctans"]==$q17) {
    $good17=1;
    }else {
    $good17=0;
    }
}
$ret18=mysqli_query($con,"select * from maths where id=18");
while ($row=mysqli_fetch_array($ret18)) {
    if ($row["correctans"]==$q18) {
    $good18=1;
    }else {
    $good18=0;
    }
}
$ret19=mysqli_query($con,"select * from maths where id=19");
while ($row=mysqli_fetch_array($ret19)) {
    if ($row["correctans"]==$q19) {
    $good19=1;
    }else {
    $good19=0;
    }
}
$ret20=mysqli_query($con,"select * from maths where id=20");
while ($row=mysqli_fetch_array($ret20)) {
    if ($row["correctans"]==$q20) {
    $good20=1;
    }else {
    $good20=0;
    }
}
$money= $good1 + $good2 + $good3 + $good4 + $good5 + $good6 + $good7 + $good8 + $good9 + $good10 + $good11 + $good12 + $good13 + $good14 + $good15 + $good16 + $good17 + $good18 + $good19 + $good20;
echo "<script>alert('You scored $money');</script>";
/*$query=mysqli_query($con,"insert into result(email, subject, score) values('$a','maths','$asdb')");
if($query)
{
	
	header('location:dashboard.php');
}*/
}

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Mathematics Test</title>
        <link rel="stylesheet"href="style.css"/>
        <style>
a:link, a:visited {
  background-color: black;
  color: white;
  padding: 14px 25px;n
  text-align: center;
  text-decoration: none;
  display: inline-block;
}

a:hover, a:active {
  background-color: grey;
}
</style>
        
</head>
<body>

    <div class="form">
        <p><a href="dashboard.php">Dashboard</a></p>
        <h2>Mathematics Test</h2>
    <form method="post">
            <label for="Question 1">
                <?php $ret=mysqli_query($con,"SELECT * FROM maths where id=1");
while($row=mysqli_fetch_array($ret))
{echo "" . $row["id"]. ".    " . $row["Question"]."<br>";?>
            </label>
        <div class="clip-radio radio-primary">
									<input type="radio" id="rg-female" name="q1" value="A">
									<label for="rg-female">
                                    A.    <?php echo "". $row["ans1"]."<br>"; ?>
									</label>
									<input type="radio" id="rg-male" name="q1" value="B">
									<label for="">
									B.    <?php echo "". $row["ans2"]."<br>"; ?>
									</label>
                                    <input type="radio" id="rg-female" name="q1" value="C" >
									<label for="rg-female">
                                    C.    <?php echo "". $row["ans3"]."<br>"; ?>
									</label>
                                    <input type="radio" id="rg-female" name="q1" value="D" >
									<label for="rg-female">
                                    D.    <?php echo "". $row["ans4"]."<br>"; ?>
									</label>
                                    <input type="radio" id="rg-female" name="q1" value="E" >
									<label for="rg-female">
                                    E.    <?php echo "". $row["ans5"]."<br>"; }?>
									</label>
		</div><br>
        <label for="Question 2">
                <?php $ret=mysqli_query($con,"SELECT * FROM maths where id=2");
while($row=mysqli_fetch_array($ret))
{echo "" . $row["id"]. ".    " . $row["Question"]."<br>";?>
            </label>
        
        <div class="clip-radio radio-primary">
									<input type="radio" id="rg-female" name="q2" value="A" >
									<label for="rg-female">
                                    A.    <?php echo "". $row["ans1"]."<br>"; ?>
									</label>
									<input type="radio" id="rg-male" name="q2" value="B">
									<label for="">
									B.    <?php echo "". $row["ans2"]."<br>"; ?>
									</label>
                                    <input type="radio" id="rg-female" name="q2" value="C" >
									<label for="rg-female">
                                    C.    <?php echo "". $row["ans3"]."<br>"; ?>
									</label>
                                    <input type="radio" id="rg-female" name="q2" value="D" >
									<label for="rg-female">
                                    D.    <?php echo "". $row["ans4"]."<br>"; ?>
									</label>
                                    <input type="radio" id="rg-female" name="q2" value="E" >
									<label for="rg-female">
                                    E.    <?php echo "". $row["ans5"]."<br>"; }?>
									</label><br>
                                    
		</div><br>
        <label for="Question 3">
                <?php $ret=mysqli_query($con,"SELECT * FROM maths where id=3");
while($row=mysqli_fetch_array($ret))
{echo "" . $row["id"]. ".    " . $row["Question"]."<br>";?>
            </label>
        <div class="clip-radio radio-primary">
									<input type="radio" id="rg-female" name="q3" value="A">
									<label for="rg-female">
                                    A.    <?php echo "". $row["ans1"]."<br>"; ?>
									</label>
									<input type="radio" id="rg-male" name="q3" value="B">
									<label for="">
									B.    <?php echo "". $row["ans2"]."<br>"; ?>
									</label>
                                    <input type="radio" id="rg-female" name="q3" value="C" >
									<label for="rg-female">
                                    C.    <?php echo "". $row["ans3"]."<br>"; ?>
									</label>
                                    <input type="radio" id="rg-female" name="q3" value="D" >
									<label for="rg-female">
                                    D.    <?php echo "". $row["ans4"]."<br>"; ?>
									</label>
                                    <input type="radio" id="rg-female" name="q3" value="E" >
									<label for="rg-female">
                                    E.    <?php echo "". $row["ans5"]."<br>"; }?>
									</label>
		</div><br>
        <label for="Question 4">
                <?php $ret=mysqli_query($con,"SELECT * FROM maths where id=4");
while($row=mysqli_fetch_array($ret))
{echo "" . $row["id"]. ".    " . $row["Question"]."<br>";?>
            </label>
        
        <div class="clip-radio radio-primary">
									<input type="radio" id="rg-female" name="q4" value="A" >
									<label for="rg-female">
                                    A.    <?php echo "". $row["ans1"]."<br>"; ?>
									</label>
									<input type="radio" id="rg-male" name="q4" value="B">
									<label for="">
									B.    <?php echo "". $row["ans2"]."<br>"; ?>
									</label>
                                    <input type="radio" id="rg-female" name="q4" value="C" >
									<label for="rg-female">
                                    C.    <?php echo "". $row["ans3"]."<br>"; ?>
									</label>
                                    <input type="radio" id="rg-female" name="q4" value="D" >
									<label for="rg-female">
                                    D.    <?php echo "". $row["ans4"]."<br>"; ?>
									</label>
                                    <input type="radio" id="rg-female" name="q4" value="E" >
									<label for="rg-female">
                                    E.    <?php echo "". $row["ans5"]."<br>"; }?>
									</label><br>
                                    
		</div><br>
        <label for="Question 5">
                <?php $ret=mysqli_query($con,"SELECT * FROM maths where id=5");
while($row=mysqli_fetch_array($ret))
{echo "" . $row["id"]. ".    " . $row["Question"]."<br>";?>
            </label>
        
        <div class="clip-radio radio-primary">
									<input type="radio" id="rg-female" name="q5" value="A" >
									<label for="rg-female">
                                    A.    <?php echo "". $row["ans1"]."<br>"; ?>
									</label>
									<input type="radio" id="rg-male" name="q5" value="B">
									<label for="">
									B.    <?php echo "". $row["ans2"]."<br>"; ?>
									</label>
                                    <input type="radio" id="rg-female" name="q5" value="C" >
									<label for="rg-female">
                                    C.    <?php echo "". $row["ans3"]."<br>"; ?>
									</label>
                                    <input type="radio" id="rg-female" name="q5" value="D" >
									<label for="rg-female">
                                    D.    <?php echo "". $row["ans4"]."<br>"; ?>
									</label>
                                    <input type="radio" id="rg-female" name="q5" value="E" >
									<label for="rg-female">
                                    E.    <?php echo "". $row["ans5"]."<br>"; }?>
									</label><br>
                                    
		</div><br>
        <label for="Question 6">
                <?php $ret=mysqli_query($con,"SELECT * FROM maths where id=6");
while($row=mysqli_fetch_array($ret))
{echo "" . $row["id"]. ".    " . $row["Question"]."<br>";?>
            </label>
        
        <div class="clip-radio radio-primary">
									<input type="radio" id="rg-female" name="q6" value="A" >
									<label for="rg-female">
                                    A.    <?php echo "". $row["ans1"]."<br>"; ?>
									</label>
									<input type="radio" id="rg-male" name="q6" value="B">
									<label for="">
									B.    <?php echo "". $row["ans2"]."<br>"; ?>
									</label>
                                    <input type="radio" id="rg-female" name="q6" value="C" >
									<label for="rg-female">
                                    C.    <?php echo "". $row["ans3"]."<br>"; ?>
									</label>
                                    <input type="radio" id="rg-female" name="q6" value="D" >
									<label for="rg-female">
                                    D.    <?php echo "". $row["ans4"]."<br>"; ?>
									</label>
                                    <input type="radio" id="rg-female" name="q6" value="E" >
									<label for="rg-female">
                                    E.    <?php echo "". $row["ans5"]."<br>"; }?>
									</label><br>
                                    
		</div><br>
        <label for="Question 7">
                <?php $ret=mysqli_query($con,"SELECT * FROM maths where id=7");
while($row=mysqli_fetch_array($ret))
{echo "" . $row["id"]. ".    " . $row["Question"]."<br>";?>
            </label>
        
        <div class="clip-radio radio-primary">
									<input type="radio" id="rg-female" name="q7" value="A" >
									<label for="rg-female">
                                    A.    <?php echo "". $row["ans1"]."<br>"; ?>
									</label>
									<input type="radio" id="rg-male" name="q7" value="B">
									<label for="">
									B.    <?php echo "". $row["ans2"]."<br>"; ?>
									</label>
                                    <input type="radio" id="rg-female" name="q7" value="C" >
									<label for="rg-female">
                                    C.    <?php echo "". $row["ans3"]."<br>"; ?>
									</label>
                                    <input type="radio" id="rg-female" name="q7" value="D" >
									<label for="rg-female">
                                    D.    <?php echo "". $row["ans4"]."<br>"; ?>
									</label>
                                    <input type="radio" id="rg-female" name="q7" value="E" >
									<label for="rg-female">
                                    E.    <?php echo "". $row["ans5"]."<br>"; }?>
									</label><br>
                                    
		</div><br>
        <label for="Question 8">
                <?php $ret=mysqli_query($con,"SELECT * FROM maths where id=8");
while($row=mysqli_fetch_array($ret))
{echo "" . $row["id"]. ".    " . $row["Question"]."<br>";?>
            </label>
        
        <div class="clip-radio radio-primary">
									<input type="radio" id="rg-female" name="q8" value="A" >
									<label for="rg-female">
                                    A.    <?php echo "". $row["ans1"]."<br>"; ?>
									</label>
									<input type="radio" id="rg-male" name="q8" value="B">
									<label for="">
									B.    <?php echo "". $row["ans2"]."<br>"; ?>
									</label>
                                    <input type="radio" id="rg-female" name="q8" value="C" >
									<label for="rg-female">
                                    C.    <?php echo "". $row["ans3"]."<br>"; ?>
									</label>
                                    <input type="radio" id="rg-female" name="q8" value="D" >
									<label for="rg-female">
                                    D.    <?php echo "". $row["ans4"]."<br>"; ?>
									</label>
                                    <input type="radio" id="rg-female" name="q8" value="E" >
									<label for="rg-female">
                                    E.    <?php echo "". $row["ans5"]."<br>"; }?>
									</label><br>
                                    
		</div><br>
        <label for="Question 9">
                <?php $ret=mysqli_query($con,"SELECT * FROM maths where id=9");
while($row=mysqli_fetch_array($ret))
{echo "" . $row["id"]. ".    " . $row["Question"]."<br>";?>
            </label>
        
        <div class="clip-radio radio-primary">
									<input type="radio" id="rg-female" name="q9" value="A" >
									<label for="rg-female">
                                    A.    <?php echo "". $row["ans1"]."<br>"; ?>
									</label>
									<input type="radio" id="rg-male" name="q9" value="B">
									<label for="">
									B.    <?php echo "". $row["ans2"]."<br>"; ?>
									</label>
                                    <input type="radio" id="rg-female" name="q9" value="C" >
									<label for="rg-female">
                                    C.    <?php echo "". $row["ans3"]."<br>"; ?>
									</label>
                                    <input type="radio" id="rg-female" name="q9" value="D" >
									<label for="rg-female">
                                    D.    <?php echo "". $row["ans4"]."<br>"; ?>
									</label>
                                    <input type="radio" id="rg-female" name="q9" value="E" >
									<label for="rg-female">
                                    E.    <?php echo "". $row["ans5"]."<br>"; }?>
									</label><br>
                                    
		</div><br>
        <label for="Question 10">
                <?php $ret=mysqli_query($con,"SELECT * FROM maths where id=10");
while($row=mysqli_fetch_array($ret))
{echo "" . $row["id"]. ".    " . $row["Question"]."<br>";?>
            </label>
        
        <div class="clip-radio radio-primary">
									<input type="radio" id="rg-female" name="q10" value="A" >
									<label for="rg-female">
                                    A.    <?php echo "". $row["ans1"]."<br>"; ?>
									</label>
									<input type="radio" id="rg-male" name="q10" value="B">
									<label for="">
									B.    <?php echo "". $row["ans2"]."<br>"; ?>
									</label>
                                    <input type="radio" id="rg-female" name="q10" value="C" >
									<label for="rg-female">
                                    C.    <?php echo "". $row["ans3"]."<br>"; ?>
									</label>
                                    <input type="radio" id="rg-female" name="q10" value="D" >
									<label for="rg-female">
                                    D.    <?php echo "". $row["ans4"]."<br>"; ?>
									</label>
                                    <input type="radio" id="rg-female" name="q10" value="E" >
									<label for="rg-female">
                                    E.    <?php echo "". $row["ans5"]."<br>"; }?>
									</label><br>
                                    
		</div><br>
        <label for="Question 11">
                <?php $ret=mysqli_query($con,"SELECT * FROM maths where id=11");
while($row=mysqli_fetch_array($ret))
{echo "" . $row["id"]. ".    " . $row["Question"]."<br>";?>
            </label>
        
        <div class="clip-radio radio-primary">
									<input type="radio" id="rg-female" name="q11" value="A" >
									<label for="rg-female">
                                    A.    <?php echo "". $row["ans1"]."<br>"; ?>
									</label>
									<input type="radio" id="rg-male" name="q11" value="B">
									<label for="">
									B.    <?php echo "". $row["ans2"]."<br>"; ?>
									</label>
                                    <input type="radio" id="rg-female" name="q11" value="C" >
									<label for="rg-female">
                                    C.    <?php echo "". $row["ans3"]."<br>"; ?>
									</label>
                                    <input type="radio" id="rg-female" name="q11" value="D" >
									<label for="rg-female">
                                    D.    <?php echo "". $row["ans4"]."<br>"; ?>
									</label>
                                    <input type="radio" id="rg-female" name="q11" value="E" >
									<label for="rg-female">
                                    E.    <?php echo "". $row["ans5"]."<br>"; }?>
									</label><br>
                                    
		</div><br>
        <label for="Question 12">
                <?php $ret=mysqli_query($con,"SELECT * FROM maths where id=12");
while($row=mysqli_fetch_array($ret))
{echo "" . $row["id"]. ".    " . $row["Question"]."<br>";?>
            </label>
        
        <div class="clip-radio radio-primary">
									<input type="radio" id="rg-female" name="q12" value="A" >
									<label for="rg-female">
                                    A.    <?php echo "". $row["ans1"]."<br>"; ?>
									</label>
									<input type="radio" id="rg-male" name="q12" value="B">
									<label for="">
									B.    <?php echo "". $row["ans2"]."<br>"; ?>
									</label>
                                    <input type="radio" id="rg-female" name="q12" value="C" >
									<label for="rg-female">
                                    C.    <?php echo "". $row["ans3"]."<br>"; ?>
									</label>
                                    <input type="radio" id="rg-female" name="q12" value="D" >
									<label for="rg-female">
                                    D.    <?php echo "". $row["ans4"]."<br>"; ?>
									</label>
                                    <input type="radio" id="rg-female" name="q12" value="E" >
									<label for="rg-female">
                                    E.    <?php echo "". $row["ans5"]."<br>"; }?>
									</label><br>
                                    
		</div><br>
        <label for="Question 13">
                <?php $ret=mysqli_query($con,"SELECT * FROM maths where id=13");
while($row=mysqli_fetch_array($ret))
{echo "" . $row["id"]. ".    " . $row["Question"]."<br>";?>
            </label>
        
        <div class="clip-radio radio-primary">
									<input type="radio" id="rg-female" name="q13" value="A" >
									<label for="rg-female">
                                    A.    <?php echo "". $row["ans1"]."<br>"; ?>
									</label>
									<input type="radio" id="rg-male" name="q13" value="B">
									<label for="">
									B.    <?php echo "". $row["ans2"]."<br>"; ?>
									</label>
                                    <input type="radio" id="rg-female" name="q13" value="C" >
									<label for="rg-female">
                                    C.    <?php echo "". $row["ans3"]."<br>"; ?>
									</label>
                                    <input type="radio" id="rg-female" name="q13" value="D" >
									<label for="rg-female">
                                    D.    <?php echo "". $row["ans4"]."<br>"; ?>
									</label>
                                    <input type="radio" id="rg-female" name="q13" value="E" >
									<label for="rg-female">
                                    E.    <?php echo "". $row["ans5"]."<br>"; }?>
									</label><br>
                                    
		</div><br>
        <label for="Question 14">
                <?php $ret=mysqli_query($con,"SELECT * FROM maths where id=14");
while($row=mysqli_fetch_array($ret))
{echo "" . $row["id"]. ".    " . $row["Question"]."<br>";?>
            </label>
        <div class="clip-radio radio-primary">
									<input type="radio" id="rg-female" name="q14" value="A">
									<label for="rg-female">
                                    A.    <?php echo "". $row["ans1"]."<br>"; ?>
									</label>
									<input type="radio" id="rg-male" name="q14" value="B">
									<label for="">
									B.    <?php echo "". $row["ans2"]."<br>"; ?>
									</label>
                                    <input type="radio" id="rg-female" name="q14" value="C" >
									<label for="rg-female">
                                    C.    <?php echo "". $row["ans3"]."<br>"; ?>
									</label>
                                    <input type="radio" id="rg-female" name="q14" value="D" >
									<label for="rg-female">
                                    D.    <?php echo "". $row["ans4"]."<br>"; ?>
									</label>
                                    <input type="radio" id="rg-female" name="q14" value="E" >
									<label for="rg-female">
                                    E.    <?php echo "". $row["ans5"]."<br>"; }?>
									</label>
		</div><br>
        <label for="Question 15">
                <?php $ret=mysqli_query($con,"SELECT * FROM maths where id=15");
while($row=mysqli_fetch_array($ret))
{echo "" . $row["id"]. ".    " . $row["Question"]."<br>";?>
            </label>
        <div class="clip-radio radio-primary">
									<input type="radio" id="rg-female" name="q15" value="A">
									<label for="rg-female">
                                    A.    <?php echo "". $row["ans1"]."<br>"; ?>
									</label>
									<input type="radio" id="rg-male" name="q15" value="B">
									<label for="">
									B.    <?php echo "". $row["ans2"]."<br>"; ?>
									</label>
                                    <input type="radio" id="rg-female" name="q15" value="C" >
									<label for="rg-female">
                                    C.    <?php echo "". $row["ans3"]."<br>"; ?>
									</label>
                                    <input type="radio" id="rg-female" name="q15" value="D" >
									<label for="rg-female">
                                    D.    <?php echo "". $row["ans4"]."<br>"; ?>
									</label>
                                    <input type="radio" id="rg-female" name="q15" value="E" >
									<label for="rg-female">
                                    E.    <?php echo "". $row["ans5"]."<br>"; }?>
									</label>
		</div><br>
        <label for="Question 16">
                <?php $ret=mysqli_query($con,"SELECT * FROM maths where id=16");
while($row=mysqli_fetch_array($ret))
{echo "" . $row["id"]. ".    " . $row["Question"]."<br>";?>
            </label>
        <div class="clip-radio radio-primary">
									<input type="radio" id="rg-female" name="q16" value="A">
									<label for="rg-female">
                                    A.    <?php echo "". $row["ans1"]."<br>"; ?>
									</label>
									<input type="radio" id="rg-male" name="q16" value="B">
									<label for="">
									B.    <?php echo "". $row["ans2"]."<br>"; ?>
									</label>
                                    <input type="radio" id="rg-female" name="q16" value="C" >
									<label for="rg-female">
                                    C.    <?php echo "". $row["ans3"]."<br>"; ?>
									</label>
                                    <input type="radio" id="rg-female" name="q16" value="D" >
									<label for="rg-female">
                                    D.    <?php echo "". $row["ans4"]."<br>"; ?>
									</label>
                                    <input type="radio" id="rg-female" name="q16" value="E" >
									<label for="rg-female">
                                    E.    <?php echo "". $row["ans5"]."<br>"; }?>
									</label>
		</div><br>
        <label for="Question 17">
                <?php $ret=mysqli_query($con,"SELECT * FROM maths where id=17");
while($row=mysqli_fetch_array($ret))
{echo "" . $row["id"]. ".    " . $row["Question"]."<br>";?>
            </label>
        <div class="clip-radio radio-primary">
									<input type="radio" id="rg-female" name="q17" value="A">
									<label for="rg-female">
                                    A.    <?php echo "". $row["ans1"]."<br>"; ?>
									</label>
									<input type="radio" id="rg-male" name="q17" value="B">
									<label for="">
									B.    <?php echo "". $row["ans2"]."<br>"; ?>
									</label>
                                    <input type="radio" id="rg-female" name="q17" value="C" >
									<label for="rg-female">
                                    C.    <?php echo "". $row["ans3"]."<br>"; ?>
									</label>
                                    <input type="radio" id="rg-female" name="q17" value="D" >
									<label for="rg-female">
                                    D.    <?php echo "". $row["ans4"]."<br>"; ?>
									</label>
                                    <input type="radio" id="rg-female" name="q17" value="E" >
									<label for="rg-female">
                                    E.    <?php echo "". $row["ans5"]."<br>"; }?>
									</label>
		</div><br>
        <label for="Question 18">
                <?php $ret=mysqli_query($con,"SELECT * FROM maths where id=18");
while($row=mysqli_fetch_array($ret))
{echo "" . $row["id"]. ".    " . $row["Question"]."<br>";?>
            </label>
        <div class="clip-radio radio-primary">
									<input type="radio" id="rg-female" name="q18" value="A">
									<label for="rg-female">
                                    A.    <?php echo "". $row["ans1"]."<br>"; ?>
									</label>
									<input type="radio" id="rg-male" name="q18" value="B">
									<label for="">
									B.    <?php echo "". $row["ans2"]."<br>"; ?>
									</label>
                                    <input type="radio" id="rg-female" name="q18" value="C" >
									<label for="rg-female">
                                    C.    <?php echo "". $row["ans3"]."<br>"; ?>
									</label>
                                    <input type="radio" id="rg-female" name="q18" value="D" >
									<label for="rg-female">
                                    D.    <?php echo "". $row["ans4"]."<br>"; ?>
									</label>
                                    <input type="radio" id="rg-female" name="q18" value="E" >
									<label for="rg-female">
                                    E.    <?php echo "". $row["ans5"]."<br>"; }?>
									</label>
		</div><br>
        <label for="Question 19">
                <?php $ret=mysqli_query($con,"SELECT * FROM maths where id=19");
while($row=mysqli_fetch_array($ret))
{echo "" . $row["id"]. ".    " . $row["Question"]."<br>";?>
            </label>
        <div class="clip-radio radio-primary">
									<input type="radio" id="rg-female" name="q19" value="A">
									<label for="rg-female">
                                    A.    <?php echo "". $row["ans1"]."<br>"; ?>
									</label>
									<input type="radio" id="rg-male" name="q19" value="B">
									<label for="">
									B.    <?php echo "". $row["ans2"]."<br>"; ?>
									</label>
                                    <input type="radio" id="rg-female" name="q19" value="C" >
									<label for="rg-female">
                                    C.    <?php echo "". $row["ans3"]."<br>"; ?>
									</label>
                                    <input type="radio" id="rg-female" name="q19" value="D" >
									<label for="rg-female">
                                    D.    <?php echo "". $row["ans4"]."<br>"; ?>
									</label>
                                    <input type="radio" id="rg-female" name="q19" value="E" >
									<label for="rg-female">
                                    E.    <?php echo "". $row["ans5"]."<br>"; }?>
									</label>
		</div><br>
        <label for="Question 20">
                <?php $ret=mysqli_query($con,"SELECT * FROM maths where id=20");
while($row=mysqli_fetch_array($ret))
{echo "" . $row["id"]. ".    " . $row["Question"]."<br>";?>
            </label>
        
        <div class="clip-radio radio-primary">
									<input type="radio" id="rg-female" name="q20" value="A" >
									<label for="rg-female">
                                    A.    <?php echo "". $row["ans1"]."<br>"; ?>
									</label>
									<input type="radio" id="rg-male" name="q20" value="B">
									<label for="">
									B.    <?php echo "". $row["ans2"]."<br>"; ?>
									</label>
                                    <input type="radio" id="rg-female" name="q20" value="C" >
									<label for="rg-female">
                                    C.    <?php echo "". $row["ans3"]."<br>"; ?>
									</label>
                                    <input type="radio" id="rg-female" name="q20" value="D" >
									<label for="rg-female">
                                    D.    <?php echo "". $row["ans4"]."<br>"; ?>
									</label>
                                    <input type="radio" id="rg-female" name="q20" value="E" >
									<label for="rg-female">
                                    E.    <?php echo "". $row["ans5"]."<br>"; }?>
									</label><br>
                                    
		</div><br>
        <!-- <label for="Question 21">
                <?php $ret=mysqli_query($con,"SELECT * FROM maths where id=21");
while($row=mysqli_fetch_array($ret))
{echo "" . $row["id"]. ".    " . $row["Question"]."<br>";?>
            </label>
        
        <div class="clip-radio radio-primary">
									<input type="radio" id="rg-female" name="q21" value="A" >
									<label for="rg-female">
                                    A.    <?php echo "". $row["ans1"]."<br>"; ?>
									</label>
									<input type="radio" id="rg-male" name="q21" value="B">
									<label for="">
									B.    <?php echo "". $row["ans2"]."<br>"; ?>
									</label>
                                    <input type="radio" id="rg-female" name="q21" value="C" >
									<label for="rg-female">
                                    C.    <?php echo "". $row["ans3"]."<br>"; ?>
									</label>
                                    <input type="radio" id="rg-female" name="q21" value="D" >
									<label for="rg-female">
                                    D.    <?php echo "". $row["ans4"]."<br>"; ?>
									</label>
                                    <input type="radio" id="rg-female" name="q21" value="E" >
									<label for="rg-female">
                                    E.    <?php echo "". $row["ans5"]."<br>"; }?>
									</label><br>
                                    
		</div><br>
        <label for="Question 22">
                <?php $ret=mysqli_query($con,"SELECT * FROM maths where id=22");
while($row=mysqli_fetch_array($ret))
{echo "" . $row["id"]. ".    " . $row["Question"]."<br>";?>
            </label>
        
        <div class="clip-radio radio-primary">
									<input type="radio" id="rg-female" name="q22" value="A" >
									<label for="rg-female">
                                    A.    <?php echo "". $row["ans1"]."<br>"; ?>
									</label>
									<input type="radio" id="rg-male" name="q22" value="B">
									<label for="">
									B.    <?php echo "". $row["ans2"]."<br>"; ?>
									</label>
                                    <input type="radio" id="rg-female" name="q22" value="C" >
									<label for="rg-female">
                                    C.    <?php echo "". $row["ans3"]."<br>"; ?>
									</label>
                                    <input type="radio" id="rg-female" name="q22" value="D" >
									<label for="rg-female">
                                    D.    <?php echo "". $row["ans4"]."<br>"; ?>
									</label>
                                    <input type="radio" id="rg-female" name="q22" value="E" >
									<label for="rg-female">
                                    E.    <?php echo "". $row["ans5"]."<br>"; }?>
									</label><br>
                                    
		</div><br>
        <label for="Question 23">
                <?php $ret=mysqli_query($con,"SELECT * FROM maths where id=23");
while($row=mysqli_fetch_array($ret))
{echo "" . $row["id"]. ".    " . $row["Question"]."<br>";?>
            </label>
        
        <div class="clip-radio radio-primary">
									<input type="radio" id="rg-female" name="q23" value="A" >
									<label for="rg-female">
                                    A.    <?php echo "". $row["ans1"]."<br>"; ?>
									</label>
									<input type="radio" id="rg-male" name="q23" value="B">
									<label for="">
									B.    <?php echo "". $row["ans2"]."<br>"; ?>
									</label>
                                    <input type="radio" id="rg-female" name="q23" value="C" >
									<label for="rg-female">
                                    C.    <?php echo "". $row["ans3"]."<br>"; ?>
									</label>
                                    <input type="radio" id="rg-female" name="q23" value="D" >
									<label for="rg-female">
                                    D.    <?php echo "". $row["ans4"]."<br>"; ?>
									</label>
                                    <input type="radio" id="rg-female" name="q23" value="E" >
									<label for="rg-female">
                                    E.    <?php echo "". $row["ans5"]."<br>"; }?>
									</label><br>
                                    
		</div><br>
        <label for="Question 24">
                <?php $ret=mysqli_query($con,"SELECT * FROM maths where id=24");
while($row=mysqli_fetch_array($ret))
{echo "" . $row["id"]. ".    " . $row["Question"]."<br>";?>
            </label>
        
        <div class="clip-radio radio-primary">
									<input type="radio" id="rg-female" name="q24" value="A" >
									<label for="rg-female">
                                    A.    <?php echo "". $row["ans1"]."<br>"; ?>
									</label>
									<input type="radio" id="rg-male" name="q24" value="B">
									<label for="">
									B.    <?php echo "". $row["ans2"]."<br>"; ?>
									</label>
                                    <input type="radio" id="rg-female" name="q24" value="C" >
									<label for="rg-female">
                                    C.    <?php echo "". $row["ans3"]."<br>"; ?>
									</label>
                                    <input type="radio" id="rg-female" name="q24" value="D" >
									<label for="rg-female">
                                    D.    <?php echo "". $row["ans4"]."<br>"; ?>
									</label>
                                    <input type="radio" id="rg-female" name="q24" value="E" >
									<label for="rg-female">
                                    E.    <?php echo "". $row["ans5"]."<br>"; }?>
									</label><br>
                                    
		</div><br>
        <label for="Question 25">
                <?php $ret=mysqli_query($con,"SELECT * FROM maths where id=25");
while($row=mysqli_fetch_array($ret))
{echo "" . $row["id"]. ".    " . $row["Question"]."<br>";?>
            </label>
        
        <div class="clip-radio radio-primary">
									<input type="radio" id="rg-female" name="q25" value="A" >
									<label for="rg-female">
                                    A.    <?php echo "". $row["ans1"]."<br>"; ?>
									</label>
									<input type="radio" id="rg-male" name="q25" value="B">
									<label for="">
									B.    <?php echo "". $row["ans2"]."<br>"; ?>
									</label>
                                    <input type="radio" id="rg-female" name="q25" value="C" >
									<label for="rg-female">
                                    C.    <?php echo "". $row["ans3"]."<br>"; ?>
									</label>
                                    <input type="radio" id="rg-female" name="q25" value="D" >
									<label for="rg-female">
                                    D.    <?php echo "". $row["ans4"]."<br>"; ?>
									</label>
                                    <input type="radio" id="rg-female" name="q25" value="E" >
									<label for="rg-female">
                                    E.    <?php echo "". $row["ans5"]."<br>"; }?>
									</label><br>
                                    
		</div><br>
        <label for="Question 26">
                <?php $ret=mysqli_query($con,"SELECT * FROM maths where id=26");
while($row=mysqli_fetch_array($ret))
{echo "" . $row["id"]. ".    " . $row["Question"]."<br>";?>
            </label>
        
        <div class="clip-radio radio-primary">
									<input type="radio" id="rg-female" name="q26" value="A" >
									<label for="rg-female">
                                    A.    <?php echo "". $row["ans1"]."<br>"; ?>
									</label>
									<input type="radio" id="rg-male" name="q26" value="B">
									<label for="">
									B.    <?php echo "". $row["ans2"]."<br>"; ?>
									</label>
                                    <input type="radio" id="rg-female" name="q26" value="C" >
									<label for="rg-female">
                                    C.    <?php echo "". $row["ans3"]."<br>"; ?>
									</label>
                                    <input type="radio" id="rg-female" name="q26" value="D" >
									<label for="rg-female">
                                    D.    <?php echo "". $row["ans4"]."<br>"; ?>
									</label>
                                    <input type="radio" id="rg-female" name="q26" value="E" >
									<label for="rg-female">
                                    E.    <?php echo "". $row["ans5"]."<br>"; }?>
									</label><br>
                                    
		</div><br>
        <label for="Question 27">
                <?php $ret=mysqli_query($con,"SELECT * FROM maths where id=27");
while($row=mysqli_fetch_array($ret))
{echo "" . $row["id"]. ".    " . $row["Question"]."<br>";?>
            </label>
        
        <div class="clip-radio radio-primary">
									<input type="radio" id="rg-female" name="q27" value="A" >
									<label for="rg-female">
                                    A.    <?php echo "". $row["ans1"]."<br>"; ?>
									</label>
									<input type="radio" id="rg-male" name="q27" value="B">
									<label for="">
									B.    <?php echo "". $row["ans2"]."<br>"; ?>
									</label>
                                    <input type="radio" id="rg-female" name="q27" value="C" >
									<label for="rg-female">
                                    C.    <?php echo "". $row["ans3"]."<br>"; ?>
									</label>
                                    <input type="radio" id="rg-female" name="q27" value="D" >
									<label for="rg-female">
                                    D.    <?php echo "". $row["ans4"]."<br>"; ?>
									</label>
                                    <input type="radio" id="rg-female" name="q27" value="E" >
									<label for="rg-female">
                                    E.    <?php echo "". $row["ans5"]."<br>"; }?>
									</label><br>
                                    
		</div><br>
        <label for="Question 28">
                <?php $ret=mysqli_query($con,"SELECT * FROM maths where id=28");
while($row=mysqli_fetch_array($ret))
{echo "" . $row["id"]. ".    " . $row["Question"]."<br>";?>
            </label>
        
        <div class="clip-radio radio-primary">
									<input type="radio" id="rg-female" name="q28" value="A" >
									<label for="rg-female">
                                    A.    <?php echo "". $row["ans1"]."<br>"; ?>
									</label>
									<input type="radio" id="rg-male" name="q28" value="B">
									<label for="">
									B.    <?php echo "". $row["ans2"]."<br>"; ?>
									</label>
                                    <input type="radio" id="rg-female" name="q28" value="C" >
									<label for="rg-female">
                                    C.    <?php echo "". $row["ans3"]."<br>"; ?>
									</label>
                                    <input type="radio" id="rg-female" name="q28" value="D" >
									<label for="rg-female">
                                    D.    <?php echo "". $row["ans4"]."<br>"; ?>
									</label>
                                    <input type="radio" id="rg-female" name="q28" value="E" >
									<label for="rg-female">
                                    E.    <?php echo "". $row["ans5"]."<br>"; }?>
									</label><br>
                                    
		</div><br>
        <label for="Question 28">
                <?php $ret=mysqli_query($con,"SELECT * FROM maths where id=28");
while($row=mysqli_fetch_array($ret))
{echo "" . $row["id"]. ".    " . $row["Question"]."<br>";?>
            </label>
        
        <div class="clip-radio radio-primary">
									<input type="radio" id="rg-female" name="q28" value="A" >
									<label for="rg-female">
                                    A.    <?php echo "". $row["ans1"]."<br>"; ?>
									</label>
									<input type="radio" id="rg-male" name="q28" value="B">
									<label for="">
									B.    <?php echo "". $row["ans2"]."<br>"; ?>
									</label>
                                    <input type="radio" id="rg-female" name="q28" value="C" >
									<label for="rg-female">
                                    C.    <?php echo "". $row["ans3"]."<br>"; ?>
									</label>
                                    <input type="radio" id="rg-female" name="q28" value="D" >
									<label for="rg-female">
                                    D.    <?php echo "". $row["ans4"]."<br>"; ?>
									</label>
                                    <input type="radio" id="rg-female" name="q28" value="E" >
									<label for="rg-female">
                                    E.    <?php echo "". $row["ans5"]."<br>"; }?>
									</label><br>
                                    
		</div><br>
        <label for="Question 29">
                <?php $ret=mysqli_query($con,"SELECT * FROM maths where id=29");
while($row=mysqli_fetch_array($ret))
{echo "" . $row["id"]. ".    " . $row["Question"]."<br>";?>
            </label>
        
        <div class="clip-radio radio-primary">
									<input type="radio" id="rg-female" name="q29" value="A" >
									<label for="rg-female">
                                    A.    <?php echo "". $row["ans1"]."<br>"; ?>
									</label>
									<input type="radio" id="rg-male" name="q29" value="B">
									<label for="">
									B.    <?php echo "". $row["ans2"]."<br>"; ?>
									</label>
                                    <input type="radio" id="rg-female" name="q29" value="C" >
									<label for="rg-female">
                                    C.    <?php echo "". $row["ans3"]."<br>"; ?>
									</label>
                                    <input type="radio" id="rg-female" name="q29" value="D" >
									<label for="rg-female">
                                    D.    <?php echo "". $row["ans4"]."<br>"; ?>
									</label>
                                    <input type="radio" id="rg-female" name="q29" value="E" >
									<label for="rg-female">
                                    E.    <?php echo "". $row["ans5"]."<br>"; }?>
									</label><br>
                                    
		</div><br>
        <label for="Question 30">
                <?php $ret=mysqli_query($con,"SELECT * FROM maths where id=30");
while($row=mysqli_fetch_array($ret))
{echo "" . $row["id"]. ".    " . $row["Question"]."<br>";?>
            </label>
        
        <div class="clip-radio radio-primary">
									<input type="radio" id="rg-female" name="q30" value="A" >
									<label for="rg-female">
                                    A.    <?php echo "". $row["ans1"]."<br>"; ?>
									</label>
									<input type="radio" id="rg-male" name="q30" value="B">
									<label for="">
									B.    <?php echo "". $row["ans2"]."<br>"; ?>
									</label>
                                    <input type="radio" id="rg-female" name="q30" value="C" >
									<label for="rg-female">
                                    C.    <?php echo "". $row["ans3"]."<br>"; ?>
									</label>
                                    <input type="radio" id="rg-female" name="q30" value="D" >
									<label for="rg-female">
                                    D.    <?php echo "". $row["ans4"]."<br>"; ?>
									</label>
                                    <input type="radio" id="rg-female" name="q30" value="E" >
									<label for="rg-female">
                                    E.    <?php echo "". $row["ans5"]."<br>"; }?>
									</label><br>
                                    
		</div><br>
        <label for="Question 31">
                <?php $ret=mysqli_query($con,"SELECT * FROM maths where id=31");
while($row=mysqli_fetch_array($ret))
{echo "" . $row["id"]. ".    " . $row["Question"]."<br>";?>
            </label>
        <div class="clip-radio radio-primary">
									<input type="radio" id="rg-female" name="q31" value="A">
									<label for="rg-female">
                                    A.    <?php echo "". $row["ans1"]."<br>"; ?>
									</label>
									<input type="radio" id="rg-male" name="q31" value="B">
									<label for="">
									B.    <?php echo "". $row["ans2"]."<br>"; ?>
									</label>
                                    <input type="radio" id="rg-female" name="q31" value="C" >
									<label for="rg-female">
                                    C.    <?php echo "". $row["ans3"]."<br>"; ?>
									</label>
                                    <input type="radio" id="rg-female" name="q31" value="D" >
									<label for="rg-female">
                                    D.    <?php echo "". $row["ans4"]."<br>"; ?>
									</label>
                                    <input type="radio" id="rg-female" name="q31" value="E" >
									<label for="rg-female">
                                    E.    <?php echo "". $row["ans5"]."<br>"; }?>
									</label>
		</div><br>
        <label for="Question 32">
                <?php $ret=mysqli_query($con,"SELECT * FROM maths where id=32");
while($row=mysqli_fetch_array($ret))
{echo "" . $row["id"]. ".    " . $row["Question"]."<br>";?>
            </label>
        <div class="clip-radio radio-primary">
									<input type="radio" id="rg-female" name="q32" value="A">
									<label for="rg-female">
                                    A.    <?php echo "". $row["ans1"]."<br>"; ?>
									</label>
									<input type="radio" id="rg-male" name="q32" value="B">
									<label for="">
									B.    <?php echo "". $row["ans2"]."<br>"; ?>
									</label>
                                    <input type="radio" id="rg-female" name="q32" value="C" >
									<label for="rg-female">
                                    C.    <?php echo "". $row["ans3"]."<br>"; ?>
									</label>
                                    <input type="radio" id="rg-female" name="q32" value="D" >
									<label for="rg-female">
                                    D.    <?php echo "". $row["ans4"]."<br>"; ?>
									</label>
                                    <input type="radio" id="rg-female" name="q32" value="E" >
									<label for="rg-female">
                                    E.    <?php echo "". $row["ans5"]."<br>"; }?>
									</label>
		</div><br>
        <label for="Question 33">
                <?php $ret=mysqli_query($con,"SELECT * FROM maths where id=33");
while($row=mysqli_fetch_array($ret))
{echo "" . $row["id"]. ".    " . $row["Question"]."<br>";?>
            </label>
        <div class="clip-radio radio-primary">
									<input type="radio" id="rg-female" name="q33" value="A">
									<label for="rg-female">
                                    A.    <?php echo "". $row["ans1"]."<br>"; ?>
									</label>
									<input type="radio" id="rg-male" name="q33" value="B">
									<label for="">
									B.    <?php echo "". $row["ans2"]."<br>"; ?>
									</label>
                                    <input type="radio" id="rg-female" name="q33" value="C" >
									<label for="rg-female">
                                    C.    <?php echo "". $row["ans3"]."<br>"; ?>
									</label>
                                    <input type="radio" id="rg-female" name="q33" value="D" >
									<label for="rg-female">
                                    D.    <?php echo "". $row["ans4"]."<br>"; ?>
									</label>
                                    <input type="radio" id="rg-female" name="q33" value="E" >
									<label for="rg-female">
                                    E.    <?php echo "". $row["ans5"]."<br>"; }?>
									</label>
		</div><br>
        <label for="Question 34">
                <?php $ret=mysqli_query($con,"SELECT * FROM maths where id=34");
while($row=mysqli_fetch_array($ret))
{echo "" . $row["id"]. ".    " . $row["Question"]."<br>";?>
            </label>
        <div class="clip-radio radio-primary">
									<input type="radio" id="rg-female" name="q34" value="A">
									<label for="rg-female">
                                    A.    <?php echo "". $row["ans1"]."<br>"; ?>
									</label>
									<input type="radio" id="rg-male" name="q34" value="B">
									<label for="">
									B.    <?php echo "". $row["ans2"]."<br>"; ?>
									</label>
                                    <input type="radio" id="rg-female" name="q34" value="C" >
									<label for="rg-female">
                                    C.    <?php echo "". $row["ans3"]."<br>"; ?>
									</label>
                                    <input type="radio" id="rg-female" name="q34" value="D" >
									<label for="rg-female">
                                    D.    <?php echo "". $row["ans4"]."<br>"; ?>
									</label>
                                    <input type="radio" id="rg-female" name="q34" value="E" >
									<label for="rg-female">
                                    E.    <?php echo "". $row["ans5"]."<br>"; }?>
									</label>
		</div><br>
        <label for="Question 35">
                <?php $ret=mysqli_query($con,"SELECT * FROM maths where id=35");
while($row=mysqli_fetch_array($ret))
{echo "" . $row["id"]. ".    " . $row["Question"]."<br>";?>
            </label>
        <div class="clip-radio radio-primary">
									<input type="radio" id="rg-female" name="q35" value="A">
									<label for="rg-female">
                                    A.    <?php echo "". $row["ans1"]."<br>"; ?>
									</label>
									<input type="radio" id="rg-male" name="q35" value="B">
									<label for="">
									B.    <?php echo "". $row["ans2"]."<br>"; ?>
									</label>
                                    <input type="radio" id="rg-female" name="q35" value="C" >
									<label for="rg-female">
                                    C.    <?php echo "". $row["ans3"]."<br>"; ?>
									</label>
                                    <input type="radio" id="rg-female" name="q35" value="D" >
									<label for="rg-female">
                                    D.    <?php echo "". $row["ans4"]."<br>"; ?>
									</label>
                                    <input type="radio" id="rg-female" name="q35" value="E" >
									<label for="rg-female">
                                    E.    <?php echo "". $row["ans5"]."<br>"; }?>
									</label>
		</div><br>
        <label for="Question 36">
                <?php $ret=mysqli_query($con,"SELECT * FROM maths where id=36");
while($row=mysqli_fetch_array($ret))
{echo "" . $row["id"]. ".    " . $row["Question"]."<br>";?>
            </label>
        <div class="clip-radio radio-primary">
									<input type="radio" id="rg-female" name="q36" value="A">
									<label for="rg-female">
                                    A.    <?php echo "". $row["ans1"]."<br>"; ?>
									</label>
									<input type="radio" id="rg-male" name="q36" value="B">
									<label for="">
									B.    <?php echo "". $row["ans2"]."<br>"; ?>
									</label>
                                    <input type="radio" id="rg-female" name="q36" value="C" >
									<label for="rg-female">
                                    C.    <?php echo "". $row["ans3"]."<br>"; ?>
									</label>
                                    <input type="radio" id="rg-female" name="q36" value="D" >
									<label for="rg-female">
                                    D.    <?php echo "". $row["ans4"]."<br>"; ?>
									</label>
                                    <input type="radio" id="rg-female" name="q36" value="E" >
									<label for="rg-female">
                                    E.    <?php echo "". $row["ans5"]."<br>"; }?>
									</label>
		</div><br>
        <label for="Question 37">
                <?php $ret=mysqli_query($con,"SELECT * FROM maths where id=37");
while($row=mysqli_fetch_array($ret))
{echo "" . $row["id"]. ".    " . $row["Question"]."<br>";?>
            </label>
        <div class="clip-radio radio-primary">
									<input type="radio" id="rg-female" name="q37" value="A">
									<label for="rg-female">
                                    A.    <?php echo "". $row["ans1"]."<br>"; ?>
									</label>
									<input type="radio" id="rg-male" name="q37" value="B">
									<label for="">
									B.    <?php echo "". $row["ans2"]."<br>"; ?>
									</label>
                                    <input type="radio" id="rg-female" name="q37" value="C" >
									<label for="rg-female">
                                    C.    <?php echo "". $row["ans3"]."<br>"; ?>
									</label>
                                    <input type="radio" id="rg-female" name="q37" value="D" >
									<label for="rg-female">
                                    D.    <?php echo "". $row["ans4"]."<br>"; ?>
									</label>
                                    <input type="radio" id="rg-female" name="q37" value="E" >
									<label for="rg-female">
                                    E.    <?php echo "". $row["ans5"]."<br>"; }?>
									</label>
		</div><br>
        <label for="Question 38">
                <?php $ret=mysqli_query($con,"SELECT * FROM maths where id=38");
while($row=mysqli_fetch_array($ret))
{echo "" . $row["id"]. ".    " . $row["Question"]."<br>";?>
            </label>
        <div class="clip-radio radio-primary">
									<input type="radio" id="rg-female" name="q38" value="A">
									<label for="rg-female">
                                    A.    <?php echo "". $row["ans1"]."<br>"; ?>
									</label>
									<input type="radio" id="rg-male" name="q38" value="B">
									<label for="">
									B.    <?php echo "". $row["ans2"]."<br>"; ?>
									</label>
                                    <input type="radio" id="rg-female" name="q38" value="C" >
									<label for="rg-female">
                                    C.    <?php echo "". $row["ans3"]."<br>"; ?>
									</label>
                                    <input type="radio" id="rg-female" name="q38" value="D" >
									<label for="rg-female">
                                    D.    <?php echo "". $row["ans4"]."<br>"; ?>
									</label>
                                    <input type="radio" id="rg-female" name="q38" value="E" >
									<label for="rg-female">
                                    E.    <?php echo "". $row["ans5"]."<br>"; }?>
									</label>
		</div><br>
        <label for="Question 39">
                <?php $ret=mysqli_query($con,"SELECT * FROM maths where id=39");
while($row=mysqli_fetch_array($ret))
{echo "" . $row["id"]. ".    " . $row["Question"]."<br>";?>
            </label>
        <div class="clip-radio radio-primary">
									<input type="radio" id="rg-female" name="q39" value="A">
									<label for="rg-female">
                                    A.    <?php echo "". $row["ans1"]."<br>"; ?>
									</label>
									<input type="radio" id="rg-male" name="q39" value="B">
									<label for="">
									B.    <?php echo "". $row["ans2"]."<br>"; ?>
									</label>
                                    <input type="radio" id="rg-female" name="q39" value="C" >
									<label for="rg-female">
                                    C.    <?php echo "". $row["ans3"]."<br>"; ?>
									</label>
                                    <input type="radio" id="rg-female" name="q39" value="D" >
									<label for="rg-female">
                                    D.    <?php echo "". $row["ans4"]."<br>"; ?>
									</label>
                                    <input type="radio" id="rg-female" name="q39" value="E" >
									<label for="rg-female">
                                    E.    <?php echo "". $row["ans5"]."<br>"; }?>
									</label>
		</div><br>
        <label for="Question 40">
                <?php $ret=mysqli_query($con,"SELECT * FROM maths where id=40");
while($row=mysqli_fetch_array($ret))
{echo "" . $row["id"]. ".    " . $row["Question"]."<br>";?>
            </label>
        <div class="clip-radio radio-primary">
									<input type="radio" id="rg-female" name="q40" value="A">
									<label for="rg-female">
                                    A.    <?php echo "". $row["ans1"]."<br>"; ?>
									</label>
									<input type="radio" id="rg-male" name="q40" value="B">
									<label for="">
									B.    <?php echo "". $row["ans2"]."<br>"; ?>
									</label>
                                    <input type="radio" id="rg-female" name="q40" value="C" >
									<label for="rg-female">
                                    C.    <?php echo "". $row["ans3"]."<br>"; ?>
									</label>
                                    <input type="radio" id="rg-female" name="q40" value="D" >
									<label for="rg-female">
                                    D.    <?php echo "". $row["ans4"]."<br>"; ?>
									</label>
                                    <input type="radio" id="rg-female" name="q40" value="E" >
									<label for="rg-female">
                                    E.    <?php echo "". $row["ans5"]."<br>"; }?>
									</label>
		</div><br> -->
        <button type="submit" class="btn btn-primary pull-right" id="submit" name="submit">
									Submit <i class="fa fa-arrow-circle-right"></i>
		</button>
    </form>
    </div>
</body>
</html>