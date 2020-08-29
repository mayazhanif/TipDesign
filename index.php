<?php 
include("db.php");
session_start();
$_SESSION['videoid']="456223";
    $videoID=$_SESSION['videoid'];
    $query="select * from Emoji WHERE StreamID = $videoID";
    $result = mysqli_query($con,$query);
    $exe = mysqli_query($con,$query);
	while ($row = mysqli_fetch_array($exe)){
		$Fire=$row['Fire'];
		$Heart=$row['Heart'];
		$Laugh=$row['Laugh'];
		$CLAP=$row['CLAP'];
	}
?>

<!DOCTYPE html>
<html>
<head>
 <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Tip Design</title>
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.compat.css">
    <link href="https://emoji-css.afeld.me/emoji.css" rel="stylesheet">
    
    <link rel="stylesheet" href="assets/style.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="assets/animation.js"></script>
<script>
    var count = (function () {
        var counter = <?php echo $Fire; ?>;
        return function () { 
        InsertFunction(1);    
        return counter += 1; }
    })();
    var count1 = (function () {
        var counter = <?php echo $Heart; ?>;
        return function () { 
        InsertFunction(2);    
        return counter += 1; }
    })();
    var count2 = (function () {
        var counter = <?php echo $Laugh; ?>;
        return function () {
        InsertFunction(3);  
        return counter += 1; }
    })();
    var count3 = (function () {
        var counter = <?php echo $CLAP; ?>;
        return function () {
        InsertFunction(4);  
        return counter += 1; }
    })();
</script>

</head>
<body>


<div class="chat-bot">

<div class="message-box" style="    height: 496px;">
<div style="margin-bottom: 129px;">

Top Tutorials
HTML Tutorial
CSS Tutorial
JavaScript Tutorial
How To Tutorial
SQL Tutorial
Python Tutorial
W3.CSS Tutorial
Bootstrap Tutorial
PHP Tutorial
jQuery Tutorial
Java Tutorial
C++ Tutorial
Top References
HTML Reference
CSS Reference
JavaScript Reference
SQL Reference
Python Reference
W3.CSS Reference
Bootstrap Reference
PHP Reference
HTML Colors
jQuery Reference
Java Reference
Angular Reference
Top Examples
HTML Examples
CSS Examples
JavaScript Examples
How To Examples
SQL Examples
Python Examples
W3.CSS Examples
Bootstrap Examples
PHP Examples
jQuery Examples
Java Examples
XML Examples
Web Certificates
HTML Certificate
CSS Certificate
JavaScript Certificate
SQL Certificate
Python Certificate
jQuery Certificate
PHP Certificate
Bootstrap Certificate
XML Certificate
W3Schools is optimized for learning, testing, and training. Examples might be simplified to improve reading and basic understanding. Tutorials, references, and examples are constantly reviewed to avoid errors, but we cannot warrant full correctness of all content. While using this site, you agree to have read and accepted our terms of use, cookie and privacy policy. Copyright 1999-2020 by Refsnes Data. All Rights Reserved.
Powered by W3.CSS.

W3Schools.com


Top Tutorials
HTML Tutorial
CSS Tutorial
JavaScript Tutorial
How To Tutorial
SQL Tutorial
Python Tutorial
W3.CSS Tutorial
Bootstrap Tutorial
PHP Tutorial
jQuery Tutorial
Java Tutorial
C++ Tutorial
Top References
HTML Reference
CSS Reference
JavaScript Reference
SQL Reference
Python Reference
W3.CSS Reference
Bootstrap Reference
PHP Reference
HTML Colors
jQuery Reference
Java Reference
Angular Reference
Top Examples
HTML Examples
CSS Examples
JavaScript Examples
How To Examples
SQL Examples
Python Examples
W3.CSS Examples
Bootstrap Examples
PHP Examples
jQuery Examples
Java Examples
XML Examples
Web Certificates
HTML Certificate
CSS Certificate
JavaScript Certificate
SQL Certificate
Python Certificate
jQuery Certificate
PHP Certificate
Bootstrap Certificate
XML Certificate
W3Schools is optimized for learning, testing, and training. Examples might be simplified to improve reading and basic understanding. Tutorials, references, and examples are constantly reviewed to avoid errors, but we cannot warrant full correctness of all content. While using this site, you agree to have read and accepted our terms of use, cookie and privacy policy. Copyright 1999-2020 by Refsnes Data. All Rights Reserved.
Powered by W3.CSS.

W3Schools.com


</div>

<img src="https://emojipedia-us.s3.dualstack.us-west-1.amazonaws.com/thumbs/120/apple/237/fire_1f525.png" style="height:60px;width:60px;" class="picture"> 
<img src="https://emojipedia-us.s3.dualstack.us-west-1.amazonaws.com/thumbs/120/apple/237/fire_1f525.png" style="height:60px;width:60px;" class="picture2"> 
<img src="https://emojipedia-us.s3.dualstack.us-west-1.amazonaws.com/thumbs/120/apple/237/fire_1f525.png" style="height:90px;width:90px;" class="picture3"> 

<img src="https://emojipedia-us.s3.dualstack.us-west-1.amazonaws.com/thumbs/120/joypixels/257/red-heart_2764.png" style="height:90px;width:90px;" class="picture4"> 
<img src="https://emojipedia-us.s3.dualstack.us-west-1.amazonaws.com/thumbs/120/joypixels/257/red-heart_2764.png" style="height:60px;width:60px;" class="picture5"> 
<img src="https://emojipedia-us.s3.dualstack.us-west-1.amazonaws.com/thumbs/120/joypixels/257/red-heart_2764.png" style="height:60px;width:60px;"  class="picture6"> 

