<?php
declare(strict_types=1);
namespace For_toString_Magic_method;
// toString tab trigger hota hai jab ham object ko echo ya kishi tarah se string me convert karvan chahte hai
class ToString{
    public function __tostring():string{
        return "hi Fatal Error ke jagah mai aa gay for ushin __toString() megic Method.";
    }
}
//yaha per aap ToString class ko String me convert kar rahe hai
?>