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
        <a class="navbar-brand active" href="{base_url}home"  >HOME</a>
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
              <li><a href="{base_url}entrevista">Entrevistas</a></li>
              <li><a href="{base_url}temadeaula">Temas de Aula</a></li>
              <li><a href="{base_url}colunistas">Colunistas</a></li>    
              <li><a href="{base_url}artigo">Artigos</a></li>    
              <li><a href="{base_url}cultura">Cultura</a></li>  
              <!-- <li><a href="{base_url}editorial">Editorial</a></li>   -->
              <li><a href="{base_url}reportagem">Reportagens</a></li> 
          <!--     <li><a href="{base_url}agenda">Agenda</a></li> 
              <li><a href="{base_url}editoriaonline">Editoria Online</a></li>    -->      
            </ul>
          </li>

          <!-- visivel em celulares e telas pequenas -->
          <li class='visible-xs' ><a href="{base_url}entrevista">Entrevistas</a></li>
          <li class='visible-xs' ><a href="{base_url}temadeaula">Temas de Aula</a></li>
          <li class='visible-xs' ><a href="{base_url}colunistas">Colunistas</a></li> 
          <li class='visible-xs' ><a href="{base_url}artigo">Artigos</a></li> 
          <li class='visible-xs' ><a href="{base_url}cultura">Cultura</a></li>  
      <!--     <li class='visible-xs' ><a href="{base_url}editorial">Editorial</a></li>   -->
          <li class='visible-xs' ><a href="{base_url}reportagem">Reportagens</a></li>  
         <!--  <li class='visible-xs' ><a href="{base_url}agenda">Agenda</a></li> -->
        <!--   <li class='visible-xs' ><a href="{base_url}editoriaonline">Editoria Online</a></li>        -->     
  
        
          <li class="dropdown hidden-xs" >
            <a href="http://www.mercadocapital.com.br/" target='assine' class="dropdown-toggle collapse" data-toggle="dropdown">ASSINANTE<b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a href="{base_url}tablet">Tablet</a></li>
              <li><a href="{base_url}login/cadastrase">Cadastre-se</a></li>
              <li><a href="http://www.mercadocapital.com.br/" target='assine' >Assinante</a></li>
            </ul>
          </li>

          <li class='visible-xs' ><a href="http://www.mercadocapital.com.br/" target='assine' >Assinante</a></li>
          <li class='visible-xs' ><a href="{base_url}tablet">Tablet</a></li>
          <li class='visible-xs' ><a href="{base_url}login/cadastrase">Cadastre-se</a></li>             


          <li class="dropdown hidden-xs">
            <a href="{base_url}contato" class="dropdown-toggle collapse" data-toggle="dropdown" >CONTATO <b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a href="{base_url}sobre">Sobre</a></li>
              <li><a href="{base_url}expediente">Expediente</a></li>
            </ul>
          </li>

          <li class='visible-xs' ><a href="{base_url}contato">Contato</a></li>
          <li class='visible-xs' ><a href="{base_url}sobre">Sobre</a></li>
          <li class='visible-xs' ><a href="{base_url}expediente">Expediente</a></li>  
          <li class='visible-xs' ><a href="http://editoraconfianca.com.br/acesso/cartafundamental">Revista Digital</a></li> 
          <li class='visible-xs' ><a href="http://www.mercadoconfianca.com.br/CartaFundamental.asp?Site_txt=EDITORIAL&Origem_txt=CARTA&Formato_txt=MENUTOPO&Banner_txt=&Versao_txt=">Assine</a></li>  

        

         <!-- visivel em celulares e telas pequenas -->
          <li  ><a data-toggle="modal" href="#myModalBusca" ><i class="fa fa-search"></i> BUSCAR</a></li><!-- class='visible-xs visible-sm' -->
        <!--   <li  ><a data-toggle="modal" href="#myModalLogar" ><i class="fa fa-unlock-o"></i> EDIÇÃO DIGITAL</a></li> --><!-- class='visible-xs visible-sm' -->

        </ul>


      </div><!-- /.navbar-collapse -->
    </nav>

  </div>
</div>


<!-- Modal Busca -->
<div class="modal fade" id="myModalLogar" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title">Edição Digital</h4>
      </div>
      <div class="modal-body">


        <form role="form" action="{base_url}login/on" name="form1" id="form1" method="post" target="acervo_lista" >
          <div class="form-group">
            <label for="nome">Email</label>
            <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-envelope-o"></i></span><input type="email" class="form-control" id="nome" name='nome' placeholder="Digite seu e-mail" value='' >
            </div>
          </div>
          <div class="form-group">
            <label for="senha">Senha</label>
            <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-key"></i></span><input type="password" class="form-control" id="senha" name='senha' placeholder="Digite sua senha" value='' >
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
<div class="modal fade" id="myModalBusca" tabindex="-1" role="dialog"  aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title">Busca</h4>
      </div>
      <div class="modal-body">


       
          <div class="form-group"><label for="buscaModal"></label>
              <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-search"></i></span>

            <input type="text" class="form-control" id="buscaModal" name='buscaModal' placeholder="Digite sua busca"  >
    

          </div>
          </div>
          <button type="button" class="btn btn-default" id='btn_buscar' onclick='go()' >Buscar</button>
       


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<script >


function go(){

  busca = document.getElementById('buscaModal').value;

  if ( busca + '' != '' ){

      window.location ='http://www.cartafundamental.com.br/materias/paging/0/' + busca;

  }


}

</script>