<img src="https://emojipedia-us.s3.dualstack.us-west-1.amazonaws.com/thumbs/120/twitter/259/face-with-tears-of-joy_1f602.png" style="height:90px;width:90px;" class="picture7"> 
<img src="https://emojipedia-us.s3.dualstack.us-west-1.amazonaws.com/thumbs/120/twitter/259/face-with-tears-of-joy_1f602.png" style="height:90px;width:90px;" class="picture8"> 
<img src="https://emojipedia-us.s3.dualstack.us-west-1.amazonaws.com/thumbs/120/twitter/259/face-with-tears-of-joy_1f602.png" style="height:60px;width:60px;" class="picture9"> 

<img src="https://emojipedia-us.s3.dualstack.us-west-1.amazonaws.com/thumbs/160/twitter/259/clapping-hands_1f44f.png" style="height:60px;width:60px;" class="picture10"> 
<img src="https://emojipedia-us.s3.dualstack.us-west-1.amazonaws.com/thumbs/160/twitter/259/clapping-hands_1f44f.png"  style="height:90px;width:90px;" class="picture11"> 
<img src="https://emojipedia-us.s3.dualstack.us-west-1.amazonaws.com/thumbs/160/twitter/259/clapping-hands_1f44f.png" style="height:60px;width:60px;" class="picture12"> 

<div class="send-a-tip" style="display:none">
<h3>Send a Tip <a href="#" class="tip-close"></a></h3>

<div class="tip-money-box">
<ul>
<li><span>$5</span></li>
<li><span>$10</span></li>
<li><span>$20</span></li>
<li><span>$50</span></li>
<li><span>$100</span></li>
<li><span>$</span><input type="text" class="custom-tip" placeholder="CUSTOM"/></li>
</ul>
</div>

</div>
<div class="tip-visa" style="display:none">
<h3>
<span class="tip-back-arrow"></span> 
<div  class="select-visa">
<select>
<option value="Visa 5368">Visa 5368</option>
<option value="Visa 4269">Visa 4269</option>
</select>
</div>
 </h3>
<h4 class="amount-selcted">$10</h4>
<div class="tip-visa-list">
<ul>
<li><span>Your tip</span></li>
<li><span>$10</span></li>
</ul>
<ul>
<li><span>CC fee</span></li>
<li><span>$0.33</span></li>
</ul>
<ul>
<li><span>Total</span></li>
<li><span>$10.33</span></li>
</ul>
</div>
<div class="add-notes">
<textarea rows="1" cols="1" class="note-area" placeholder="Add a message"></textarea>
</div>
<div class="send-box">
<a href="#" class="btn-send">Send tip for $10.33</a>
</div>

</div>

<div class="success-check" style="display:none">
<h3>Success <a href="#" class="tip-close"></a></h3>
<div class="success-box">
<img src="https://assets.codepen.io/t-1810/succes-check.png" alt="succes-check"/>
</div>
</div>

<div class="message-box-pubnub"> <a href="#" class="new-msg" style="display: none;">NEW MESSAGES</a>

<div class="tip-box">
<ul>
<li><a href="#" class="btn-tip">$ TIP</a></li>
<li><div class="emoji-box1">
				<i style="height:30px;width:30px" type="button" class="my-element btn em em-fire" onclick="displaycount();ani();"></i>
                        <button type="button" class="btn btn-light" onclick="displaycount();ani();" id="carrier"><?php echo $Fire; ?></button>
						<!--<span class="fire icon-emoji"></span><span class="icon-emoji-hits">1.12K+</span>---></div></li>
<li><div class="emoji-box2">
<i type="button" style="height:30px;width:30px" class="my-element1 btn em em-heart" onclick="displaycount1();ani1();"></i>
                        <button type="button" class="btn btn-light" onclick="displaycount1();ani1();" id="carrier1"><?php echo $Heart; ?></button>
						<!--<span class="heart icon-emoji"></span><span class="icon-emoji-hits">1.7K+</span>--></div></li>
<li><div class="emoji-box3">
<i type="button" style="height:30px;width:30px" class="my-element2 btn em em-joy" onclick="displaycount2();ani2();"></i>
                        <button type="button" class="btn btn-light" onclick="displaycount2();ani2();" id="carrier2"><?php echo $Laugh; ?></button>
						<!--<span class="sad icon-emoji"></span><span class="icon-emoji-hits">1.9K+</span>-->
						</div></li>
<li><div class="emoji-box4">
<i type="button" style="height:30px;width:30px" class="my-element3 btn em em-clap" onclick="displaycount3();ani3();"></i>
                        <button type="button" class="btn btn-light" onclick="displaycount3();ani3();" id="carrier3"><?php echo $CLAP; ?></button>
						<!--<span class="clap icon-emoji"></span><span class="icon-emoji-hits">258</span>--></div></li>
</ul>
</div>
<div id="message-input" 
data-text="Chat with 0 audience members" class="focus-visible" contenteditable="true"></div> <button 
id="emoji-button"></button> <svg version="1.1" id="chat-send-pubnub" xmlns="http://www.w3.org/2000/svg" 
xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="535.5px" height="535.5px" viewBox="0 0 535.5 535.5" 
style="width: 20px; height: 20px; fill: rgb(249, 79, 104);" xml:space="preserve"><g id="send"><polygon points="0,497.25 
535.5,267.75 0,38.25 0,216.75 382.5,267.75 0,318.75"></polygon> </g></svg></div>

</div>
</div>

</body>
</html>
