<?php
class proveedor
{
    private $server = "localhost";
    private $username = "root";
    private $password = "";
    private $db = "proyecto_sena";
    private $conn;

    public function __construct()
    {
        try {
            $this->conn = new PDO(
                "mysql:host=$this->server;dbname=$this->db",
                $this->username,
                $this->password
            );
        } catch (PDOException $e) {
            echo "conexion fallida" . $e->getMessage();
        }
    }
    public function listarProveedor()
    {
        $data = null;
        $stmt = $this->conn->prepare("SELECT * FROM proveedores");
        $stmt->execute();
        $data = $stmt->fetchAll();
        return $data;
    }
    public function listarProductos()
    {
        $data = null;
        $stmt = $this->conn->prepare("SELECT * FROM productos_proveedores");
        $stmt->execute();
        $data = $stmt->fetchAll();
        return $data;
    }
    public function insertar()
    {
        $empresa = $_GET('empresa');
        $vendedor = $_GET('vendedor');  
        $telefono = $_GET('telefono');
        $producto = $_GET('producto');

        $query = "INSERT INTO proveedores (nom_empresa, nom_vendedor, tel_vendedor, productos_proveedores, comment) VALUES('$empresa', '$vendedor', '$telefono', '$producto')";
        $this->conn->exec($query);
    }
}
