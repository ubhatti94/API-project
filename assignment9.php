<!DOCTYPE html>
<html>
    <head>
        <title>Print Astronauts</title>
     </head>
    <body style="background-color:black;">
        <form action="" method="GET">
            <h1><font color="white">Is Anybody Out There?</font></h1>
            <p><font color="white">This project displays the information about the astronauts that are currently in outer-space. This information is offered by NASA through an API from <a href="http://api.open-notify.org/astros.json"><font color="red">http://api.open-notify.org/astros.json</font></a>. To display the information press the click button below.</font></p>
            <input type="submit" value="click" name="submit"> 
        </form>
    </body>
</html>
<?php
    
if(isset($_GET['submit'])){
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, 'http://api.open-notify.org/astros.json');
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    $result = curl_exec($curl);

    echo"<font color='white'><br>Here is the information from http://api.open-notify.org/astros.json which is an API that offers information about the astronauts that are currently in space, displayed in JSON format: <br><br>" . $result . '<br><br>';

    $data=file_get_contents('http://api.open-notify.org/astros.json');
    $characters = json_decode($data,true);
    
    echo "Below I have parsed out the astronaut's name that are currently in outer-space and which craft of each astronaut, respectively: <br><br>";
    
    foreach ($characters['people'] as $character){
        echo $character['name']." is flying in the " .$character['craft'] . ' craft.<br>';
    }
    
    echo "<br>Below I have parsed out only the names of the astronauts that are currently in outer-space: <br><br>";
    
    foreach ($characters['people'] as $character){
        echo $character['name'] . '.<br>';
    } 
}
echo "</font>";
?>
            
    

