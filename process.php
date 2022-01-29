<?php

/*Downloaded from: https://github.com/sunmandev/audio_tube/
Created by: sunmandev 
My website: http://sunman.epizy.com   
*/

//vars
$key = md5(uniqid(rand(), true));
$filename = $key . ".py" ;
$filename_root = "audio/". $key . ".py" ;
$audioname_root = "audio/". $key . ".mp3" ;
$audioname = $key . ".mp3" ;

  //Checking the the field isn't empty
if(isset($_POST['Download']) && !empty($_POST['url']) && !ctype_space($_POST['url'])){

  $url = $_POST['url'];

  //Creating the python file

  $write = fopen($filename_root,"w+");
  $data = "
from pytube import YouTube
import os
yt = YouTube('" . $url . "')
video = yt.streams.filter(only_audio=True).first()  
out_file = video.download()
base, ext = os.path.splitext(out_file)
new_file = base + '.mp3'
os.rename(out_file, '" . $audioname . "')
  ";
  fwrite($write,$data);

  //Executing the python file
        shell_exec("py $filename_root");
      
        //checking if the audio exists
        if(file_exists($audioname)){
        //Moving it into audio folder
          rename($audioname, $audioname_root);
          //Moving the visitor to the audio file to download it or listen to it
          header("Location: $audioname_root");
          //Deleting the python file
          unlink($filename_root);
          //Closing the write command
          fclose($write);
  
      }else{
        //Deleting the python file
        unlink($filename_root);
       echo"<p class='err'>Error: Check the youtube link you entered!</p>";
    }
  

}
?>