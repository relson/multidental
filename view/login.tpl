{include file="view/header.tpl"}
<div id="formlogin" class="bradius">
                <img src="css/image/logo.jpg" alt="MultiDental" title="MultiDental" />
                <form action="Login.php" method="post">
                    <input type="text" class="txt bradius" id="login" name="login" placeholder="Login" />
                    <input type="password" class="txt bradius" id="senha" name="senha" placeholder="Senha" />
                    <input type="submit" name="btn_login"  class="btn bradius" value="Entrar" />
                    <a class="link" href="">Esqueceu sua senha?</a>
                </form>
            </div><!--formlogin-->
{include file="view/footer.tpl"}