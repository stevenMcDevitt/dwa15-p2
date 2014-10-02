<?php

if(isset($_GET['includeNumbers'])) {
	$generatedPassword = "Numbers";
	$includeNumbers = true;
} else {
	$includeNumbers = false;
}

if(isset($_GET['includeSymbols'])) {
	$generatedPassword = "Symbols";
	$includeSymbols = true;
} else {
	$includeSymbols = false;
}


