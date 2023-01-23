<?php
    session_start();
?>

<body>
    <form action="home.php" method="post">
        <table>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama" value = "<?php echo isset($_SESSION['nama'])?$_SESSION['nama']:''; ?>"></td>
            </tr>
            <tr>
                <td>Email</td>
                <td>
                    <input type="text" name="email" value = "<?php echo isset($_SESSION['email'])?$_SESSION['email']:''; ?>">
                </td>
            </tr>
            <tr>
                <td>Telepon</td>
                <td>
                    <input type="text" name="telepon" value = "<?php echo isset($_SESSION['telepon'])?$_SESSION['telepon']:''; ?>">
                </td>
            </tr>
            <!-- <tr>
                <td>Gender</td>
                <td>
                    <input type="radio" name="gender" value="Male">Male
                    <input type="radio" name="gender" value="female"> Female
                </td>
            </tr> -->
            <!-- <tr>
                <td>Negara</td>
                <td>
                    <select name="negara">
                        <option value="Indonesia">Indonesia</option>
                        <option value="Arabia">Arab</option>
                        <option value="Singapura">Singapura</option>
                        <option value="Belanda">Belanda</option>
                    </select>
                </td>
            </tr> -->
            <tr>
                <td>Hobi</td>
                <td>
                    <input type="checkbox" name="hobi[]" value="membaca">Membaca <br>
                    <input type="checkbox" name="hobi[]" value="menulis">menulis <br>
                    <input type="checkbox" name="hobi[]" value="mengaji">mengaji <br>
                    <input type="checkbox" name="hobi[]" value="nonton">Nonton <br>
                    <input type="checkbox" name="hobi[]" value="makan">Makan <br>
                </td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit"></td>
            </tr>
        </table>
    </form>
</body>
</html>