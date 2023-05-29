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
    <p>Luas Kubus</p>
    <tr>
    <div><td>Sisi :</td></div>
    <div><td><input type="text" name="txSISI1" id="txSISI1"></td></div> 
    </tr>
    <tr>
    <div><td>Sisi :</td></div>
    <div><td><input type="text" name="txSISI2" id="txSISI2"></td></div> 
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
        
        let sisi1 = frm.txSISI1.value;
        let sisi2 = frm.txSISI2.value;
        let rumus = 6;
        let hasil = rumus*sisi1*sisi2;
   

        console.log("Sisi: " + sisi1);
        console.log("sisi: " + sisi2);
        console.log("Hasil: " + hasil);
        document.getElementById('hasil').textContent = hasil;
     
        return false;
    }


</script>

</body>
</html>