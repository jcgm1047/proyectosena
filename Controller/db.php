<?php 
  $mysqli = new mysqli('localhost', 'root', '', 'proyecto_sena');
  
  $query = $mysqli->query("SELECT * FROM proveedores");

  