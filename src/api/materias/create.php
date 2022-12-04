<?php 
  // Headers
  header('Access-Control-Allow-Origin: *');
  header('Content-Type: application/json');
  header('Access-Control-Allow-Methods: POST');
  header('Access-Control-Allow-Headers: Access-Control-Allow-Headers,Content-Type,Access-Control-Allow-Methods, Authorization, X-Requested-With');

  include_once '../../config/Database.php';
  include_once '../../models/Materias.php';

  // Instantiate DB & connect
  $database = new Database();
  $db = $database->connect();

  // Instantiate blog post object
  $materias = new Materias($db);

  // Get raw posted data
  $data = json_decode(file_get_contents("php://input"));
  
  $materias->clave_materia = $data->clave_materia;
  $materias->nombre_materia = $data->nombre_materia;
  $materias->semestre = $data->semestre;
  $materias->horas_practicas = $data->horas_practicas;
  $materias->horas_teoricas = $data->horas_teoricas;
  $materias->total_horas = $data->total_horas;

  // Create post
  if($materias->create()) {
    echo json_encode(
      array('message' => 'Materia creada exitosamente')
    );
  } else {
    echo json_encode(
      array('message' => 'La materia no ha sido creada')
    );
  }

