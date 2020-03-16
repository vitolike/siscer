<div class="nav-scroller bg-white box-shadow ">
    <div class="container">
        <nav class="nav nav-underline">
            <a class="nav-link active red-text" href="<?= base_url(); ?>app/home"><i class="fas fa-home navbar-text"></i></a>
            <a class="nav-link active red-text" onclick="history.back()"><i class="fas fa-arrow-left navbar-text"></i></a>
            <a class="nav-link red-text" href="#" data-toggle="modal" data-target="#novo"><i class="far fa-file navbar-text"></i>&nbsp;&nbsp;Novo</a>
        </a>

        </nav>
    </div>
</div>

<main role="main" class="container">

    <div class="row">&nbsp;</div>

    <?php if ($msg == 'novo_sucesso'): ?>
        <div class="row">&nbsp;</div>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong><i class="fas fa-user-circle"></i>&nbsp; Novo Integrante!</strong> foi adicionado com sucesso.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <?php elseif ($msg == 'sucesso_update'): ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong><i class="fas fa-exclamation-triangle"></i>&nbsp;</strong> Integrante atualizado com sucesso.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <?php elseif ($msg == 'sucesso_del'): ?>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong><i class="fas fa-exclamation-triangle"></i>&nbsp;</strong> Integrante apagado com sucesso.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <?php endif; ?>

                    <div class="my-3 p-3 bg-white rounded box-shadow">
                        <h5 class="card-title">Integrantes</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Lista de integrantes.</h6>

                        <table class="table" id="tabela">
                            <thead>
                                <tr>
                                    <th scope="col">Matricula</th>
                                    <th scope="col">Nome</th>
                                    <th scope="col">Telefone</th>
                                    <th scope="col">Cidade</th>
                                    <th scope="col">Estado</th>
                                    <th scope="col"></th>
                                </tr>
                            </thead>
                            <?php if(!$query){?>
                                <tbody>
                                    <tr>
                                        <td colspan="5">
                                            <center>
                                                <p class="texto_pequeno">Nenhum Integrante Cadastrado </p>
                                            </center>
                                        </td>
                                    </tr>
                                </tbody>

                                <?php }else{ ?>
                                    <tbody>
                                        <?php foreach($query as $prop) {?>

                                            <tr id="<?= $prop->integrantesid; ?>">
                                                <td>
                                                <?= $prop->integrantesid; ?>
                                                </td>
                                                <td>
                                                <?= $prop->nome; ?>
                                                </td>
                                                <td>
                                                    <?= $prop->telefone; ?>
                                                </td>
                                                <td>
                                                    <?= $prop->cidade; ?>
                                                </td>
                                                <td>
                                                    <?= $prop->uf; ?>
                                                </td>

                                                <td>
                                                    <a href="<?= base_url(); ?>integrantes/editar_integrante/<?= $prop->integrantesid; ?>">
                                                        <button type="button" class="btn btn-success"><i class="fas fa-user-edit"></i></button>
                                                    </a>
                                                    <button type="submit" class="btn btn-danger remove"><i class="fas fa-trash-alt"></i></button>
                                                </td>
                                            </tr>
                                            <?php }?>
                                                <?php }?>
                                    </tbody>
                        </table>

                        <div class="media text-muted pt-3">

                        </div>
                    </div>
</main>



