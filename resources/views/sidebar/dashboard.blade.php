<div id="sidebar" class="active">
    <div class="sidebar-wrapper active">
       
    </nav>
        <div class="sidebar-menu">
            <ul class="menu">
                <li class="sidebar-title">Menu</li>
                <li class="sidebar-item active">
                    <a href="{{ route('home') }}" >
                       
                        <span>Dashboard</span>
                    </a>
                </li>
            <li class="sidebar-title">Inventor</li>
                <li class="sidebar-item ">
                    <a href="#" class='sidebar-link'>
                       
                        <span>Customer</span>
                    </a>
                    <ul class="submenu">
                        <li class="submenu-item active">
                            <a href="{{ route('form/staff/new') }}">Customer Input</a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-item">
                    <a href="#" >
                       
                        <span>View Record</span>
                    </a>
                    <ul class="submenu">
                        <li class="submenu-item">
                            <a href="{{ route('form/view/detail') }}">View List</a>
                        </li>
                    </ul>
                </li>

                <li class="sidebar-item">
                    <a href="{{ route('logout') }}" >
                        
                        <span>Log Out</span>
                    </a>
                </li>
            </ul>
        </div>
       
    </div>
</div>