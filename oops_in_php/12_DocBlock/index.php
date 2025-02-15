<?php
// Docblock--
    //docblock ki madat se ham documents banate hai kishi particular function ya class ya member ki
class DocBlock{
    /**
     * This is the Docblock of this class
     */

    function doc(int $a, int $b):int{
        /**
         * this is the docblock of the function
         * @author arpit <arpitjayswal210@gmail.com>
         * @param int $a first variable
         * @param int $b Second variable
         * @return int $a+$b
         */
        return $a+$b;
    }
}
?>