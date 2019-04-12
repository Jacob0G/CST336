<?php

// $word_id = $_GET['word_id'];
// $letter = $_GET['letter'];
// $correct = $_GET['correct_answers'];
// $wrong = $_GET['wrong_answers'];
$word_id = 1;
$letter = 'a';
$correct[3];
$wrong[5];

include '../../../inc/dbConnection.php';
$conn = getDatabaseConnection("hangman");

$sql = "SELECT word, length(word) length FROM words WHERE word_id = $word_id";
$stmt = $conn -> prepare($sql);  
$stmt->execute();
$record = $stmt->fetch(PDO::FETCH_ASSOC); 

// Stuff done here
$length = $record['length'];
$word = $record['word'];
$used = false; // if letter was already used
$insideWord = false; // if letter does not exist in word


for($y=0;$y=count($wrong);$y++){  // checking if resued wrong letter
    if($letter ===$wrong[$y]){//cheching for used letters
        $used = true;        
    }
}

for($x=0;$x<=count($correct);$x++){  // checking if used correct letter
    if($letter ===$correct[$x]){//cheching for used letters
        $used = true;        
    }
}

if($used === false){ // checkin if new letter exists in word
    for($i=0;$i<=$length;$i++){ // checking the word for the letter.
        if($letter == $word[$i]){ // if letter in word set correct[i] = letter;
            $correct[$i] = $letter;
            $insideWord = true;
        }
    }
    if($insideWord === false){
        $wrong[count($wrong)] = $letter;
    }
}
$rightWrong[0] = $correct;
$rightWrong[1] = $wrong;
echo json_encode($rightWrong);
// 
?>