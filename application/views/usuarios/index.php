<div class="container">    
    <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
        <div class="panel panel-info" >
                <div class="panel-heading">
                    <div class="panel-title">Login</div>
                    <div style="float:right; font-size: 80%; position: relative; top:-10px"><a href="#">Esqueceu a senha?</a></div>
                </div>     

                <div style="padding-top:30px" class="panel-body" >

                    <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
                        
                    <form id="loginform" action=" <?= base_url('login/autenticar') ?> " method="post" class="form-horizontal" role="form">
                                
                        <div style="margin-bottom: 25px" class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                    <input id="login-username" type="text" class="form-control" name="email" value="" placeholder="username or email">                                        
                                </div>
                            
                        <div style="margin-bottom: 25px" class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                    <input id="login-password" type="password" class="form-control" name="senha" placeholder="password">
                                </div>
                                

                            
                        <div class="input-group">
                                  <div class="checkbox">
                                    <label>
                                      <input id="login-remember" type="checkbox" name="remember" value="1"> Lembrar-me
                                    </label>
                                  </div>
                                </div>


                            <div style="margin-top:10px" class="form-group">
                                <!-- Button -->

                                <div class="col-sm-12 controls">
                                  <button id="btn-login" type="submit" class="btn btn-success">Login  </button>
                                 

                                </div>
                            </div>


                            <div class="form-group">
                                <div class="col-md-12 control">
                                    <div style="border-top: 1px solid#888; padding-top:15px; font-size:85%" >
                                        Não tem uma conta? 
                                    <a href="#" onClick="$('#loginbox').hide(); $('#signupbox').show()">
                                        Cadastre-se aqui!
                                    </a>
                                    </div>
                                </div>
                            </div>    
                        </form>     



                    </div>                     
                </div>  
    </div>
    <div id="signupbox" style="display:none; margin-top:50px" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <div class="panel-title">Cadastre-se</div>
                        <div style="float:right; font-size: 85%; position: relative; top:-10px"><a id="signinlink" href="#" onclick="$('#signupbox').hide(); $('#loginbox').show()">Login</a></div>
                    </div>  
                    <div class="panel-body" >
                        <form id="signupform" method="post" action="<?= base_url('usuarios/novo')  ?>" class="form-horizontal" role="form">
                            
                            <div id="signupalert" style="display:none" class="alert alert-danger">
                                <p>Erro:</p>
                                <span></span>
                            </div>
                                
                            
                              
                            <div class="form-group">
                                <label for="email" class="col-md-3 control-label">Email</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="email" placeholder="Email Address">
                                </div>
                            </div>
                                
                            <div class="form-group">
                                <label for="nome" class="col-md-3 control-label">Primeiro nome</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="nome" placeholder="First Name">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="sobrenome" class="col-md-3 control-label">Sobrenome</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="sobrenome" placeholder="Last Name">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="senha" class="col-md-3 control-label">Senha</label>
                                <div class="col-md-9">
                                    <input type="password" class="form-control" name="senha" placeholder="Password">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="telefone1" class="col-md-3 control-label">Telefone</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="telefone1" placeholder="(yy) xxxx-xxxx">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="cep" class="col-md-3 control-label">CEP</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="cep" placeholder="xxxxx-xxx">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="logradouro" class="col-md-3 control-label">Logradouro</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="logradouro" placeholder="">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="numero" class="col-md-3 control-label">Numero</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="numero" placeholder="">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="bairro" class="col-md-3 control-label">Bairro</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="bairro" placeholder="">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="cidade" class="col-md-3 control-label">Cidade</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="cidade" placeholder="">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="estado" class="col-md-3 control-label">Estado</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="estado" placeholder="">
                                </div>
                            </div>
                           
                                
                            

                            <div class="form-group">
                                <!-- Button -->                                        
                                <div class="col-md-offset-3 col-md-9">
                                    <button id="btn-signup" type="submit" class="btn btn-info"><i class="icon-hand-right"></i> &nbsp Cadastre-se</button>
                                    
                                </div>
                            </div>
                            
                           
                            
                            
                            
                        </form>
                     </div>
                </div>

           
           
            
     </div> 
</div>
