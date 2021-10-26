<?PHP
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
        print "step: $step";
        print_r($matris);
        return $startNumber;
    };
    $myStartNumber=0;
    $minimum=min($x,$y); 
    $frameCount=ceil($minimum/2);//çerçeve sayısı belırle
    for($i=0;$i<=$frameCount;$i++){
       $myStartNumber=$outerFrame($myArray,$i,$myStartNumber);
    }
    print_r($myArray);
    //$j=outerFrame($myArray,0,0);//startnumber kaçta kaldıysa onu j ye atadı.***
    //$j=outerFrame($myArray,1,$j);//1 içteki çerçeve olduğu için
    //$j=outerFrame($myArray,2,$j);
    //$j=outerFrame($myArray,3,$j);
?>