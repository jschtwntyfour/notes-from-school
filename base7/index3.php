
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>USK PASS TEST</title>
    <style>
        .bapak{
            display: flex;
            flex-direction: column;
            gap: 5px;
        }
        .nama, .nilai, .lulus{
            display: flex;
            gap: 5px;
            padding: 5px;
        }
    </style>
</head>
<body>

    <h2>Cek Kelulusan Siswa</h2>

    <!-- siapkan 2 input -->


    <h1><?php echo cek_data('nama'); ?></h1>
    <h1><?php 
    
    if(cek_data('nilai') == "data da do"){
        echo "data da do";
    }
    else if (cek_data('nilai') >= 80){
        if(cek_data('nilai') > 100){
            echo "ANEHHHHH, nilai anda ";
            echo cek_data('nilai');
        }
    }else{
        echo "Anda tidak lulus! Nilai anda ";
        echo cek_data('nilai');
    }
    ?></h1>
    <hr>
    <form method="get">

    <div class="bapak">
        <div class="nama">
            <!-- 1. input nama -->
            <label>Nama:</label>
            <input type="text" name="nama">
        </div>
        <div class="nilai">
            <!-- 2. input nilai -->
            <label>Nilai:</label>
            <input type="number" name="nilai">
        </div>
        <div class="lulus">
            <input type="submit" value="cek lulus">
        </div>
    </div>
    </form>

    <?php
    function cek_data ($data){
        if(isset($_GET[$data]) == true){
            return $_GET[$data];
        }else{
            return "data da do";
        }
    }

    ?>

</body>
</html>
