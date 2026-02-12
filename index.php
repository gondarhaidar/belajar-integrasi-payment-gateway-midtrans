<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment gateway midtrans</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <style>
        .gambar{
            height: 200px;
            border-radius : 4px;
            background-color : rgba(20, 200, 20, 36);
        }
        .merah {
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
        <?php for($i=0;$i<20;$i++): ?>
        <div class="col-lg-3 col-md-3 col-sm-1 border rounded-2 m-2">
            <div class="gambar mt-2">

            </div>
            <b>produk 1</b> <br>
            <span>RP 2000</span> <br>
            <button class="btn btn-primary">Beli</button>
        </div>
        <?php endfor ?>
    
    </div>
        </div>

    
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
<script>
    function angka() {
        return Math.floor(Math.random() * 256);
    }
    const gambar = document.querySelectorAll('.gambar');
    console.log(gambar);
    gambar.forEach(gmbr => {
        gmbr.style.backgroundColor = `RGBA(${angka()}, ${angka()}, ${angka()}, ${1})`
    })
</script>
</html>