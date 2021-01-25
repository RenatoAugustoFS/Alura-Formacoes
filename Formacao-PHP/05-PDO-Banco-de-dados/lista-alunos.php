<?php

use Alura\Pdo\Domain\Model\Student;

require 'vendor/autoload.php';

$databasePath = __DIR__ . '/banco.sqlite';

$pdo = new PDO('sqlite:' . $databasePath);

$sqlSelect = ("SELECT * FROM students");

$rows = $pdo->query($sqlSelect);

foreach($rows->fetchAll(PDO::FETCH_ASSOC) as $dataStudent){
    $studentList[] = new Student(
        $dataStudent['id'], 
        $dataStudent['name'], 
        new DateTimeImmutable($dataStudent['birth_date'])
    );
};

$sqlSelect = ("SELECT * FROM students");
$sql = $pdo->query($sqlSelect);

while($dataStudent = $sql->fetch(PDO::FETCH_ASSOC)) {
    $student = new Student(
        $dataStudent['id'], 
        $dataStudent['name'], 
        new DateTimeImmutable($dataStudent['birth_date'])
    );

    echo $student->age();
}
