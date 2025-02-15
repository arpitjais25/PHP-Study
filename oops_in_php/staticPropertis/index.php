<?php
$path=require_once __DIR__.'/DB.php';
var_dump($path);
var_dump(require_once __DIR__.'/Transaction.php');
use oops_in_php\staticPropertis\DB;
use Oops_in_php\StaticPropertis\Transaction;
$db=DB::getInstance(['arpit', 'jayswal']);
//var_dump(new DB);//not creating instance becouse constructor is private

//---------------------------------------------
$transaction= new Transaction(4,'arpit');
$transaction= new Transaction(4,'arpit');
$transaction= new Transaction(4,'arpit');
$transaction= new Transaction(4,'arpit');
var_dump($transaction::$count);//aap agar static member ko call karte hai to aap 
/*(scope resolution operator):: ka use karte hai nahi -> ka*/
var_dump($transaction->count); //have Warning not a right way...


//---------------FOR DB CONNECTION--------------------------------
// USING Singleton Design Pattern
/*
$config = [
    'host' => 'localhost',
    'dbname' => 'test_db',
    'user' => 'root',
    'password' => 'rootpassword',
];

// Singleton pattern se ek hi instance milega
$db = DB::getInstance($config);

// Database connection ko access karna
$connection = $db->connection;
*/
// IS TARAH  DB CONNECT KIYA JATA HAI