<?php
interface Drivable
{
     public function drive();
}


class Chevy implements Drivable
{
   public function drive()
   {
     echo "Driving!";
   }
}

class Cabbie
{
     public static function navigate(drivable $car)
     {
          $car->drive();
     }
}

$chevy = new Chevy();
Cabbie::navigate($chevy);
