<?php
//$Alc = int(input("Is there any alcohol in the blood?(0 - yes, 1 - no) "));
$Alc = "0";
switch ($Alc) {
    case 0 : //Alcohol Related
      $Alc_Grade = 0;
      $p1 = 0.073800738;
      //print('Alc_Grade = ', Alc_Grade) //Not important part, can be deleted to save memory
      //print('p1 = ', p1) //Not important part, can be deleted to save memory
      break;
    case 1 : //NonAlcohol Related
      $Alc_Grade = 4;
      $p1 = 0;
      //print('Alc_Grade = ', Alc_Grade) //Not important part, can be deleted to save memory
      //print('p1 = ', p1) //Not important part, can be deleted to save memory
    break;
    default:
    echo("Error");
    break;
    }
//$TXT = int(input("Do you write messages when you drive a car??(0 - yes, 1 - no) "));
$TXT = "0";

switch($TXT) {
    case(0): //The driver writes
      $TXT_Grade = 0;
      $p2 = 2.65;
      //print('TXT_Grade = ', TXT_Grade) //Not important part, can be deleted to save memory
      //print('p2 = ', p2) //Not important part, can be deleted to save memory
      break;
    case(1): //The driver does not write
      $TXT_Grade = 4;
      $p2 = 0;
      //print('TXT_Grade = ', TXT_Grade) //Not important part, can be deleted to save memory
      //print('p2 = ', p2) //Not important part, can be deleted to save memory
    break;
    default:
    echo("Error");
    break;
    }

//$RD = int(input("Do you drive aggressively or do you obey all the rules of the road? (0 - I drive aggressively, 1 - I am a calm driver) "));
$RD = "0";

switch($RD) {
    case(0): //Aggressive driving
      $RD_Grade = 0;
      $p3 = 0.03278688524;
      break;
    case(1): //Reckless driving/Tailgatin
      $RD_Grade = 4;
      $p3 = 0.02446782481;
      break;
      default:
    echo("Error");
    break;
    }

//$Seat = int(input("Do you wear seat belts? (0 - no, 1 - yes) "));
$Seat = "0";

switch($Seat) {
    case(0): //Seatbelts are off
      $Seat_Grade = 0;
      break;
    case(1): //Seatbelts are on
      $Seat_Grade = 4;
      break;
      default:
    echo("Error");
    break;
    }

//$Speed = int(input("How much do you exceed the speed limit? "));
$Speed = "50";

if ($Speed > 50):
  $Speed = 0;
elseif ($Speed > 40):
  $Speed = 1;
elseif ($Speed > 30):
  $Speed = 2;
elseif ($Speed > 20):
  $Speed = 3;
elseif ($Speed > 10):
  $Speed = 4;
elseif ($Speed == 0):
  $Speed = 5;
endif;
  
switch($Speed) {
    case(0): //More then 50MPH
      $Speed_Grade = 0;
      $p4 = 0.05854800936;
      break;
    case(1): //+40MPH
      $Speed_Grade = 1;
      $p4 = 0.02562131693;
      break;
    case(2): //+30MPH
      $Speed_Grade = 2;
      $p4 = 0.01999200319;
      break;
    case(3): //+20MPH
      $Speed_Grade = 3;
      $p4 = 0.01801477211;
      break;
    case(4): //+10MPH
      $Speed_Grade = 4;
      $p4 = 0.0171659085;
      break;
    case(5): //Didn't exceed the speed limit
      $Speed_Grade = 4;
      $p4 = 0;
      break;
      default:
    echo("Error");
    break;
    }

//$Pass = int(input("How many passengers do you have. (0 to 4) "));
$Pass = "0";
switch($Pass) {
    case(0): //0 Passenger
      $Pass_Grade = 4;
      $p5 = 0;
      break;
    case(1): //1 Passenger
      $Pass_Grade = 3;
      $p5 = 0.03278688524;
      break;
    case(2): //2 Passenger
      $Pass_Grade = 2;
      $p5 = 0.08196721311;
      break;
    case(3): //3 Passenger
      $Pass_Grade = 1;
      $p5 = 0.08196721311;
      break;
    case(4): //4+ Passenger
      $Pass_Grade = 0;
      $p5 = 0.08196721311;
      break;
      default:
    echo("Error");
    break;
    }

//$Weat = int(input("Good weather? (0 - yes, 1 - no) "));
$Weat = "0";

switch($Weat) {
    case(0): //Good weather
      $p6 = 0;
      break;
    case(1): //Bad weather
      $p6 = 0.02083333333;
      break;
      default:
    echo("Error");
    break;
    }

//$Mon = int(input("Number of the month? "))-1;
$Mon = "0";

switch($Mon) {
    case(0): //January
      $p7 = 0.01369863013;
      break;
    case(1): //February
      $p7 = 0.01369863013;
      break;
    case(2): //March
      $p7 = 0.015625;
      break;
    case(3): //April
      $p7 = 0.015625;
      break;
    case(4): //May
      $p7 = 0.01785714285;
      break;
    case(5): //June
      $p7 = 0.01785714285;
      break;
    case(6): //July
      $p7 = 0.01960784313;
      break;
    case(7): //August
      $p7 = 0.015625;
      break;
    case(8): //September
      $p7 = 0.01785714285;
      break;
    case(9): //October
      $p7 = 0.01785714285;
      break;
    case(10): //November
      $p7 = 0.015625;
      break;
    case(11): //December
      $p7 = 0.01369863013;
      break;
      default:
    echo("Error");
    break;
    }

