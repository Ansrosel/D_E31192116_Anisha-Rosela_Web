<!DOCTYPE html>
<html>

<head>
    <style>
        table,
        th,
        td {
            border: 1px solid black;
            border-collapse: collapse;
        }

        td {
            padding: 10px;
        }
    </style>
</head>

<body>
    Daftar Prodi
    <table>
        <tr>
            <td>No</td>
            <td>Prodi</td>
            <td>Keterangan</td>
        </tr>
        <?php
        foreach ($Prodi as $row) {
            echo "
            <tr>
            <td>" . $row['no'] . "</td>
            <td>" . $row['prodi'] . "</td>
            <td>" . $row['ket'] . "</td>
            </tr>
            ";
        }
        ?>
    </table>
</body>

</html>