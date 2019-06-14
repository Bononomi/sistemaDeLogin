<!doctype html>
<html lang="pt-br">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <title>Sistema de Login</title>
    </head>
    <body class="bg-dark">
        <main class="container mt-4"> 
            <!-- Alerta -->
            <section class="row">
                <div class="col-lg-4 offset-lg-4" 
                     id="alert">
                    <div class="alert alert-success text-center">
                        <strong id="resultado">
                            Boa Noite, Meu Consagrado
                        </strong>

                    </div>

                </div>

            </section>

            <!-- Formulário de Login-->
            <section class="row">
                <div class="col-lg-4 offset-lg-4 bg-light rounded" id="caixaLogin">
                    <h2 class="text-center mt-2">
                        Entrada
                    </h2>                  
                    <form action="#" method="post" role="form" class="p-2" 
                          id="formLogin">
                        <div class="form-group">
                            <input type="text" name="nomeUsuario"
                                   class="form-control" placeholder="Nome do usuário"
                                   required minlength="5">
                        </div>     

                        <div class="form-group">
                            <input type="password" name="senhaUsuario"
                                   class="form-control" placeholder="Senha"
                                   required minlength="6">
                        </div>     

                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" name="lembrar" id="checkLembrar"
                                   class="custom-control-input">
                            <label for="checkLembrar" class="custom-control-label">
                                Lembrar de mim
                            </label>

                            <a href="#" id="btnEsqueci" class="float-right">
                                Esqueci a senha
                            </a>
                        </div> 

                        <div class="form-group">
                            <input type="submit" name="bntEntrar" id="btnEntrar"
                                   value="Entrar" class="btn btn-primary btn-block">
                        </div>

                        <div>
                            <p>
                                Novo usuário?
                                <a href="#" id="btnRegistrar">
                                    Registre-se
                                </a>
                            </p>
                        </div>

                    </form>
                </div>

            </section>

            <br> <!--quebrar linha-->

            <!-- Formulário de Recuperação de Senha -->
            <section class="row">
                <div class="col-lg-4 offset-lg-4 bg-light rounded"
                     id="caixaSenha">

                    <h2 class="text-center mt-2">
                        Gerar nova senha
                    </h2>
                    <form action="#" method="post" role="form" class="p-2"
                          id="formSenha">
                        <div class="form-group">
                            <small class="text-muted">
                                Para gerar nova senha, digite seu e-mail para
                                receber as instruções.
                            </small>
                        </div>

                        <div class="form-group">
                            <input type="email" name="emailGerarSenha" 
                                   class="form-control" placeholder="E-mail"
                                   required="">
                        </div>

                        <div class="form-group">
                            <input type="submit" name="btnGerar" id="btnGerar"
                                   value="Gerar" class="btn btn-primary btn-block">
                        </div>

                        <div class="form-group float-right">
                            <a href="#" id="btnVoltar">
                                Voltar
                            </a>
                        </div>
                    </form>
                </div>
            </section>


        </main>
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>