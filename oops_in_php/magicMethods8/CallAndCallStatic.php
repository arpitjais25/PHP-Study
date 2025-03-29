<?php
declare(strict_types=1);
namespace magicMethods8;
class CallAndCallStatic{
    // 4.
    protected/*public 6. */ function objectalyCallMethod(float $amount, string $string ){
        echo 'i am alrady defind method';
        var_dump($amount, $string);
    }
    // 5.agar yaha per kishi karan se ham objectalyCallMethod() ko call na kar pay to __call magic method call hoga
    // maan lijiye ye provate ya protected hai jisme keval class ke dvara hi call kar sakte hai tab ->6
    // 2.
    public function __call(string $method, array $arguments):void{
        var_dump($method, $arguments);
        if(method_exists($this, $method)){
            call_user_func_array([$this, $method]/*yaha per bataya gaya hai kis Method ko call kiya jana hai aur
            // vah kiska object hai esme array ka priyog es liye kiya gay hai qki 
            // yah ek hi refrence me rahega samjhna bhi asan hoga*/, $arguments);
        }
    }
    // 3.
    // __callStatic magic Method
    public static function __callStatic(string $method, array $arguments): void{
        var_dump($method, $arguments);
    }

    // use case- esme agar aap sahi method ko call karte hai to thik hai vo protected bhi hoga to call ho jayega 
    // parantu agar galat method call hua to magic method call nahi karega.
}