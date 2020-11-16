<?php 
include("includes/header.php");



?>
<?php 
/////function for calculation ages
function getage($strdate)
{
$dob = explode("-",$strdate);
if(count($dob)!=3){return 0;}
$y = $dob[0];$m = $dob[1];$d = $dob[2];
if(strlen($y)!=4){return 0;}
if(strlen($m)!=2){return 0;}
if(strlen($d)!=2){return 0;}
$y += 0;$m += 0;$d += 0;
if($y==0) return 0;
$rage = date("Y") - $y;
if(date("m")<$m)
{
$rage-=1;
}else{
if((date("m")==$m)&&(date("d")<$d))
{$rage-=1;}
}
return $rage;
}
////////////////////////////////////
 ?>

<div class="user_details column">
		<a href="<?php echo $userLoggedIn; ?>">  <img src="<?php echo $user['profile_pic']; ?>"> </a>

		<div class="user_details_left_right">
			<a href="<?php echo $userLoggedIn; ?>">
			<?php 
			echo $user['first_name'] . " " . $user['last_name'];

			 ?>
			</a>
			<br>

			<?php
			//age calculation 
			echo 'Age: '. getage($user['birth_date']). "<br>";
			 echo "Posts: " . $user['num_posts']. "<br>"; 
			echo "Likes: " . $user['num_likes'];
						
  

			?>
		</div>

	</div>
<style type="text/css">
	.eventsstyle{
	font-family: 'Bellota-LightItalic',sans-serif;
	position: relative;
	margin-right: auto;
	margin-left: auto;
	top: 7%;
	width: 35%;
	background-color: #ededed;
	border:1px solid #3e3939;
	border-radius: 7px;
    padding: 5px;
    opacity: 0.98;
    color: #3e3939;
	}
	input[type="text"],input[type="date"],input[type="TIME"]{
        border:2px solid #3e3939;
 margin-top: 5px;
 width: 70%;
 height: 35px;
 margin-bottom: 10px;
 padding-left: 5px;

	}
	input[type="submit"]{
	font-family: 'Bellota-BoldItalic',sans-serif;
	background-color:#3e3939;
	padding: 5px 10px 5px 10px;
	border:1px solid #3e3939  ;
	margin: 5px 0px 10px 0px;
	border-radius: 3px; 
	color: #f6f4f4;
    text-shadow: #2470a0 0.5px 0.5px 0px; 
    font-size: 100%;
}
input[type="submit"]:hover
{
	
	background-color: #ff570c;
	transition: background-color 0.2s; 
	border: 1px solid #ff570c ;
	
	

}
input[type="text"]:hover,input[type="date"]:hover,input[type="TIME"]:hover{
	border-color: #ff570c;
	transition: border-color 0.3s;
	
}
#erea_txt{
	border-radius: 5px;
	width: 95%;
	height: 10%;
</style>


<div class="eventsstyle  " >
<form>
	<h1>Create Event</h1>
<label>Event Name</label><br>	
<input type="text" name="event_name" placeholder="enter your event name" required><br>
<label>Location</label><br>	
<input type="text" name="location_event" placeholder="enter your event location" required><br>
<label>Date</label>	<br>
<input type="date" name="date_event" required><br>
<label>Time</label>	<br>
<input type="TIME" name="" required><br>
<label>Description</label><br>
<textarea name="desp_event" id="erea_txt" ></textarea><br>
<input type="submit" name="submit_event" value="share">



</form >

</div>


</body>
</html>