<!-- Modal -->
<div class="modal fade" id="novo" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered modal-xl" role="document">
   <div class="modal-content">
      <div class="modal-header">
         <h5 class="modal-title" id="exampleModalCenterTitle"><i class="fas fa-portrait"></i>&nbsp;Cadastro de Integrante</h5>
         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
         <span aria-hidden="true">&times;</span>
         </button>
      </div>
      <div class="modal-body">
         <form method="post" class="p-t-15" role="form" action="<?= base_url(); ?>integrantes/add_integrante">
            <div class="form-row">
               <div class="form-group col-md-6" id="test">
                  <label for="nome">Nome Completo</label>
                  <input type="text" class="form-control" id="nome" name="nome" required="required">
               </div>
               <div class="form-group col-md-4">
                  <label for="email">E-mail</label>
                  <input type="email" class="form-control" id="email" name="email">
               </div>
               <div class="form-group col-md-2">
                  <label for="telefone">Telefone</label>
                  <input type="text" class="form-control" id="telefone" name="telefone">
               </div>
            </div>
            <div class="form-row">
               <div class="form-group col-md-2">
                  <label for="inputCity">CEP</label>
                  <input type="text" class="form-control" id="cep" name="cep">
               </div>
               <div class="form-group col-md-6">
                  <label for="inputAddress">Endereço</label>
                  <input type="text" class="form-control" id="endereco" name="endereco">
               </div>
               <div class="form-group col-md-2">
                  <label for="inputAddress">Numero</label>
                  <input type="text" class="form-control" id="numero" name="numero">
               </div>
               <div class="form-group col-md-2">
                  <label for="inputCity">Bairro</label>
                  <input type="text" class="form-control" name="bairro" id="bairro" required="required">
               </div>
            </div>
            <div class="form-row">
               <div class="form-group col-md-3">
                  <label for="inputCity">Cidade</label>
                  <input type="text" class="form-control" name="cidade" id="cidade" required="required">
               </div>
               <div class="form-group col-md-3">
                  <label for="inputZip">Estado</label>
                  <select type="text" class="form-control" id="uf" name="uf" required="required">
                     <option selected>Escolher...</option>
                     <option value="AC">Acre</option>
                     <option value="AL">Alagoas</option>
                     <option value="AP">Amapá</option>
                     <option value="AM">Amazonas</option>
                     <option value="BA">Bahia</option>
                     <option value="CE">Ceará</option>
                     <option value="DF">Distrito Federal</option>
                     <option value="ES">Espírito Santo</option>
                     <option value="GO">Goiás</option>
                     <option value="MA">Maranhão</option>
                     <option value="MT">Mato Grosso</option>
                     <option value="MS">Mato Grosso do Sul</option>
                     <option value="MG">Minas Gerais</option>
                     <option value="PA">Pará</option>
                     <option value="PB">Paraíba</option>
                     <option value="PR">Paraná</option>
                     <option value="PE">Pernambuco</option>
                     <option value="PI">Piauí</option>
                     <option value="RJ">Rio de Janeiro</option>
                     <option value="RN">Rio Grande do Norte</option>
                     <option value="RS">Rio Grande do Sul</option>
                     <option value="RO">Rondônia</option>
                     <option value="RR">Roraima</option>
                     <option value="SC">Santa Catarina</option>
                     <option value="SP">São Paulo</option>
                     <option value="SE">Sergipe</option>
                     <option value="TO">Tocantins</option>
                  </select>
               </div>
               <div class="form-group col-md-3">
                  <label for="nome">RG</label>
                  <input type="text" class="form-control rg" id="rg" name="rg" required="required">
               </div>
               <div class="form-group col-md-3">
                  <label for="inputPassword4">CPF</label>
                  <input type="text" class="form-control cpf" id="cpf" name="cpf" required="required">
               </div>
            </div>
            <div class="form-row">
            </div>
            <div class="form-row">
               <div class="form-group col-md-3">
                  <label for="possui_assis_med">Possui assistência médica?</label>
                  <select class="custom-select" id="possui_assis_med" name="possui_assis_med">
                     <option value="NÃO" selected>Escolher...</option>
                     <option value="SIM">Sim</option>
                     <option value="NÃO">Não</option>
                  </select>
               </div>
               <div class="form-group col-md-3">
                  <label for="alergia_med">Possui alergia a Medicamentos?</label>
                  <select class="custom-select" id="alergia_med" name="alergia_med">
                     <option value="NÃO" selected>Escolher...</option>
                     <option value="SIM">Sim</option>
                     <option value="NÃO">Não</option>
                  </select>
               </div>
               <div class="form-group col-md-3">
                  <label for="doenca">Sofre ou Sofreu alguma doença?</label>
                  <select class="custom-select" id="doenca" name="doenca">
                     <option value="NÃO" selected>Escolher...</option>
                     <option value="SIM">Sim</option>
                     <option value="NÃO">Não</option>
                  </select>
               </div>
               <div class="form-group col-md-3">
                  <label for="medicamento">Faz uso de algum medicamento?</label>
                  <select class="custom-select" id="medicamento" name="medicamento">
                     <option value="NÃO" selected>Escolher...</option>
                     <option value="SIM">Sim</option>
                     <option value="NÃO">Não</option>
                  </select>
               </div>
            </div>
            <div class="form-row">
               <div class="form-group col-md-3">
                  <div id="res_assis_med">
                     <label for="possui_assis_med">Qual?</label>
                     <input type="text" class="form-control" name="res_assis_med">
                  </div>
               </div>
               <div class="form-group col-md-3">
                  <div id="res_alergia_med">
                     <label for="possui_assis_med">Qual?</label>
                     <input type="text" class="form-control" name="res_alergia_med">
                  </div>
               </div>
               <div class="form-group col-md-3">
                  <div id="res_doenca">
                     <label for="possui_assis_med">Qual?</label>
                     <input type="text" class="form-control" name="res_doenca">
                  </div>
               </div>
               <div class="form-group col-md-3">
                  <div id="res_medicamento">
                     <label for="possui_assis_med">Qual?</label>
                     <input type="text" class="form-control" name="res_medicamento">
                  </div>
               </div>
            </div>
            <div class="form-group">
               <label for="exampleFormControlTextarea1">Observações</label>
               <textarea class="form-control" name="observacoes" rows="3"></textarea>
            </div>
            <div class="modal-footer">
               <button type="submit" class="btn btn-success btn-lg btn-block">Salvar</button>
            </div>
         </form>
      </div>
   </div>
