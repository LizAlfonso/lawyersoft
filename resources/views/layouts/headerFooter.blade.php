<!DOCTYPE html>
  <html>

  <head>

    <title>LawyerSoft</title>
    
    {!!Html::style('css/style.css')!!}
    {!!Html::style('css/sweetalert2.css')!!}
    {!!Html::style('https://cdn.datatables.net/v/bs-3.3.6/jq-2.2.3/dt-1.10.12/fc-3.2.2/sc-1.4.2/datatables.min.css')!!} 
       
  </head>

<body>

<div class="wrapper">

<!-- header -->

  <div class="top-header">

    <div class="container">

       <div class="logo">
           {!!Html::image('images/logoOA.png')!!}         
           {!!Form::label('Ospina Abogados S.A.S')!!}
       </div>      

           <nav class="top-nav">

             <ul>

                    <!-- Authentication Links -->
                    @if(Auth::check())

                      <li class="dropdown">

                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                        <span class="glyphicon glyphicon-user"></span>
                        {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu">
                            <li><a href="{{ url('logout') }}"><i class="fa fa-btn fa-sign-out"></i>Cerrar sesión</a></li>
                        </ul>
                      </li>

                      @yield("home") 

                    @endif

                    @yield("menu")

                  </ul>
             </nav>

             </div>  

  </div>   

<!-- Contenido de cada vista --> 

@yield("content")   

{!!Html::script('js/jquery-3.0.0.min.js')!!}
{!!Html::script('https://cdn.datatables.net/v/bs-3.3.6/jq-2.2.3/dt-1.10.12/fc-3.2.2/sc-1.4.2/datatables.min.js')!!}
{!!Html::script('js/sweetalert2.min.js')!!}

@yield('scripts') 
@yield('scriptDataTable2')   
@yield('scriptDataTable4') 

<div class="push"></div>
</div>

<!-- footer -->

      <div class="footer">
      </div>

  </div> 

</body>
</html>