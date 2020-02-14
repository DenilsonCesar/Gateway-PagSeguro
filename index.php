<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pagseguro</title>
    <link rel="stylesheet" href="Libraries/stylesheet.css"></link>
</head>
<body>

    <!--<form name="FormPagamento" id="FormPagamento" action="https://sandbox.pagseguro.uol.com.br/v2/checkout/payment.html" method="get">-->
        <!-- NÃO EDITE OS COMANDOS DAS LINHAS ABAIXO -->
        <!--<input type="hidden" name="code" id="code" value="" />
        <input type="hidden" name="iot" value="button" />
        <input id="BotaoPagamento" type="image" src="https://stc.pagseguro.uol.com.br/public/img/botoes/pagamentos/209x48-pagar-azul-assina.gif" name="submit" alt="Pague com PagSeguro - é rápido, grátis e seguro!" />
    </form>-->

    <!--<form name="FormPagamento" id="FormPagamento" action="https://sandbox.pagseguro.uol.com.br/v2/checkout/payment.html" method="post">
        <input id="BotaoPagamento" type="image" src="https://stc.pagseguro.uol.com.br/public/img/botoes/pagamentos/209x48-pagar-azul-assina.gif" name="submit" alt="Pague com PagSeguro - é rápido, grátis e seguro!" />
    </form>-->

    <div class="FormularioBase">
    <form id="form1" name="form1" method="post" action="Controllers/ControllerPedido.php">
        <input type="hidden" id="TokenCard" name="TokenCard">
        <input type="hidden" id="HashCard" name="HashCard">

        <div class="FormularioBase">
            <strong>Seus dados</strong><br>
            <div class="Formulario">
                Nome do comprador: <br>
                <input type="text" id="NomeComprador" name="NomeComprador">
            </div>

            <div class="Formulario">
                CPF do comprador: <br>
                <input type="text" id="CPFComprador" name="CPFComprador" maxlength="11">
            </div>

            <div class="Formulario">
                DDD: <br>
                <input type="text" id="DDDComprador" name="DDDComprador" maxlength="2">
            </div>

            <div class="Formulario">
                Telefone do comprador: <br>
                <input type="text" id="TelefoneComprador" name="TelefoneComprador" maxlength="9">
            </div>
        </div>

        <div class="FormularioBase"><hr></div>

        <div class="FormularioBase">
            <strong>Endereço do titular do cartão</strong><br>
            <div class="Formulario">
                CEP: <br>
                <input type="text" id="CEP" name="CEP" maxlength="8">
            </div>

            <div class="Formulario">
                Endereco: <br>
                <input type="text" id="Endereco" name="Endereco">
            </div>

            <div class="Formulario">
                Número: <br>
                <input type="text" id="Numero" name="Numero">
            </div>

            <div class="Formulario">
                Complemento: <br>
                <input type="text" id="Complemento" name="Complemento">
            </div>

            <div class="Formulario">
                Bairro: <br>
                <input type="text" id="Bairro" name="Bairro">
            </div>

            <div class="Formulario">
                Cidade: <br>
                <input type="text" id="Cidade" name="Cidade">
            </div>

            <div class="Formulario">
                UF: <br>
                <select id="UF" name="UF">
                    <option value="AC" selected>Acre</option>
                    <option value="AL">Alagoas</option>
                    <option value="AP">Amapá</option>
                    <option value="AM">Amazonas</option>
                    <option value="BA">Bahia</option>
                    <option value="CE">Ceará</option>
                    <option value="DF">Distrito Federal</option>
                    <option value="ES">Espírito Santo</option>
                    <option value="GO">Goiás</option>
                    <option value="MA">Maranhão</option>
                    <option value="MT">Mato Grosso</option>
                    <option value="MS">Mato Grosso do Sul</option>
                    <option value="MG">Minas Gerais</option>
                    <option value="PA">Pará</option>
                    <option value="PB">Paraíba</option>
                    <option value="PR">Paraná</option>
                    <option value="PE">Pernambuco</option>
                    <option value="PI">Piauí</option>
                    <option value="RJ">Rio de Janeiro</option>
                    <option value="RN">Rio Grande do Norte</option>
                    <option value="RS">Rio Grande do Sul</option>
                    <option value="RO">Rondônia</option>
                    <option value="RR">Roraima</option>
                    <option value="SC">Santa Catarina</option>
                    <option value="SP">São Paulo</option>
                    <option value="SE">Sergipe</option>
                    <option value="TO">Tocantins</option>
                </select>
                <!--<input type="text" id="UF" name="UF" maxlength="2">-->
            </div>
        </div>

        <div class="FormularioBase"><hr></div>

        <div class="FormularioBase">
            <strong>Dados do Cartão</strong><br>
            <div class="Formulario">
                Número do Cartão: <br>
                <input type="text" id="NumeroCartao" name="NumeroCartao">
                <input type="hidden" id="BandeiraCartao" name="BandeiraCartao">
                <div class="BandeiraCartao"></div>
            </div>

            <div class="Formulario">
                Nome: <br>
                <input type="text" id="NomeCartao" name="NomeCartao">
            </div>

            <div class="Formulario">
                Mês de Validade: <br>
                <input type="text" id="MesValidade" name="MesValidade" maxlength="2">
            </div>

            <div class="Formulario">
                Ano de Validade: <br>
                <input type="text" id="AnoValidade" name="AnoValidade" maxlength="4">
            </div>

            <div class="Formulario">
                CVV: <br>
                <input type="text" id="CVV" name="CVV" maxlength="3">
            </div>

            <div class="Formulario">
                Quantidade de Parcelas: <br>
                <select name="QtdParcelas" id="QtdParcelas">
                    <option value="">Selecione</option>
                </select>
                <input type="hidden" id="ValorParcelas" name="ValorParcelas">
            </div>

            <div class="Formulario">
                CPF do dono do Cartao: <br>
                
                <input type="text" id="CPFCartao" name="CPFCartao" maxlength="11">
            </div>
        </div>

        <div class="Formulario">
            <input id="BotaoComprar" name="BotaoComprar" type="submit" value="Comprar">
        </div>
    </form>
</div>

    <script src="Libraries/zepto.min.js"></script>
    <script type="text/javascript" src= "https://stc.sandbox.pagseguro.uol.com.br/pagseguro/api/v2/checkout/pagseguro.directpayment.js"></script>
    <script src="Libraries/Javascript.min.js"></script>

</body>
</html>