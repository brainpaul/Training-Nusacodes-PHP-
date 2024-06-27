<?php
    // Initialize variables
    $nilai1 = 0;
    $nilai2 = 0;
    $hasil = 0;

    // Check if form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nilai1 = $_POST['tnilai1'];
        $nilai2 = $_POST['tnilai2'];

        // Perform operation based on submitted button
        if (isset($_POST['bplus'])) {
            $hasil = $nilai1 + $nilai2;
        } elseif (isset($_POST['bminus'])) {
            $hasil = $nilai1 - $nilai2;
        } elseif (isset($_POST['btimes'])) {
            $hasil = $nilai1 * $nilai2;
        } elseif (isset($_POST['bdivide'])) {
            if ($nilai2 != 0) {
                $hasil = $nilai1 / $nilai2;
            } else {
                $hasil = "Error: Division by zero!";
            }
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator Sederhana</title>
</head>
<body>
    <form method="post">
        <table align="center">
            <tr>
                <td colspan="3">Kalkulator Sederhana</td>
            </tr>
            <tr>
                <td colspan="3"> <hr> </td>
            </tr>
            <tr>
                <td>Nilai Pertama</td>
                <td>:</td>
                <td><input type="text" name="tnilai1" value="<?php echo $nilai1 ?>"></td>
            </tr>
            <tr>
                <td>Nilai Kedua</td>
                <td>:</td>
                <td><input type="text" name="tnilai2" value="<?php echo $nilai2 ?>"></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td>
                    <input type="submit" name="bplus" value="+">
                    <input type="submit" name="bminus" value="-">
                    <input type="submit" name="btimes" value="*">
                    <input type="submit" name="bdivide" value="/">
                </td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td>
                    <input type="text" name="hasil" value="<?php echo $hasil ?>">
                </td>
            </tr>
            <tr>
                <td colspan="3"> <hr> </td>
            </tr>
        </table>
    </form>
</body>
</html>