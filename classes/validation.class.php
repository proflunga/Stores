<?php
class validation
{
    public function empty_check($variable)
    {
        if (empty($variable)) {

            return 0;
        } else {
            return $variable;
        }
    }

    public function isset_check($variable)
    {
        if (isset($variable)) {

            return $variable;
        } else {
            return 0;
        }
    }
}
