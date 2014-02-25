<?php 
function escapeURLData($dataToEscape){
	if(get_magic_quotes_gpc()){
		$dataToEscape = stripslashes($dataToEscape);
	}
	$dataOUT = mysql_real_escape_string($dataToEscape);
	return $dataOUT;
}

/*
 * Validate a username that conforms to:
 * 5-20 characters long
 * lower or uppercase characters and numbers 0-9
 * "_-@." are all acceptable
 *
 * NOTE: this is not as restrictive as the email validator
 */
function validUsername($username) {
	
	if (preg_match("/@/", $username)) {
		return validEMail($username);
	}else {
		return preg_match("/^[_A-z0-9-+\.]{3,64}$/", $username);
	}
}


/* 
 * Validate an Email address that conforms to:
 * format: name@domain
 * name must be be between 1 and 64 characters
 * domanin is between 1 and 255
 * name portion may have upper/lower character, numbers, dots, underscores and dashes
 */
function validEMail($email) {
  if (!ereg("^[^@]{1,64}@[^@]{1,255}$", $email)) {
      return false;
  }
  $email_array = explode("@", $email);
  $local_array = explode(".", $email_array[0]);
  for ($i = 0; $i < sizeof($local_array); $i++) {
    if(!ereg("^(([A-Za-z0-9!#$%&'*+/=?^_`{|}~-][A-Za-z0-9!#$%&↪'*+/=?^_`{|}~\.-]{0,63})|(\"[^(\\|\")]{0,62}\"))$",$local_array[$i])) {
      return false;
    }
  }
  if (!ereg("^\[?[0-9\.]+\]?$", $email_array[1])) {
    $domain_array = explode(".", $email_array[1]);
    if (sizeof($domain_array) < 2) {
        return false;
    }
    for ($i = 0; $i < sizeof($domain_array); $i++) {
      if(!ereg("^(([A-Za-z0-9][A-Za-z0-9-]{0,61}[A-Za-z0-9])|↪([A-Za-z0-9]+))$",$domain_array[$i])) {
        return false;
      }
    }
  }
  return true;
}

?>
