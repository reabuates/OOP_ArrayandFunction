<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Information Form</title>
</head>
<body>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Information</title>
</head>
<body>

<?php
$students = array(
    array(
        "First Name" => "Rea",
        "Middle Name" => "Biglaen",
        "Last Name" => "Buates",
        "Age" => 20,
        "Course and Year" => "Information Technology - 2nd Year",
        "Enrolled" => "Yes",
        "Subjects" => array("OOP Using PhP" => 92)
    ),
    array(
        "First Name" => "Genreson",
        "Middle Name" => "Pascua",
        "Last Name" => "De Guzman",
        "Age" => 21,
        "Course and Year" => "Civil Engineering - 4th Year",
        "Enrolled" => "Yes",
        "Subjects" => array("Engineering Management" => 90)
    ),
    array(
        "First Name" => "Angelique",
        "Middle Name" => "Secretario",
        "Last Name" => "Echaluce",
        "Age" => 20,
        "Course and Year" => "Information Technology - 2nd Year",
        "Enrolled" => "Yes",
        "Subjects" => array("Web Standards" => 93)
    ),   
    array(
        "First Name" => "John Rey",
        "Middle Name" => "Amado",
        "Last Name" => "Apable",
        "Age" => 20,
        "Course and Year" => "Information Technology - 2nd Year",
        "Enrolled" => "Yes",
        "Subjects" => array("Networking" => 95)
    )   
);
echo "<table border='1'>";
echo "<tr><th>First Name</th><th>Middle Name</th><th>Last Name</th><th>Age</th><th>Course and Year</th><th>Enrolled</th><th>Subjects</th></tr>";

foreach ($students as $student) {
    echo "<tr>";
    echo "<td>{$student['First Name']}</td>";
    echo "<td>{$student['Middle Name']}</td>";
    echo "<td>{$student['Last Name']}</td>";
    echo "<td>{$student['Age']}</td>";
    echo "<td>{$student['Course and Year']}</td>";
    echo "<td>{$student['Enrolled']}</td>";
    
    echo "<td>";
    foreach ($student['Subjects'] as $subject => $grade) {
        echo "{$subject}: {$grade}<br>";
    }
    echo "</td>";
    echo "</tr>";
}
echo "</table>";
?>
</body>
</html>
