<?php if(!class_exists('Rain\Tpl')){exit;}?><div class="content">
  <div class="content-inside">
    <div class="my-4">
      <ul class="nav nav-tabs mb-4" id="myTab" role="tablist">
        <li class="nav-item">
          <a style="background-color: #2E9AFE;color: white" class="nav-link
            active" id="home-tab" data-toggle="tab" role="tab" aria-controls="home"
            aria-selected="false"><b><?php echo $value["nome"]; ?> </b></a>
        </li>
      </ul>

      <div id="DivIdToPrint">

        <center><img
            src="https://i0.wp.com/sengepe.org.br/wp-content/uploads/2017/08/captura-de-tela-2017-08-20-acc80s-23-38-34.png"
            width="120" height="120">

          <h4><b>Ficha de Remanejamento de Estações</b></h4>
        </center><br>

        <b><u>Seção 1</u></b><br>
        <hr>
        <b>1. Identificação do Usuário</b>


        <div class="table-responsive">
          <table class="table table-hover table-bordered">
            <thead class="table table-dark">


              <th>
                <center>N° Chamado<b>
              </th>
              <th>
                <center>Nome<b>
              </th>
              <th>
                <center>Diretoria <b>
              </th>
              <th>
                <center>Gerência<b>
              </th>
              <th>
                <center>Gerência Executiva<b>
              </th>
              <th>
                <center>Andar<b>
              </th>

                </th>
                  <th>
                  <center>Entrega<b>
                </th>



              </tr>
            </thead>
            <tbody>

              <tr>
                <td>
                  <center><?php echo $value["n_chamado"]; ?>
                </td>
                <td>
                  <center><?php echo $value["nome"]; ?>
                </td>
                <td>
                  <center><?php echo $value["diretoria"]; ?>
                </td>
                <td>
                  <center><?php echo $value["gerencia"]; ?>
                </td>
                <td>
                  <center><?php echo $value["gerencia_executiva"]; ?>
                </td>
                <td>
                  <center> <?php echo $value["andar"]; ?>
                </td>
                  <td>
                  <center> <?php echo formatDate($value["dt_data_rollout"]); ?>
                </td>



              </tr>



            </tbody>

          </table>
        </div>
        <hr>






        <b>2. Identificação do Equipamento ATUAL(Máquina)</b>



        <div class="table-responsive">
          <table class="table table-hover table-bordered">
            <thead class="table table-dark">


              <th>
                <center>Marca<b>
              </th>
              <th>
                <center>Modelo<b>
              </th>
              <th>
                <enter>Patrimônio<b>
              </th>
              <th>
                <center>Nome da Máquina<b>
              </th>
              <th>
                <center>Número de Série<b>
              </th>
              <th>
                <center>Ponto de Rede<b>
              </th>




              </tr>
            </thead>
            <tbody>

              <tr>
                <td>
                  <center><?php echo $value["mq_marca_atual"]; ?>
                </td>
                <td>
                  <center><?php echo $value["mq_modelo_atual"]; ?>
                </td>
                <td>
                  <center><?php echo $value["mq_patrimonio_atual"]; ?>
                </td>
                <td>
                  <center><?php echo $value["mq_hostname_atual"]; ?>
                </td>
                <td>
                  <center><?php echo $value["mq_nserie_atual"]; ?>
                </td>
                <td>
                  <center><?php echo $value["mq_rede_atual"]; ?>
                </td>



              </tr>



            </tbody>

          </table>
        </div>
        <hr>

        <b>3. Identificação do Equipamento ATUAL(Monitor)</b>



        <div class="table-responsive">
          <table class="table table-hover table-bordered">
            <thead class="table table-dark">


              <th>
                <center>Marca<b>
              </th>
              <th>
                <center>Modelo<b>
              </th>
              <th>
                <center>Patrimônio<b>
              </th>
              <th>
                <center>Número de Série<b>
              </th>



              </tr>
            </thead>
            <tbody>

              <tr>
                <td>
                  <center><?php echo $value["mn_marca_atual1"]; ?>
                </td>
                <td>
                  <center><?php echo $value["mn_modelo_atual1"]; ?>
                </td>
                <td>
                  <center><?php echo $value["mn_patrimonio_atual1"]; ?>
                </td>
                <td>
                  <center><?php echo $value["mn_nserie_atual1"]; ?>
                </td>



              </tr>
              <tr>
                <td>
                  <center><?php echo $value["mn_marca_atual2"]; ?>
                </td>
                <td>
                  <center><?php echo $value["mn_modelo_atual2"]; ?>
                </td>
                <td>
                  <center><?php echo $value["mn_patrimonio_atual2"]; ?>
                </td>
                <td>
                  <center><?php echo $value["mn_nserie_atual2"]; ?>
                </td>



              </tr>
              <tr>
                <td>
                  <center><?php echo $value["mn_marca_atual3"]; ?>
                </td>
                <td>
                  <center><?php echo $value["mn_modelo_atual3"]; ?>
                </td>
                <td>
                  <center><?php echo $value["mn_patrimonio_atual3"]; ?>
                </td>
                <td>
                  <center><?php echo $value["mn_nserie_atual3"]; ?>
                </td>



              </tr>



            </tbody>

          </table>
        </div>
        <hr>

        <b>4. Identificação do Equipamento NOVO(Máquina)</b>


        <div class="table-responsive">
          <table class="table table-hover table-bordered">
            <thead class="table table-dark">


              <th>
                <center>Marca<b>
              </th>
              <th>
                <center>Modelo<b>
              </th>
              <th>
                <enter>Patrimônio<b>
              </th>
              <th>
                <center>Nome da Máquina<b>
              </th>
              <th>
                <center>Número de Série<b>
              </th>
              <th>
                <center>Ponto de Rede<b>
              </th>




              </tr>
            </thead>
            <tbody>

              <tr>
                <td>
                  <center><?php echo $value["mq_marca_novo"]; ?>
                </td>
                <td>
                  <center><?php echo $value["mq_modelo_novo"]; ?>
                </td>
                <td>
                  <center><?php echo $value["mq_patrimonio_novo"]; ?>
                </td>
                <td>
                  <center><?php echo $value["mq_hostname_novo"]; ?>
                </td>
                <td>
                  <center><?php echo $value["mq_nserie_novo"]; ?>
                </td>
                <td>
                  <center><?php echo $value["mq_rede_novo"]; ?>
                </td>



              </tr>



            </tbody>

          </table>
        </div>
        <hr>

        <b>5. Identificação do Equipamento NOVO(Monitor)</b>

        <div class="table-responsive">
          <table class="table table-hover table-bordered">
            <thead class="table table-dark">


              <th>
                <center>Marca<b>
              </th>
              <th>
                <center>Modelo<b>
              </th>
              <th>
                <center>Patrimônio<b>
              </th>
              <th>
                <center>Número de Série<b>
              </th>



              </tr>
            </thead>
            <tbody>

              <tr>
                <td>
                  <center><?php echo $value["mn_marca_novo1"]; ?>
                </td>
                <td>
                  <center><?php echo $value["mn_modelo_novo1"]; ?>
                </td>
                <td>
                  <center><?php echo $value["mn_patrimonio_novo1"]; ?>
                </td>
                <td>
                  <center><?php echo $value["mn_nserie_novo1"]; ?>
                </td>



              </tr>
              <tr>
                <td>
                  <center><?php echo $value["mn_marca_novo2"]; ?>
                </td>
                <td>
                  <center><?php echo $value["mn_modelo_novo2"]; ?>
                </td>
                <td>
                  <center><?php echo $value["mn_patrimonio_novo2"]; ?>
                </td>
                <td>
                  <center><?php echo $value["mn_nserie_novo2"]; ?>
                </td>



              </tr>
              <tr>
                <td>
                  <center><?php echo $value["mn_marca_novo3"]; ?>
                </td>
                <td>
                  <center><?php echo $value["mn_modelo_novo3"]; ?>
                </td>
                <td>
                  <center><?php echo $value["mn_patrimonio_novo3"]; ?>
                </td>
                <td>
                  <center><?php echo $value["mn_nserie_novo3"]; ?>
                </td>



              </tr>



            </tbody>

          </table>
        </div>
        <hr>

        <b>6. Identificação do Equipamento de Quarentena (Máquina)</b>

        <div class="table-responsive">
          <table class="table table-hover table-bordered">
            <thead class="table table-dark">


              <th>
                <center>Marca<b>
              </th>
              <th>
                <center>Modelo<b>
              </th>
              <th>
                <enter>Patrimônio<b>
              </th>
              <th>
                <center>Nome da Máquina<b>
              </th>
              <th>
                <center>Número de Série<b>
              </th>
              <th>
                <center>Ponto de Rede<b>
              </th>




              </tr>
            </thead>
            <tbody>

              <tr>
                <td>
                  <center><?php echo $value["mq_marca_qrt"]; ?>
                </td>
                <td>
                  <center><?php echo $value["mq_modelo_qrt"]; ?>
                </td>
                <td>
                  <center><?php echo $value["mq_patrimonio_qrt"]; ?>
                </td>
                <td>
                  <center><?php echo $value["mq_hostname_qrt"]; ?>
                </td>
                <td>
                  <center><?php echo $value["mq_nserie_qrt"]; ?>
                </td>
                <td>
                  <center><?php echo $value["mq_rede_qrt"]; ?>
                </td>



              </tr>



            </tbody>

          </table>
        </div>
        <hr><br><br><br><br><br><br><br><br>

        <center><img
            src="https://i0.wp.com/sengepe.org.br/wp-content/uploads/2017/08/captura-de-tela-2017-08-20-acc80s-23-38-34.png"
            width="120" height="120">

          <h4><b>Ficha de Remanejamento de Estações</b></h4>
        </center><br>


        <b><u>Seção 2</u></b><br>
        <hr>
        <b>7. Levantamento / Validação de Sistemas / Softwares Instalados</b><br>

        Declaro estar ciente que foi feita uma análise do equipamento descrito no item 2, tendo sido feito um
        levantamento de todos os sistemas usados. Tais sistemas, que estão listados em tabela a seguir serão testados os
        acessos no equipamento que estarei recebendo neste remanejamento.


        <div class="table-responsive">
          <table class="table table-hover table-bordered">
            <thead class="table table-dark">


              <th>
                <center>Software<b>
              </th>
              <th>
                <center>Validado<b>
              </th>
              <th>
                <center>Software<b>
              </th>
              <th>
                <center>Validado<b>
              </th>

              </tr>
            </thead>
            <tbody>

              <tr>
                <td>
                  <center><?php echo $value["software1"]; ?>
                </td>
                <td>
                  <center><?php echo $value["sof1"]; ?>
                </td>
                <td>
                  <center><?php echo $value["software2"]; ?>
                </td>
                <td>
                  <center><?php echo $value["sof2"]; ?>
                </td>

              </tr>
              <tr>
                <td>
                  <center><?php echo $value["software3"]; ?>
                </td>
                <td>
                  <center><?php echo $value["sof3"]; ?>
                </td>
                <td>
                  <center><?php echo $value["software4"]; ?>
                </td>
                <td>
                  <center><?php echo $value["sof4"]; ?>
                </td>


              </tr>
              <tr>
                <td>
                  <center><?php echo $value["software5"]; ?>
                </td>
                <td>
                  <center><?php echo $value["sof5"]; ?>
                </td>
                <td>
                  <center><?php echo $value["software6"]; ?>
                </td>
                <td>
                  <center><?php echo $value["sof6"]; ?>
                </td>

              </tr>

              <tr>
                <td>
                  <center><?php echo $value["software7"]; ?>
                </td>
                <td>
                  <center><?php echo $value["sof7"]; ?>
                </td>
                <td>
                  <center><?php echo $value["software8"]; ?>
                </td>
                <td>
                  <center><?php echo $value["sof8"]; ?>
                </td>

              </tr>

              <tr>
                <td>
                  <center><?php echo $value["software9"]; ?>
                </td>
                <td>
                  <center><?php echo $value["sof9"]; ?>
                </td>
                <td>
                  <center><?php echo $value["software10"]; ?>
                </td>
                <td>
                  <center><?php echo $value["sof10"]; ?>
                </td>

              </tr>

            </tbody>

          </table>



          Declaro estar ciente que os softwares do equipamento atual declarados no <b>item 7 (sete)</b>, foram
          instalados no equipamento novo que estou recebendo, e que validei o seu funcionamento.

          <div class="table-responsive">
            <table class="table table-hover table-bordered">
              <thead class="table table-dark">


                <th>
                  <center>Nome<b>
                </th>
                <th>
                  <center>Assinatura<b>
                </th>
                <th>
                  <center>Data e Hora<b>
                </th>


                </tr>
              </thead>
              <tbody>

                <tr style="font-size: 15px;font-weight:
                                      normal;">
                  <td>
                    <center><?php echo $value["nome"]; ?>
                  </td>
                  <td>
                    <center>
                  </td>
                  <td>
                    <center>
                  </td>


                </tr>

              </tbody>

            </table>
            <hr>

            <b>8. Levantamento / Validação dos arquivos de trabalho</b></center><br>

            Declaro estar ciente que os meus arquivos de trabalho e meus arquivos pessoais, são de minha
            responsabilidade, e que os mesmos foram salvos na rede corporativa e no OneDrive, respectivamente.

            <div class="table-responsive">
              <table class="table table-hover table-bordered">
                <thead class="table table-dark">


                  <th>
                    <center>Item<b>
                  </th>
                  <th>
                    <center>Status (Sim/Não)<b>
                  </th>

                  </tr>
                </thead>
                <tbody>

                  <tr style="font-size: 15px;font-weight:
                                      normal;">
                    <td>
                      <center>Foi feito o Backup do arquivamento do Lotus Notes (data e ID) e o teste com o usuário ?
                    </td>
                    <td>
                      <center><?php echo $value["bkp"]; ?>
                    </td>


                  </tr>
                  <tr>
                    <td>
                      <center>Usuário possuía perfil de administrador ?
                    </td>
                    <td>
                      <center><?php echo $value["admin"]; ?>
                    </td>


                  </tr>

                </tbody>

              </table>


            </div>




            <b>Usuário do Equipamento</b>

            <div class="table-responsive">
              <table class="table table-hover table-bordered">
                <thead class="table table-dark">


                  <th>
                    <center>Nome<b>
                  </th>
                  <th>
                    <center>Assinatura<b>
                  </th>
                  <th>
                    <center>Data e Hora<b>
                  </th>


                  </tr>
                </thead>
                <tbody>

                  <tr style="font-size: 15px;font-weight:
                                      normal;">
                    <td>
                      <center><?php echo $value["nome"]; ?>
                    </td>
                    <td>
                      <center>
                    </td>
                    <td>
                      <center>
                    </td>


                  </tr>

                </tbody>

              </table>
            </div>


            <b>Analista responsável pela entrega do equipamento</b>

            <div class="table-responsive">
              <table class="table table-hover table-bordered">
                <thead class="table table-dark">


                  <th>
                    <center>Nome<b>
                  </th>
                  <th>
                    <center>Assinatura<b>
                  </th>
                  <th>
                    <center>Data e Hora<b>
                  </th>


                  </tr>
                </thead>
                <tbody>

                  <tr style="font-size: 15px;font-weight:
                                      normal;">
                    <?php if( $value["id_usuario"] == $usuario["id_usuario"] ){ ?>
                    <td>
                      <center><?php echo getUsuarioNome(); ?>
                    </td>
                    <?php }else{ ?>
                    <td></td>
                    <?php } ?>
                    <td>
                      <center>
                    </td>
                    <td>
                      <center>
                    </td>


                  </tr>

                </tbody>

              </table>
            </div>
            <hr><br><br><br><br><br><br><br><br><br><br>


            <center><img
                src="https://i0.wp.com/sengepe.org.br/wp-content/uploads/2017/08/captura-de-tela-2017-08-20-acc80s-23-38-34.png"
                width="120" height="120">

              <h4><b>Ficha de Remanejamento de Estações</b></h4>
            </center><br>

            <b>9. Retirada do Equipamento</b><br>




            <b><i>Acessórios Devolvidos</i></b><br>


            <div class="table-responsive">
              <table class="table table-hover table-bordered">
                <thead class="table table-dark">


                  <th>
                    <center>Quantidade, Tipo, Modelo, Fabricante, N° de Série, Patrimônio<b>
                  </th>

                  </tr>
                </thead>
                <tbody>

                  <tr>
                    <td> <textarea disabled style="height: 110px; color: black" class="form-control py-1" type="text"
                        name="ac_devolvido"><?php echo $value["ac_devolvido"]; ?> </textarea></td>
                  </tr>



                </tbody>

              </table>
            </div>
            <hr>


            <b>Usuário do Equipamento</b>

            <div class="table-responsive">
              <table class="table table-hover table-bordered">
                <thead class="table table-dark">


                  <th>
                    <center>Nome<b>
                  </th>
                  <th>
                    <center>Assinatura<b>
                  </th>
                  <th>
                    <center>Data e Hora<b>
                  </th>


                  </tr>
                </thead>
                <tbody>

                  <tr style="font-size: 15px;font-weight:
                                      normal;">
                    <td>
                      <center><?php echo $value["nome"]; ?>
                    </td>
                    <td>
                      <center>
                    </td>
                    <td>
                      <center>
                    </td>


                  </tr>

                </tbody>

              </table>
            </div>


            <b>Analista responsável pela retirada do equipamento</b>

            <div class="table-responsive">
              <table class="table table-hover table-bordered">
                <thead class="table table-dark">


                  <th>
                    <center>Nome<b>
                  </th>
                  <th>
                    <center>Assinatura<b>
                  </th>
                  <th>
                    <center>Data e Hora<b>
                  </th>


                  </tr>
                </thead>
                <tbody>

                  <tr style="font-size: 15px;font-weight:
                                      normal;">
                    <?php if( $value["id_usuario"] == $usuario["id_usuario"] ){ ?>
                    <td>
                      <center><?php echo getUsuarioNome(); ?>
                    </td>
                    <?php }else{ ?>
                    <td></td>
                    <?php } ?>
                    <td>
                      <center>
                    </td>
                    <td>
                      <center>
                    </td>


                  </tr>

                </tbody>

              </table>
              <hr>
            </div>


            <b>10. Termo de aceite</b><br><br>
            <b><u>Seção 3</u></b>
            <hr><br>


            <b><i>Acessórios Recebidos\Mantidos</i></b><br>


            <div class="table-responsive">
              <table class="table table-hover table-bordered">
                <thead class="table table-dark">


                  <th>
                    <center>Quantidade, Tipo, Modelo, Fabricante, N° de Série, Patrimônio<b>
                  </th>

                  </tr>
                </thead>
                <tbody>

                  <tr>
                    <td> <textarea disabled style="height: 110px; color: black" class="form-control py-1" type="text"
                        name="ac_devolvido"><?php echo $value["ac_mantido"]; ?> </textarea></td>
                  </tr>



                </tbody>

              </table>
            </div>
            <hr>

            <b>Usuário do Equipamento</b>

            <div class="table-responsive">
              <table class="table table-hover table-bordered">
                <thead class="table table-dark">


                  <th>
                    <center>Nome<b>
                  </th>
                  <th>
                    <center>Assinatura<b>
                  </th>
                  <th>
                    <center>Data e Hora<b>
                  </th>


                  </tr>
                </thead>
                <tbody>

                  <tr style="font-size: 15px;font-weight:
                                      normal;">
                    <td>
                      <center><?php echo $value["nome"]; ?>
                    </td>
                    <td>
                      <center>
                    </td>
                    <td>
                      <center>
                    </td>


                  </tr>

                </tbody>

              </table>
            </div><br>


            <b>Analista responsável pela entrega do equipamento</b>

            <div class="table-responsive">
              <table class="table table-hover table-bordered">
                <thead class="table table-dark">


                  <th>
                    <center>Nome<b>
                  </th>
                  <th>
                    <center>Assinatura<b>
                  </th>
                  <th>
                    <center>Data e Hora<b>
                  </th>


                  </tr>
                </thead>
                <tbody>

                  <tr style="font-size: 15px;font-weight:
                                      normal;">
                    <?php if( $value["id_usuario"] == $usuario["id_usuario"] ){ ?>
                    <td>
                      <center><?php echo getUsuarioNome(); ?>
                    </td>
                    <?php }else{ ?>
                    <td></td>
                    <?php } ?>
                    <td>
                      <center>
                    </td>
                    <td>
                      <center>
                    </td>


                  </tr>


                  <div class="table-responsive">
                    <table class="table  table-bordered">




                      <tr>
                        <td>
                          <center>
                            <center><img
                                src="https://i0.wp.com/sengepe.org.br/wp-content/uploads/2017/08/captura-de-tela-2017-08-20-acc80s-23-38-34.png"
                                width="80" height="60">
                        </td>

                        <td><br>
                          <center><b>CheckList para Notebook</b><br>
                            <center>(&ensp; )Entrega (&ensp; )Devolução
                        </td>

                      </tr>

                      <table class="table table-hover table-bordered">
                        <thead class="table table-dark">


                          <th>
                            <center>Colaborador(a)<b>
                          </th>
                          <th>
                            <center>Gerência <b>
                          </th>
                          <th>
                            <center>Patrimônio<b>
                          </th>
                          <th>
                            <center>Fabricante / Modelo<b>
                          </th>
                          <th>
                            <center>N° Série<b>
                          </th>




                        </thead>

                        <td>
                          <center><?php echo $value["nome"]; ?>
                        </td>
                        <td>
                          <center><?php echo $value["gerencia"]; ?>
                        </td>
                        <td>
                          <center><?php echo $value["mq_patrimonio_novo"]; ?>
                        </td>
                        <td>
                          <center><?php echo $value["mq_marca_novo"]; ?>&ensp;<?php echo $value["mq_modelo_novo"]; ?>
                        </td>
                        <td>
                          <center><?php echo $value["mq_nserie_novo"]; ?>
                        </td>












                </tbody>

              </table>

              <center><img src="/res/user/img/checklist1.png" width="900" height="1150"></center><br>


              <table class="table table-hover table-bordered">
                <thead class="table table-dark">


                  <th>
                    <center>Data e Assinatura do Responsável Técnico<b>
                  </th>
                  <th>
                    <center>Data e Assinatura do(a) Colaborador(a) <b>
                  </th>


                </thead>

                <td>
                  <center><br>
                </td>
                <td>
                  <center><br>
                </td>


                </tbody>

              </table>

            </div>



          </div>

        </div>


      </div>


      <?php if( $value["id_usuario"] == $usuario["id_usuario"] ){ ?>
      <a href="/usuario/rollout/editar-bsb/<?php echo $value["id_rollout"]; ?>" class="btn btn-success btn-sm btn-sm"><i
          class="fas fa-pen"></i><b> Alterar dados</b></a>
      <?php } ?>

      <?php if( $value["id_usuario"] == $usuario["id_usuario"] ){ ?>
      <button data-toggle="modal" data-target="#arquivoModal" class="btn btn-warning btn-sm"><i
          class="far fa-file-alt"></i><b> Anexar Arquivo</b></button>
      <?php } ?>

      <button id='btn' value='Print' onclick='printtag("DivIdToPrint");' class="btn btn-primary btn-sm"
        style="margin-right: 5px;">
        <i class="fa fa-print"></i><b> Imprimir</b>
      </button>




      <hr class="my-4" />

      <a href="javascript:history.back()" class="btn btn-info btn-xs"><i class="fas fa-chevron-circle-left"></i><b>
          Voltar</b></a>
    </div>
  </div>
