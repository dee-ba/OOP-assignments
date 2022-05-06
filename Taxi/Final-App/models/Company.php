 <?php

// BEST PRACTICES:
// EACH CLASS SHOULD HAVE ITS OWN FILE. THERE SHOULD ONLY BE A SINGLE CLASS DEFINITION IN HERE.
// THE CLASSNAME SHOULD BE SINGULA AND CAPITALIZED: Company - Administration - Order - Person - Product.
// YOU NEVER INSTANTIATE THE CLASS IN THE CLASS FILE. NO $example = new Example(); in this file.

class Company {

    
    public $cars;
       
        
    function __construct(){
            $this->cars = [];
        }
      
    public function addCar($cars){
            array_push($this->cars, $cars);
        }
   
    
        public function calculateMostExpensiveCar(){
            $mostExpensiveCar = $this->cars[0];
            for($this->cars as $cars){
                if($cars->price > $mostExpensiveCar->price){
                    $mostExpensiveCar = $cars;
                }
            }
            return $mostExpensiveCar;
        }

    }

?>
