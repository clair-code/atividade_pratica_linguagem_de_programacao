<div class="card-body">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Material</label>
                      <input name="material" type='text' class="form-control" value="<?php echo $estoque->material ?>" id="" placeholder="Material">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Valor</label>
                      <input name="valor" type='text' class="form-control" value="<?php echo $estoque->valor ?>" id="" placeholder="Valor">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Fornecedor</label>
                        <input name="fornecedor" type='text' class="form-control" value="<?php echo $estoque->fornecedor ?>" id="" placeholder="Fornecedor">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Entrada</label>
                        <input name="entrada" type='text' class="form-control" value="<?php echo $estoque->entrada ?>" id="" placeholder="Entrada">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Saida</label>
                        <input name="saida" type='text' class="form-control" value="<?php echo $estoque->saida ?>" required id="" placeholder="Saida">
                      </div>
                  </div>