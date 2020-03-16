    <div class="nav-scroller bg-white box-shadow ">
    <div class="container">
      <nav class="nav nav-underline">
         <a class="nav-link active red-text" href="<?= base_url(); ?>app/home"><i class="fas fa-home navbar-text"></i></a>
         <a class="nav-link active red-text" onclick="history.back()"><i class="fas fa-arrow-left navbar-text"></i></a>
         <a class="nav-link active red-text" data-toggle="modal" data-target="#novo"><i class="far fa-file navbar-text"></i>&nbsp;&nbsp;Novo</a>
		     <a class="nav-link active red-text" data-toggle="modal" data-target="#editar"><i class="far fa-edit navbar-text"></i>&nbsp;&nbsp;Editar dados</a>
		     <a class="nav-link active red-text" data-toggle="modal" data-target="#imagem"><i class="fas fa-image navbar-text"></i>&nbsp;&nbsp;Adicionar/Editar Imagem</a>
      </nav>
      </div>
    </div>
    

    <main role="main" class="container">
    
    

    <div class="my-3 p-3 bg-white rounded box-shadow">
    <h5 class="card-title">Dados do integrante</h5>
    <h6 class="card-subtitle mb-2 text-muted font-weight-light">Dados de contato, documentos e etc.</h6>
    
    <div class="row">&nbsp;</div>
    
    <div class="card">
  		<div class="card-header"> <b>Dados Pessoais</b>
          </div>
          <div class="card-body">
          <div class="form-row">
            <div class="form-group col-md-2">
            <?php if ($query[0]->foto == null): ?><img src="<?= base_url(); ?>public/images/image.jpg" class="rounded mx-auto d-block img-fluid img-thumbnail" width="250" height="250">
	        	<?php else: ?><img src="<?= base_url(); ?>public/uploads/integrantes/<?= $query[0]->foto; ?>" class="rounded mx-auto d-block img-fluid img-thumbnail" width="250" height="250">
	        	<?php endif; ?> 
            </div>
            <div class="form-group col-md-1"></div>
            <div class="form-group col-md-4">
                <p class="card-text"><b>Matricula:</b> #<?= $query[0]->integrantesid; ?></p>
                <p class="card-text"><b>Nome:</b> <?= $query[0]->nome; ?></p>
                <p class="card-text"><b>RG:</b>  <?= $query[0]->rg; ?></p>
                <p class="card-text"><b>CPF:</b> <?= $query[0]->cpf; ?></p>
                <p class="card-text"><b>Data de Cadastro:</b> <?= $query[0]->criado; ?></p>
                <p class="card-text"><b>Status:</b>   <span class="badge badge-success"><?= $query[0]->status; ?></span></p>
            </div>
            <div class="form-group col-md-3">
                <p class="card-text"><b>Telefone:</b> <?= $query[0]->telefone; ?></p>
                <p class="card-text"><b>E-mail:</b> <?= $query[0]->email; ?> </p>
                <p class="card-text"><b>Endereço:</b> <?= $query[0]->endereco; ?>&nbsp; <?= $query[0]->numero; ?></p>
                <p class="card-text"><b>Bairro:</b> <?= $query[0]->bairro; ?></p>
                <p class="card-text"><b>Cidade:</b> <?= $query[0]->cidade; ?> - <?= $query[0]->uf; ?></p>
                <p class="card-text"><b>CEP:</b> <?= $query[0]->cep; ?></p>
            </div>
          </div>           
        </div>
     </div>
     <div class="row">&nbsp;</div>

     <div class="form-row">
            
            <div class="form-group col-md-6">
            <div class="card">
                <div class="card-header">
                  <b>Dados de Saúde</b>
                </div>

                <div class="card-body">
                      <p class="card-text"><b>Possui assistência médica?</b> <?= $query[0]->possui_assis_med; ?></p>
                        <?php if (!$query[0]->res_assis_med == null): ?> <p class="card-text"><b>Qual?</b> <?= $query[0]->res_assis_med; ?></p>  <?php endif; ?> 
                      <p class="card-text"><b>Possui alergia a Medicamentos?</b>  <?= $query[0]->alergia_med; ?></p>
                        <?php if (!$query[0]->res_alergia_med == null): ?> <p class="card-text"><b>Qual?</b> <?= $query[0]->res_alergia_med; ?></p>  <?php endif; ?> 
                      <p class="card-text"><b>Sofre ou Sofreu alguma doença?</b> <?= $query[0]->doenca; ?></p>
                        <?php if (!$query[0]->res_doenca == null): ?> <p class="card-text"><b>Qual?</b> <?= $query[0]->res_doenca; ?></p>  <?php endif; ?> 
                      <p class="card-text"><b>Faz uso de algum medicamento?</b> <?= $query[0]->medicamento; ?></p>
                        <?php if (!$query[0]->res_medicamento == null): ?> <p class="card-text"><b>Qual?</b> <?= $query[0]->res_medicamento; ?></p>  <?php endif; ?>                
                </div>
            </div>
            </div>
            <div class="form-group col-md-6">
            <div class="card">
          <div class="card-header">
            <b>Dados Financeiros</b>
          </div>

          <div class="card-body">
          <p class="card-text text-center font-weight-light">Não há dados financeiro cadastrado</p>
          </div>
	    </div>
            </div>
          </div>           
        </div>



    <div class="row">&nbsp;</div>
        
       
   </div> </main>

