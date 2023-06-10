<?php
class Database
{
    private $connection;

    function __construct()
    {
        $this->connect_db();
    }

    public function connect_db()
    {
        $this->connection = mysqli_connect();
        if (mysqli_connect_error()) {
            die("Database Connection Failed" . mysqli_connect_error() . mysqli_connect_errno());
        }
    }

    public function create($fname, $lname, $email, $phone, $del_address, $order)
    {
        $sql = "INSERT INTO `orders` (fname, lname, email, phone, del_address, order) VALUES ('$fname', '$lname', '$email', '$phone', '$del_address', '$order')";
        $res = mysqli_query($this->connection, $sql);
        if ($res) {
            return true;
        } else {
            return false;
        }
    }

    public function read()
    {
        $sql = "SELECT * FROM `orders`";
        $res = mysqli_query($this->connection, $sql);
        return $res;
    }

    public function sanitize($var)
    {
        $return = mysqli_real_escape_string($this->connection, $var);
        return $return;
    }
}
$database = new Database();
?>