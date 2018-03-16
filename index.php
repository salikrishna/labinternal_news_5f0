
<?php
require_once('cm.php');	
if(isset($_POST) & !empty($_POST)){ 
$name = mysqli_real_escape_string($connect,$_POST["name"]);
$comments = mysqli_real_escape_string($connect,$_POST["comments"]);
$sql = "INSERT INTO `comments`(`name`,`comments`)VALUES('$name','$comments')";
$res = mysqli_query($connect,$sql);
if($res){
	echo "success";
	}else{
	echo "ERROR";
}
}		
?>

 <html>
  <head>
   <link  rel="stylesheet" type=" href="style.css">
  <header id="image">
    <img src="head.jpg" width=300px margin=20px>
   </header>
  <body>
    <div class="m1">
     <h5>Today's News:Educational</h5>
     <h4>SSC EXAMINATION CENTER'S</h4>
     <img src="pic.jpg" width=200px>
     <p>SSC Examinations are started yesterday.According to rules students who are late for 10 min were not  allowed to write exam,but some examinations centers allowed those who are 15 min late also,some centers followed strict rules.squards appeared  to all eamination centers and scrutanized the exam halls strictly.Three students belonging to vijayawada are debared for copying.</p>
    </div>
    <div class="m2">
      <h5>JEE ENTRANCE EXAM DATE RELEASED!</h5>
      <img src="pic1.jpg" width=200>
        <p>Finally Board have declared  the date for JEE mains examination,Students who will qualify in JEE mains Examination are only Eligible for attending JEE Advaced examination.JEE mains Exam is scheduled on APRIL 20,and Advaced is scheduled on 26 April.Students who are Applied for exam may collect halltickets and view exam center in respective websites.</p>
     </div>
   <a href="reg.php">COMMENT</a>
  <form>    
     <textarea type="text name="comment" placeholder="comment section" onclick="reg.php"></textarea>
  </form>
  </body>
</html>
