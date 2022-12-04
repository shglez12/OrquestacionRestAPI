<?php 
  // Headers
  header('Access-Control-Allow-Origin: *');
  header('Content-Type: application/json');

  include_once '../../config/Database.php';
  include_once '../../models/Materias.php';

  // Instantiate DB & connect
  $database = new Database();
  $db = $database->connect();

  // Instantiate blog post object
  $materias = new Materias($db);

  // Get ID
  $materias->id = isset($_GET['id']) ? $_GET['id'] : die();

  // Get post
  $materias->read_single();

  // Create array
  $materias_arr = array(
    'id' => $materias->id,
    'clave_materia' => $materias->clave_materia,
    'nombre_materia' => $materias->nombre_materia,
    'semestre' => $materias->semestre,
    'horas_practicas' => $materias->horas_practicas,
    'horas_teoricas' => $materias->horas_teoricas,
    'total_horas' => $materias->total_horas
  );

  // Make JSON
  print_r(json_encode($materias_arr));