</div>






<script type="text/javascript">
  function printtag(tagid) {
    var hashid = "#" + tagid;
    var tagname = $(hashid).prop("tagName").toLowerCase();
    var attributes = "";
    var attrs = document.getElementById(tagid).attributes;
    $.each(attrs, function (i, elem) {
      attributes += " " + elem.name + " ='" + elem.value + "' ";
    })
    var divToPrint = $(hashid).html();
    var head = "<html><head>" + $("head").html() + "</head>";
    var allcontent = head + "<body  onload='window.print()'   >" + "<" + tagname + attributes + ">" + divToPrint + "</" + tagname + ">" + "</body></html>";
    var newWin = window.open('', 'Print-Window');
    newWin.document.open();
    newWin.document.write(allcontent);
    newWin.document.close();
    // setTimeout(function(){newWin.close();},10);
  }
</script>

<!-- Modal arquivo -->
<div class="modal fade" id="arquivoModal" tabindex="-1" role="dialog" aria-labelledby="arquivoModal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="imageModal">Anexar Arquivo</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form class="form-group" action="/usuario/rollout/anexar-arquivo-bsb/<?php echo $value["id_rollout"]; ?>" method="post"
          enctype="multipart/form-data"><br>

          <input class="form-control py-1" value="<?php echo $usuario["id_usuario"]; ?>" name="id_usuario" type="hidden">
          <input class="form-control py-1" value="<?php echo $value["id_rollout"]; ?>" name="id_rollout" type="hidden">


          <div class="form-group"><label class="small mb-1"><b style="font-size:17px;color: #585858">Anexe o documento
                scaneado do rollout de preferência </b></label>
            <input id="addArquivoProfile" class="form-control py-1" type="file" id="arquivo_rollout"
              name="arquivo_rollout[]" required="" />
          </div>

          <input class="btn btn-warning btn btn-block" type="submit" value="Anexar">

        </form>
      </div>
    </div>
  </div>
</div>

</div>