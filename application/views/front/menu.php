<div class="row fundo_branco">
  <div class="col-lg-10 col-lg-offset-1 fundo_branco">

    <nav class="navbar navbar-default" role="navigation">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="{base_url}home" class="active" >HOME</a>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse navbar-ex1-collapse">
        <ul class="nav navbar-nav">
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" >MATÉRIAS <b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li class='active'><a href="#">Action</a></li>
              <li><a href="{base_url}">Another action</a></li>
              <li><a href="{base_url}">Something else here</a></li>
              <li><a href="{base_url}">Separated link</a></li>
              <li><a href="{base_url}">One more separated link</a></li>
            </ul>
          </li>

          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">SOBRE <b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a href="{base_url}sobre">SOBRE</a></li>
              <li><a href="{base_url}expediente">EXPEDIENTE</a></li>
            </ul>
          </li>

          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">ASSINANTE<b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a href="{base_url}tablet">TABLET</a></li>
              <li><a href="{base_url}">CADASTRA-SE</a></li>
              <li><a href="{base_url}">ASSINANTE</a></li>
            </ul>
          </li>

          <li >
            <a href="{base_url}contato" >CONTATO</a>
           <li>

            <li style='margin-top: 16px;' class='hidden-xs hidden-sm'>
              <form class="form-inline" role="form">
                <input type="email" class="form-control" id="exampleInputEmail2" placeholder="Sua busca" required='' >
                <button class="btn btn-default btn-xs" type="submit">Buscar</button>
              </form>                
            </li>

            <li style='margin-top: 16px;margin-left: 5px;' class='hidden-xs hidden-sm'>
              <form class="form-inline" role="form" role="form" action="{base_url}login/on" name="form0" id="form0" method="post" target="acervo_lista" >
                <input type="text" class="form-control" id="nome" name='nome' placeholder="login" required='' value='mmoreira@contentstuff.com' >
                <input type="password" class="form-control" id="senha" name='senha' placeholder="senha" required='' value='CScap2013' >
                <button class="btn btn-default btn-xs" type="submit">Logar</button>              
              </form>                
            </li>

            <li class='visible-xs visible-sm' ><a data-toggle="modal" href="#myModalBusca" >BUSCAR</a></li>
            <li class='visible-xs visible-sm' ><a data-toggle="modal" href="#myModalLogar" >LOGAR</a></li>
            
          </ul>


        </div><!-- /.navbar-collapse -->
      </nav>

    </div>
  </div>


  <!-- Modal -->
  <div class="modal fade" id="myModalLogar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title">Logar</h4>
          </div>
          <div class="modal-body">


            <form role="form" action="{base_url}login/on" name="form1" id="form1" method="post" target="acervo_lista" >
              <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" id="nome" name='nome' placeholder="Digite seu e-mail" value='mmoreira@contentstuff.com' >
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" id="senha" name='senha' placeholder="Digite sua senha" value='CScap2013' >
              </div>
              <button type="submit" class="btn btn-default">Logar</button>
            </form>


          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
           </div>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->


     <!-- Modal -->
  <div class="modal fade" id="myModalBusca" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title">Busca</h4>
          </div>
          <div class="modal-body">


            <form role="form" >
              <div class="form-group"><label for="exampleInputEmail1"></label>
                <input type="texto" class="form-control" id="exampleInputEmail1" placeholder="Digite sua busca" required='' >
              </div>
              <button type="submit" class="btn btn-default">Buscar</button>
            </form>


          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
           </div>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
