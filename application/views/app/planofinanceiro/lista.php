    <div class="nav-scroller bg-white box-shadow ">
    <div class="container">
      <nav class="nav nav-underline">
        <a class="nav-link active red-text" href="<?= base_url(); ?>app/home"><i class="fas fa-home navbar-text"></i></a>
         <a class="nav-link active red-text" onclick="history.back()"><i class="fas fa-arrow-left navbar-text"></i></a>
        <a class="nav-link red-text" href="#" data-toggle="modal" data-target="#novo"><i class="far fa-file navbar-text"></i>&nbsp;&nbsp;Novo</a>
       
      </nav>
      </div>
    </div>
    
    

    <main role="main" class="container">
    
    <div class="row">&nbsp;</div>
    <?php if ($msg == 'novo'): ?><div class="row">&nbsp;</div>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong><i class="fas fa-user-circle"></i>&nbsp; Novo Produto!</strong> foi adicionado com sucesso.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
<?php elseif ($msg == 'update'): ?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong><i class="fas fa-exclamation-triangle"></i>&nbsp;</strong> Produto atualizado com sucesso.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>

<?php elseif ($msg == 'deletar'): ?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong><i class="fas fa-exclamation-triangle"></i>&nbsp;</strong> Produto apagado com sucesso.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
		
<?php elseif ($msg == 'erro'): ?>
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong><i class="fas fa-exclamation-triangle"></i>&nbsp;</strong> O arquivo da foto não é suportado.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div><?php endif; ?>
    
    
      <div class="my-3 p-3 bg-white rounded box-shadow">
    <h5 class="card-title">Financeiro</h5>
    <h6 class="card-subtitle mb-2 text-muted">Lista de planos financeiro cadastrados.
</h6>
        
        
        <table class="table" id='produtos'>
  <thead>
    <tr>
      <th scope="col col-lg-5">Matricula</th>
      <th scope="col col-lg-2">Descrição</th>
      <th  scope="col col-lg-2">Valor</th>
      <th scope="col col-lg-1"></th>
    </tr>
  </thead>
<?php if(!$query){?>
 <tbody>
                    <tr>
                        <td colspan="5"> <center><p class="texto_pequeno">Nada cadastrado até o momento</p></center></td>
                    </tr>
                </tbody>
                
 <?php }else{ ?>
 <tbody> <?php foreach($query as $prop) {?>
  

     <tr id="<?= $prop->idplanofinanceiro; ?>">  

      <td><?= $prop->idplanofinanceiro; ?></td>
      <td><?= $prop->descricao; ?></td>
      <td><?= $prop->valor; ?></td>
     

      <td class="text-right">

<div class="btn-group " role="group" aria-label="Button group with nested dropdown">
  <a class="btn btn-primary" href="<?= base_url(); ?>planofinanceiro/editar/<?= $prop->idplanofinanceiro; ?>"><i class="fas fa-search"></i></a>
  <button type="button" class="btn btn-danger remove"><i class="fas fa-trash-alt"></i></button>
</div>
		  
		  
		  
		  
		  
      </td>
    </tr> <?php }?>
    <?php }?>
  </tbody>  
</table>
        
        <div class="media text-muted pt-3">
          
        </div>
      </div>
    </main>
    
    
    <!-- Modal -->
<div class="modal fade" id="novo" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="novoLabel"><i class="far fa-file navbar-text"></i>&nbsp;&nbsp;Novo</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <form>
            <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputState">Integrante</label>
                <select id="inputState" class="form-control">
                  <option selected>Choose...</option>
                  <option>...</option>
                </select>
              </div>
              <div class="form-group col-md-6">
                <label for="inputPassword4">Password</label>
                <input type="text" class="form-control" id="inputPassword4">
              </div>
            </div>
            <div class="form-group">
              <label for="inputAddress">Address</label>
              <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
            </div>
            <div class="form-group">
              <label for="inputAddress2">Address 2</label>
              <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
            </div>
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="inputCity">City</label>
                <input type="text" class="form-control" id="inputCity">
              </div>
              <div class="form-group col-md-4">
                <label for="inputState">State</label>
                <select id="inputState" class="form-control">
                  <option selected>Choose...</option>
                  <option>...</option>
                </select>
              </div>
              <div class="form-group col-md-2">
                <label for="inputZip">Zip</label>
                <input type="text" class="form-control" id="inputZip">
              </div>
            </div>
           
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
        <button type="submit" class="btn btn-primary">Salvar</button></form>
      </div>
    </div>
  </div>
</div>
    

<script type="text/javascript">
    $(".remove").click(function(){

        var id = $(this).parents("tr").attr("id");

    swal({

        title: "Apagar",
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

             url: "<?php echo site_url('planofinanceiro/delete/')?>"+id,
             type: 'DELETE',
             error: function() {
                swal("Error", "Ocorreu um erro, contate o administrador", "error");
             },
             success: function(data) {
                  $("#"+id).remove();
                  swal("Apagado!", "Foi apagado com sucesso.", "success");
             }

          });

        } else {
          swal("Cancelado", "Não foi apagado.", "error");
        }

      });

   });

    

</script>
	
	
	
	<script>
$(document).ready(function() {
    $('#produtos').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ],
		 "language": {
            "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Portuguese.json"
        }
    } );
} );</script>