

<div class="container">
  <div class="row">
    <div class="col-md-6">

    </div>
    <!--col-md-6-->
    
    <div class="col-md-6">
      <div id="logbox">
      {alert}
        <form id="signup" method="post" action="{base_url}login/trocar_senha">
          <h1>Trocar Senha</h1>
          <input name="old_password" type="password" placeholder="Senha antiga" required="required" class="input pass"/>
          <input name="new_password" type="password" placeholder="Nova senha" required="required" class="input pass"/>
          <input type="submit" value="Trocar senha" class="inputButton"/>
        </form>
      </div>
    </div>
  </div>

</div>