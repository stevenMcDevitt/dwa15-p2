<?php

// - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
// Setup arrys of word, numbers and symbols that can be 
// used to form a password.
// - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -

$appMsg = 'No error';
$appTrace = 'logic.php ';

$appTraceOn = false;

if($passwordWords = file('CommonEnglishWords.txt')) {
	$appTrace = $appTrace.'Words Loaded ';
	$totalWords = count($passwordWords);
} else {
	$appTrace = $appTrace.'Words Load Failed ';
	$appMsg = 'Words Load Failed ';
}

if($passwordSymbols = file('PasswordSymbols.txt')) {
	$appTrace = $appTrace.'Symbols Loaded ';
	$totalSymbols = count($passwordSymbols);
} else {
	$appTrace = $appTrace.'Symbols Load Failed ';
	$appMsg = 'Symbols Load Failed ';
}

if($passwordNumbers = file('PasswordNumbers.txt')) {
	$appTrace = $appTrace.'Numbers Loaded ';
	$totalNumbers = count($passwordNumbers);
} else {
	$appTrace = $appTrace.'Numbers Load Failed ';
	$appMsg = 'Numbers Load Failed ';
}

// - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
// Retain the user's current selections
// - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -

if(isset($_GET['wordCount'])) {
	$wordCount = $_GET['wordCount'];
	$appTrace = $appTrace.'wordCount Set ';
} else {
	$wordCount = 0;
	$appTrace = $appTrace.'wordCount Set Failed ';
	$appMsg = 'wordCount Set Failed  ';
}

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

// - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -

// - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -

$passwordComponents = [];
$generatedPassword = "";

if($wordCount > 0) {
	for($i = 0; $i < $wordCount; $i++) {
		$rand = rand(0,$totalWords);
		$selectedWord = trim($passwordWords[$rand]);
		array_push($passwordComponents, $selectedWord);
	}
}

if($includeNumbers) {
	$rand = rand(0,$totalNumbers);
		$selectedWord = trim($passwordNumbers[$rand]);
		array_push($passwordComponents, $selectedWord);
}

if($includeSymbols) {
	$rand = rand(0,$totalSymbols);
		$selectedWord = trim($passwordSymbols[$rand]);
		array_push($passwordComponents, $selectedWord);
}

$generatedPassword = implode("-",$passwordComponents);



