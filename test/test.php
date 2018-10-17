<?php
$string = '1111';
if (ereg("^[a-za-я0-9_]{8,20}$",$string)) echo "yes";
else echo "no";