<?php 
  class Materias {
    // DB stuff
    private $conn;
    private $table = 'materias_reticula';

    // Post Properties
    public $id;
    public $clave_materia;
    public $nombre_materia;
    public $semestre;
    public $horas_practicas;
    public $horas_teoricas;
    public $total_horas;

    // Constructor with DB
    public function __construct($db) {
      $this->conn = $db;
    }

    // Get Posts
    public function read() {
      // Create query
      $query = 'SELECT * FROM `materias_reticula`;';
      
      // Prepare statement
      $stmt = $this->conn->prepare($query);

      // Execute query
      $stmt->execute();

      return $stmt;
    }

    // Get Single Post
    public function read_single() {
          // Create query
          $query = 'SELECT * FROM `materias_reticula` WHERE id = ?;';

          // Prepare statement
          $stmt = $this->conn->prepare($query);

          // Bind ID
          $stmt->bindParam(1, $this->id);

          // Execute query
          $stmt->execute();

          $row = $stmt->fetch(PDO::FETCH_ASSOC);

          // Set properties
          $this->id = $row['id'];
          $this->clave_materia = $row['clave_materia'];
          $this->nombre_materia = $row['nombre_materia'];
          $this->semestre = $row['semestre'];
          $this->horas_practicas = $row['horas_practicas'];
          $this->horas_teoricas = $row['horas_teoricas'];
          $this->total_horas = $row['total_horas'];
    }

    // Create Post
    public function create() {
          // Create query
          $query = 'INSERT INTO ' . $this->table . ' SET clave_materia = :clave_materia, nombre_materia = :nombre_materia, semestre = :semestre, horas_practicas = :horas_practicas, horas_teoricas = :horas_teoricas, total_horas = :total_horas';

          // Prepare statement
          $stmt = $this->conn->prepare($query);

          // Clean data
          $this->clave_materia = htmlspecialchars(strip_tags($this->clave_materia));
          $this->nombre_materia = htmlspecialchars(strip_tags($this->nombre_materia));
          $this->semestre = htmlspecialchars(strip_tags($this->semestre));
          $this->horas_practicas = htmlspecialchars(strip_tags($this->horas_practicas));
          $this->horas_teoricas = htmlspecialchars(strip_tags($this->horas_teoricas));
          $this->total_horas = htmlspecialchars(strip_tags($this->total_horas));

          // Bind data
          $stmt->bindParam(':clave_materia', $this->clave_materia);
          $stmt->bindParam(':nombre_materia', $this->nombre_materia);
          $stmt->bindParam(':semestre', $this->semestre);
          $stmt->bindParam(':horas_practicas', $this->horas_practicas);
          $stmt->bindParam(':horas_teoricas', $this->horas_teoricas);
          $stmt->bindParam(':total_horas', $this->total_horas);

          // Execute query
          if($stmt->execute()) {
            return true;
      }

      // Print error if something goes wrong
      printf("Error: %s.\n", $stmt->error);

      return false;
    }

    // Update Post
    public function update() {
          // Create query
          $query = 'UPDATE ' . $this->table . '
                                SET clave_materia = :clave_materia,
                                nombre_materia = :nombre_materia,
                                semestre = :semestre,
                                horas_practicas = :horas_practicas,
                                horas_teoricas = :horas_teoricas,
                                total_horas = :total_horas
                                WHERE id = :id';


          // Prepare statement
          $stmt = $this->conn->prepare($query);

          // Clean data
          $this->id = htmlspecialchars(strip_tags($this->id));
          $this->clave_materia = htmlspecialchars(strip_tags($this->clave_materia));
          $this->nombre_materia = htmlspecialchars(strip_tags($this->nombre_materia));
          $this->semestre = htmlspecialchars(strip_tags($this->semestre));
          $this->horas_practicas = htmlspecialchars(strip_tags($this->horas_practicas));
          $this->horas_teoricas = htmlspecialchars(strip_tags($this->horas_teoricas));
          $this->total_horas = htmlspecialchars(strip_tags($this->total_horas));

          // Bind data
          $stmt->bindParam(':id', $this->id);
          $stmt->bindParam(':clave_materia', $this->clave_materia);
          $stmt->bindParam(':nombre_materia', $this->nombre_materia);
          $stmt->bindParam(':semestre', $this->semestre);
          $stmt->bindParam(':horas_practicas', $this->horas_practicas);
          $stmt->bindParam(':horas_teoricas', $this->horas_teoricas);
          $stmt->bindParam(':total_horas', $this->total_horas);

          // Execute query
          if($stmt->execute()) {
            return true;
          }

          // Print error if something goes wrong
          printf("Error: %s.\n", $stmt->error);

          return false;
    }

    // Delete Post
    public function delete() {
          // Create query
          $query = 'DELETE FROM ' . $this->table . ' WHERE id = :id';

          // Prepare statement
          $stmt = $this->conn->prepare($query);

          // Clean data
          $this->id = htmlspecialchars(strip_tags($this->id));

          // Bind data
          $stmt->bindParam(':id', $this->id);

          // Execute query
          if($stmt->execute()) {
            return true;
          }

          // Print error if something goes wrong
          printf("Error: %s.\n", $stmt->error);

          return false;
    }
    
  }