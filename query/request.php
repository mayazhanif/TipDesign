<?php
include("../db.php");
session_start();
$_SESSION['videoid']="456223";
if ((isset($_REQUEST['emojiID'])) && (isset($_SESSION['videoid'])) && ($_REQUEST['function']==1)){
    $emojiID=$_REQUEST['emojiID'];
    $videoID=$_SESSION['videoid'];
    if ($emojiID==1){
        $query="UPDATE Emoji SET Fire = Fire + 1 WHERE StreamID = $videoID";
        $result = mysqli_query($con,$query);
        echo "true";
    }
    else if ($emojiID==2){
        $query="UPDATE Emoji SET Heart = Heart + 1 WHERE StreamID = $videoID";
        $result = mysqli_query($con,$query);
        echo "true";
    }
    else if ($emojiID==3){
        $query="UPDATE Emoji SET Laugh = Laugh + 1 WHERE StreamID = $videoID";
        $result = mysqli_query($con,$query);
        echo "true";
    }
    else  if ($emojiID==4){
        $query="UPDATE Emoji SET CLAP = CLAP + 1 WHERE StreamID = $videoID";
        $result = mysqli_query($con,$query);
        echo "true";
    }
    else {
        echo "Invalid Request";
    }
}
else if ((isset($_REQUEST['emojiID'])) && (isset($_SESSION['videoid'])) && ($_REQUEST['function']==2)){
    $emojiID=$_REQUEST['emojiID'];
    $videoID=$_SESSION['videoid'];
    
    $query="select * from Emoji WHERE StreamID = $videoID";
    $result = mysqli_query($con,$query);
    $exe = mysqli_query($con,$query);
	while ($row = mysqli_fetch_array($exe)){
    if ($emojiID==1){
        $fire=$row['Heart'];
        echo '{"result":" '.$fire.'"}';
       // echo $row['Fire'];
        
    }
    else if ($emojiID==2){

        $Heart= $row['Heart'];
        echo '{"result":" '.$Heart.'"}';

    }
    else if ($emojiID==3){

        $Laugh= $row['Laugh'];
        echo '{"result":" '.$Laugh.'"}';

    }
    else  if ($emojiID==4){
        $CLAP= $row['CLAP'];
        echo '{"result":" '.$CLAP.'"}';

    }
    else {
        echo "Invalid Request";
    }
    
	}  
}
else {
    echo "Parameters Missing.";
}
?>