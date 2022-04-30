<?php

class Database {

    private $db;

    public function __construct(){
        $this->db = new PDO(DSN, USERNAME, PASSWORD);
        $this->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    public function add($data){
        $name = $data['name'];
        $description = $data['description'];
        
        try {
            $query = "INSERT INTO notes (name, description, created_at) VALUES (:name, :description, now())";
            $statement = $this->db->prepare($query);
            $statement->execute(array(":name"=>$name, ":description"=>$description));
            if($statement) echo "Note has been added.";
        } catch(PDOException $e){
            echo 'Error ' . $e->getMessage();
        }
    }

    public function update($data){
        $id = $data['id'];
        $name = $data['name'];
        $description = $data['description'];
        
        try {
            $query = "UPDATE notes SET name=:name,description=:description WHERE id=:id";
            $statement = $this->db->prepare($query);
            $statement->execute(array(":name"=>$name, ":description"=>$description, ":id"=>$id));
            if($statement) echo "Note has been updated.";
        } catch(PDOException $e){
            echo 'Error ' . $e->getMessage();
        }
    }

    public function delete($data){
        $id = $data['id'];
        
        try {
            $query = "DELETE FROM notes WHERE id=:id";
            $statement = $this->db->prepare($query);
            $statement->execute(array(":id"=>$id));
            if($statement) echo "Note has been deleted.";
        } catch(PDOException $e){
            echo 'Error ' . $e->getMessage();
        }
    }

    public function getNotes(){
        
        try {
            $query = "SELECT * FROM notes";
            $statement = $this->db->query($query);
            while($note = $statement->fetch(PDO::FETCH_OBJ)){
                $output = "
                    <tr>
                        <td>
                            $note->name
                        </td>
                        <td>
                            $note->description
                        </td>
                        <td>
                            
                        </td>
                    </tr>
                 ";
                 echo $output;
            }
        } catch(PDOException $e){
            echo 'Error ' . $e->getMessage();
        }
    }


    public function getNote($data){
        $id = $data['id'];

        try {
            $query = "SELECT * FROM notes WHERE id=:id";
            $statement = $this->db->prepare($query);
            $statement->execute(array(":id"=>$id));
            $note = $statement->fetch(PDO::FETCH_OBJ);

            var_dump($note);
               
        } catch(PDOException $e){
            echo 'Error ' . $e->getMessage();
        }
    }
}