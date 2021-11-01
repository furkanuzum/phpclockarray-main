<?PHP
    function printArray($array){
      //print_r($array);
      $length = count($array);
      for($i=0;$i<$length;$i++){
        $length2= count($array[$i]);
        for($j=0;$j<$length2;$j++){
          $myNumber=str_pad($array[$i][$j],2," ",STR_PAD_LEFT);
          print_r($myNumber."-");
        }
        
        print_r("\n");
      }
    }
    function solution1(){
      $x=10;
      $y=8;
      $myArray=array();//boş matris
      $outerFrame=function ($matris,$step,$startNumber) use($x,$y)//step kaçıncı çerçeve
      {
          $startX=$step;
          $endX=$x-$step-1; 

          $startY=$step;
          $endY=$y-$step-1;
          for($i=$startX;$i<=$endX;$i++){
              $matris[$i][$startY]=$startNumber;
              $startNumber++;
          }
          for($i=$startY+1;$i<=$endY;$i++){
              $matris[$endX][$i]=$startNumber;
              $startNumber++;
          }
          for($i=$endX-1;$i>=$startX;$i--){
              $matris[$i][$endY]=$startNumber;
              $startNumber++;
          }
          for($i=$endY-1;$i>=$startY+1;$i--){
              $matris[$startX][$i]=$startNumber;
              $startNumber++;
          }
          //print "step: $step";
          //print_r($matris);
          return [$matris,$startNumber];
      };
      $myStartNumber=0;
      $minimum=min($x,$y); 
      $frameCount=ceil($minimum/2);//çerçeve sayısı belırle
      for($i=0;$i<=$frameCount;$i++){
        [$myArray,$myStartNumber]=$outerFrame($myArray,$i,$myStartNumber);
      }
      printArray($myArray);
    }
    solution1();


    function solution2(){

    }
    solution2();



?>