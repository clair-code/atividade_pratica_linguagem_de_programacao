<div class="card-body">
                    <div class="form-group">
                      <label for="exampleInputEmail1">nome</label>
                      <input name="nome" type='text' class="form-control" value="<?php echo $fornecedor->nome ?>" id="" placeholder="nome">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">nome_fantasia</label>
                      <input name="nome_fantasia" type='text' class="form-control" value="<?php echo $fornecedor->nome_fantasia ?>" id="" placeholder="nome_fantasia">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">responsavel</label>
                        <input name="responsavel" type='text' class="form-control" value="<?php echo $fornecedor->responsavel ?>" id="" placeholder="responsavel">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">produtos</label>
                        <input name="produtos" type='text' class="form-control" value="<?php echo $fornecedor->produtos ?>" id="" placeholder="produtos">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">cnpj</label>
                        <input name="cnpj" type='text' class="form-control" value="<?php echo $fornecedor->cnpj ?>" required id="" placeholder="cnpj">
                      </div>
                  </div>