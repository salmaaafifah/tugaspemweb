<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belanja</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
    
               
        <div class="container-fluid bg-light p-5  shadow-sm">
            <div class="row">
              <div class="col-8">
                <form method="POST" action="latihan2.php" class="form-horizontal ">
                  <h1 class="text-primary">MOBIL IMPIAN</h1>
                  <hr>
                  <div class="form-group row">
                    <label for="nama__pembeli" class="col-sm-4 col-form-label"><b>Nama Pembeli</b></label>
                    <div class="col-sm-8">
                   
                      <input type="text" class="form-control" name="namapembeli">
                     
                    </div>
                  </div>
                <!------------------------>

                  <fieldset class="form-group">
                    <div class="row">
                      <legend class="col-form-label col-sm-4 pt-0"><b>Pilih Produk</b></legend>
                      <div class="col-sm-8">

                        <div class="form-check">
                          <input class="form-check-input" type="radio" id="Honda CR-V" name="produk" value="Honda CR-V" required>
                          <label class="form-check-label" for="Honda CR-V">
                          Honda CR-V
                          </label>
                        </div>
                        <!--------------------------->
                        <div class="form-check">
                          <input class="form-check-input" type="radio" id=" Mercedes-Benz G-Class" name="produk" value=" Mercedes-Benz G-Class" required>
                          <label class="form-check-label" for=" Mercedes-Benz G-Class">
                          Mercedes-Benz G-Class
                          </label>
                        </div>
                        <!--------------------------->
                        <div class="form-check">
                          <input class="form-check-input" type="radio" id="  Hyundai Kona" name="produk" value="  Hyundai Kona" required>
                          <label class="form-check-label" for="  Hyundai Kona">
                          Hyundai Kona
                          </label>
                        </div>

                      </div>  <!---col-->
                    </div> <!---row-->
                  </fieldset> 
                  <div class="form-group row">
                 
                    <label for="jumlah__" class="col-sm-4 col-form-label"><b>Jumlah</b></label>
                    <div class="col-sm-5">
                      <input type="number" for="produk__" class="form-control" name="jumlah" value="" required>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="tanggal"><b>Tanggal Pesan</b></label>
                    <input type="date" name="tanggal" value="" class="form-control">
                </div>

                <div class="form-group">
                    <label for="kurir">Jenis Kurir</label>
                    <input type="text" name="kurir" value="" class="form-control">
                </div>

                <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <textarea class="form-control" name="alamat" id="" cols="30" rows="5"></textarea>
                </div>

                <div class="form-group">
                    <label for="biaya_kurir">Biaya Kurir</label>
                    <input type="text" name="biaya_kurir" value="" class="form-control">
                </div>
                
                <div class="form-group">
                    <label for="asuransi">Biaya Asuransi</label>
                    <input type="text" name="asuransi" value="" class="form-control">
                </div>
<br>
                  <button href="" type="submit" class="btn btn-primary pl-5 pr-5" name="proses">Kirim</button>

                </form>

              </div> <!-----col-6-->
              <div class="col-4 " >
                  <ul class="p-1 bg-white" style="list-style-type:none;border:1px solid #c4c4c4;">
                    <li class="bg-primary p-2 text-white">Daftar Harga</li>
                    <li class="p-2">Honda CR-V : Rp. 800.000.000,-</li>
                    <li class="p-2 bg-light">Mercedes-Benz G-Class : Rp. 6.000.000.000,-</li>
                    <li class="p-2">Hyundai Kona : Rp. 4.00.000.000,-</li>
                    <li class="bg-primary p-2 text-white">Noted : selalu ada harga promo</li>
                  </ul>
              </div>

              
            
            </div> <!---row-->
        </div> <!---containe-fluid-->

        <div class="container-fluid bg-light mt-5 mb-5 p-5 shadow-sm">
          <h1 class="animate_animated animatebounce animateinfinite	infinite animate_delay-4s	4s">Total Belanjaan kamu!</h1>
          <br>
        </div>
        <?php

        $nama_pembeli = $_POST['namapembeli'];
        $produk = $_POST['produk'];
        $jumlah = $_POST['jumlah'];
        $tanggal = $_POST['tanggal'];
        $alamat = $_POST['alamat'];
        $kurir = $_POST['kurir'];
        $asuransi = $_POST['asuransi'];

        echo '<br/> nama pembeli'. $nama_pembeli;
        echo '<br/> produk'. $produk;
        echo '<br/> jumlah'. $jumlah;
        echo '<br/> tanggal'. $tanggal;
        echo '<br/> alamat'. $alamat;
        echo '<br/> kurir'. $kurir;
        echo '<br/> asuransi'. $asuransi;

        if($produk == 'Honda CR-V')
        {
            echo '<br> total: '. 80000000 *$jumlah;
        }
        else if($produk == 'Mercedes-Benz G-Class')
        {
            echo '<br> total: '. 6000000000 *$jumlah;
        }
        else 
        {
            echo '<br> total: '. 400000000 *$jumlah;
        }
        ?>
    
</body>
</html>