<?php

//This function makes a call to facebook for the posts graph from motogp
//each item is checked in the loop below and formatted into a return 
//HTML String
require_once ("app_tokens_facebook.inc.php");

function getMotoGpString($appID,$AppSecret) {
    
  
    $page_id = 'motogp';
  
    $json_object = @file_get_contents('https://graph.facebook.com/' . $page_id .
                    '/posts?access_token=' . $appID.'|'.$AppSecret);
//Interpret data
    //nice output of return array
    //$myjson_output = json_decode($json_object, true);
    //echo '<pre>';
    //print_r($myjson_output);
    //echo '</pre>';
    
    //die($appID . ' ' . $AppSecret);
    $fbdata = json_decode($json_object);

    $index = 0;
    $posts = "";

    foreach ($fbdata->data as $post) {

        if (property_exists($post, 'name')) {

            $posts .= '<h3 style="text-align:center">' . ($post->name . '</h3><hr>');
        }

        if (property_exists($post, 'picture')) {
            $posts .= "<br><img style=\"display: block; margin-left: auto; margin-right: auto\" src=\"" . $post->picture . "\" alt=\"Smiley face\"><br>";
            //echo($post->picture . "\'><br>");
        }
        if (property_exists($post, 'description')) {
            $posts .= '<br>Description: ';
            $posts .= ($post->description . '<br>');
        }

        if (property_exists($post, 'link')) {
            $posts .= "<br><form action=\"" . $post->link . "\">";
            $posts .= "<button type=\"submit\" class=\"btn btn-primary btn-sm btn-lg btn-block\">Go to story</button></form><hr>";
        }

        $index++;
    }

    return $posts;
}

?>
