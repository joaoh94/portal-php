<?php
session_start();
?>

<!DOCTYPE HTML">
<html>

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Portal Conductor</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style type="text/css " media="screen,projection ">
    @import url(css/ning01.css?xn_version=201906250740);
    </style>
    <link class="less-style less-base-and-theme-styles " rel="stylesheet " type="text/css " href="css/3184261915.css?profile=original "/>
    <style type="text/css " media="screen,projection ">
    @import url(css/googlefonts02.css?family=Cookie|Libre+Baskerville|Open+Sans+Condensed:300|PT+Sans|Playfair+Display|Quicksand|Raleway|Sacramento|Satisfy|Ubuntu+Mono);
    </style>
    <link class="less-style less-signup " rel="stylesheet " type="text/css " href="css/3184353895.css?profile=original " />
</head>
<body>
    <div class="xg_theme xg_widget_main xg_widget_main_authorization " />
        <div class="before-content ">
            <div id="xn_bar ">&#160;</div>

        <div id="xj_msg " style="display:none; "></div>

    </div>
    <div class="container ">
        <div class="notifications "></div>
        <!--<div class="row ">-->
        <div class="sign_form signin_page ">
            <div class="lf-block ">
                <div class="lf-block_left ">
                    <div class="lf-about_network ">
                        <div class="lf-subtitle ">
                            Portal de Compras         <a>Conductor</a>   
                        </div>
                        <div class="lf-network_description ">
                            <div class="lf-img ">
                                <a class="img-wrp ">
                                    <img src="imagens/logoconductor.png "
                                    alt='www.conductor.com.br'>
                                </a>
                            </div>
                            <div class="lf-description ">
                                Portal destinado aos usuários do Grupo Conductor Tecnologia. Inclusão e controle de Solicitações de compras.
                            </div>
                        </div>
                    </div>


                    <div class="auth_copy ">
                        <span>Distribuido por </span>
                        <a href="https://www.meliora.com.br/ ">Meliora</a>

                    </div>        
                </div>

                <div class="lf-block_right socials_email">
                    <h1 class="lf-title " data-ux="heading-text ">
                        Autenticação na                 <a >conductor</a>
                    </h1>
                    
                    <form action="{{BASE}}home/" method="POST">
                        <div class="lf-input__wrap login_email ">
                            <input type="text" name="usuario" placeholder="solicitante do protheus "/>
                        </div>
                        <div class="lf-input__wrap ">
                            <input type="password" name="senha" placeholder="Sua senha " />
                        </div>
                        <div class="lf-input__wrap mt20 ">
                            <div class="forgot ">
                                <a href="{{BASE}}esqueceu-senha/" data-ux="forgot-password-singin ">Esqueceu sua senha?</a>
                            </div>
                            <button type="submit " name="login" value="login" class="dy-button dy-button-login " onclick="login()">Acessar</button>
                        </div>
                        
                    </form>
                   
                    <div class="lf-input__wrap ">
                         <a href="{{BASE}}cadastrocpf/">Realizar cadastro de usuário pessoa física</a>                
                    </div>
                    <div class="lf-input__wrap ">
                        <a href="{{BASE}}cadastrocnpj/">Realizar cadastro usuário pessoa jurídica</a> 
                    </div>
                </div>
            </div>        
        </div>

    </div>
</body>

</html>
