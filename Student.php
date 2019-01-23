<?php 


	class Student  {

      private $grades;  // define new variable
     
     function __construct() //  construct of Student class
	{
		
		$this->grades = array(); //Give initial value
	}

      public function setGrades($grades) //  function to access grades variable and change his value 
      {
      	
      	$this->grades = $grades;
      }

      public function getGrades() // function to get last value of grades variable and return value
      {
      	# code...
      	return $this->grades;

      }

		function gradingStudent($grades) { // function to calculate grades 
			
      for ($index=0; $index < count($grades); $index++) { // loop to check all values in grades array
      	# code...
        if ( $grades[$index] >= 0 && $grades[$index] <= 100  ) { // check if grade greater than or equal zero and check if grade less than or equal one hundred

     
            if ($grades[$index] >= 38) { // check if grade greater than or equal 38 
            	
              for ($grade=$grades[$index]; $grade <= 100 ; $grade++) { 

               if ($grade % 5 == 0) { // check if grade mod 5 
                  $new_grade = $grade;
                  
                  break;
                }
                 
              }

             
             $Original_grade = $grades[$index];
             $check_grade = $new_grade - $Original_grade;
              if ($check_grade < 3) {
                $grades[$index] = $new_grade;
              }else{
                $grades[$index] = $Original_grade;
              }

            }elseif ($grades[$index] < 38) {
              # code...
              $Original_grade = $grades[$index];
              $grades[$index] = $Original_grade;
            }

       }
       // wrong garade 
       else{
        $message = "wrong grade";
          
       }

      }
       

   
       
      return $grades ; // return final value of grades array
		}
   

	}

	
?>