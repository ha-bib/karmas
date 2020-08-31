
<?php
if($_POST){
    require('fpdf/fpdf.php');


    $nama = $_POST['nama'];
    $nim = $_POST['nim'];
    $tanggal = $_POST['tanggal'];
    $prodi = $_POST['prodi'];
    $fakultas = $_POST['fakultas'];
    $title = 'Kartu Mahasiswa Digital';

    $pdf = new FPDF();
    $pdf -> AddPage();
    $pdf->SetTitle($title);
    // Arial bold 15
    $pdf->SetFont('Arial','B',15);
    // Calculate width of title and position
    $w = $pdf->GetStringWidth($title)+6;
    $pdf->SetX((210-$w)/2);
    // Colors of frame, background and text
    $pdf->SetDrawColor(254,254,254,1);
    $pdf->SetFillColor(254,254,254,1);
    $pdf->SetTextColor(0,0,0,1);
    // Thickness of frame (1 mm)
    $pdf->SetLineWidth(1);
    // Title
    // Cell(width, height, content, border, nextline parametters, alignement[c - center], fill)
    $pdf->Cell($w, 9, $title, 1, 1, 'C', true);
    // Line break
    $pdf->Ln(10);

    $pdf->SetTextColor(0,0,0,1);
    $w = $pdf->GetStringWidth($nama)+6;
    $pdf->SetX((170-$w)/2);
    $pdf->Cell(40, 10, 'Nama    :', 1, 0, 'C');
    $pdf->Cell($w, 10, $nama, 1, 1, 'C');

    $pdf->SetX((170-$w)/2);
    $pdf->Cell(40, 10, 'NIM    :', 1, 0, 'C');
    $pdf->Cell($w, 10, $nim, 1, 1, 'C');

    $pdf->SetX((170-$w)/2);
    $pdf->Cell(40, 10, 'Tgl. Lahir :', 1, 0, 'C');
    $pdf->Cell($w, 10, $tanggal, 1, 1, 'C');
 

    $pdf->SetX((170-$w)/2);
    $pdf->Cell(40, 10, 'Prodi :', 1, 0, 'C');
    $pdf->Cell($w, 10, $prodi, 1, 1, 'C');
 

    $pdf->SetX((170-$w)/2);
    $pdf->Cell(40, 10, 'Fakultas :', 1, 0, 'C');
    $pdf->Cell($w, 10, $fakultas, 1, 1, 'C');
    $pdf->Output();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link href="css/favicon.ico" rel="shortcut icon" type="image/ico">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cetak KRS Digital</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="main-block">
        <div class="header">
             '
        </div>
        <div class="body">
            <form action='' method="POST">
                <input type="text" name="nama" placeholder="Nama" required>
                <input type="text" name="nim" placeholder="NIM" required>
                <input type="text" name="tanggal" placeholder="Tgl. Lahir" required>
                <select type="text" name="fakultas" required>
                    <option value="-">Fakultas...</option>
                    <option value="Keolahragaan">Keolahragaan</option>
                    <option value="Matematika dan Ilmu Pengetahuan Alam">Matematika dan Ilmu Pengetahuan Alam</option>
                    <option value="Teknik">Teknik</option>
                    <option value="Seni Rupa dan Desain">Seni Rupa dan Desain</option>
                    <option value="Keguruan dan Ilmu Pendidikan">Keguruan dan Ilmu Pendidikan</option>
                    <option value="Pertanian">Pertanian</option>
                    <option value="Hukum">Hukum</option>
                    <option value="Kedokteran">Kedokteran</option>
                    <option value="Ekonomi dan Bisnis">Ekonomi dan Bisnis</option>
                    <option value="Ilmu Sosial dan Politik">Ilmu Sosial dan Politik</option>
                    <option value="Ilmu Budaya">Ilmu Budaya</option>
                    <option value="Pascasarjana">Pascasarjana</option>
               </select>
                <input type="text" name="prodi" placeholder="Prodi" required>
                <input type="file" name="gambar" placeholder="Prodi" class="custom-file-input" accept="file_extension, .jpg, .png"required >

                <p align="center"><input type="submit" value="Cetak Karmas" class="myButton"></p>
            </form>
        </div>
        <div class="footer">
            <p>Karmas Digital <a href="https://uns.ac.id" target="_blank" class="teks">@UNS</a></p>
        </div>
    </div>
</body>
</html>

<style>

  .custom-file-input::-webkit-file-upload-button {
  visibility: hidden;
}

.custom-file-input::before {
  content: 'Pilih Foto';
  display: inline-block;
  background: linear-gradient(top, #077BB5, #05459E);
  border: 0px solid #077BB5;
  background: #077BB5;
  color:white;
  border-radius: 9px;
  padding: 17px 10px ;
  white-space: nowrap;
  -webkit-user-select: none;
  cursor: pointer;
    margin-top: 2px;
   width: 65px;
    height: 15px;

  font-size: 12pt;
}
.custom-file-input:hover::before {
 
  background-color:#05459E;
}
.custom-file-input:active::before {
  background: -webkit-linear-gradient(top, #077BB5, #077BB5);
  position:relative;
  top:2px;
}


.teks{
    text-decoration: none;
    color: #000000;
}

.myButton {
  box-shadow:inset -2px -3px 0px -41px #00bd00;
  background-color:#05459E;
  display:inline-block;
  cursor:pointer;
  color:#ffffff;
  font-family:Arial;
  font-size:26px;
  font-weight:bold;
  padding:  12px 1px;
  text-decoration:none;
  text-shadow:1px 1px 1px 1px #21d904;
    position: static;
      width: 90%;
    height: 60px; border-radius:  ;   border: 256 96px; 
  border: 0px solid black;
  margin-top: 10px;
  margin-bottom: 10px;
  margin-right: 15px;
  margin-left: 0px;
  border-radius: 10px 10px 10px 10px;
  -webkit-animation: mymove 3s infinite; /* Chrome, Safari, Opera */
    animation: mymove 3s infinite;
     -webkit-transition: width 2s; /* Safari */
    transition: width 0.4s;
  
}
.myButton:hover{
   background-color: #077BB5;  font-size:28px;  width: 100%; position:relative;}
@-webkit-keyframes mymove {
    50% {background:  #077BB5 bottom right;}
  }

 
</style>