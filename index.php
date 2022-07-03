
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Menu</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
   <style>
        .mx-auto { width: 800px }
        .card { margin-top: 10px;}
    </style>
</head>
<body>
    
  <div class="mx-auto">
        <div class="card">
            <div class="card-header">
                Create/Edit Data
            </div>
            <div class="card-body">
                <form action="actionAdd.php" method="POST">
                
                <div class="form-group">
                <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama"  placeholder="Ketik Nama Anda">
                </div>

               <div class="form-group">
                   <label for="pilihan" class="col-sm-2 col-form-label">Menu</label>
                 
                       <select class="form-control" name="pilian" id="pilihan">
                           <option value="">- Pilih Menu -</option>
                           <option value="tongsengayam">Tongseng Ayam (32.000)</option>
                           <option value="tongsengkambing">Tongseng Kambing (50.000)</option>
                           <option value="esteh">Es Teh (4.000)</option>
                           <option value="tehmanis">Teh Manis (3.000)</option>
                           <option value="nasi">Nasi (5.000)</option>
                       </select>
                   
            </div>
            <div class="col-12">
                <input type="submit" name="simpan" value="Simpan Data" class="btn btn-primary">
            </div>
                </form>
            </div>
        </div>
      
        <div class="card">
            <div class="card-header text-white bg-secondary">
                Data Menu
            </div>
            <div class="card-body">
                
            </div>
        </div>
    </div>
    
    
</body>
</html>
