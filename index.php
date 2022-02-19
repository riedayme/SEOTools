<?php define('BASEPATH', true); // protect script from direct access

require "includes/helper.php";
require "includes/config.php";

switch (@$_GET['module']) {	

	case 'keywordsuggest':
	include "modules/keywordsuggest.php";
	break;

	case 'googlesuggest':
	include "modules/googlesuggest.php";
	break;	

	case 'wordtextspinner':
	include "modules/wordtextspinner.php";
	break;	

	case 'wordcounter':
	include "modules/wordcounter.php";
	break;	

	default:
	include "modules/dashboard.php";
	break;
}
?>