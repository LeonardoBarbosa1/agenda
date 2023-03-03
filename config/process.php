<?php

session_start();

include_once("connection.php");

include_once("url.php");

$data = $_POST;


//MODIFICAÇÕES DE DADOS
if(!empty($data)){


    //CRIAR CONTATO
    if($data["type"] === "create" ){

        $name = $data["name"];
        $fone = $data["fone"];
        $observation = $data["observation"];

        $query = "INSERT INTO contacts (name, fone, observation) VALUES (:name, :fone, :observation)";

        $stmt = $conn->prepare($query);

        $stmt->bindParam(":name", $name);
        $stmt->bindParam(":fone", $fone);
        $stmt->bindParam(":observation", $observation);

        try {
            $stmt->execute();
            $_SESSION["msg"]="Contato Criado com sucesso!";
            
        }catch(PDOException $e){
            //erro na conexão
            $error = $e->getMessage();
            echo "Error: " . $error;
        }
    } else if($data["type"] === "edit"){

        $name = $data["name"];
        $fone = $data["fone"];
        $observation = $data["observation"];
        $id = $data["id"];

        $query = "UPDATE contacts
                  SET name = :name, fone = :fone, observation = :observation 
                  WHERE id = :id";
        
        $stmt = $conn->prepare($query);

        $stmt->bindParam(":name", $name);
        $stmt->bindParam(":fone", $fone);
        $stmt->bindParam(":observation", $observation);
        $stmt->bindParam(":id", $id);

        try {
            $stmt->execute();
            $_SESSION["msg"]="Contato Atualizado com sucesso!";
            
        }catch(PDOException $e){
            //erro na conexão
            $error = $e->getMessage();
            echo "Error: " . $error;
        }

    } else if($data["type"] === "delete"){
        $id = $data["id"];

        $query = "DELETE FROM contacts WHERE id = :id";

        $stmt = $conn->prepare($query);
        $stmt->bindParam(":id", $id);

        

        try {
            $stmt->execute();
            $_SESSION["msg"]="Contato Deletado com sucesso!";
            
        }catch(PDOException $e){
            //erro na conexão
            $error = $e->getMessage();
            echo "Error: " . $error;
        }


    }

    //REDIRECT HOME
    header("Location:" . $BASE_URL . "../index.php");
    //SELEÇÃO DE DADOS

}else{

    $id;

    if(!empty($_GET)){
        $id = $_GET["id"];
    }
    //Retorna o dado de um contato
    if(!empty($id)){
        $query = "SELECT * FROM contacts WHERE id = :id";

        $stmt = $conn->prepare($query);

        $stmt -> bindParam(":id", $id);

        $stmt -> execute();

        $contact = $stmt -> fetch();


    }else{
        //Retorna todos os contatos
        $contacts = [];

        $query = "SELECT * FROM contacts";

        $stmt = $conn->prepare($query);

        $stmt->execute();

        $contacts = $stmt->fetchAll();
    }


}
//FECHAR CONEXÃO

$conn = null;
