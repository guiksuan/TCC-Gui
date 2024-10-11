<?php Include("blades/top.php")?>
<?php Include("blades/src.php")?>
    <div class="body-home">
    <?php include("../controller/funcao-select-user.php") ?>
    <nav class="nav-user">
        <a href="#">Informações Pessoais</a>
        <a href="#">Endereço</a>
        <a href="#">Outros Dados</a>
        <a href="#">Curriculo</a>
        <span></span>
    </nav>

   <div class="user-update">
            <form action="" method="POST">
               <p id="lblus1">Nome Completo</p>
               <input type="text" class="inputnameus" name="nome">
               <p id="lblus2">Data de Nascimento</p>
               <input type="date" class="inputdataus" name="data">


               <p id="lblus3">RG</p>
               <input type="text" class="inputrgus" name="RG">
               <p id="lblus4">CPF</p>
               <input type="text" class="inputcpfus" name="CPF">
               <p id="lblus5">Estado Cívil</p>
               <select class="cmbbxus1" name="Estado_civil">
                    <option value="S">Solteiro</option>
                    <option value="C">Casado</option>
                    <option value="V">Viúvo</option>
                    <option value="SP">Separado</option>
                    <option value="D">Divorciado</option>
                </select>

               <p id="lblus6">Possui algum tipo de deficiência?</p>
               <select class="cmbbxcd2" name="def">
                    <option value="sim">Sim</option>
                    <option value="nao">Não</option>
               </select>
               <p id="lblus7">Especifique</p>
               <input type="text" class="inputespec" name="espec">

               <p id="lblus8">Sexo</p>
               <input type="radio" name="sex" id="Mas" value="Masculino" class="radio">
               <label for="Mas" class="txt_rd">Masculino</label>  
               <input type="radio" name="sex" id="Fem" value="Feminino" class="radio2">
               <label for="Fem" class="txt_rd2">Feminino</label>
               <input type="radio" name="sex" id="Out" value="Outro" class="radio3">
               <label for="Out" class="txt_rd3">Outro</label>
               <input type="radio" name="sex" id="Pre" value="Prefiro não dizer" class="radio4">
               <label for="Pre" class="txt_rd4">Prefiro não dizer</label><br>

               <button type="submit" name="btnCadastro" class="btncd" style="    
               background-color:#01E581; 
               color: #fff; 
               border-radius:20px; 
               font-size: 2.4rem; 
               align-items: center; 
               text-align: center;"
               >Próximo Passo</button>
            </form>
   </div>
</div>
<?php Include("blades/followemp.php")?>
<?php Include("blades/menu.php")?>
<?php Include("blades/footercomp.php")?>