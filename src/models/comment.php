<?php


class comment
{

     /**
     * @param $connection
     */
    public function __construct(public $connection)
    {

    }

    /**
     * @param array $key
     * @param array $value
     * @return bool
     */
    public function add(array $key, array $value): bool
    {
        $key_string = implode(',', $key). ', url';
        $value_str = '';
        $url = $_SERVER['HTTP_REFERER'];
        foreach($value as $one){
            $value_str .= "'".$one."',";
        }
        $value_str .= " '$url'";
        $query_string = "INSERT INTO comments($key_string) VALUES ($value_str)";
        $query_obj = mysqli_query($this->connection, $query_string, MYSQLI_USE_RESULT);
        if (!$query_obj) {
            return false;
        }
        return true;
    }

    /**
     * @return array
     */
    public function all():array{
        $query = mysqli_query($this->connection, 'SELECT * FROM comments ORDER BY id DESC LIMIT 333');
        $arr = [];
        while($arr_obj = mysqli_fetch_array($query)){
            $arr[] = $arr_obj;
        }
        return $arr;
    }

}