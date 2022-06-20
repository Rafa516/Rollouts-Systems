<?php if(!class_exists('Rain\Tpl')){exit;}?><div class="content">

  <div class="content-inside">

    <div class="my-4">
      <ul class="nav nav-tabs mb-4" id="myTab" role="tablist">
        <li class="nav-item">
          <a style="background-color: #2E9AFE;color: white" class="nav-link
            active" id="home-tab" data-toggle="tab"
            role="tab" aria-controls="home" aria-selected="false"><b>Alterar
              termo do(a) <?php echo $value["nome_t"]; ?> </b></a>
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

        <h4><b>Termo de Entrega / Devolução</b></h4></center><br>
      <hr>


      <div class="container-fluid px-1 py-5 mx-auto">
        <div class="row d-flex justify-content-center">
          <div class="col-xl-12 col-lg-8 col-md-9 col-11 text-center">

            <form class="form-group"
              action="/usuario/termo/editar-rec/<?php echo $value["id_termos"]; ?>" method="post"
              enctype="multipart/form-data">

              <input class="form-control py-1" value="<?php echo $usuario["id_usuario"]; ?>"
                name="id_usuario" type="hidden">




            </div>
          </div>

          <b>1. Identificação do Usuário</b><br><br>

          <div class="table-responsive">
            <table class="table table-hover table-bordered">
              <thead class="table table-dark">


                <th><center>Termo<b></th>
                    <th><center>N° Chamado<b></th>
                        <th><center>Nome<b></th>
                            <th><center>Diretoria <b></th>
                                <th><center>Gerência<b></th>
                                    <th><center>Gerência Executiva<b></th>


                                      </tr>
                                    </thead>
                                    <tbody>

                                      <tr>


                                        <td><center><select class="form-select
                                              py-1" name="termo" required>
                                              <option value="Entrega"><?php echo $value["termo"]; ?></option>
                                              <option value="Entrega">Entrega</option>
                                              <option value="Devolução">Devolução</option>
                                            </select></td>
                                          <td> <input
                                              name="n_chamadoT"
                                              value="<?php echo $value["n_chamadoT"]; ?>"
                                              type="text" class="form-control
                                              py-1" required></td>
                                          <td> <input
                                              name="nome_t" type="text"
                                              value="<?php echo $value["nome_t"]; ?>"
                                              class="form-control py-1" required></td>
                                          <td> <input
                                              name="diretoria_t" type="text"
                                              value="<?php echo $value["diretoria_t"]; ?>"
                                              class="form-control py-1"></td>
                                          <td> <input
                                              name="gerencia_t" type="text"
                                              value="<?php echo $value["gerencia_t"]; ?>"
                                              class="form-control py-1"></td>
                                          <td> <input
                                              name="gerencia_exeT" type="text"
                                              value="<?php echo $value["gerencia_exeT"]; ?>"
                                              class="form-control py-1"></td>
                                        </tr>



                                      </tbody>

                                    </table>
                                  </div><hr>



                                  <b>2. Dados do(s) Equipamento(s)</b><br><br>
                                  <div class="table-responsive">
                                    <table class="table table-hover
                                      table-bordered">
                                      <thead class="table table-dark">


                                        <th><center>Quantidade, Tipo, Modelo,
                                            Fabricante, N° de Série, Patrimônio<b></th>
                                          </tr>
                                        </thead>
                                        <tbody>

                                          <tr>
                                            <td> <textarea style="height:
                                                110px;" class="form-control
                                                py-1" value="" type="text"
                                                name="equipamentos_t">
                                                <?php echo $value["equipamentos_t"]; ?></textarea>
                                            </td>
                                          </tr>



                                        </tbody>

                                      </table>
                                    </div><hr>

                                    <b>3. Acessórios</b><br><br>


                                    <div class="table-responsive">
                                      <table class="table table-hover
                                        table-bordered">
                                        <thead class="table table-dark">


                                          <th><center>Quantidade, Tipo, Modelo,
                                              Fabricante, N° de Série,
                                              Patrimônio<b></th>

                                            </tr>
                                          </thead>
                                          <tbody>

                                            <tr>
                                              <td> <textarea style="height:
                                                  110px;" class="form-control
                                                  py-1" value="" type="text"
                                                  name="acessorios_t"><?php echo $value["acessorios_t"]; ?>
                                                </textarea> </td>
                                            </tr>



                                          </tbody>

                                        </table>
                                      </div><hr>




                                      <b>4. Observações</b>



                                      <div class="table-responsive">
                                        <table class="table table-hover
                                          table-bordered">
                                          <thead class="table table-dark">


                                            <th><center>Observações em geral<b></th>
                                              </tr>
                                            </thead>
                                            <tbody>

                                              <tr>
                                                <td> <textarea style="height:
                                                    110px;" class="form-control
                                                    py-1" value="" type="text"
                                                    name="observacao_t"><?php echo $value["observacao_t"]; ?>
                                                  </textarea> </td>
                                              </tr>



                                            </tbody>

                                          </table>
                                        </div><hr>

                                        <b>3. Finalidade e datas</b><br><br>
                                        <div class="table-responsive">
                                          <table class="table table-hover
                                            table-bordered">
                                            <thead class="table table-dark">
                                              <th><center>Finalidade de uso<b></th>
                                                  <th><center>Data de entrega /
                                                      devolução<b></th>



                                                    </tr>
                                                  </thead>
                                                  <tbody>

                                                    <tr>


                                                      <td> <input
                                                          name="finalidade"
                                                          type="text"
                                                          value="<?php echo $value["finalidade"]; ?>"
                                                          class="form-control
                                                          py-1" required></td>
                                                      <td> <input
                                                          name="dt_data"
                                                          type="date"
                                                          value="<?php echo $value["dt_data"]; ?>"
                                                          class="form-control
                                                          py-1" required></td>
                                                    </tr>

                                                  </tbody>

                                                </table>
                                              </div><hr>




                                            </div>
                                          </div>


                                          <center><input style="width: 100%;"
                                              class="btn btn-success btn"type="submit"
                                              value="Alterar"></center><br><br>
                                          <a href="javascript:history.back()"
                                            class="btn btn-info btn-xs"><i
                                              class="fas
                                              fa-chevron-circle-left"></i><b>
                                              Voltar</b></a><hr>
                                        </div>

                                      </div>
                                    </div>

                                  </div>
                                  <hr class="my-4" />



                                </form>
                              </div>
                            </div>
