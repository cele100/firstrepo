<html>
<body>

<?php
class Fruits {
    public $name;
    public $colour;

    function set_name($name) {
        $this->name = $name;
    }

    function get_name() {
        return $this->name;
    }
}

$apple = new Fruits();
$banana = new Fruits();

$apple->set_name('Apple');
$banana->set_name('Banana');

echo $apple->get_name();
echo "<br>";
echo $banana->get_name();
?>

</body>
</html>
