<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel Administratora</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 50%;
            margin: 50px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-bottom: 8px;
        }

        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 16px;
            box-sizing: border-box;
        }

        button {
            background-color: #4caf50;
            color: #fff;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #45a049;
        }
        /* Reset some default styles for the table */
/* Reset some default styles for the table */
table {
    border-collapse: collapse;
    margin-bottom: 20px;
}

/* Style for table header */
th {
    background-color: #f2f2f2;
    color: #333;
    font-weight: bold;
    padding: 10px;
    text-align: left;
}

/* Style for table rows */
tr {
    border-bottom: 1px solid #ddd;
}

/* Alternate row colors for better readability */
tr:nth-child(even) {
    background-color: #f9f9f9;
}

/* Hover effect for table rows */
tr:hover {
    background-color: #f5f5f5;
}

/* Style for table cells */
td {
    padding: 10px;
    text-align: left;
}

/* Add some spacing between cells */
td:not(:last-child) {
    padding-right: 20px;
}

/* Responsive design for smaller screens */
@media (max-width: 768px) {
    /* Stack tables vertically on small screens */
    table {
        display: block;
        margin-bottom: 20px;
    }

    /* Add some spacing between tables */
    table:not(:last-child) {
        margin-bottom: 20px;
    }

    /* Stack cells vertically on small screens */
    td {
        display: block;
        padding: 10px 0;
    }

    /* Hide header on small screens */
    th {
        display: none;
    }

    /* Add some spacing between cells */
    td:not(:last-child) {
        margin-bottom: 10px;
    }
}

    </style>
</head>
<body>
    <div class="container">
        <h2>Panel Administratora</h2>
        <form action="process.php" method="post">
            <label for="id">Id:</label>
            <input type="text" name="id" id="id">

            <label for="imie">Imię:</label>
            <input type="text" id="imie" name="imie" required>

            <label for="nazwisko">Nazwisko:</label>
            <input type="text" id="nazwisko" name="nazwisko" required>

            <button type="submit">Dodaj</button>
        </form>
    </div>
    <div class="results">
        <?php
        $lacz = mysqli_connect('localhost', 'root', '', 'gymorla');
        $zap = "SELECT * FROM `uzytkownicy`;";
        $wyn = mysqli_query($lacz, $zap);
        echo "<table>";
        echo "<tr>  <th>id</th>  <th>imie</th>  <th>nawisko</th> </tr>";
        while($row = mysqli_fetch_array($wyn)){
            echo "<tr>";
            echo "<td>".$row[0]. "</td>". "<td>". $row[1]. "</td>". "<td>".$row[2]. "</td>";
            echo "</tr>";

        }

        mysqli_close($lacz);
        echo "</table>";
        ?>

        
    
</body>
</html>
