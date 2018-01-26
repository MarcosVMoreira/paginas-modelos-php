<html>
<head>
    <meta charset="UTF-8">
    <title>HFT System</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- BoostrapValidator CSS -->
    <link href="css/bootstrapValidator.min.css" rel="stylesheet" />

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!-- depois trocar esse icone por um bom -->
    <link rel="icon" id="favicon" href="img/favicon.png" type="image/x-icon">
    <!-- fontes usadas -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat|Quattrocento+Sans" rel="stylesheet">
    <link rel="stylesheet" href="css/estiloHFT.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <script src="js/bootstrapValidator.min.js"></script>
    
    <script language="javascript" type="text/javascript">
        function validar(valida_registro) {
            
            var firstName = valida_registro.firstName.value;
            var lastName = valida_registro.lastName.value;
            var senha = valida_registro.senha.value;
            var login = valida_registro.login.value;
            var confirmaSenha = valida_registro.confirmaSenha.value;
            var email = valida_registro.email.value;

            if (firstName=="" || lastName=="" || senha=="" || login=="" || confirmaSenha=="" || email=="") {
                alert('Preencha todos os campos.');
                return false;
            } else if (senha != confirmaSenha) {
                alert('Senhas diferentes.');
                valida_registro.senha.focus();
                return false;
            } if (senha.length < 6) {
                alert('Senha precisa ter no mínimo 6 caracteres.');
                valida_registro.senha.focus();
                return false;
            }
        }
    </script>
</head>

<body>
    <nav class="navbar navbar-default navbar-hft">
        <div class="container">
            <div class="navbar-header">
                <!-- colocar um logo melhor aqui-->
                <a href="index.php" class="navbar-brand"><img id="navbar-brand-hftLogo" src="img/logo.png"></a>
                <button class="navbar-toggle glyphicon glyphicon-menu-hamburger" data-toggle="collapse"
                 data-target="#navbar-hftsystem"></button>
            </div>
            <ul id="navbar-hftsystem" class="nav navbar-nav navbar-right collapse navbar-collapse">
                <li><a href="index.php">Home</a></li>
                <li><a href="sobreSimulador.php">Sobre o simulador</a></li>
                <li><a href="simular.php">Simular</a></li>
                <li><a href="contato.php">Contato</a></li>
                <li class="active"><a href="registration.html">Registrar</a></li>
                <li><a href="login.php">Login</a></li>
            </ul>
        </div>
    </nav>

    <div class="container padding-top-10">
        <div class="panel panel-default">
            <form action="valida_registro.php" method="POST" id="registration-form" class="form-horizontal" onsubmit="return validar(this)">
                <div class="panel-body">
                        <h3>Informe seus dados</h3>
                    <label for="firstName" class="control-label">Nome:</label>
                    <div class="row">
                        <div class="col-md-6">
                            <input type="text" class="form-control" name="firstName" id="firstName" placeholder="Nome" required autofocus/>
                        </div>
                        <div class="col-md-6">
                            <input type="text" class="form-control" name="lastName" id="lastName" placeholder="Sobrenome" required autofocus/>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label for="login" class="control-label padding-top-10">Login:</label>
                            <input type="text" class="form-control" name="login" id="login" placeholder="Login" required autofocus/>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label for="senha" class="control-label padding-top-10">Senha:</label>
                            <input type="password" class="form-control" name="senha" id="senha" placeholder="Informe sua senha" data-minlength="6" required autofocus/>
                            <span class="help-block">Mínimo de seis (6) digitos</span>
                        </div>
                        <div class="col-md-6">
                            <label for="senha" class="control-label padding-top-10">Confirmar senha:</label>
                            <input type="password" class="form-control" name="confirmaSenha" id="confirmaSenha" placeholder="Informe sua senha" data-match="#senha" data-match-error="Atenção! As senhas não estão iguais."
                                required autofocus/>
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label for="email" class="control-label padding-top-10">Email:</label>
                            <input type="email" class="form-control" name="email" id="email" placeholder="Informe seu email" data-error="Por favor, informe um email válido."
                                required autofocus/>
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2">
                            <button type="submit" class="btn btn-primary">Registrar</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>


</body>


</html>
