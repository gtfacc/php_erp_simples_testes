<?php
    include_once(dirname(__DIR__)."/../layouts/header.php");
?>



<h1 class="title">Cadastro de Fornecedores</h1>

<div class="container_fluid">
    <div class="row">
        <div class="col-12">
            <button class="btn btn-primary">Novo Fornecedor</button>
        </div>
    </div>    
    <div class="row mt-3">
        <div class="col-12">
            <table class="table table-striped table-hover">
                <thead class="thead-dark">
                    <tr>
                        <th style="width:10%">#</th>
                        <th style="width:20%">CNPJ</th>
                        <th style="width:30%">NOME</th>
                        <th style="width:20%">Endereço</th>
                        <th style="width:20%">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Larry</td>
                        <td>the Bird</td>
                        <td>@twitter</td>
                        <td>&nbsp;</td>
                    </tr>
                </tbody>
            </table>  
        </div>  
    </div>
</div>

<?php
    include_once(dirname(__DIR__)."/../layouts/footer.php");
?>