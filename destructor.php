html>
<body>
    
<?php
class Fruits{
    public $name;
    public $colour;

    function_construct($name, $colour){
        $this-> name= $name;
        $this-> colour= $colour;
    }

       function __destruct();{
        echo "The fruit is {$this->name} and the colour is{$this->colour}.";

    }
}
$strawberry = new ("strawberry",'pink');
echo $strawberry get_name();
echo "<br>";
echo $strawberry get_colour();
?>

</body>
</html>