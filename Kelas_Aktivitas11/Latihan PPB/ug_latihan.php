$query = "SELECT * FROM mahasiswa";
    $result = mysqli_query($conn, $query);
    
    $no = 1;
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . $no . "</td>";
        echo "<td>" . $row['nama_mahasiswa'] . "</td>";
        echo "<td>" . $row['umur'] . "</td>";
        echo "<td>" . $row['tlp'] . "</td>";
        echo "<td>" . $row['nama_file'] . "</td>";
        echo "</tr>";
        $no++;
    }
    
    mysqli_close($conn);
    ?>