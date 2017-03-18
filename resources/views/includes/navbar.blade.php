  <nav class="navbar navbar-inverse navContainer">
      <div class="container-fluid navbackgroundwhite">
        <div class="navbar-header">
          <a class="navbar-brand brandWidth" href="{{url('/dashboard')}}"><span class="oversee">Oversee</span></a>
        </div>
        <ul class="nav navbar-nav">
          <li><span class="fa fa-navicon icon"><span class="brandheader"> Dashboard</span></span></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <div class="dropdown">
            <button class="btn dropdown-toggle buttondropdown" type="button" data-toggle="dropdown"><span class="user">{{ Auth::user()->username}}</span><img class="overseelogo" src="assets/img/oversee.png" draggable="false">
            <span class="caret"></span></button>
            <ul class="dropdown-menu">
              <li><a href="{{ url('/checkprod')}}">Check Productivity</a></li>
              <li><a href="{{ Auth::logout() }}">Sign Out</a></li>
            </ul>
          </div>
        </ul>
      </div>
    </nav>
