<!DOCTYPE html>
<html>
<head>
    <title>My First PHP Website</title>
</head>
<body>
    <h1>Welcome to My First PHP Website</h1>
    <?php

    function calculateGrade($marks){
        if($marks>=90){
            echo "A";}
        elseif($marks>=80 and $marks<90){
            echo "B";}
        elseif($marks>=70 and $marks<80){
            echo "C";}
        elseif($marks<70){
            echo "fail";
        }
    }
        echo "Hello, World!";
        $student1_marks=90;
        $student2_marks=88;
        $student3_marks=75;
        $student4_marks=70;

        echo "<br>";
        echo $student1_marks;
      calculateGrade($student1_marks);
        echo ": ";
    echo $student2_marks;
    calculateGrade($student2_marks);
    echo": ";
    echo $student3_marks;
    calculateGrade($student3_marks);
    echo ": ";
    echo $student4_marks;
    calculateGrade($student4_marks);

    ?>
</body>
</html>