<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
      <link rel="icon" href="<?= base_url(); ?>public/images/favicon.ico" />
      <title><?php echo $sysname.' - '. $appname ?></title>
      <link href="<?= base_url(); ?>public/css/app.css" rel="stylesheet">
      <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>public/css/bootstrap.css"/>
      <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>public/css/all.min.css"/>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      <script src="https://lipis.github.io/bootstrap-sweetalert/dist/sweetalert.js"></script>
      <link rel="stylesheet" href="https://lipis.github.io/bootstrap-sweetalert/dist/sweetalert.css" />
      <link href="<?= base_url(); ?>public/css/all.css" rel="stylesheet">
      <script type="text/javascript" src="https://cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/e8bddc60e73c1ec2475f827be36e1957af72e2ea/src/js/bootstrap-datetimepicker.js"></script>
      <link rel="stylesheet" href="https://code.jquery.com/ui/1.9.0/themes/base/jquery-ui.css" />
      <script src="https://code.jquery.com/jquery-1.8.2.js"></script>
      <script src="https://code.jquery.com/ui/1.9.0/jquery-ui.js"></script>
      <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" />
      <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
      <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
      <script src="<?= base_url(); ?>public/js/qrcode.js"></script>
      <script src="<?= base_url(); ?>public/js/jquery.maskedinput-1.1.4.pack.js"></script>
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
   </head>
   <body class="bg-app">
      <nav class="navbar navbar-expand-md cor-barra">
         <div class="container">
            <ul class="nav navbar-nav pull-sm-left">
               <li class="nav-item dropdown ">
                  <a class="nav-link logo-red-text dropdown-toggle " href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-plus navbar-text"></i>
                  </a>
                  <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                     <li><a class="dropdown-item"  href="<?= base_url(); ?>definicoes"><i class="fas fa-cogs"></i> Definições</a></li>
                     <li><a class="dropdown-item"  href="<?= base_url(); ?>admins/lista"><i class="fas fa-user-cog"></i> Usuários do sistema</a></li>
                     <li><a class="dropdown-item"  href="<?= base_url(); ?>integrantes/lista"><i class="fas fa-users"></i> Integrantes</a></li>
                     <li><a class="dropdown-item"  href="<?= base_url(); ?>produtos/lista"><i class="fas fa-store"></i> Produtos</a></li>
                     <li><a class="dropdown-item"  href="<?= base_url(); ?>produtos/lista"><i class="fas fa-toolbox"></i> Ativos</a></li>
                     <li><a class="dropdown-item"  href="<?= base_url(); ?>servicos/lista"><i class="fas fa-screwdriver"></i> Serviços</a></li>
                     <li><a class="dropdown-item"  href="<?= base_url(); ?>os/lista"><i class="fas fa-sticky-note"></i> Ordens de Serviço</a></li>
                     <li><a class="dropdown-item"  href="<?= base_url(); ?>planofinanceiro/lista"><i class="fas fa-cash-register"></i> Financeiro</a></li>
                  </ul>
               </li>
            </ul>
            <ul class="nav navbar-nav navbar-logo mx-auto logo-fonte">
               <li class="nav-item">
                  <a class="navbar-brand logo logo-red-text" href="<?= base_url(); ?>app/home"><i class="fas fa-dove fa-2x"></i></a>
               </li>
            </ul>
            <ul class="nav navbar-nav pull-sm-right">
               <li class="nav-item">
                  <a class="nav-link logo-red-text" href="<?= base_url(); ?>auth/sair"><i class="fas fa-sign-out-alt navbar-text"></i> Sair</a>
               </li>
            </ul>
         </div>
      </nav>

</html>

