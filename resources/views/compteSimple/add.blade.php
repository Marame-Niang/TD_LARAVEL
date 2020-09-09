function cleRip($rip)
   {
       $string = "";
       $chaine = "012643789";
       srand((double)microtime()*1000000);
       for($i=0; $i<$rip; $i++)
       {
           $string .= $chaine[rand()%strlen($chaine)];
       }
       return $string;
   }