<!-- Modal -->
<div class="modal fade" id="editar" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered modal-xl" role="document">
   <div class="modal-content">
      <div class="modal-header">
         <h5 class="modal-title" id="exampleModalCenterTitle"><i class="fas fa-portrait"></i>&nbsp;Editar dados</h5>
         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
         <span aria-hidden="true">&times;</span>
         </button>
      </div>
      <div class="modal-body">
         <form method="post" class="p-t-15" role="form" action="<?= base_url(); ?>integrantes/upd_integrante">
            <input type="hidden" class="form-control" id="iddefinicoes" name="integrantesid" value="<?= $query[0]->integrantesid; ?>">
            <div class="form-row">
               <div class="form-group col-md-5" id="test">
                  <label for="nome">Nome Completo</label>
                  <input type="text" class="form-control" value="<?= $query[0]->nome; ?>" id="nome" name="nome" required="required">
               </div>
               <div class="form-group col-md-3">
                  <label for="email">E-mail</label>
                  <input type="email" class="form-control" value="<?= $query[0]->email; ?>" id="email" name="email">
               </div>
               <div class="form-group col-md-2">
                  <label for="medicamento">Status</label>
                  <select class="custom-select" id="status" name="status">
                     <option value="NÃO" selected>Escolher...</option>
                     <option value="ATIVO" <?= $query[0]->status=='ATIVO'?'selected':'' ?>>Ativo</option>
                     <option value="INATIVO" <?= $query[0]->status=='INATIVO'?'selected':'' ?>>Inativo</option>
                  </select>
               </div>
               <div class="form-group col-md-2">
                  <label for="telefone">Telefone</label>
                  <input type="text" class="form-control" value="<?= $query[0]->telefone; ?>" id="telefone" name="telefone">
               </div>
            </div>
            <div class="form-row">
               <div class="form-group col-md-2">
                  <label for="inputCity">CEP</label>
                  <input type="text" class="form-control" value="<?= $query[0]->cep; ?>" id="cep" name="cep">
               </div>
               <div class="form-group col-md-6">
                  <label for="inputAddress">Endereço</label>
                  <input type="text" class="form-control" value="<?= $query[0]->endereco; ?>" id="endereco" name="endereco">
               </div>
               <div class="form-group col-md-2">
                  <label for="inputAddress">Numero</label>
                  <input type="text" class="form-control" value="<?= $query[0]->numero; ?>" id="numero" name="numero">
               </div>
               <div class="form-group col-md-2">
                  <label for="inputCity">Bairro</label>
                  <input type="text" class="form-control" value="<?= $query[0]->bairro; ?>"  name="bairro" id="bairro" required="required">
               </div>
            </div>
            <div class="form-row">
               <div class="form-group col-md-3">
                  <label for="inputCity">Cidade</label>
                  <input type="text" class="form-control" value="<?= $query[0]->cidade; ?>" name="cidade" id="cidade" required="required">
               </div>
               <div class="form-group col-md-3">
                  <label for="uf">Estado</label>
                  <select type="text" class="form-control" id="uf" name="uf" required="required">
                     <option value="AC" <?= $query[0]->uf=='AC'?'selected':'' ?>>Acre</option>
                     <option value="AL" <?= $query[0]->uf=='AL'?'selected':'' ?>>Alagoas</option>
                     <option value="AP" <?= $query[0]->uf=='AP'?'selected':'' ?>>Amapá</option>
                     <option value="AM" <?= $query[0]->uf=='AM'?'selected':'' ?>>Amazonas</option>
                     <option value="BA" <?= $query[0]->uf=='BA'?'selected':'' ?>>Bahia</option>
                     <option value="CE" <?= $query[0]->uf=='CE'?'selected':'' ?>>Ceará</option>
                     <option value="DF" <?= $query[0]->uf=='DF'?'selected':'' ?>>Distrito Federal</option>
                     <option value="ES" <?= $query[0]->uf=='ES'?'selected':'' ?>>Espírito Santo</option>
                     <option value="GO" <?= $query[0]->uf=='GO'?'selected':'' ?>>Goiás</option>
                     <option value="MA" <?= $query[0]->uf=='MA'?'selected':'' ?>>Maranhão</option>
                     <option value="MT" <?= $query[0]->uf=='MT'?'selected':'' ?>>Mato Grosso</option>
                     <option value="MS" <?= $query[0]->uf=='MS'?'selected':'' ?>>Mato Grosso do Sul</option>
                     <option value="MG" <?= $query[0]->uf=='MG'?'selected':'' ?>>Minas Gerais</option>
                     <option value="PA" <?= $query[0]->uf=='PA'?'selected':'' ?>>Pará</option>
                     <option value="PB" <?= $query[0]->uf=='PB'?'selected':'' ?>>Paraíba</option>
                     <option value="PR" <?= $query[0]->uf=='PR'?'selected':'' ?>>Paraná</option>
                     <option value="PE" <?= $query[0]->uf=='PE'?'selected':'' ?>>Pernambuco</option>
                     <option value="PI" <?= $query[0]->uf=='PI'?'selected':'' ?>>Piauí</option>
                     <option value="RJ" <?= $query[0]->uf=='RJ'?'selected':'' ?>>Rio de Janeiro</option>
                     <option value="RN" <?= $query[0]->uf=='RN'?'selected':'' ?>>Rio Grande do Norte</option>
                     <option value="RS" <?= $query[0]->uf=='RS'?'selected':'' ?>>Rio Grande do Sul</option>
                     <option value="RO" <?= $query[0]->uf=='RO'?'selected':'' ?>>Rondônia</option>
                     <option value="RR" <?= $query[0]->uf=='RR'?'selected':'' ?>>Roraima</option>
                     <option value="SC" <?= $query[0]->uf=='SC'?'selected':'' ?>>Santa Catarina</option>
                     <option value="SP" <?= $query[0]->uf=='SP'?'selected':'' ?>>São Paulo</option>
                     <option value="SE" <?= $query[0]->uf=='SE'?'selected':'' ?>>Sergipe</option>
                     <option value="TO" <?= $query[0]->uf=='TO'?'selected':'' ?>>Tocantins</option>
                  </select>
               </div>
               <div class="form-group col-md-3">
                  <label for="nome">RG</label>
                  <input type="text" class="form-control" value="<?= $query[0]->rg; ?>"  id="rg" name="rg" required="required">
               </div>
               <div class="form-group col-md-3">
                  <label for="inputPassword4">CPF</label>
                  <input type="text" class="form-control" value="<?= $query[0]->cpf; ?>"  id="cpf" name="cpf" required="required">
               </div>
            </div>
            <div class="form-row">
            </div>
            <div class="form-row">
               <div class="form-group col-md-3">
                  <label for="possui_assis_med">Possui assistência médica?</label>
                  <select class="custom-select" id="possui_assis_med" name="possui_assis_med">
                     <option value="NÃO" selected>Escolher...</option>
                     <option value="SIM" <?= $query[0]->possui_assis_med=='SIM'?'selected':'' ?>>Sim</option>
                     <option value="NÃO" <?= $query[0]->possui_assis_med=='NÃO'?'selected':'' ?>>Não</option>
                  </select>
               </div>
               <div class="form-group col-md-3">
                  <label for="alergia_med">Possui alergia a Medicamentos?</label>
                  <select class="custom-select" id="alergia_med" name="alergia_med">
                     <option value="NÃO" selected>Escolher...</option>
                     <option value="SIM" <?= $query[0]->alergia_med=='SIM'?'selected':'' ?>>Sim</option>
                     <option value="NÃO" <?= $query[0]->alergia_med=='NÃO'?'selected':'' ?>>Não</option>
                  </select>
               </div>
               <div class="form-group col-md-3">
                  <label for="doenca">Sofre ou Sofreu alguma doença?</label>
                  <select class="custom-select" id="doenca" name="doenca">
                     <option value="NÃO" selected>Escolher...</option>
                     <option value="SIM" <?= $query[0]->doenca=='SIM'?'selected':'' ?>>Sim</option>
                     <option value="NÃO" <?= $query[0]->doenca=='NÃO'?'selected':'' ?>>Não</option>
                  </select>
               </div>
               <div class="form-group col-md-3">
                  <label for="medicamento">Faz uso de algum medicamento?</label>
                  <select class="custom-select" id="medicamento" name="medicamento">
                     <option value="NÃO" selected>Escolher...</option>
                     <option value="SIM" <?= $query[0]->medicamento=='SIM'?'selected':'' ?>>Sim</option>
                     <option value="NÃO" <?= $query[0]->medicamento=='NÃO'?'selected':'' ?>>Não</option>
                  </select>
               </div>
            </div>
            <div class="form-row">
               <div class="form-group col-md-3">
                  <div id="res_assis_med">
                     <label for="possui_assis_med">Qual?</label>
                     <input type="text" class="form-control" value="<?= $query[0]->res_assis_med; ?>" name="res_assis_med">
                  </div>
               </div>
               <div class="form-group col-md-3">
                  <div id="res_alergia_med">
                     <label for="possui_assis_med">Qual?</label>
                     <input type="text" class="form-control" value="<?= $query[0]->res_alergia_med; ?>" name="res_alergia_med">
                  </div>
               </div>
               <div class="form-group col-md-3">
                  <div id="res_doenca">
                     <label for="possui_assis_med">Qual?</label>
                     <input type="text" class="form-control" value="<?= $query[0]->res_doenca; ?>" name="res_doenca">
                  </div>
               </div>
               <div class="form-group col-md-3">
                  <div id="res_medicamento">
                     <label for="possui_assis_med">Qual?</label>
                     <input type="text" class="form-control" value="<?= $query[0]->res_medicamento; ?>" name="res_medicamento">
                  </div>
               </div>
            </div>
            <div class="form-group">
               <label for="exampleFormControlTextarea1">Observações</label>
               <textarea class="form-control" name="observacoes" rows="3"><?= $query[0]->observacoes; ?></textarea>
            </div>
            <div class="modal-footer">
               <button type="submit" class="btn btn-success btn-lg btn-block">Salvar</button>
            </div>
         </form>
      </div>
   </div>
