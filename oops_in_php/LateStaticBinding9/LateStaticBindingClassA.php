<?php
    declare(strict_types= 1);
    namespace ParentClass;
    class LateStaticBindingClassA{
        // without Ushing LSB code---
        // public static function make():string|null{
        //     return var_dump(self::class);
        // }

        // Using LSB--
        public static function make(): null|string{
            return static::class;
        }
    }
?>