<?php 

function base_url($uri = false)
{

	$base_url = ((isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == "on") ? "https" : "http");
	$base_url .= "://" . $_SERVER['HTTP_HOST'];
	$full_path = $base_url . explode('?', $_SERVER['REQUEST_URI'], 2)[0];
	$base_url .= str_replace(basename($_SERVER['SCRIPT_NAME']), "", $_SERVER['SCRIPT_NAME']);

	if ($uri)
	{
		$base_url = $full_path;
	}

	return $base_url;
}

function turnUrlIntoHyperlink($string){
    //The Regular Expression filter
    $reg_exUrl = "/(?i)\b((?:https?:\/\/|www\d{0,3}[.]|[a-z0-9.\-]+[.][a-z]{2,4}\/)(?:[^\s()<>]+|\(([^\s()<>]+|(\([^\s()<>]+\)))*\))+(?:\(([^\s()<>]+|(\([^\s()<>]+\)))*\)|[^\s`!()\[\]{};:'\".,<>?«»“”‘’]))/";

    // Check if there is a url in the text
    if(preg_match_all($reg_exUrl, $string, $url)) {

        // Loop through all matches
        foreach($url[0] as $newLinks){
            if(strstr( $newLinks, ":" ) === false){
                $link = 'http://'.$newLinks;
            }else{
                $link = $newLinks;
            }

            // Create Search and Replace strings
            $search  = $newLinks;
            $replace = '<a href="'.$link.'" title="'.$newLinks.'" target="_blank">'.$link.'</a>';
            $string = str_replace($search, $replace, $string);
        }
    }

    //Return result
    return $string;
}