<?php
if(isset($_POST['question'])){
    $question = $_POST['question'];
    file_put_contents('questions.txt', $question . PHP_EOL, FILE_APPEND);
    echo "Savol yuborildi!";
}
?>
