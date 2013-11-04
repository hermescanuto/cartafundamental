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
        <a class='navbar-brand visible-xs' data-toggle="modal" href="#myModalBusca" style='margin-left:-20px'><i class="fa fa-search"></i> BUSCAR</a>
        <a class='navbar-brand visible-xs' data-toggle="modal" href="#myModalLogar" style='margin-left:-20px'><i class="fa fa-unlock-o"></i> LOGAR</a>
      </div>

     
      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse navbar-ex1-collapse">
        <ul class="nav navbar-nav">

        <!--   visivel em barra de navegacao -->
          <li class="active dropdown hidden-xs">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" >MATÉRIAS <b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a href="{base_url}entrevista">Entrevista</a></li>
              <li><a href="{base_url}temadeaula">Tema de Aula</a></li>
              <li><a href="{base_url}colunistas">Colunistas</a></li>    
              <li><a href="{base_url}artigo">Artigo</a></li>    
              <li><a href="{base_url}cultura">Cultura</a></li>  
              <li><a href="{base_url}editorial">Editorial</a></li>  
              <li><a href="{base_url}reportagem">Reportagem</a></li> 
              <li><a href="{base_url}agenda">Agenda</a></li> 
              <li><a href="{base_url}editoriaonline">Editoria Online</a></li>         
            </ul>
          </li>

          <!-- visivel em celulares e telas pequenas -->
          <li class='visible-xs' ><a href="{base_url}entrevista">Entrevista</a></li>
          <li class='visible-xs' ><a href="{base_url}temadeaula">Tema de Aula</a></li>
          <li class='visible-xs' ><a href="{base_url}colunistas">Colunistas</a></li> 
          <li class='visible-xs' ><a href="{base_url}artigo">Artigo</a></li> 
          <li class='visible-xs' ><a href="{base_url}cultura">Cultura</a></li>  
          <li class='visible-xs' ><a href="{base_url}editorial">Editorial</a></li>  
          <li class='visible-xs' ><a href="{base_url}reportagem">Reportagem</a></li>  
          <li class='visible-xs' ><a href="{base_url}agenda">Agenda</a></li>
          <li class='visible-xs' ><a href="{base_url}editoriaonline">Editoria Online</a></li>            
  
        
          <li class="dropdown hidden-xs" >
            <a href="http://www.mercadocapital.com.br/" target='assine' class="dropdown-toggle collapse" data-toggle="dropdown">ASSINANTE<b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a href="{base_url}tablet">Tablet</a></li>
              <li><a href="{base_url}login/cadastrase">Cadastra-se</a></li>
              <li><a href="http://www.mercadocapital.com.br/" target='assine' >Asssinante</a></li>
            </ul>
          </li>

          <li class='visible-xs' ><a href="http://www.mercadocapital.com.br/" target='assine' >Assinante</a</li>
          <li class='visible-xs' ><a href="{base_url}tablet">Tablet</a></li>
          <li class='visible-xs' ><a href="{base_url}login/cadastrase">Cadastra-se</a></li>             


          <li class="dropdown hidden-xs">
            <a href="{base_url}contato" class="dropdown-toggle collapse" data-toggle="dropdown" >CONTATO <b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a href="{base_url}sobre">Sobre</a></li>
              <li><a href="{base_url}expediente">Expediente</a></li>
            </ul>
          </li>

          <li class='visible-xs' ><a href="{base_url}contato">Contato</a</li>
          <li class='visible-xs' ><a href="{base_url}sobre">Sobre</a></li>
          <li class='visible-xs' ><a href="{base_url}expediente">Expediente</a></li>   

          <!--   visivel em barra de navegacao -->
          <li style='margin-top: 18px;margin-left: 5px;' class='hidden-xs hidden-sm'>
            <form class="form-inline" role="form">
              <input type="text" class="form-control" id="busca" required='' x-webkit-speech >
              <button class="btn btn-default btn-xs" type="submit"><i class="fa fa-search"></i>  BUSCAR</button>
            </form>                
          </li>

          <!--   visivel em barra de navegacao -->
          <li style='margin-top: 18px;margin-left: 10px;' class='hidden-xs hidden-sm'>

            <form class="form-inline" role="form" role="form" action="{base_url}login/on" name="form0" id="form0" method="post" target="acervo_lista" >
            
              <input type="text" class="form-control" id="nome" name='nome' placeholder="login" required='' value='mmoreira@contentstuff.com' >

             <input type="password" class="form-control" id="senha" name='senha' placeholder="senha" required='' value='CScap2013' >

              <button class="btn btn-default btn-xs" type="submit"><i class="fa fa-unlock-o"></i> LOGAR</button>    
                
            </form>                
          </li>

         <!-- visivel em celulares e telas pequenas -->
          <li class='visible-xs visible-sm' ><a data-toggle="modal" href="#myModalBusca" ><i class="fa fa-search"></i> BUSCAR</a></li>
          <li class='visible-xs visible-sm' ><a data-toggle="modal" href="#myModalLogar" ><i class="fa fa-unlock-o"></i> LOGAR</a></li>

        </ul>


      </div><!-- /.navbar-collapse -->
    </nav>

  </div>
</div>


<!-- Modal Busca -->
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
            <label for="exampleInputEmail1">Email</label>
            <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-envelope-o"></i></span><input type="email" class="form-control" id="nome" name='nome' placeholder="Digite seu e-mail" value='mmoreira@contentstuff.com' >
            </div>
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Senha</label>
            <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-key"></i></span><input type="password" class="form-control" id="senha" name='senha' placeholder="Digite sua senha" value='CScap2013' >
          </div>
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


<!-- Modal Busca -->
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
              <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-search"></i></span><input type="texto" class="form-control" id="busca" placeholder="Digite sua busca" required=''  x-webkit-speech >
          </div>
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

 
