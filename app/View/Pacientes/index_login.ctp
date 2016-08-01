<div class="col-md-3">
  <div class="panel panel-info">
    <div class="panel-heading text-center"><h3>Menu</h3></div>
    <div class="panel-body">
      <?php echo $this->Html->link('Página Inicial', 
                                    array('controller' => 'pages', 
                                          'action' => 'display'),
                                    array('class' => 'btn btn-default btn-lg')). '<br><br>'; ?> 
    </div>
  </div>
</div>

<div class="index_login form">
  <div class="container text-center col-lg-4 col-lg-offset-1">

    <form class="form-signin" action="../pacientes/login" controller="Pacientes" id="PacienteLoginForm" method="post" accept-charset="utf-8">

      <h2 class="form-signin-heading">Login</h2>
      
      <label for="inputEmail" class="sr-only">Lgin</label>
      <input name="data[Paciente][email]" type="text" id="PacienteEmail" class="form-control" placeholder="Login" required autofocus>

      <label for="inputPassword" class="sr-only">Senha</label>
      <input name="data[Paciente][senha]" type="password" id="PacienteSenha" class="form-control" placeholder="Senha" required>
      
      <br>

      <div class="submit">
      	<input type="submit" value="Entrar">
      </div>
    </form>

  </div>
</div>
