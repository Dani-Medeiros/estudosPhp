<?php
require_once '../../controller/professor.php';
?>

<!DOCTYPE html>
<html lang="pt-br">

<head><!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../assets/style.css">
    <title>Lista de professores</title>
</head>
<?php include_once '../cabecalho.php'; ?>
<body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script src="/../../js/jquery.js"></script>
    <h1>Lista de cadastro dos professores!</h1>
    <hr><br>
    <div id='div-tabela'>
        <table id='tabela'>
            <thead id='thead'>
                <tr class='titulos-thead'>
                    <th width='50px' id="id-prof">ID</th>
                    <th width='130px' id="nome-prof">Nome</th>
                    <th width='230px' id="email-prof">E-mail</th>
                    <th width='140px' id="tel-prof">Celular</th>
                    <th width='140px' id="cpf-prof">CPF</th>
                    <th width='100px' id="nasc-prof">Nascimento</th>
                    <th width='100px' id="turno-prof">Turno</th>
                    <th width='140px' id="data-cad-prof">Data de Cadastro</th>
                    <th width='120px' id="acoes-prof">Ações</th>
                </tr>
            </thead>
            <tbody id='tbody'>
                <?php
                    tabela_professores(mostra_lista_prof());
                ?>
            </tbody>
        </table>
    </div>
    <a href="cadastrar.php"><input type="submit" value="CADASTRAR NOVO" class="botao"></a>
</body>

<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 style="color:red;"><span class="glyphicon glyphicon-lock"></span> Editar Cadastro</h4>
        </div>
        <div class="modal-body">
            <div class="row">
            <div class="col-md-8">
                <div class="col-md-2" style="text-align:left">
                    ID<br>
                    <input type='text' class='botao' name='id' id="id_prof" value='' >
                </div>
                <div class="col-md-6">
                    Nome<br>
                    <input type='text' class='botao' name='nome' id="nome_prof" value=''><br>
                </div>
            </div>
            </div>
            E-mail<br>
            <input type='email' name='email' class='botao' id="email_prof" value=''><br>
            Celular<br>
            <input type='tel' name='celular' class='botao' id="cel_prof" value=''><br>
            CPF<br>
            <input type='text' name='cpf' class='botao' id="cpf_prof" value=''><br>
            Data de nascimento<br>
            <input type='date' name='nasc' class='botao' id="nasc_prof" value=''><br>
            Selecione o turno<br>
            <select name='opcoes-turno' class='botao' id="turno_prof" value=''>
                <option name='turno' value='manha'>Manhã</option>
                <option name='turno' value='tarde'>Tarde</option>
                <option name='turno' value='noite'>Noite</option>
            </select><br><br>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-default btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
          <p>Not a member? <a href="#">Sign Up</a></p>
          <p>Forgot <a href="#">Password?</a></p>
        </div>
      </div>
    </div>
  </div>

<script type="text/javascript">

    /** Redireciona para o formulário de edição */
    function editar(id) {
        

        if (id) {
            $("#myModal").modal("show")
            $('#id_prof').val(id)
            $('#nome_prof').val(nome)
            $('#email_prof').val(email)
            $('#cel_prof').val(telefone)
            $('#cpf_prof').val(cpf)
            $('#nasc_prof').val(data_nasc)
            $('#turno_prof').val(turno)
            // window.location.href = "acoes.php";
        }
    }

    /** Redireciona novamente para a lista.php */
    function deletar(id) {
        if(id) {
            window.location.href = "lista.php";
        }
    }

</script>

</html>
