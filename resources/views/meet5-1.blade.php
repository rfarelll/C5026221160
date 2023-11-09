<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
  <script>
      function showalert() {
          alert("Selamat! Anda telah memenangkan undian sebesar Rp100.000.000!!!");
       }
       function changeText() {
          //var old = document.getElementById("");
          var span = document.getElementById("output"); //membaca isi tulisan lama di span
          var textBox = document.getElementById("textbox"); //membaca tulisan yang baru

          textBox.style.color = "red"; //mengubah warna font dari text box menjadi merah
          span.innerHTML = textBox.value ;
          //innerHTML = mengnubah text secara runtime
          //.value = membaca isi komponen form
          console.log("Selamat Telah Sampai Disini!");
          console.log("Isinya Text Box Adalah " + textBox.value);
  }
  </script>
  <script src="meet5_5/operasi"></script>
  </head>

  <body>
  <div class="container">
  <center><button class="btn btn-primary" onclick="showalert()">Klik Disini </button></center>
  <br>
  <button onclick="changeText();" class="btn btn-success">Click me!</button>
  <span id="output">Replace Me</span>
  <input id="textbox" type="text" class="form-control">
  <br>
  <div class="form-group">
      <label for="bil1">Bilangan 1</label>
      <input type="number" id="bil1" placeholder="Masukkan Bilangan Pertama" class="form-control">
      </div>
  <div class="form-group">
      <label for="bil2">Bilangan 2</label>
      <input type="number" id="bil2" placeholder="Masukkan Bilangan Kedua" class="form-control">
  </div>
  <div class="btn-group">
      <button type="button" class="btn btn-primary" onclick="tambah();">Tambah</button>
      <button type="button" class="btn btn-primary" onclick="kali();">Perkalian</button>
      <button type="button" class="btn btn-primary" onclick="kurang();">Pengurangan</button>
      <button type="button" class="btn btn-primary" onclick="bagi();">Pembagian</button>

  </div>
  <h1>Hasil Operasi : <div id="hasil">
    </div>
</h1>
  </div>
</body>
</html>
