<?php



class TodoDao {


    private $db;

    public function __construct($db){
        $this->db = $db;
    }


    function  getListTodo(){

        $sql = "select * from todo";

        $stmp =$this->db->query($sql);

        $stmp->execute();

        return $stmp;
    }

    function deleteTodo($id){
        $sql = "delete from todo where id = :id";

        $stmt = $this->db->prepare($sql);

        $stmt->bindParam(":id",$id);

        $stmt->execute();
    }

    function createTodo($todo){
        $sql = "insert into todo (content, date, deleted, complete) VALUES 
                ()";

        $stmp = $this->db->prepare($sql);

        $stmp->bindParam('');

        $stmp->execute();
    }
}
