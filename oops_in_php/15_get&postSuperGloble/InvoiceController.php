<?php
declare(strict_types=1);
class InvoiceController{
    public static function index(){
        echo"<pre>";
        echo "<h2>GET </h1><br>";
        print_r($_GET);
        echo"<pre>";
        echo"<pre>";
        echo "<h2>POST </h1><br>";
        print_r($_POST);
        echo"<pre>";
       
    }
    public function form(){
        echo"<pre>";
        echo "<h2>GET </h1><br>";
        print_r($_GET);
        echo"<pre>";
        echo"<pre>";
        echo "<h2>POST </h1><br>";
        print_r($_POST);
        echo"<pre>";
        echo"<pre>";
        echo "<h2>REQUEST </h1><br>";
        print_r($_REQUEST);
        echo"<pre>";
        echo '<form action="/arpitPHP/phpstudy/oops_in_php/15_get&postSuperGloble/getandpost/form?amount=100" method="POST">
                <lable>Amount</lable>
                <input type="text" name="amount">

            </form>';
    }
    public function create():void{
        echo '<form action="/arpitPHP/phpstudy/oops_in_php/15_get&postSuperGloble/getandpost/create" method="POST">
                <lable>Amount</lable>
                <input type="text" name="amount">

            </form>';
    }
    public static function store():void{
        $amount = $_POST['amount'];

        // mop abhi tak hamne get aur post ko involve nahi kiya hai
        echo $amount."<br>ab aap db me daal sakte ho
        <br> lekin url me dekho store method dikh raha hai eski chupane ke kiye ham get post ka use karte hai
        ";
        //http://localhost/arpitPHP/phpstudy/oops_in_php/15_get&postSuperGloble/getandpost/store
        // url me store method hai

        //----ab ham get aur post ka use karenge jisse store method url me dikhega hi nahi----

        // Question-- q nahi dikhega ???
        // Answer-- we have a jugad(idea) ham kya karenge ki jab ham creat method ko call karte hai to form open
        //          hota hai aur usko submit karne ke liye ham fhir store method ko call karne ke liye ek nayi uri 
        //          banani padti hai jisse ham methid call karte hai
        //          ex--    // ->register('/getandpost/create',[InvoiceController::class, 'create'])
    //                          ->register('/getandpost/store',[InvoiceController::class, 'store']);
    //              par hame pata hai ki ham get aur post dono ki madat se kise ek url per alag alag method ko pass 
    //              kar sakte hai 
                //  to ham ek baar get se create methed ko aur ek baar post method se store method ko call 
                //  karenge jinka uri same hogi
                //  ex--
                //  ->get('/getandpost/create',[InvoiceController::class, 'create'])
                //  ->post('/getandpost/create',[InvoiceController::class, 'store']);
                //  spast hai...........
                //  form ka action badal dena ....aise hi bata diya....

            // 
        //creating ........
        //see router.php class

        //created get post routing
        http://localhost/arpitPHP/phpstudy/oops_in_php/15_get&postSuperGloble/getandpost/create
        //dekho koi store method hai
        // qki store method usi url per hai jo post method ka use kar rahi hai aur post method me hamne store 
        //method ko call kiya hai
    }
}
?>