//$Day = int(input("The number of the day? "))-1;
$Day = "0";

switch($Day) {
    case(0): //Sunday
      $p8 = 0.02083333333;
      break;
    case(1): //Monday
      $p8 = 0.01492537313;
      break;
    case(2): //Tuesday
      $p8 = 0.01265822784;
      break;
    case(3): //Wednesday
      $p8 = 0.01265822784;
      break;
    case(4): //Thursday
      $p8 = 0.01492537313;
      break;
    case(5): //Friday
      $p8 = 0.01724137931;
      break;
    case(6): //Saturday
      $p8 = 0.02173913043;
      break;
      default:
    echo("Error");
    break;
    }

//$Time = int(input("Time of day? "));
$Time = "0";

switch($Time)
    {
    case(0): //Midnight - 3 a.m.
      $p9 = 0.01694915254;
      break;
    case(1): //3 a.m. - 6 a.m.
      $p9 = 0.01052631578;
      break;
    case(2): //6 a.m. - 9 a.m.
      $p9 = 0.01449275362;
      break;
    case(3): //9 a.m. - noon
      $p9 = 0.01052631578;
      break;
    case(4): //Noon - 3 p.m.
      $p9 = 0.01449275362;
      break;
    case(5): //3 p.m. - 6 p.m.
      $p9 = 0.01960784313;
      break;
    case(6): //6 p.m. - 9 p.m.
      $p9 = 0.0238095238;
      break;
    case(7): //9 p.m. - midnight
      $p9 = 0.02083333333;
      break;
      default:
    echo("Error");
    break;
    }

//$Gend = int(input("Gender? (0 - Men, 1 - Women) "));
$Gend = "0";

switch($Gend)
    {
    case(0): //Men
      $p10 = 0;
      break;
    case(1): //Women
      $p10 = 0.00819672131;
      break;
      default:
    echo("Error");
    break;
    }

//$Age = int(input("Age? (0 - over 20, 1 - under 20) "));
$Age = "0";

switch($Age) {
    case(0): // Over 20 years old
      $p11 = 0.00546448087;
      break;
    case(1): //(Teens ages 15 - 19
      $p11 = 0.01639344262;
      break;
      default:
    echo("Error");
    break;
    }

$Grade = ($Alc_Grade + $Pass_Grade + $RD_Grade + $Speed_Grade + $TXT_Grade + $Seat_Grade)/6;
$Red_Grade = ($Alc_Grade + $TXT_Grade)/2;
//Grade = 4; //Not important part, can be deleted to save memory
//Red_Grade = 2; //Not important part, can be deleted to save memory
//print('Grade - ', Grade) //Not important part, can be deleted to save memory
//print('Red Grade - ', Red_Grade) //Not important part, can be deleted to save memory
if ($Grade > ($Red_Grade + 1)):
  $Grade = $Red_Grade + 1;
  endif;
  echo"1grade = ".$Grade;
//print('Grade - ', Grade) //Not important part, can be deleted to save memory
//print('Red Grade - ', Red_Grade) //Not important part, can be deleted to save memory

//Grade = 3.5 //Not important part, can be deleted to save memory
//Red_Grade = 4 //Not important part, can be deleted to save memory
$GradeInt = intval($Grade);
echo"2grade = ".$Grade;
$Grade2 = $Grade - $GradeInt;
echo"3grade = ".$Grade;
//print('GradeInt = ', GradeInt) //Not important part, can be deleted to save memory
//print('Grade2 = ', Grade2) //Not important part, can be deleted to save memory
/*if ($Grade2 <=0.40):
    $Grade = $Grade - $Grade2;
    endif;
 echo"4grade = ".$Grade;
if ($Grade2 >=0.70):
    $Grade = ($Grade - $Grade2) + 1;
    endif;
  echo"5grade = ".$Grade;
if ($Grade < $Red_Grade):
    $Grade = ($Grade - $Grade2) + 1;
    endif;
    echo"6grade = ".$Grade;
if ($Grade > $Red_Grade):
    $Grade = Grade - Grade2;
    endif;
    echo"7grade = ".$Grade;
if ($Grade2 >= 0.5):
    $Grade = ($Grade - $Grade2) + 1;
    endif;
    echo"8grade = ".$Grade;
if ($Grade2 < 0.5):
    $Grade = $Grade - $Grade2;
    endif;
*/
if ($Grade2 <=0.40){
  $Grade = $Grade - $Grade2;
}
elseif ($Grade2 >=0.70){
  $Grade = ($Grade - $Grade2) + 1;
}
else{
  if ($Grade < $Red_Grade){
    $Grade = ($Grade - $Grade2) + 1;
  }
  elseif ($Grade > $Red_Grade){
    $Grade = $Grade - $Grade2;
  }
  else{
    if ($Grade2 >= 0.5){
      $Grade = ($Grade - $Grade2) + 1;
    }
    elseif ($Grade2 < 0.5){
      $Grade = $Grade - $Grade2;
    }
  }
}
  
    



echo"9grade = ".$Grade; //Not important part, can be deleted to save memory

switch($Grade)
    {
    case(0): 
      $Res = 'FX';
      break;
    case(1): 
      $Res = 'D';
      break;
    case(2): 
      $Res = 'C';
      break;
    case(3): 
      $Res = 'B';
      break;
    case(4): 
      $Res = 'A';
      break;
    default:
    echo("Error");
    break;
    }
echo"Result = ".$Res; //Not important part, can be deleted to save memory

?>