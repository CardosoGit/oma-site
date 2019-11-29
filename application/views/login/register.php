<header id="template-header">
  <!-- TOPO -->
  <div class="container">
    <div class="row">
      <div id="topo-section" class="col-md-6">
        <div class="brand">
          <a href="<?= base_url() ?>"><img height="35px" src="<?= base_url('dist/imagens/logo.png') ?>"></a>
        </div>
        
      </div >
      <div class="col-md-6">
        
      </div>
      
    </div>
    <!-- FIM TOPO -->

  </header><div class="container">
  <div class="row">
    <div class="col-md-12">
      <h1>Registre-se logo abaixo</h1>
    </div>
  </div>
  {alert}
  <form method="post" action="{base_url}login/cadastrar">
    <div class="row">    
      <div class="col-md-4">
        <div id="logbox">          
          <h2>Dados</h2>
          <input name="first_name" type="text" placeholder="Seu nome" class="input"/ required value="{first_name}">
          <input name="last_name" value="{last_name}" type="text" placeholder="Sobrenome" class="input"/>
          <input name="birthday" value="{birthday}" type="text" placeholder="Data de Nascimento" class="input" data-inputmask='"mask": "99/99/99"' data-mask/>
          <input name="cpf" data-inputmask='"mask": "999.999.999-99"' data-mask value="{cpf}" type="text" placeholder="CPF" class="input"/>
          <div class="radio-group">
            <b class="radio-group-head">Sexo</b>
            <div class="item-radio">
              <input name="gende" type="radio" checked value="M" /> Masculino
            </div>
            <div class="item-radio">
              <input name="gende" type="radio" value="F" /> Feminino
            </div>              
          </div>  
        </div>
      </div>
      <div class="col-md-4">
        <div id="logbox">
          <h2>Endereço</h2>
          <input name="adress_cep" value="{adress_cep}" type="text" placeholder="CEP" class="input" data-inputmask='"mask": "99999-999"' data-mask/>
          <select name="adress_type" class="input">
            <option selected>Tipo de Logradouro</option>
            <option>Rua</option>
            <option>Avenida</option>
          </select>
          <input name="adress_road" value="{adress_road}" type="text" placeholder="Logradouro" class="input"/>
          <input name="adress_number" value="{adress_number}" type="text" placeholder="Numero " class="input"/>
          <input name="adress_complement" value="{adress_complement}" type="text" placeholder="Complemento" class="input pass"/>
          <input name="adress_district" value="{adress_district}" type="text" placeholder="Bairro" class="input pass"/>
          <input name="adress_city" value="{adress_city}" type="text" placeholder="Cidade" class="input pass"/>
          <select name="adress_uf" class="input"> 
            <option value="estado">Selecione o Estado</option> 
            <option value="ac">Acre</option> 
            <option value="al">Alagoas</option> 
            <option value="am">Amazonas</option> 
            <option value="ap">Amapá</option> 
            <option value="ba">Bahia</option> 
            <option value="ce">Ceará</option> 
            <option value="df">Distrito Federal</option> 
            <option value="es">Espírito Santo</option> 
            <option value="go">Goiás</option> 
            <option value="ma">Maranhão</option> 
            <option value="mt">Mato Grosso</option> 
            <option value="ms">Mato Grosso do Sul</option> 
            <option value="mg">Minas Gerais</option> 
            <option value="pa">Pará</option> 
            <option value="pb">Paraíba</option> 
            <option value="pr">Paraná</option> 
            <option value="pe">Pernambuco</option> 
            <option value="pi">Piauí</option> 
            <option value="rj">Rio de Janeiro</option> 
            <option value="rn">Rio Grande do Norte</option> 
            <option value="ro">Rondônia</option> 
            <option value="rs">Rio Grande do Sul</option> 
            <option value="rr">Roraima</option> 
            <option value="sc">Santa Catarina</option> 
            <option value="se">Sergipe</option> 
            <option value="sp">São Paulo</option> 
            <option value="to">Tocantins</option> 
          </select>
          <input name="phone" value="{phone}" type="text" placeholder="Telefone" class="input pass" data-inputmask='"mask": "(99) 9999-9999"' data-mask/>

        </div>
      </div>
      <div class="col-md-4">
        <div id="logbox" style="box-shadow: 0 1px 5px rgb(57, 94, 156)">
          <h2>Identificação</h2>
          <input name="email" value="{email}" type="email" placeholder="Seu melhor Email" class="input pass"/>
          <input name="password" type="password" placeholder="Senha de Acesso" required="required" class="input pass"/>
          <input name="password-check" type="password" placeholder="Confirme a sua Senha" required="required" class="input pass"/>
          <hr>
          <div class="checkbox-group" style="background: honeydew;">
            <div class="item-checkbox">
              <input name="status_newsletter" type="checkbox" checked value="true" /> SIM, desejo receber por e-mail informações sobre promoções, novidades e ofertas sobre os produtos da OMA Informática.
            </div>
            <div class="item-checkbox">
              <input name="term" type="checkbox" value="term" /> Aceito os Termos de Uso do Produto
            </div>              
          </div>
          <input type="submit" value="Cadastrar" class="inputButton "/> 
        </div>
      </div>
    </div>
  </form>
</div>