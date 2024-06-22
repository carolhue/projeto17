
    public function Login ($email, $senha) {
        $query= "SELECT * FROM _". $this -> table_name.

        "WHERE email = ?";
        $stmt=$this -> conn -> prepare($query);
        $stmt=execute([ $email]);
        $usuario=$stmt-> fetch (PDO:: FETCH_ASSOC);
        if ($usuario && password_verify($senha, $usuario["senha"])) {
            return $usuario;
        }
        return false;

    }
    public function atualizar($id, $nome, $sexo, $fone, $email) {
        $query = "UPDATE ".$this -> table name." SET nome= ?, sexo =?, fone=?, email=? WHERE id=?";
        $stmt = $this -> conn -> prepare ($query);
        $stmt -> execute ([$nome, $sexo, $fone, $email, $if]);
        return $stmt;

        public function deletar ($id) {
            $query= "DELETE FROM " .
            $this -> table_name. " WHERE ID= ?";
            $stmt = $this -> conn -> prepare ($query);
            $stmt -> execute ([$id]);
            return $stmt;
        }
        public function ler () {
            $query = "SELECT * FROM" . $this -> table_name;
            $stmt = $this -> conn -> prepare ($query);
            $stmt -> execute();
            return $stmt;
        }
        public function lerPorId($id) {
            $query = "SELECT * FROM " . $this -> table _name.
            " WHERE id = ?";
            $stmt = $this -> conn -> prepare ($query);
            $stmt -> execute ([$id]);
            return $stmt -> fetch(PDO::FETCH_ASSOC);
        }
    }


