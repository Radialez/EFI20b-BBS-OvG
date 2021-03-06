Convert a number to a string, the contents of which depend on the number's factors.

If the number has 3 as a factor, output 'Pling'.
If the number has 5 as a factor, output 'Plang'.
If the number has 7 as a factor, output 'Plong'.
If the number does not have 3, 5, or 7 as a factor, just pass the number's digits straight through.
Examples
28's factors are 1, 2, 4, 7, 14, 28.
In raindrop-speak, this would be a simple "Plong".
30's factors are 1, 2, 3, 5, 6, 10, 15, 30.
In raindrop-speak, this would be a "PlingPlang".
34 has four factors: 1, 2, 17, and 34.
In raindrop-speak, this would be "34".
Running the tests
Go to the root of your PHP exercise directory, which is <EXERCISM_WORKSPACE>/php. To find the Exercism workspace run

 % exercism debug | grep Workspace
Get PHPUnit if you don't have it already.

 % wget --no-check-certificate https://phar.phpunit.de/phpunit.phar
 % chmod +x phpunit.phar
Execute the tests:
 % ./phpunit.phar raindrops/raindrops_test.php
Source
A variation on a famous interview question intended to weed out potential candidates. http://jumpstartlab.com    


    
<?php
function raindrops ($drops)
{
  $output = "";
  
  if ($drops % 3 == 0)
  {
    $output.= "Pling";
  }
  if ($drops % 5 == 0)
  {
    $output.= "Plang";
  }
  if ($drops % 7 == 0)
  {
    $output.= "Plong";
  }
  
  if ($output == "")
   $output= (string)($drops);
  
 return $output;

}