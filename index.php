
<?php

require_once"admin.php";
require_once"header.php";
/*
Product Name :  adminPageFinder
Coding By : zeyad Besiso
Copyright © 2015
*/

if(isset($_POST['add'])){

echo '<pre  id="pre" style="direction:ltr;">';

    $ports = $_POST['ports'];
    error_reporting(0);
    $getpath = get_headers($ports);
    if (!empty($ports) && eregi('404', $getpath[0]) ||!filter_var($ports,FILTER_VALIDATE_URL,FILTER_FLAG_HOST_REQUIRED)){
    echo "[status]:domain is die !";

    }elseif($_POST['type'] =="" || empty($ports) ){
    echo "[status]:Please Enter site or  type ! ";
        }else{
        if($_POST['type']=="php")
        $type = $php;
        elseif($_POST['type']=="asp")
        $type = $asp;
        elseif($_POST['type']=="cfm")
        $type = $cfm;
        elseif($_POST['type']=="js")
        $type = $js;
        elseif($_POST['type']=="cgi")
        $type = $cgi;
        else $type = $brf;
        echo "###############################\r\n";
        echo "[{$ports}] => domain is online !\r\n";
        echo "-> Target: {$ports}\r\n";
        echo "###############################\r\n";
        $i=0;
        foreach($type as $type => $zz){
            $n=$i++;
            flush();ob_flush();set_time_limit(360000);
            $path =$ports.$zz;
                $cr = curl_init();
                    curl_setopt($cr,CURLOPT_RETURNTRANSFER,1);
                    curl_setopt($cr,CURLOPT_HEADER,1);
                    curl_setopt($cr,CURLOPT_URL,$path);
                    $url = curl_exec($cr);
                curl_close($cr);
                $f=0;
                if (preg_match("/200 OK/",$url)) {

                   flush();
                   echo "###############################\r\n";
                echo "[$n]<span style='color:#FFF;'>[status][Found!]</span> <- [{$path}] \r\n";
                $f++;ob_flush();break;

                }elseif(preg_match("/401 Unauthorized/",$url)){

                    flush();
                    echo "###############################\r\n";
                echo "[$n]<span style='color:#FFF;'>[status][Possible admin page(302-Redirect)] </span> <-[{$path}]\r\n";
                ob_flush();break;

                }else{
                    flush();
                	echo "[#]<span style='color:red;'>[status][not Found]</span> -> [{$path}]\r\n";
                   sleep(1);ob_flush();
                }
        }
            echo "###############################\r\n";
            echo "[$n] total pages scanned \r\n";
            echo "[$f] admin pages found  \r\n";


        }
    }
echo '</pre>';


include_once"footer.php";

?>
