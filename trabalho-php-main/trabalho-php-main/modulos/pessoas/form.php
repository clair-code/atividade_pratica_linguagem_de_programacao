<div class="card-body">
                    <div class="form-group">
                      <label for="exampleInputEmail1">nome</label>
                      <input name="nome" type='text' class="form-control" value="<?php echo $pessoa->nome ?>" id="" placeholder="nome">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">email</label>
                      <input name="email" type='text' class="form-control" value="<?php echo $pessoa->email ?>" id="" placeholder="email">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">telefone</label>
                        <input name="telefone" type='text' class="form-control" value="<?php echo $pessoa->telefone ?>" id="" placeholder="telefone">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">rg</label>
                        <input name="rg" type='text' class="form-control" value="<?php echo $pessoa->rg ?>" id="" placeholder="rg">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">cpf</label>
                        <input name="cpf" type='text' class="form-control" value="<?php echo $pessoa->cpf ?>" required id="" placeholder="cpf">
                      </div>
                  </div>