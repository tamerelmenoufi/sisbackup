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
            <input type="email" class="form-control" id="floatingInput" placeholder="name@exemplo.com">
            <label for="floatingInput">E-mail/Login</label>
            </div>
            <div class="form-floating">
            <input type="password" class="form-control" id="floatingPassword" placeholder="Senha">
            <label for="floatingPassword">Senha</label>
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

            $.ajax({
                url:"home/index.php",
                success:function(dados){
                    $(".AppBody").html(dados);
                },
                error:function(){
                    $.alert('Erro na página!');
                }
            });

        });

    })
</script>