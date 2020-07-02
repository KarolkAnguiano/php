
<?php

$categoria=$_POST['categoria'];
$s=$_POST['s'];
$total=0;

  
switch ($categoria) {
			case 'a':
				echo "Su salario final es de: $".$total = $s*(15/100)+($total+$s);
				break;
        
				case 'b': 
				echo "Su salario final es de: $".$total = $s*(10/100)+($total+$s);
				break;
        
				case 'c': 
				echo "Su salario final es de: $".$total = $s*(8/100)+($total+$s); 
				break;
        
                case 'd': 
				echo "Su salario final es de: $".$total = $s*(7/100)+($total+$s);
				break;
        
				default: 
				echo "error";
				break;
			}



?>