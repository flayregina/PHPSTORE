<div class="container">
    <div class="row my-5">
        <div class="col-6 offset-sm-3">
            <h3 class="text-center">Registro de Novo Cliente</h3>

            <form action="?a=criar_cliente" method="post">

                <!--email-->
                <div class="my-3">
                    <label>Email</label>
                    <input type="email" name="text_email" placeholder="Email" class="form-contro" required>
                </div>

                <!--senha_1-->
                <div class="my-3">
                    <label>Senha</label>
                    <input type="password" name="text_senha_1" placeholder="Senha" class="form-contro" required>
                </div>

                <!--senha_2-->
                <div class="my-3">
                    <label>Repetir a Senha</label>
                    <input type="password" name="text_senha_2" placeholder="Repetir a Senha" class="form-contro" required>
                </div>

                <!--nome_completo-->
                <div class="my-3">
                    <label>Nome completo</label>
                    <input type="text" name="text_nome_completo" placeholder="Nome completo" class="form-contro" required>
                </div>

                <!--morada-->
                <div class="my-3">
                    <label>Morada</label>
                    <input type="text" name="text_morada" placeholder="Morada" class="form-contro" required>
                </div>

                <!--cidade-->
                <div class="my-3">
                    <label>Cidade</label>
                    <input type="text" name="text_cidade" placeholder="Cidade" class="form-contro" required>
                </div>

                <!--telefone-->
                <div class="my-3">
                    <label>Telefone</label>
                    <input type="text" name="text_telefone" placeholder="Telefone" class="form-contro">
                </div>

                <!--sunmit-->
                <div class="my-4">
                    <input type="submit" value="Criar conta" class="btn btn-primary">
                </div>

            </form>

        </div>
    </div>
</div>

<!-- 
	email *
	senha_1 *
    senha_2 *
	nome_completo *
	morada *
	cidade *
	telefone 
	
-->