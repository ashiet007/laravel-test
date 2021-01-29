<!-- Left Panel -->
<aside id="left-panel" class="left-panel">
    <nav class="navbar navbar-expand-sm navbar-default">
        <div id="main-menu" class="main-menu collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="active">
                    <a href="{{route('home')}}"><i class="menu-icon fa fa-laptop"></i>Dashboard </a>
                </li>
                <li class="menu-title">Sections</li><!-- /.menu-title -->
                @if(Auth::User()->hasRole('admin'))
                <li>
                    <a href="{{route('user.index',['role' => 'admin'])}}"> <i class="menu-icon ti-email"></i>Admin </a>
                </li>
                @endif
                @if(Auth::User()->can('view-sales-rep'))
                <li>
                    <a href="{{route('user.index',['role' => 'sales-rep'])}}"> <i class="menu-icon ti-email"></i>Sales Rep </a>
                </li>
                @endif
                @if(Auth::User()->can('view-contributor'))
                <li>
                    <a href="{{route('user.index',['role' => 'contributor'])}}"> <i class="menu-icon ti-email"></i>Contributor </a>
                </li>
                @endif
                @if(Auth::User()->can('view-customer'))
                <li>
                    <a href="{{route('user.index',['role' => 'customer'])}}"> <i class="menu-icon ti-email"></i>Customer </a>
                </li>
                @endif
            </ul>
        </div><!-- /.navbar-collapse -->
    </nav>
</aside>
<!-- /#left-panel -->
