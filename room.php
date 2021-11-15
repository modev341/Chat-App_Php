<!-- This Script is from www.phpfreecpde.com, Coded by: Kerixa Inc-->

<?php
if (isset($_GET['enSubmit']) && isset($_GET['uname']) && isset($_GET['rname'])){
	echo'<meta http-equiv="refresh" content="10">';
	$room=$_GET['rname']; 
	$uname=$_GET['uname'];
	if (!is_dir($room)) mkdir($room);
	$files = scandir($room);
	foreach ($files as $user){
		if ($user=='.' || $user=='..') continue;
		$handle=fopen("$room/$user",'r');
		$time = fread($handle, filesize("$room/$user"));
		fclose($handle);
		if ((time()-$time)>20) unlink("$room/$user");
	}
	$contents='';
	$filename="$room.txt";
	if (file_exists($filename)){
		$handle = fopen($filename, "r");
		$contents = fread($handle, filesize($filename));
		fclose($handle);	
	}
	$handle = fopen("$room/$uname", "w");
	fwrite($handle, time());
	fclose($handle);
	
	$files = scandir($room);
	$users='';
	foreach ($files as $user) if ($user!='.' && $user!='..') $users.=$user."\n";
	
	if (isset($_POST['Send'])){
		$text=$_POST['txt'];
		$contents.="$uname: $text";
		$handle = fopen("$filename", "a");
		fwrite($handle, "$uname: $text\n");
		fclose($handle);
	}
?>
<body OnLoad="document.myform.txt.focus()">
<form action="" method="post" name="myform">
<table style="border: 2px solid #333;
margin-top:30px; border-radius:15px; width: 600px; text-align:center; background-color:#cccccc;  box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);"align="center">
	<tr>
		<td style="font-family:serif; font-size:20px;text-align:center; width: 537px; color: #fff; height: 350px;">
			<textarea readonly="readonly" name="txtchat" style="width: 600px; color: #000066; height: 365px; background-color: #f0f1f5;  border-radius:10px; font-family:serif; font-size: 20px;"><?php echo "Bienvenue sur le groupe  $room ...\n$contents"?> </textarea>
		</td>
		<td style="font-family:roboto, Times, serif;font-size: 20px;text-align: center;color: #2214B9; height: 349px; width: 143px;">
			<textarea readonly="readonly"  contenteditable="false"  name="txtusers" style="width: 163px; height: 365px; background-color:#282d3c; font-family: 'times New Roman', Times, serif; font-size: 20px; font-weight: bold; text-align: center; border-radius:10px;color:#fff"><?php echo $users?></textarea></td>
	</tr>
	<tr>
		<td style="width: 537px;text-align: left; height: 39px; font-size: 14pt;">
		<textarea id="txtt"  name="txt" style="background-color: #d1d5e0; width: 600px; height: 79px; font-family: 'times New Roman', Times, serif; font-size: 20px;border-radius:12px;"></textarea></td>
		<td style=" height: 39px;padding-left: 8px; width: 143px; text-align: center;">
		<input name="Send" style="width: 165px; height: 63px; font-size: 30pt; font-family: 'Times New Roman', Times, serif; color: #fff; background-color:#333; border-radius:12px;cursor: pointer;" type="submit" value="Envoyer"></td>
	</tr>
</table>
</form><br>
<center>
<a  style="font-family:Roboto, sans-serif;text-transform: none;outline: 0;border-radius: 12px;background:black;width: 100%;padding: 15px;  color: #FFF;font-size: 14px;-webkit-transition: all 0.3 ease;transition: all 0.3 ease;cursor: pointer;font-weight:bold;background:#333;text-decoration:none;" href="room.php">
Retour</a>
</center>

<?php
}else {
?>
<form method="get" action="">
<div class="login-page" >

  <div class="form">
  <h3 style="font-family:Rboto;
  font-weight:bold;"> PLATCHAT <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-chat-left-text-fill" viewBox="0 0 16 16">
  <path d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H4.414a1 1 0 0 0-.707.293L.854 15.146A.5.5 0 0 1 0 14.793V2zm3.5 1a.5.5 0 0 0 0 1h9a.5.5 0 0 0 0-1h-9zm0 2.5a.5.5 0 0 0 0 1h9a.5.5 0 0 0 0-1h-9zm0 2.5a.5.5 0 0 0 0 1h5a.5.5 0 0 0 0-1h-5z"/>
</svg></h3>
    <form class="login-form">
      <input  name="uname" type="text" placeholder="votre Nom "/>
	  <select name="rname" >
         <option selected="">Music</option>
         <option>Fst Errachidia</option>
         <option>Sport</option>
         <option>Cinéma</option>
         <option>Programmation</option>
         
         </select><br><br>
      <button class="btn" name="enSubmit" type="submit">Entrer</button><br>
    </form>
  </div>
</div>
</form>
<center style="width:2OOpx;height:60px">
<a class="btn" href="index.php">
Accueil</a>
<a class="btn" href="users.php" target="_blank">Retour</a>
</center>
</body>
<style>
	
.login-page {
  width: 360px;
  padding: 8% 0 0;
  margin: auto;
}
.form {
	border-radius: 15px;
  position: relative;
  z-index: 1;
  background: #FFFFFF;
  max-width: 360px;
  margin: 0 auto 100px;
  padding: 45px;
  text-align: center;
  box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
}
.form input,select {
  font-family: "Roboto", sans-serif;
  outline: 0;
  background: #fff;
  width: 100%;
  margin: 0 0 15px;
  padding: 15px;
  box-sizing: border-box;
  font-size: 14px;
}
.form input,select:hover{
border: 1px solid #333;
  border-radius:10px;}
.btn {
  font-family: "Roboto", sans-serif;
  text-transform: none;
  outline: 0;
  border-radius: 12px;
  background: black;
  width: 100%;
  border: 0;
  padding: 15px;
  color: #FFF;
  font-size: 14px;
  -webkit-transition: all 0.3 ease;
  transition: all 0.3 ease;
  cursor: pointer;
  font-weight:bold;
  background:#333;
  text-decoration:none;
}
.form button:hover,.form button:active,.form button:focus {
  
}

</style>
<?php
}
?>
<script>
el=document.myform.txtt
    if (typeof el.selectionStart == "number") {
        el.selectionStart = el.selectionEnd = el.value.length;
    } else if (typeof el.createTextRange != "undefined") {
        el.focus();
        var range = el.createTextRange();
        range.collapse(false);
        range.select();
    }</script>

