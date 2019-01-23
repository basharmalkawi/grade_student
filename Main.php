<?php 
require_once('Student.php');

?>
<?php 
    
    class Main extends Student
    {

      public function getResult($initial_grades)
      {
        
      
      $grades_before_rounding =$initial_grades;

      $grading_student = new Student; // new object from Student class 

      $grading_student->setGrades($grades_before_rounding); // call setGrades function and pass the grade before rounding

      $get_grading_before_rounding = $grading_student->getGrades(); // call getGrades function to return values of grades array.

      $grading_student_rounded = $grading_student->gradingStudent($get_grading_before_rounding); // call gradingStudent function to calculate all grades and round it

        return $grading_student_rounded; // return grades after round
      }
      
    }

   


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Classera Task</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Student form</h2>
  
  <form class="form-inline" action="" method="post">
   
    <button type="submit" name="show_result" class="btn btn-default">Show Result</button>
  </form>
  <br>
  <?php 
$initial_grades = array('4' , '73' , '67' , '38' , '33');
  if (isset($_POST['show_result'])  ) {
      # code...
       
       $grades_rounded = new Main; // new object from Main class
       $rounded_result = $grades_rounded->getResult($initial_grades); // return final grades 
      
      echo "<table  border='1' style='width:25%'>" ; 
      echo "<tr> ";
      echo "<th> ID </th>";
      echo "<th> Original Grade </th>";
      echo "<th> Final Grade </th>";
      echo "</tr>";

           
      for ($count=0; $count < count($rounded_result) ; $count++) { 
        # code...
        echo "<tr>";
        echo "<td>";
        echo $count+1;
        echo "</td>";
        echo "<td>";
         echo $initial_grades[$count];
         echo "</td> ";

         echo "<td>";
         echo $rounded_result[$count];
         echo "</td> ";
         echo "</tr>";

      }
      
     
      echo "</table>";
    }
  ?>

</div>

</body>
</html>
