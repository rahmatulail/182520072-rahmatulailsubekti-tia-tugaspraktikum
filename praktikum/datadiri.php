<!DOCTYPE html>
<html>
    <head>
        <title> error conect</title>
     <style>
         .card{
             
             max-width: 350px;
             text-align: center;
             color: #fff;
             border: 10px solid;
             height: 400px;
             width: 700px;
             border-color: grey;
             background: black;
         } 
        </style>
    <head>
        <body>
        <div class= "card">
            <?php
            $nim = 182520072;
            $nama = "Rahmatlail Subekti";
            $alamat = "Ds kaliwungu kidul, kec. Ngombol";
            $email = "rahmatulalit2@gmail.com";
            $u = "Unversitas Muhammadiyah Purworejo";
            $minat = "Iot"
            ?> 
            
        <h2>Data Diri</h2>
        <img src="foto.PNG" height= "90" width="80">
        
            <p>Nim      : <?php echo $nim;?> </p>
            <p>Nama     : <?php echo $nama;?> </p>
            <p>Alamat   : <?php echo $alamat;?> </p>
            <p>Email    : <?php echo $email;?> </p>
            <p>Bidang Minat     : <? echo $minat;?></p>
            <p><h3><? echo $u;?></p>

        </div>
        </body>
</html>
