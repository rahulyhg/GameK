<?php
if(isset($_POST['categories'])) {
    $json = $_POST['categories'];
    var_dump(json_decode($json, true));

    $myFile = 'general.json';
    $fh = fopen($myFile,'w') or die('cant open file');
    $tt = 'mali';
    fwrite($fh, $tt);
    fclose($fh);

} else {
    echo "Noooooooob";
}


function json_decode_nice($json, $assoc = FALSE){
    $json = str_replace(array("\n","\r"),"",$json);
    $json = preg_replace('/([{,]+)(\s*)([^"]+?)\s*:/','$1"$3":',$json);
    return json_decode($json,$assoc);
}

?>