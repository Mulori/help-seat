<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Help Seat | Registre-se</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://use.fontawesome.com/8aae9daeac.js"></script>
    <link rel="stylesheet" href="../src/css/register/styles.css" />
</head>

<body>

<div class="container-fluid h-100 container-auth">
        <div class="row h-100">
            <div class="col d-flex flex-column justify-content-center" style="background-color: white;">
                <div class="d-flex justify-content-between mx-auto">
                    <img src="../src/images/Help-Logo-transparent.png" class="img-logo"/>
                </div>
                <div class="container-form mx-auto w-100 p-5">
                    
                    <form id="form-register" method="POST">
                        <div class="form-group">
                            <label id="title-form-login" >Crie sua conta</label>
                            <input type="text" class="form-control" id="nameFull" aria-describedby="nameHelp" name="fullname" placeholder="Nome Completo">
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" placeholder="E-mail">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="Senha">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" id="exampleInputPassword1" name="re-password" placeholder="Confirme a senha">
                        </div>
                        <div class="row h-100">
                            <div class="col w-100">
                                <button type="button" id="btn-back" class="btn btn-dark w-100">Voltar</button>
                            </div>
                            <div class="col w-100">
                                <button type="button" id="btn-register-account" class="btn btn-outline-dark w-100">Registrar-se</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="footer mx-auto p-3">
                    © 2022 HelpSeat.com.br MGTech                   
                </div>
            </div>
            <div class="col d-none d-md-block col-right">
            </div>
            <div class="col d-none d-md-block col-right">
            </div>
            <div class="col d-none d-md-block col-right">
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
    </script>
    <script type="text/javascript" src="../src/libs/jquery.serializejson.js"></script>



    <script>
        $("#btn-back").on("click", function(){
            window.history.back()
        });

        $("#form-register").on("submit", function(e) {
            e.preventDefault();

            var formData = $("#form-register").serializeJSON();
            var registerData = JSON.stringify(formData);

            $.ajax({
                url: '../../controller/register_user/controller_register_user.php',
                dataType: 'text',
                type: 'post',
                data: {
                    data: registerData
                },
                success: function(result){
                    console.log(result);

                    if(result){
                        console.log('deu certo');
                    }else{
                        console.log('deu errado');
                    }
                },
                error: function(e, ts, et){
                    console.log(ts.responseText);
                }
            });
        });
    </script>
    
</body>

</html>