<?php

global $link;

function PokazPodstrone($title)
{
    include('cfg.php');
    $sql = 'SELECT * FROM `page_list` WHERE page_title="'.$title.'" LIMIT 1';

    if($res = mysqli_query($link, $sql)) {
        if(mysqli_num_rows($res) > 0) {
            while($row = mysqli_fetch_array($res)) {
                echo $row['page_content'];
            }
            mysqli_free_result($res);
        }
        else {
            echo 'nie ma';
        }
    }
    else{
        echo "ERROR2".mysqli_error($link);
    }
    mysqli_close($link);
}

?>