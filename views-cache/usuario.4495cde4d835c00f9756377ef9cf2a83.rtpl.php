<?php if(!class_exists('Rain\Tpl')){exit;}?><div class="content">
    <div class="content-inside">
        <div class="my-4">
            <ul class="nav nav-tabs mb-4" id="myTab" role="tablist">
                <li class="nav-item">
                    <a style="background-color: #2E9AFE;color: white" class="nav-link active" id="home-tab"
                        data-toggle="tab" role="tab" aria-controls="home" aria-selected="false"><b>Home</b></a>
                </li>
            </ul>



            <center><img src="../res/user/img/logo.png" class="logo" alt=""></center>

            <center>
                <p>Bem vindo <b><?php echo getUsuarioNome(); ?></b> ao Sistema de registros, gerenciamento de Rollouts e
                    termos de devolução/entrega para a empresa ONS (Operador Nacional do Sistema Elétrico).</p><br>

  
              <?php if( $usuario["localidade"] =='Brasília' ){ ?>      
             <a style="width: 15%;" href="/usuario/registrar-rollout-bsb"class="btn btn-primary btn-sm"><i class="fa fa-plus-circle" aria-hidden="true"></i><b> Registrar Rollout</b></a>

              <a style="width: 15%;" href="/usuario/registrar-termos-bsb"class="btn btn-primary btn-sm"><i class="fa fa-plus-circle" aria-hidden="true"></i><b> Registrar Termo</b></a>
            
            <?php }elseif( $usuario["localidade"] =='Florianópolis' ){ ?>      
             <a style="width: 15%;" href="/usuario/registrar-rollout-flr"class="btn btn-primary btn-sm"><i class="fa fa-plus-circle" aria-hidden="true"></i><b> Registrar Rollout</b></a>

              <a style="width: 15%;" href="/usuario/registrar-termos-flr"class="btn btn-primary btn-sm"><i class="fa fa-plus-circle" aria-hidden="true"></i><b> Registrar Termo</b></a>
         
            <?php }elseif( $usuario["localidade"] =='Recife' ){ ?>      
             <a style="width: 15%;" href="/usuario/registrar-rollout-rec"class="btn btn-primary btn-sm"><i class="fa fa-plus-circle" aria-hidden="true"></i><b> Registrar Rollout</b></a>

              <a style="width: 15%;" href="/usuario/registrar-termos-rec"class="btn btn-primary btn-sm"><i class="fa fa-plus-circle" aria-hidden="true"></i><b> Registrar Termo</b></a>
          

             <?php }else{ ?>      
             <a style="width: 15%;" href="/usuario/registrar-rollout-rj"class="btn btn-primary btn-sm"><i class="fa fa-plus-circle" aria-hidden="true"></i><b> Registrar Rollout</b></a>

              <a style="width: 15%;" href="/usuario/registrar-termos-rj"class="btn btn-primary btn-sm"><i class="fa fa-plus-circle" aria-hidden="true"></i><b> Registrar Termo</b></a>
            <?php } ?>


                <hr class="my-4" />


        </div>
    </div>
</div>