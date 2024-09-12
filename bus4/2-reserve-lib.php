<?php
class Reserve {
  
  private $pdo = null;
  private $stmt = null;
  public $error = null;
  function __construct() {
    try {
      $this->pdo = new PDO(
        "mysql:host=localhost; dbname=e_bus_ticketing_system; charset=utf8", // Define charset for accurate data handling
        "root", // Replace with your actual database username
        "", // Replace with your actual database password
        [
          PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
          PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]
      );
    } catch (PDOException $e) {
      // Handle connection errors gracefully
      echo "Error connecting to database: " . $e->getMessage();
      die(); // Terminate script execution if connection fails
    }
  }
  // (B) DESTRUCTOR - CLOSE DATABASE CONNECTION
  function __destruct () {
    if ($this->stmt !== null) { $this->stmt = null; }
    if ($this->pdo !== null) { $this->pdo = null; }
  }

  // (C) HELPER FUNCTION - RUN SQL QUERY
  function query ($sql, $data=null) : void {
    $this->stmt = $this->pdo->prepare($sql);
    $this->stmt->execute($data);
  }

  // (D) GET SEATS FOR GIVEN SESSION
  function get ($sessid) {
    $this->query(
      "SELECT sa.`seat_id`, r.`user_id` FROM `seats` sa
       LEFT JOIN `sessions` se USING (`bus_id`)
       LEFT JOIN `reservations` r USING(`seat_id`)
       WHERE se.`session_id`=?
       ORDER BY sa.`seat_id`", [$sessid]
    );
    $sess = $this->stmt->fetchAll();
    return $sess;
  }

  // (E) SAVE RESERVATION
  function save ($sessid, $userid, $seats) {
    $sql = "INSERT INTO `reservations` (`session_id`, `seat_id`, `user_id`) VALUES ";
    $data = [];
    foreach ($seats as $seat) {
      $sql .= "(?,?,?),";
      array_push($data, $sessid, $seat, $userid);
    }
    $sql = substr($sql, 0, -1);
    $this->query($sql, $data);
    return true;
  }
}

// (F) DATABASE SETTINGS - CHANGE TO YOUR OWN!
define("DB_HOST", "localhost");
define("DB_NAME", "e_bus_ticketing_system");
define("DB_CHARSET", "utf8mb4");
define("DB_USER", "root");
define("DB_PASSWORD", "");

// (G) NEW CATEGORY OBJECT
$_RSV = new Reserve();