<h1>oop : object orientation programing</h1>
<textarea name="" id="" style ="width:400px; height:80px; ">
example 
class : colors 
object : red, yellow, green
</textarea>  

<?php 
class Color{
    // properti
    public $name;

    // Methods
    function set_name($name) {
        $this->name = $name;
    }
    function get_name() {
        return $this->name;
    }
}
// create 
$orange = new Color();
$orange->set_name('orange');
// call
echo '<br>'.$orange->get_name();

// using __constructor -----------------------------------------------
// note :  when you using __construct you dosent need to set name again
class Color1{
// properti
    public $name;

    // Methods
    function __construct($name) {
        $this->name = $name;
    }
    function get_name() {
        return $this->name;
    }
}
// create 
$red = new Color1('red');
// call
echo '<br>'.$red->get_name().'<br>';

// using __destruct -----------------------------------------------
class Fruit {
    // properties can: public, protected, private 
    public $name;
    public $taste; //sour /suite 

    function __construct($name, $taste) {
        $this->name = $name;
        $this->taste = $taste;
    }
    function __destruct(){
        echo "Fruit {$this->name} taste is {$this->taste} <br>";
    }   
}
$apple = new Fruit('Apple','sweet');
$melon = new Fruit('Melon','sweet');

// using __inheretance -----------------------------------------------
