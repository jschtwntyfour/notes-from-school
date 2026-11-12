<!DOCTYPE html>
<html>
<head>
    <title>BMI (BODY MASS INDEX)</title>
    <style>
        
        body { font-family: Arial; background-color: #F5F5DC; text-align: center; padding: 50px; }
        .box { background: white; padding: 20px; border-radius: 10px; width: 300px; margin: auto; box-shadow: 0px 0px 10px gray; }
        input { width: 90%; padding: 10px; margin: 10px 0; border: 1px solid #ccc; }
        button { width: 95%; padding: 10px; background-color: blue; color: white; border: none; cursor: pointer; }
        .hasil { margin-top: 20px; padding: 10px; border: 1px dashed black; }
        
    </style>
</head>
<body>

<div class="box">
    <h2>Find Out Ur BMI</h2>
    
    <form method="POST">
        <label for=""><strong>Masukkan Tinggi Badan Anda (CM) :</strong></label>
        <input type="number" name="tinggi" placeholder="Tinggi Badan (cm)" required>
        <label for=""><strong>Masukkan Berat Badan Anda (KG) :</strong></label>
        <input type="number" name="berat" placeholder="Berat Badan (kg)" required>
        <button type="submit" name="hitung">HITUNG</button>
    </form>

    <?php
    
    if (isset($_POST['hitung'])) {
        $tinggi = $_POST['tinggi'] / 100; 
        $berat = $_POST['berat'];
        
    
        $bmi = $berat / ($tinggi * $tinggi);
        
        
        if ($bmi < 18.5) {
            $status = "Kurus/UnderWeight";
        } elseif ($bmi < 25) {
            $status = "Normal (Ideal)";
        } elseif ($bmi < 30) {
            $status = "Gemuk";
        } else {
            $status = "Obesitas";
        }

        
        echo "<div class='hasil'>";
        echo "<h3>Hasil: " . round($bmi, 1) . "</h3>";
        echo "<p>Status: <b>$status</b></p>";
        echo "</div>";
    }
    ?>
</div>

<br>

<table border="1" align="center" cellpadding="10" style="background: white;">
    <tr bgcolor="Bisque">
        <strong>
        <th>BMI</th>
        <th>Kategori</th>
    </tr>
    <tr>
        <td> < 18.5 </td>
        <td>Kurus</td>
    </tr>
    <tr>
        <td>18.5 - 24.9</td>
        <td>Ideal</td>
    </tr>
    <tr>
        <td>25 - 29.9</td>
        <td>Gemuk</td>
    </tr>
    <tr>
        <td> > 30 </td>
        <td>Obesitas</td>
    </tr>
</strong>
</table>

</body>
</html>