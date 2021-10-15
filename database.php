<?php
    class database{
        private $servername="localhost";
        private $username="root";
        private $password="";
        private $dbname="employee";
        private $result = array();
        private $mysqli = "";
        

        public function __construct()
        {
            $this->mysqli = new mysqli($this->servername,$this->username,$this->password,$this->dbname);
        }

        public function new_employee($table_name,$parameters=array())
        {

                // var_dump($parameters);
                $columns = implode(',',array_keys($parameters));
                $value = implode("','",$parameters);
                $sql = "INSERT INTO $table_name ($columns) VALUES ('$value')";
                $result = $this->mysqli->query($sql);
        }
        public $sql;
        public function select($table_name)
        {
            $sql = "SELECT * from ".$table_name." where deleted_at IS NULL";
            $this->sql = $result = $this->mysqli->query($sql);
        }
        public function delete_employees($table_name,$date_today,$employee_id)
        {
            $sql = "UPDATE  ".$table_name." SET `deleted_at` = '".$date_today."'  where employee_number = '".$employee_id."' ";
            $this->sql = $result = $this->mysqli->query($sql);
        }

        public function save_edit_employee($table_name,$parameters=array(),$id)
        {
            $data = array();
            foreach($parameters as $key => $value)
            {
                $data[] =  "`$key` = '".$value."'";
            }
            $for_update = implode(',',$data);
            var_dump($for_update);
            // die();
            $sql = "UPDATE ".$table_name." SET ".$for_update." WHERE employee_number = '".$id."' ";
            $result = $this->mysqli->query($sql);
        }

        public function id_search($table_name,$employee_id)
        {
            $sql = "SELECT * from ".$table_name." WHERE employee_number = '".$employee_id."' ";
            $this->sql = $result = $this->mysqli->query($sql);
        }








    }



?>