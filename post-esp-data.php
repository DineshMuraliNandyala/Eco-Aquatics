<?php
class SensorData {
    public $link = '';

    function __construct($value1, $value2, $value3, $value4, $value5, $value6) {
        $this->connect();
        $this->storeInDB($value1, $value2, $value3, $value4, $value5, $value6);
    }

    function connect() {
        $this->link = mysqli_connect('localhost', 'root', '') or die('Cannot connect to the DB');
        mysqli_select_db($this->link, 'eco') or die('Cannot select the DB');
    }

    function storeInDB($value1, $value2, $value3, $value4, $value5, $value6) {
        $query = "INSERT INTO sensordata (value1, value2, value3, value4, value5, value6)
                  VALUES ('" . $value1 . "', '" . $value2 . "', '" . $value3 . "', '" . $value4 . "', '" . $value5 . "', '" . $value6 . "')";

        $result = mysqli_query($this->link, $query) or die('Errant query: ' . $query);
    }
}

if (isset($_GET['value1']) && isset($_GET['value2']) && isset($_GET['value3']) && isset($_GET['value4']) && isset($_GET['value5']) && isset($_GET['value6'])) {
    $value1 = $_GET['value1'];
    $value2 = $_GET['value2'];
    $value3 = $_GET['value3'];
    $value4 = $_GET['value4'];
    $value5 = $_GET['value5'];
    $value6 = $_GET['value6'];

    $sensorData = new SensorData($value1, $value2, $value3, $value4, $value5, $value6);
} else {
    echo "No data set in the GET parameters.";
}
?>
