<?php
    include("../lib/config/includes.php");

    if($_POST['login'] && $_POST['senha']){
        $query = "select * from usuarios where login = '{$_POST['login']}' and senha = '".md5($_POST['senha'])."' and situacao = '1' limit 1";
        $result = mysqli_query($con, $query);
        if(mysqli_num_rows($result)){
            $retorno = ['staus' => true, 'msg' => 'Dados confirmados com sucesso'];
            echo json_encode($retorno);
            $_SESSION['backupUser'] = mysqli_fetch_object($result)->codigo;
        }else{
            $retorno = ['staus' => false, 'msg' => 'Erro nos dados de acesso'];
            echo json_encode($retorno);
        }
        exit();
    }

?>
<style>

    .form-signin {
        max-width: 330px;
        margin-top:70px !important;
    }

    .form-signin .form-floating:focus-within {
        z-index: 2;
    }

    .form-signin input[type="email"] {
        margin-bottom: -1px;
        border-bottom-right-radius: 0;
        border-bottom-left-radius: 0;
    }

    .form-signin input[type="password"] {
        margin-bottom: 10px;
        border-top-left-radius: 0;
        border-top-right-radius: 0;
    }
</style>
<div class="row justify-content-center" style="margin:0 !important; padding:0 !important;">
    <div class="col-3">

        <main class="text-center form-signin w-100 m-auto">
            <i class="fa-solid fa-cloud-arrow-up" style="font-size:75px; color:green"></i>
            <h1 class="h3 mb-3 fw-normal">Login de Acesso</h1>

            <div class="form-floating">
            <input type="text" class="form-control" id="login" placeholder="Digite seu login">
            <label for="login">E-mail/Login</label>
            </div>
            <div class="form-floating">
            <input type="password" class="form-control" id="senha" placeholder="Senha">
            <label for="senha">Senha</label>
            </div>

            <div class="checkbox mb-3">
            <label>
                <input type="checkbox" value="remember-me"> Manter conectado
            </label>
            </div>
            <button class="acessar w-100 btn btn-lg btn-primary" type="button">Acessar</button>
            <p class="mt-5 mb-3 text-muted">&copy; Sistema Mohatron de Backup - <?=date("Y")?></p>
        </main>

    </div>
</div>

<script>
    $(function(){

        $("button.acessar").click(function(){
            login = $("#login").val();
            senha = $("#senha").val();
            $.ajax({
                url:"home/login.php",
                type:"POST",
                dataType:"JSON",
                data:{
                    login,
                    senha
                },
                success:function(dados){
                    if(dados.status){
                        $.ajax({
                            url:"home/index.php",
                            success:function(dados){
                                $(".AppBody").html(dados);
                            },
                            error:function(){
                                $.alert('Erro na página!');
                            }
                        });
                    }else{
                        $.alert('Erro no acesso, favor confira os seus dados!');
                    }
                },
                error:function(){
                    $.alert('Erro na página!');
                }
            });

        });

    })
</script>