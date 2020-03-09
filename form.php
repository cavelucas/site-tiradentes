<?php
    $nome = '';
    $telefone = '';
    $erroFormulario = '';
    $sucessoFormulario = '';
    $headers = 'MIME-Version: 1.0' . "\r\n";
        $headers .= 'From: $nome <$lucasgoulartsg@gmail.com>';
    if( isset($_POST['submit']) ){
        $nome = $_POST['nome'];
        $telefone = $_POST['telefone'];
        if($nome != '' && $telefone != ''){
            // usuário preencheu corretamente
            $mensagemEmail = 'Nome: ' . $nome . ' - ';
            $mensagemEmail = 'Telefone: ' . $telefone;
            if(mail('lucas@gruponewlife.com.br', 'Teste Tiradentes', $mensagemEmail, $headers)){
                // email enviado
                $sucessoFormulario = "Mensagem enviada com sucesso, lhe retornaremos em breve";
            }
            else {
                // email não enviado
                $erroFormulario = "Erro ao enviar, tente mais tarde ou ligue para 55 3232 2496";
            }
        }
        else{
            // usuário não preencheu corretamente
            $erroFormulario = "Por favor, revise se os campos estão corretos";
        }
    }
?>

<h2>Junte-se ao líder em aprovações<br>do Rio Grande do Sul</h2>
<h3>Quer mais informações?</h3>
<form id="index-form" method="post" style="display:none;">
    
    <input type="text" id="index-form__nome" name="nome" placeholder="Seu Nome"><br>
    <input type="tel" id="index-form__telefone" name="telefone" placeholder="WhatsApp/Telefone" required><br>
    <?php if($erroFormulario != ''): ?>
    <div class="index-form__erro">
        <?php echo $erroFormulario; ?>
    </div>
    <?php endif; ?>
    <?php if($sucessoFormulario != ''): ?>
    <div class="index-form__sucesso">
        <?php echo $sucessoFormulario; ?>
    </div>
    <?php endif; ?>
    <input type="submit" class="index-form__enviar" value="Enviar" name="submit">
</form><br>
<div class="chamar-wpp">
    <h4>Mande uma mensagem para a gente</h4><br>
    <h4>55</h4>
    <h5>99661 6677</h5><br>
    <a href="https://api.whatsapp.com/send?phone=5555996616677&text=Ol%C3%A1%2C%20tenho%20interesse%20no%20curso%20Preparat%C3%B3rio%20Tiradentes!%20%3AD">Clique aqui para ir para o WhatsApp</a>
</div>