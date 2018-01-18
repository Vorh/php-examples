<?php



class TodoDao {


    private $db;
    private $todos = array();

    public function __construct($db){
        $this->db = $db;

        $todo1 =new Todo();
        $todo1->date = date('Y-m-d H:i:s');
        $todo1 ->content = 'Create new todo now';


        $todo2 =new Todo();
        $todo2->date = date('Y-m-d H:i:s');
        $todo2 ->content = 'Call new girl';

        $todo3 =new Todo();
        $todo3->date = date('Y-m-d H:i:s');
        $todo3 ->content = 'Create new todo now';

        $todo4 =new Todo();
        $todo4->date = date('Y-m-d H:i:s');
        $todo4 ->content = 'Create new todo now';


        $this->todos[0] = $todo1;
        $this->todos[1] = $todo2;
        $this->todos[2] = $todo3;
        $this->todos[3] = $todo4;
        $this->todos[4] = $todo4;
        $this->todos[5] = $todo4;
        $this->todos[6] = $todo4;

    }


    function  getListTodo(){

        $sql = "select * from todo";

        $stmp =$this->db->query($sql);

        $stmp->execute();

        return $stmp;
    }

}
