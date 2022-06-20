<?php if(!class_exists('Rain\Tpl')){exit;}?><div class="content">

  <div class="content-inside">

    <div class="my-4">
      <ul class="nav nav-tabs mb-4" id="myTab" role="tablist">
        <li class="nav-item">
          <a style="background-color: #2E9AFE;color: white" class="nav-link active" id="home-tab" data-toggle="tab"
            role="tab" aria-controls="home" aria-selected="false"><b> Registrar Rollout - Brasília </b></a>
        </li>
      </ul>
      <?php if( $CallOpenMsg != '' ){ ?>
      <div class="alert alert-success">
        <b><?php echo $CallOpenMsg; ?></b>
      </div>
      <?php } ?>

      <?php if( $errorRegister != '' ){ ?>
      <div class="alert alert-danger">
        <b><?php echo $errorRegister; ?></b>
      </div>
      <?php } ?>

      <center><img
          src="https://i0.wp.com/sengepe.org.br/wp-content/uploads/2017/08/captura-de-tela-2017-08-20-acc80s-23-38-34.png"
          width="120" height="120">

        <h4><b>Ficha de Remanejamento de Estações</b></h4>
      </center><br><br>
      <b><u>Seção 1</u></b>
      <hr>


      <div class="container-fluid px-1 py-5 mx-auto">
        <div class="row d-flex justify-content-center">
          <div class="col-xl-12 col-lg-8 col-md-9 col-11 text-center">

            <form class="form-group" action="/usuario/registrar-rollout-bsb/enviar" method="post"
              enctype="multipart/form-data">

              <input class="form-control py-1" value="<?php echo $usuario["id_usuario"]; ?>" name="id_usuario" type="hidden">

              <input class="form-control py-1" value="Pendente" name="situacao" type="hidden">

               <input class="form-control py-1" value="Brasília" name="cidade" type="hidden">



          </div>
        </div>

        <b>1. Identificação do Usuário</b><br><br>

        <div class="table-responsive">
          <table class="table table-hover table-bordered">
            <thead class="table table-dark">
              <tr style="font-size: 16px; font-weight: bold;">

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
                 <th>
                  <center>Entrega<b>
                </th>



              </tr>
            </thead>
            <tbody>

              <tr>
                <td> <input name="n_chamado" type="text" class="form-control py-1" required></td>
                <td> <input name="nome" type="text" class="form-control py-1" required></td>
                <td> <input name="diretoria" type="text" class="form-control py-1"></td>
                <td> <input name="gerencia" type="text" class="form-control py-1"></td>
                <td> <input name="gerencia_executiva" type="text" class="form-control py-1"></td>
                <td> <input name="andar" type="text" class="form-control py-1"></td>
                <td> <input name="dt_data_rollout" type="date" class="form-control py-1" required></td>



              </tr>



            </tbody>

          </table>
        </div>
        <hr>



        <b>2. Identificação do Equipamento ATUAL(Máquina)</b><br><br>


        <div class="table-responsive">
          <table class="table table-hover table-bordered">
            <thead class="table table-dark">
              <tr style="font-size: 16px; font-weight: bold;">

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
                  <center>Hostname<b>
                </th>
                <th>
                  <center>N° de Série<b>
                </th>
                <th>
                  <center>Ponto de rede<b>
                </th>


              </tr>
            </thead>
            <tbody>

              <tr>
                <td> <input name="mq_marca_atual" type="text" class="form-control py-1"></td>
                <td> <input name="mq_modelo_atual" type="text" class="form-control py-1"></td>
                <td> <input name="mq_patrimonio_atual" type="text" class="form-control py-1"></td>
                <td> <input name="mq_hostname_atual" type="text" class="form-control py-1"></td>
                <td> <input name="mq_nserie_atual" type="text" class="form-control py-1"></td>
                <td> <input name="mq_rede_atual" type="text" class="form-control py-1"></td>


              </tr>



            </tbody>

          </table>
        </div>
        <hr>

        <b>3. Identificação do Equipamento ATUAL(Monitor)</b><br><br>



        <div class="table-responsive">
          <table class="table table-hover table-bordered">
            <thead class="table table-dark">
              <tr style="font-size: 16px; font-weight: bold;">

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
                  <center>N° Série<b>
                </th>


              </tr>
            </thead>
            <tbody>

              <tr>
                <td> <input name="mn_marca_atual1" type="text" class="form-control py-1"></td>
                <td> <input name="mn_modelo_atual1" type="text" class="form-control py-1"></td>
                <td> <input name="mn_patrimonio_atual1" type="text" class="form-control py-1"></td>
                <td><input name="mn_nserie_atual1" type="text" class="form-control py-1"></td>


              </tr>


              <tr>
              <tr>
                <td> <input name="mn_marca_atual2" type="text" class="form-control py-1"></td>
                <td> <input name="mn_modelo_atual2" type="text" class="form-control py-1"></td>
                <td> <input name="mn_patrimonio_atual2" type="text" class="form-control py-1"></td>
                <td><input name="mn_nserie_atual2" type="text" class="form-control py-1"></td>


              </tr>


              </tr>



              <tr>
              <tr>
                <td> <input name="mn_marca_atual3" type="text" class="form-control py-1"></td>
                <td> <input name="mn_modelo_atual3" type="text" class="form-control py-1"></td>
                <td> <input name="mn_patrimonio_atual3" type="text" class="form-control py-1"></td>
                <td><input name="mn_nserie_atual3" type="text" class="form-control py-1"></td>


              </tr>



              </tr>



            </tbody>

          </table>
          <hr>




          <b>4. Identificação do Equipamento NOVO(Máquina)</b>



          <div class="table-responsive">
            <table class="table table-hover table-bordered">
              <thead class="table table-dark">
                <tr style="font-size: 16px; font-weight: bold;">

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
                    <center>Hostname<b>
                  </th>
                  <th>
                    <center>N° de Série<b>
                  </th>
                  <th>
                    <center>Ponto de rede<b>
                  </th>


                </tr>
              </thead>
              <tbody>

                <tr>
                  <td> <input name="mq_marca_novo" type="text" class="form-control py-1"></td>
                  <td> <input name="mq_modelo_novo" type="text" class="form-control py-1"></td>
                  <td> <input name="mq_patrimonio_novo" type="text" class="form-control py-1"></td>
                  <td> <input name="mq_hostname_novo" type="text" class="form-control py-1"></td>
                  <td> <input name="mq_nserie_novo" type="text" class="form-control py-1"></td>
                  <td> <input name="mq_rede_novo" type="text" class="form-control py-1"></td>


                </tr>



              </tbody>

            </table>
          </div>
          <hr>

          <b>5. Identificação do Equipamento NOVO(Monitor)</b><br><br>


          <div class="table-responsive">
            <table class="table table-hover table-bordered">
              <thead class="table table-dark">
                <tr style="font-size: 16px; font-weight: bold;">

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
                    <center>N° Série<b>
                  </th>


                </tr>
              </thead>
              <tbody>

                <tr>
                  <td> <input name="mn_marca_novo1" type="text" class="form-control py-1"></td>
                  <td> <input name="mn_modelo_novo1" type="text" class="form-control py-1"></td>
                  <td> <input name="mn_patrimonio_novo1" type="text" class="form-control py-1"></td>
                  <td><input name="mn_nserie_novo1" type="text" class="form-control py-1"></td>


                </tr>


                <tr>
                <tr>
                  <td> <input name="mn_marca_novo2" type="text" class="form-control py-1"></td>
                  <td> <input name="mn_modelo_novo2" type="text" class="form-control py-1"></td>
                  <td> <input name="mn_patrimonio_novo2" type="text" class="form-control py-1"></td>
                  <td><input name="mn_nserie_novo2" type="text" class="form-control py-1"></td>


                </tr>


                </tr>



                <tr>
                <tr>
                  <td> <input name="mn_marca_novo3" type="text" class="form-control py-1"></td>
                  <td> <input name="mn_modelo_novo3" type="text" class="form-control py-1"></td>
                  <td> <input name="mn_patrimonio_novo3" type="text" class="form-control py-1"></td>
                  <td><input name="mn_nserie_novo3" type="text" class="form-control py-1"></td>


                </tr>



                </tr>



              </tbody>

            </table>
            <hr>


            <b>6. Identificação do Equipamento de Quarentena (Máquina)</b><br><br>


            <div class="table-responsive">
              <table class="table table-hover table-bordered">
                <thead class="table table-dark">
                  <tr style="font-size: 16px; font-weight: bold;">

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
                      <center>Hostname<b>
                    </th>
                    <th>
                      <center>N° de Série<b>
                    </th>
                    <th>
                      <center>Ponto de rede<b>
                    </th>


                  </tr>
                </thead>
                <tbody>

                  <tr>
                    <td> <input name="mq_marca_qr" type="text" class="form-control py-1"></td>
                    <td> <input name="mq_modelo_qrt" type="text" class="form-control py-1"></td>
                    <td> <input name="mq_patrimonio_qrt" type="text" class="form-control py-1"></td>
                    <td> <input name="mq_hostname_qrt" type="text" class="form-control py-1"></td>
                    <td> <input name="mq_nserie_qrt" type="text" class="form-control py-1"></td>
                    <td> <input name="mq_rede_qrt" type="text" class="form-control py-1"></td>


                  </tr>



                </tbody>

              </table>
            </div>
            <hr>

            <b><u>Seção 2</u></b><br>
            <hr>
            <b>7. Levantamento / Validação de Sistemas / Softwares Instalados</b><br><br>


            <div class="table-responsive">
              <table class="table table-hover table-bordered">
                <thead class="table table-dark">
                  <tr style="font-size: 16px; font-weight: bold;">

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
                    <td><input name="software1" type="text" class="form-control py-1"></td>
                    <td>
                      <center> <select class="form-select py-1" name="sof1">
                          <option value=""></option>
                          <option value="Sim">Sim</option>
                          <option value="Não">Não</option>
                        </select>
                    </td>
                    <td><input name="software2" type="text" class="form-control py-1"></td>
                    <td>
                      <center><select class="form-select py-1" name="sof2">
                          <option value=""></option>
                          <option value="Sim">Sim</option>
                          <option value="Não">Não</option>
                        </select>
                    </td>

                  </tr>

                  <tr>
                  <tr>
                    <td><input name="software3" type="text" class="form-control py-1"></td>
                    <td>
                      <center> <select class="form-select py-1" name="sof3">
                          <option value=""></option>
                          <option value="Sim">Sim</option>
                          <option value="Não">Não</option>
                        </select>
                    </td>
                    <td><input name="software4" type="text" class="form-control py-1"></td>
                    <td>
                      <center><select class="form-select py-1" name="sof4">
                          <option value=""></option>
                          <option value="Sim">Sim</option>
                          <option value="Não">Não</option>
                        </select>
                    </td>

                  </tr>



                  <tr>
                    <td><input name="software5" type="text" class="form-control py-1"></td>
                    <td>
                      <center> <select class="form-select py-1" name="sof5">
                          <option value=""></option>
                          <option value="Sim">Sim</option>
                          <option value="Não">Não</option>
                        </select>
                    </td>
                    <td><input name="software6" type="text" class="form-control py-1"></td>
                    <td>
                      <center><select class="form-select py-1" name="sof6">
                          <option value=""></option>
                          <option value="Sim">Sim</option>
                          <option value="Não">Não</option>
                        </select>
                    </td>

                  </tr>

                  <tr>
                    <td><input name="software7" type="text" class="form-control py-1"></td>
                    <td>
                      <center> <select class="form-select py-1" name="sof7">
                          <option value=""></option>
                          <option value="Sim">Sim</option>
                          <option value="Não">Não</option>
                        </select>
                    </td>
                    <td><input name="software8" type="text" class="form-control py-1"></td>
                    <td>
                      <center><select class="form-select py-1" name="sof8">
                          <option value=""></option>
                          <option value="Sim">Sim</option>
                          <option value="Não">Não</option>
                        </select>
                    </td>

                  </tr>

                  <tr>
                    <td><input name="software9" type="text" class="form-control py-1"></td>
                    <td>
                      <center> <select class="form-select py-1" name="sof9">
                          <option value=""></option>
                          <option value="Sim">Sim</option>
                          <option value="Não">Não</option>
                        </select>
                    </td>
                    <td><input name="software10" type="text" class="form-control py-1"></td>
                    <td>
                      <center><select class="form-select py-1" name="sof10">
                          <option value=""></option>
                          <option value="Sim">Sim</option>
                          <option value="Não">Não</option>
                        </select>
                    </td>

                  </tr>

                </tbody>

              </table>
              <hr>
            </div>

            <b>8. Levantamento / Validação dos arquivos de trabalho</b><br><br>

            <div class="table-responsive">
              <table class="table table-hover table-bordered">
                <thead class="table table-dark">
                  <tr style="font-size: 16px; font-weight: bold;">

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
                      <center> <select class="form-select py-1" name="bkp">
                          <option value=""></option>
                          <option value="Sim">Sim</option>
                          <option value="Não">Não</option>
                        </select>
                    </td>


                  </tr>
                  <tr>
                    <td>
                      <center>Usuário possuía perfil de administrador ?
                    </td>
                    <td>
                      <center> <select class="form-select py-1" name="admin">
                          <option value=""></option>
                          <option value="Sim">Sim</option>
                          <option value="Não">Não</option>
                        </select>
                    </td>


                  </tr>

                </tbody>

              </table>


            </div>


            <hr>

            <b>9. Retirada do Equipamento</b><br><br>



            <b><i>Acessórios Devolvidos</i></b><br>

            <div class="table-responsive">
              <table class="table table-hover table-bordered">
                <thead class="table table-dark">
                  <tr style="font-size: 16px; font-weight: bold;">

                    <th>
                      <center>Quantidade, Tipo, Modelo, Fabricante, N° de Série, Patrimônio<b>
                    </th>

                  </tr>
                </thead>
                <tbody>

                  <tr>
                    <td> <textarea style="height: 110px;" class="form-control py-1" value="" type="text"
                        name="ac_devolvido"> </textarea> </td>
                  </tr>



                </tbody>

              </table>
            </div>
            <hr>



            <b>10. Termo de aceite</b><br><br>
            <b><u>Seção 3</u></b>
            <hr><br>


            <b><i>Acessórios Recebidos\Mantidos</i></b><br>

            <div class="table-responsive">
              <table class="table table-hover table-bordered">
                <thead class="table table-dark">
                  <tr style="font-size: 16px; font-weight: bold;">

                    <th>
                      <center>Quantidade, Tipo, Modelo, Fabricante, N° de Série, Patrimônio<b>
                    </th>

                  </tr>
                </thead>
                <tbody>

                  <tr>
                    <td> <textarea style="height: 110px;" class="form-control py-1" value="" type="text"
                        name="ac_mantido"> </textarea> </td>
                  </tr>



                </tbody>

              </table>
            </div>
            <hr>


          </div>
        </div>


        <center><input style="width: 100%;" class="btn btn-primary btn " type="submit" value="Enviar"></center><br><br>


        <a href="javascript:history.back()" class="btn btn-info btn-xs"><i class="fas fa-chevron-circle-left"></i><b>
            Voltar</b></a>
        <hr>
      </div>

    </div>
  </div>

</div>
<hr class="my-4" />



</form>
</div>
</div>