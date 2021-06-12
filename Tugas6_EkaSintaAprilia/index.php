<html>
<head>
	<title> KALKULATOR SEDERHANA | Eka Sinta Aprilia</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@700&display=swap" rel="stylesheet">

</head>
<body> 
   <center> 
    <artikel>
	<div class="kalkulator">
		<h2 class="judul">KALKULATOR SEDERHANA</h2>
        <p class="sub-judul">By : Eka Sinta Aprilia <p>
		<section>
		<form method="post" action="index.php">	
        <div id="input-box-top" class="form-group">

           <center>
           <input type="number" placeholder="Masukkan bilangan pertama" name="bil1" id="ipb2j" class="bila"/>
            </center> 
        </div>	
        <div id="input-box-top" class="form-group">
            <input type="number" placeholder="Masukkan bilangan kedua" name="bil2" id="ipb2j" class="bila"/>
        </div>
        <div class="form-group">
            <button type="submit" id="ijf3g" name="submit" class="tombol">Hitung</button>	
        </div>										
		</form>
    
        <?php
            function penjumlahan($bil1, $bil2){
                return $bil1 + $bil2;
            }
            //fungsi untuk pengurangan
            function pengurangan($bil1, $bil2){
                return $bil1 - $bil2;
            }
            //fungsi untuk perkalian
            function perkalian($bil1, $bil2){
                return $bil1 * $bil2;
            }
            //fungsi untuk pembagian
            function pembagian($bil1, $bil2){
                return $bil1 / $bil2;
            }
            
            $bila1 = 0 ;
            $bila2 = 0 ;
        ?>
            <?php if(isset($_POST['submit'])){ 
                $bila1= $_POST['bil1'];
                $bila2= $_POST['bil2'];
                ?>
               
                <div class="container">
                    <div class="row row-cols-2">
                        <div class="col">
                        <label  class="label">Bilangan 1</label>
                        <br>
                        <input type= "text" value="<?php echo  $_POST['bil1'] ; ?>" class="bilangan">
                        </div>
                        <div class="col">
                        <label  class="label">Bilangan 2</label>
                        <br>
                        <input type= "text" value="<?php echo  $_POST['bil2'] ; ?>" class="bilangan">    
                    </div>
                 </div>
                </div>
                
                
                <div class="container">
                    <div class="row row-cols-2">
                        <div class="col">
                        <label  class="label">Hasil Penjumlahan:</label>
                        <input type= "text" value="<?php echo  penjumlahan($bila1, $bila2) ; ?>" class="bil">
                        </div>
                    <div class="col">
                        <label  class="label">Hasil Pengurangan:</label>
                        <input type= "text" value="<?php echo  pengurangan($bila1, $bila2); ?>" class="bil">
                    </div>
                    <div class="col">
                        <label  class="label">Hasil perkalian:</label>
                        <input type= "text" value="<?php echo  perkalian($bila1, $bila2); ?>" class="bil" >
                    </div>
                    <div class="col">
                        <label  class="label">Hasil pembagian</label>
                        <input type= "text" value="<?php echo  pembagian($bila1, $bila2); ?>" class="bil">
                    </div>
                    </div>
                </div>
              
            <?php } ?>
           
		</artikel>
      </center>
	</div>

</body>
</html>