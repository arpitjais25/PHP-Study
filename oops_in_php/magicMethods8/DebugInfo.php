<?php
declare(strict_types=1);
class DebugInfo{
    //agar koi private member ko var_dump ke saath dekhe to dekh sakta hai 
    //eska priyog debugging ke time private informathin ko dikane ke liye kiya jata hai
    private string $id='203';
    private string $acountNumber = '0123456789';
    public function __debugInfo():?array{
        return [
            'id'=> md5($this->id),
            'AccountNumber'=> '****'.substr($this->acountNumber, -4)
        ];
    }
}
?>