</div>
</div>


    <script type="text/javascript">
        $("#cep").focusout(function() {

            $.ajax({

                url: 'https://viacep.com.br/ws/' + $(this).val() + '/json/unicode/',

                dataType: 'json',

                success: function(resposta) {

                    $("#endereco").val(resposta.logradouro);
                    $("#bairro").val(resposta.bairro);
                    $("#cidade").val(resposta.localidade);
                    $("#uf").val(resposta.uf);

                }
            });
        });

        $(".remove").click(function() {

            var id = $(this).parents("tr").attr("id");

            swal({

                    title: "Apagar cliente",
                    text: "Você tem certeza?",
                    type: "warning",
                    showCancelButton: true,
                    confirmButtonClass: "btn-danger",
                    confirmButtonText: "Sim, apagar!",
                    cancelButtonText: "Não, cancelar!",
                    closeOnConfirm: false,
                    closeOnCancel: false

                },

                function(isConfirm) {

                    if (isConfirm) {

                        $.ajax({

                            url: "<?php echo site_url('integrantes/delete/')?>" + id,
                            type: 'DELETE',
                            error: function() {
                                swal("Error", "Ocorreu um erro, contate o administrador", "error");
                            },
                            success: function(data) {
                                $("#" + id).remove();
                                swal("Apagado!", "O cliente foi apagado com sucesso.", "success");
                            }

                        });

                    } else {
                        swal("Cancelado", "Seu cliente não foi apagado.", "error");
                    }

                });

        });

        $("#possui_assis_med").change(function() {
            $('#res_assis_med').hide();
            if(this.value == "SIM")
              $('#res_assis_med').show();

        });
        $("#alergia_med").change(function() {
            $('#res_alergia_med').hide();
            if(this.value == "SIM")
              $('#res_alergia_med').show();

        });
        $("#medicamento").change(function() {
            $('#res_medicamento').hide();
            if(this.value == "SIM")
              $('#res_medicamento').show();

        });
        $("#doenca").change(function() {
            $('#res_doenca').hide();
            if(this.value == "SIM")
              $('#res_doenca').show();

        });
        
    </script>

    <script>
        $(document).ready(function() {
          $('#res_assis_med').hide();
          $('#res_alergia_med').hide();
          $('#res_medicamento').hide();
          $('#tabela_filter').hide();
          $('#res_doenca').hide();
          $('#telefone').mask("(00) 0000-00009");
          $('#cpf').mask("000.000.000-00");
          $('#cep').mask("00000-000");
          $('#data').mask("99/99/9999");
          $('#rg').mask("00.000.000-9");
          $('#tabela').DataTable({
                dom: 'Bfrtip',
                "language": {
                    "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Portuguese.json"
                }
            });
        });
    </script>
  