<!DOCTYPE html>
<html>
<head>
   <link rel="stylesheet" href="styles.css">

   <style>


   body {
     font-family: "Open Sans", sans-serif;
     line-height: 1.25;
   }
   table {
     border: 1px solid #ccc;
     border-collapse: collapse;
     margin: 0;
     padding: 0;
     width: 100%;
     table-layout: fixed;
   }
   table caption {
     font-size: 1.5em;
     margin: .5em 0 .75em;
   }
   table tr {
     background: #f8f8f8;
     border: 1px solid #ddd;
     padding: .35em;
   }
   table th,
   table td {
     padding: .625em;
     text-align: center;
   }
   table th {
     font-size: .85em;
     letter-spacing: .1em;
     text-transform: uppercase;
   }
   @media screen and (max-width: 600px) {
     table {
       border: 0;
     }
     table caption {
       font-size: 1.3em;
     }
     table thead {
       border: none;
       clip: rect(0 0 0 0);
       height: 1px;
       margin: -1px;
       overflow: hidden;
       padding: 0;
       position: absolute;
       width: 1px;
     }
     table tr {
       border-bottom: 3px solid #ddd;
       display: block;
       margin-bottom: .625em;
     }
     table td {
       border-bottom: 1px solid #ddd;
       display: block;
       font-size: .8em;
       text-align: right;
     }
     table td:before {
       /*
       * aria-label has no advantage, it won't be read inside a table
       content: attr(aria-label);
       */
       content: attr(data-label);
       float: left;
       font-weight: bold;
       text-transform: uppercase;
     }
     table td:last-child {
       border-bottom: 0;
     }
   }


   </style>


</head>
<body>

<?php
echo "<table>";
 echo "<tr><th>Sıra NO</th><th>Okul Adı</th><th>Kişi Adı</th><th>Siparişi</th></tr>";

class TableRows extends RecursiveIteratorIterator {
    function __construct($it) {
        parent::__construct($it, self::LEAVES_ONLY);
    }

    function current() {
        return "<td>" . parent::current(). "</td>";
    }

    function beginChildren() {
        echo "<tr>";
    }

    function endChildren() {
        echo "</tr>" . "\n";
    }
}

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "veri_tabani";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conn->prepare("SELECT no, okul_adi, kisi_adi, siparis FROM tablo");
    $stmt->execute();

    // set the resulting array to associative
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);

    foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) {
        echo $v;
    }
}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$conn = null;
echo "</table>";
?>

</body>
</html>
