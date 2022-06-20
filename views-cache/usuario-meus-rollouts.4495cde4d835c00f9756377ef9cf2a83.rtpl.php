<?php if(!class_exists('Rain\Tpl')){exit;}?><div class="content">
  <div class="content-inside">
    <div class="my-4">
      <ul class="nav nav-tabs mb-4" id="myTab" role="tablist">
        <li class="nav-item">
          <a style="background-color: #2E9AFE;color: white" class="nav-link active" id="home-tab" data-toggle="tab"
            role="tab" aria-controls="home" aria-selected="false"><b>Meus Rollouts -
              <?php if( totalRolloutsID($usuario["id_usuario"]) == 0 ){ ?>
              Nenhum Registrado
              <?php }elseif( totalRolloutsID($usuario["id_usuario"]) == 1 ){ ?>
              <?php echo totalRolloutsID($usuario["id_usuario"]); ?> Registrado
              <?php }else{ ?>
              <?php echo totalRolloutsID($usuario["id_usuario"]); ?> Registrados
              <?php } ?> </b></a>

        </li>

      </ul>




      <?php if( $profileMsg != '' ){ ?>
      <div class="alert alert-success">
        <b><?php echo $profileMsg; ?></b>
      </div>
      <?php } ?>

      <?php if( totalRolloutsID($usuario["id_usuario"]) != 0 ){ ?>

      <div class="search" style="float: right">
        <form action="/usuario/meus-rollouts" method="get">
          <div class="input-group">
            <input type="text" name="search" class="form-control" placeholder="Digite sua pesquisa...">
            <span class="input-group-btn">
              <button class="btn btn" style="background-color: #2E9AFE;color: white" type="submit" id="search-btn"><i
                  class="fa fa-search" style="font-size:13px;"> PESQUISAR</i>
              </button>
            </span>
          </div>
        </form>
      </div><br><br>

      <div class="table-responsive">
        <table class="table table-hover table-sm  table-bordered">
          <thead class="table table-dark">
            <tr style="font-size: 16px; font-weight: bold; ">


              <th>
                <center>Colaborador(a)<b>
              </th>
              <th>
                <center>Modificação
              </th>
              <th>
                <center>Anexo(s)
              </th>
              <th>
                <center>Situação
              </th>
              <th>
                <center>Visualizar
              </th>
              <th>
                <center>Alterar
              </th>
              <th>
                <center>Excluir
              </th>


            </tr>
          </thead>
          <tbody>
            <?php $counter1=-1;  if( isset($rollouts) && ( is_array($rollouts) || $rollouts instanceof Traversable ) && sizeof($rollouts) ) foreach( $rollouts as $key1 => $value1 ){ $counter1++; ?>
            <tr style="font-size: 15px;font-weight: normal;">

              <td>
                <center><?php echo $value1["nome"]; ?>
              </td>
              <td>
                <center><?php echo formatDate($value1["data_registro"]); ?>
              </td>


              <td>
                <center> <a style="width: 100%;" href="/usuario/meus-rollouts/arquivos/<?php echo $value1["id_rollout"]; ?>"
                    style="width: 100px;" class="btn btn-warning btn-sm">
                    <i class="far fa-file-alt"></i>
                    <?php if( numArquivos($value1["id_rollout"]) == 1 ){ ?>
                    <b><?php echo numArquivos($value1["id_rollout"]); ?> Arquivo</b></a>
                  <?php }else{ ?>
                  <b><?php echo numArquivos($value1["id_rollout"]); ?> Arquivos</b></a>
                  <?php } ?>
              </td>


              <?php if( $value1["situacao"] == '' OR $value1["situacao"] == 'Pendente'  ){ ?>

              <td>
                <center>
                  <a style="width: 100%;" href="/usuario/rollout-situacao/<?php echo $value1["id_rollout"]; ?>"
                    onclick="return confirm('Deseja alterar a situação do rollout do(a) <?php echo $value1["nome"]; ?>?')" type="button"
                    class=" btn btn-outline-danger btn-sm "><i class="fas fa-exclamation-triangle"></i> Pendente</a>
              </td>

              <?php }else{ ?>
              <td>
                <center><a style="width: 100%;" style="width: 80px;"
                    href="/usuario/rollout-situacao/<?php echo $value1["id_rollout"]; ?>"
                    onclick="return confirm('Deseja alterar a situação do rollout do(a) <?php echo $value1["nome"]; ?>?')" type="button"
                    class="btn btn-outline-success btn-sm "><i class="fas fa-check-square"></i> Finalizado</a>
              </td>

              </td>
              <?php } ?>
              <td>
                <center> <a style="width: 100%;" href="/usuario/rollout-visualizar/<?php echo $value1["id_rollout"]; ?>"
                    class="btn btn-primary btn-sm"><i class="fas fa-eye"></i><b> Verificar</b></a>
              <td>
                <center> <a style="width: 100%;" href="/usuario/rollout/editar/<?php echo $value1["id_rollout"]; ?>"
                    class="btn btn-success btn-sm"><i class="fas fa-pen"></i><b> Alterar</b></a></center>
              </td>
              <td>
                <center><a style="width: 100%;" href="/usuario/rollouts/delete/<?php echo $value1["id_rollout"]; ?>"
                    onclick="return confirm('Deseja realmente excluir o Rollout do(a) <?php echo $value1["nome"]; ?>?')"
                    class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i><b> Excluir</b></a>
              </td>

            </tr>

            <?php } ?>

          </tbody>

        </table><br>

      </div>



      <center>
        <div class="box-footer clearfix">
          <ul class="pagination">
            <?php $counter1=-1;  if( isset($pages) && ( is_array($pages) || $pages instanceof Traversable ) && sizeof($pages) ) foreach( $pages as $key1 => $value1 ){ $counter1++; ?>
            <?php if( $pages == $value1["link"] ){ ?>
            <li> <a class="active" href="<?php echo $value1["link"]; ?>"><?php echo $value1["page"]; ?></a></li>
            <?php }else{ ?>
            <li><a href="<?php echo $value1["link"]; ?>"><?php echo $value1["page"]; ?></a></li>
            <?php } ?>
            <?php } ?>
        </div>
      </center>

      <?php } ?>
      <a href="javascript:history.back()" class="btn btn-info btn-xs"><i class="fas fa-chevron-circle-left"></i><b>
          Voltar</b></a>


      <hr class="my-4" />

    </div>


  </div>

</div>