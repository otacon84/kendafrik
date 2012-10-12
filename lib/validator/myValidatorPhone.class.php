<?php
 
/**
 * myValidatorPhone validates a phone number.
 *
 * @author Jason Swett (http://jasonswett.net/how-to-validate-and-sanitize-a-phone-number-in-symfony/)
 */
class myValidatorPhone extends sfValidatorBase
{
  protected function doClean($value)
  {
    $clean = (string) $value;
 
    if (!$clean && $this->options['required'])
    {
      throw new sfValidatorError($this, 'required');
    }
 
    // Take out anything that's not a number.
    $clean = preg_replace('/[^0-9]/', '', $clean);
 
    // Split the phone number into its three parts.
    $first_part = substr($clean, 0, 3);
    $second_part = substr($clean, 3, 3);
    $third_part = substr($clean, 6, 4);
    $forth_part = substr($clean, 10, 8); 
    // Format the phone number.
    $clean = '('.$first_part.') '.$second_part.'-'.$third_part.'-'.$forth_part;
 
    return $clean;
  }
}
