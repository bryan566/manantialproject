
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Generate Barcode In Laravel</title>       
   <!-- Fonts -->
   <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
   <!-- Bootstrap -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css" integrity="sha512-SbiR/eusphKoMVVXysTKG/7VseWii+Y3FdHrt0EpKgpToZeemhqHeZeLWLhJutz/2ut2Vw1uQEj2MbRF+TVBUA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
  <body>

    <div class="container-fluid  ">
      <div class="row justify-content-md-center">
        <div class="col-md-9">
            <div class="card px-5 mt-3  shadow">
               <h1 class="text-primary pt-4 text-center mb-4">Generate Barcode in Laravel</h1>
                
                <form action="{{ route('storecodigo') }}" method="post">
                 @csrf
                    <label for="">Cliente:</label>
                    <input type="text" class="form-control mb-3" name="cliente" required>
                    
                 <button type="submit" class="btn btn-success col-md-3">Enviar</button>
          
            </form>
        </div>
            
        </div>

      </div>
    </div>



  </body>
</html>




