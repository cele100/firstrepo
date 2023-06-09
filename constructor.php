<html>
<body>
    
<?php
class Fruits{
    public $name;
    public $colour;

    function_construct($name, $colour){
        $this-> name= $name;
        $this-> colour= $colour;

        function get_name($name);
       return $this=>name;

       function get_colour($colour);
       return $this=>colour;

    }
}
$strawberry = new ("strawberry",'pink');
echo $strawberry get_name();
echo "<br>";
echo $strawberry get_colour();
?>

</body>
</html>