<?php
function after_char($in_char){
  $out_char = ++$in_char;
  if (strlen($out_char) > 1) 
{
 $out_char = $out_char[0];
 }
  return $out_char;
  
}
echo after_char("z")
?>