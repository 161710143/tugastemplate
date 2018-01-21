<body>
  <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse.collapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.html"><span>Tugas Rima</span></a>
      </div>
      <div class="navbar-collapse collapse">              
        <div class="menu">
          <ul class="nav nav-tabs" role="tablist">
            <li role="presentation"><a href="rumah">Home</a></li>
            <li role="presentation"><a href="tabel">Tabel</a></li>
            <li role="presentation"><a href="galeri">Galeri</a></li>
            <li role="presentation"><a href="paragraf">Paragraf</a></li>
            <li role="presentation"><a href="custom1">Biodata</a></li>
            <li role="presentation"><a href="custom2">Penemu</a></li>           
          </ul>
        </div>
      </div>      
      <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true"><font color="white"> 
                                    {{ Auth::user()->name }}</font> <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
      </div>
    </nav>