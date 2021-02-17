<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Calculadora</title>
         <link rel="stylesheet" href="css/style.css">
         <script src="js/Script1.js" language="javascript"></script>
    </head>
    <body>
        <form name="calculadora">
        <div class="cal">
            <table>
                <tr>
                    <th colspan="3">
                        <input type="text" name="visor" id="visor" readonly="readonly">
                     </th>
                    <th>
                        <button><input type="reset" value="AC" onclick=""></button>
                    </th>
                </tr>
                <tr>
                    <td><button type="button" value="7" onclick="button(value)" class="num">7</button></td>
                    <td><button type="button" value="8" onclick="button(value)" class="num">8</button></td>
                    <td><button type="button" value="9" onclick="button(value)"class="num">9</button></td>
                    <td><button type="button" value="*" onclick="button(value)" class="calc">*</button></td>
                </tr>
                <tr>
                    <td><button type="button" value="4" onclick="button(value)" class="num">4</button></td>
                    <td><button type="button" value="5" onclick="button(value)" class="num">5</button></td>
                    <td><button type="button" value="6" onclick="button(value)" class="num">6</button></td>
                    <td><button type="button" value="-" onclick="button(value)" class="calc">-</button></td>
                </tr>
                <tr>
                    <td><button type="button" value="1" onclick="button(value)" class="num">1</button></td>
                    <td><button type="button" value="2" onclick="button(value)" class="num">2</button></td>
                    <td><button type="button" value="3" onclick="button(value)" class="num">3</button></td>
                    <td><button type="button" value="+" onclick="button(value)" class="calc">+</button></td>
                </tr>
                <tr>
                    <td><button type="button" value="0" onclick="button(value)" class="num">0</button></td>
                    <td><button type="button" value="." onclick="button(value)" class="num">.</button></td>
                    <td><button type="button" value="=" onclick="igual()" class="calc"><b>=</b></button></td>
                    <td><button type="button" value="/" onclick="button(value)" class="calc"><b>/</b></button></td>
                </tr>
            </table>
        </form>
        </div>
    </body>
</html>