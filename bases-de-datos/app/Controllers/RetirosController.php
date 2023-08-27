<?php

// Autor: Mateo Álvarez Murillo
// Fecha de creación: 2023

// Este código se proporciona bajo la Licencia MIT.
// Para más información, consulta el archivo LICENSE en la raíz del repositorio. 

namespace App\Controllers;

use Database\PDO\Connection;

class RetirosController
{
  private $connection;
  public function __construct()
  {
    $this->connection = Connection::getInstance()->get_database_instance();
  }
  /**
   * Muestra una lista de este recurso
   */
  public function index()
  {
    // FETCH ALL
    // $stmt = $this->connection->prepare("SELECT * FROM retiros");
    // $stmt->execute();

    // // fetchAll nos devuelve un array mixto
    // $result = $stmt->fetchAll();

    // foreach ($result as $r) {
    //   echo "Gastaste " . $r["cantidad"] . " COP es: " . $r["descripcion"] . "\n";
    // }

    // FETCH COLUMN
    $stmt = $this->connection->prepare("SELECT cantidad, descripcion FROM retiros");
    $stmt->execute();
    // Consultar la documentacion para el parametro de fetchall
    // Selecciona la columna indice 0
    $result = $stmt->fetchAll(\PDO::FETCH_COLUMN, 0);
    foreach ($result as $r) {
      echo "Gastaste $r COP\n";
    }
  }

  /**
   * Muestra un formulario para crear un nuevo recurso
   */
  public function create()
  {
  }

  /**
   * Guarda un nuevo recurso en la base de datos
   */
  public function store($data)
  {
    $stmt = $this->connection->prepare("INSERT INTO retiros (metodo_pago, tipo, fecha, cantidad, descripcion) VALUES
    (:metodo_pago, :tipo, :fecha, :cantidad, :descripcion);");
    $stmt->bindValue(":metodo_pago", $data["metodo_pago"]);
    $stmt->bindValue(":tipo", $data["tipo"]);
    $stmt->bindValue(":fecha", $data["fecha"]);
    $stmt->bindValue(":cantidad", $data["cantidad"]);
    $stmt->bindValue(":descripcion", $data["descripcion"]);
    $stmt->execute();
  }

  /**
   * Muestra un único recurso especificado
   */
  public function show($id)
  {
    $stmt = $this->connection->prepare("SELECT * FROM retiros WHERE id=:id");
    $stmt->execute([":id" => $id]);
    $result = $stmt->fetch(\PDO::FETCH_ASSOC);
    var_dump($result);
  }

  /**
   * Muestra el formulario para editar un recurso
   */
  public function edit()
  {
  }

  /**
   * Actualiza un recurso específico en la base de datos
   */
  public function update($id, $data)
  {
    $stmt = $this->connection->prepare("UPDATE retiros SET
    metodo_pago=:metodo_pago,
    tipo=:tipo,
    fecha=:fecha,
    cantidad=:cantidad,
    descripcion=:descripcion WHERE id=:id;");
    $stmt->execute([
      ":id" => $id,
      ":metodo_pago" => $data["metodo_pago"],
      ":tipo" => $data["tipo"],
      ":fecha" => $data["fecha"],
      ":cantidad" => $data["cantidad"],
      ":descripcion" => $data["descripcion"]
    ]);
  }

  /**
   * Elimina un recurso específico de la base de datos
   */
  public function destroy($id)
  {
    $this->connection->beginTransaction();
    $stmt = $this->connection->prepare("DELETE FROM retiros WHERE id=:id");
    $stmt->execute([":id" => $id]);
    $sure = readline("Seguro de quere eliminar el registro con id = $id? ");
    if ($sure == "no") {
      $this->connection->rollBack();
    } else {
      $this->connection->commit();
    }
  }
}
