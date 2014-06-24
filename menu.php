<body>
    <div class="container">
        <div class="header">
            <nav class="navbar navbar-default" role="navigation">
                <div class="container-fluid">

                    <!-- Marca a alternância se agrupados para melhor visualização móvel -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                            <span class="sr-only">Login</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="index.php">Início</a>
                    </div>

                    <!-- Coletar os links de navegação, formulários e outros conteúdos para alternar -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">

                            <!-- class="active" -->
                            <li><a href="cadastro.php">Cadastros</a></li>
                            <li><a href="contato.php">Contato</a></li>
                            
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Opções<b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="conteudo.php">Estudantes por Nome</a></li>
                                    <li><a href="conteudo.php">Estudantes por Instituição</a></li>
<!--                                    <li><a href="cadastro.php">Something else here</a></li>-->
                                    <li class="divider"></li>
                                    <li><a href="https://www.documentodoestudante.com.br/" target="_blank" >Carteira Internacional de Estudante</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#">Novo Registro</a></li>
                                </ul>
                            </li>
                        </ul>
                        
                        <!-- <form class="navbar-form navbar-left" role="Buscar">
                                 <div class="form-group">
                                     <input type="text" class="form-control" placeholder="Buscar">
                                 </div>
                                 <button type="Buscar" class="btn btn-default">Buscar</button>
                             </form>-->
                        <ul class="nav navbar-nav navbar-right">
<!--                            <li><a href="SICAES/index.php">SICAES</a></li>-->
                            <li class="dropdown">
                                <a href="cadastro.php" class="dropdown-toggle" data-toggle="dropdown">Criar uma conta<b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="cadastro.php">Administrador</a></li>
                                    <li><a href="cadastro.php">Professor</a></li>
                                    <li><a href="cadastro.php">Usuário</a></li>
                                    <li class="divider"></li>
                                    <li><a href="logout.php">Sair</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
            </nav>
            <h2>SICAES - Sistema de Cadastro de Estudantes</h2>
<!--            <img src="image/logo_default.png">-->
        </div>