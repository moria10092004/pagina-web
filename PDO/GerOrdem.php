<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include '_parts/_linkCSS.php'; ?>
    <title>Nova Ordem</title>
</head>
<body>
    <?php include_once '_parts/_header.php'; ?>
    <div class="container mt-3">
        <div>
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalOS">
            Adicionar serviço
            </button>
        </div>
        <?php
        spl_autoload_register(function($class){
            require_once "./Classes/{$class}.class.php";
        });
        ?>
        <form action="<?php htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">
            <div class="row">
                <div class="col-md-2">
                    <label for="txtNumero" class="form-label">N° Ordem de Serviço</label>
                    <input type="text" name="txtNumero" id="txtNumero" readonly class="form-control">
                </div>
                <div class="col-md-2">
                    <label for="txtData" class="form-label">Data</label>
                    <input type="date" name="txtData" id="txtData" value="<?php echo date('Y-m-d') ?>" class="form-control">
                </div>  
            </div>
            <div class="row">
                <div class="col-md-8">
                    <label for="sltCliente" class="form-label"></label>
                    <select name="sltCliente" id="sltCliente" class="form-select">
                    
                        
                    
                    </select>
                </div>
            </div>
            <div class="row">
                <table>
                    <thead>
                        <th>#</th>
                        <th>Serviço</th>
                        <th>Quantidade</th>
                        <th>Valor</th>
                        <th>Total</th>
                    </thead>
                    <tbody>
                        
                    </tbody>
                </table>
            </div>
        </form>
        <!-- Modal -->
            <div class="modal fade" id="modalOS" data-bs-backdrop="static" 
            data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" 
            aria-hidden="true">
             <div class="modal-dialog modal-xl">
                <div class="modal-content">
                <div class="modal-header" style="background-color: #ccc;">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Lista de serviços</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <table class="table">
    <thead>
        <tr>
        <th scope="col">#</th>
        <th scope="col">Serviço</th>
        <th scope="col">Valor</th>
        <th scope="col">Adicionar</th>
        </tr>
    </thead>
    <tbody>
        <tr>
        <th scope="row">1</th>
        <td>Formatar</td>
        <td>150.00</td>
        <td>
                <button type = "btn btn-info"> <i class="bi bi-plus-circle-dotted"
                style="font-size: 12 px; font-weight: bold;" onclick="addServico(1,'Formatar', 150)">

                </i></button></td>
        </tr>
        <tr>

        <th scope="row">2</th>
        <td>Formatar</td>
        <td>150.00</td>
        <td>@fat</td>
        </tr>
        <tr>
        <th scope="row">3</th>
        <td colspan="2">Larry the Bird</td>
        <td>
                <button type = "btn btn-info"> <i class="bi bi-plus-circle-dotted"
                style="font-size: 12 px; font-weight: bold;" onclick="addServico(1,'Formatar', 150)">

                </i></button></td>
        </tr>
    </tbody>
    </table>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                
                    </div>
                    </div>
                </div>
                </div>
            </div>
    </div>
    <?php include '_parts/_linkJS.php'; ?>
    
    <script> 
            function addServico(id,Servico, valor){
                bootstrap.Modal.getOrCreateInstance(document.
                getElementById('modalOS')).hide();
                alert('id:'+id+ 'Serviço:' +Servico);
            }
    
    </script>

</body>
</html>