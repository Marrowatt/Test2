<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Turim Test</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

</head>
<body>
    <div class="container">
    
        <div class="row mt-3">
        
            <button class="btn btn-secondary" id="gravar"> Gravar </button>

            <button class="btn btn-secondary ml-2" id="ler"> Ler </button>

        </div>

        <div class="row mt-3">
        
            <label for="name"> Nome: </label>

            <input type="text" id="name" name="name" class="form-control col-4 ml-2">

            <button class="btn btn-primary ml-2" id="incluir"> Incluir </button>
        
        </div>

        <div class="row mt-3">
        
            <div class="col-4">

                <table class="table table-hovered border">
                    <thead>
                        <th colspan="2" class="text-center"> Pessoa </th>
                    </thead>
                    <tbody id="catapimbas">
                    </tbody>

                </table>
                
            </div>

            <div class="col-8">
            
                <textarea class="border" id='json' cols="100%" rows="20">
                </textarea>

            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    <script src="js/codes.js"></script>
</body>
</html>