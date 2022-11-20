<div id="sidebar" class="active">
    <div class="sidebar-wrapper active">
       
        <div class="sidebar-menu">
            <ul class="menu">
                <li class="sidebar-item ">
                    <a href="{{ route('home') }}" class='sidebar-link'>
                        
                        <span>Dashboard</span>
                    </a>
                </li>
                
                <li class="sidebar-title">Forms</li>
                <li class="sidebar-item ">
                    <a href="#">
                       
                        <span>Form Elements</span>
                    </a>
                    <ul class="submenu">
                        <li class="submenu-item active">
                            <a href="{{ route('form/staff/new') }}">Customer Input</a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-item  ">
                    <a href="#" >
                       
                        <span>View Record</span>
                    </a>
                    <ul class="submenu active">
                        <li class="submenu-item active">
                            <a href="{{ route('form/view/detail') }}">View Detail</a>
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