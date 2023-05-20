<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Form</title>
</head>
<body>

<table border=1px solid black>
<form name="latihan3" id="latihan3" method="POST" onsubmit="return checkform()">
    <h2>Hitung Luas Bangun Ruang</h2>
    <p>Luas Segi Empat</p>
    <tr>
    <div><td>Panjang :</td></div>
    <div><td><input type="text" name="txPNJG" id="txPNJG"></td></div> 
    </tr>
    <tr>
    <div><td>Lebar :</td></div>
    <div><td><input type="text" name="txLBR" id="txLBR"></td></div> 
    </tr>

    <tr>
    <div><td><button type="submit"> Hitung </button></td></div>
    <div><td>Luas :<span id="hasil"></span></td></div>
    </tr>



</form>
</table>

<script type="text/javascript">

    function checkform() {
        let frm = document.getElementById('latihan3').elements;
        
        let pnjg = frm.txPNJG.value;
        let lbr = frm.txLBR.value;
        let hasil = pnjg * lbr;
   

        console.log("Panjang: " + pnjg);
        console.log("Lebar: " + lbr);
        console.log("Hasil: " + hasil);
        document.getElementById('hasil').textContent = hasil;
     
        return false;
    }


</script>

</body>
</html>