</div>
</div>



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

  


<!-- Modal -->
<div class="modal fade" id="imagem" tabindex="-1" role="dialog" aria-labelledby="imagemTitle" aria-hidden="true">
 <div class="modal-dialog modal-dialog-centered" role="document">
   <div class="modal-content">
      <div class="modal-header">
         <h5 class="modal-title" id="imagemTitle"><i class="fas fa-image"></i>&nbsp;&nbsp;Adicionar/Editar Imagem</h5>
         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
         <span aria-hidden="true">&times;</span>
         </button>
      </div>
      <div class="modal-body">
         <form method="post" enctype="multipart/form-data" class="p-t-15" role="form"  action="<?= base_url(); ?>integrantes/update_foto" >
            <input type="hidden" class="form-control" name="integrantesid" value="<?= $query[0]->integrantesid; ?>">
            <div class="form-group">
               <div class="custom-file">
                  <input type="file" class="custom-file-input" id="foto" name="foto" size="20">
                  <label class="custom-file-label" for="customFile" >Escolher foto</label>
               </div>
            </div>
            <div class="modal-footer">
               <button type="submit" class="btn btn-primary">Enviar</button>
               <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
            </div>
         </form>
      </div>
   </div>
  </div>
</div>

 






<script type="text/javascript">
	$("#cep").focusout(function(){
		//Início do Comando AJAX
		$.ajax({
			url: 'https://viacep.com.br/ws/'+$(this).val()+'/json/unicode/',
			dataType: 'json',
			success: function(resposta){
				$("#logradouro").val(resposta.logradouro);
				$("#complemento").val(resposta.complemento);
				$("#bairro").val(resposta.bairro);
				$("#cidade").val(resposta.localidade);
				$("#uf").val(resposta.uf);
				$("#numero").focus();
			}
		});
	});
</script>
<script>
        $(document).ready(function() {
          $('#telefone').mask("(00) 0000-00009");
          $('#cpf').mask("000.000.000-00");
          $('#cep').mask("00000-000");
          $('#data').mask("99/99/9999");
          $('#rg').mask("00.000.000-9");
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
  