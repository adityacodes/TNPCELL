<div class="sidebar" data-background-color="white" data-active-color="danger">

    <!--
        Tip 1: you can change the color of the sidebar's background using: data-background-color="white | black"
        Tip 2: you can change the color of the active button using the data-active-color="primary | info | success | warning | danger"
    -->

    <div class="sidebar-wrapper">
        <div class="logo">

            
                @if(Request::is('admin')|| Request::is('admin/*')) 
                    
                        <span class="simple-text">CETB-TNP</span>-<a href="/admin/post" class="simple-text">ADMIN PANEL</a>
                    
                @else
                    <span class="simple-text">CETB-TNP</span>-<a href="/user/dashboard" class="simple-text">USER PANEL</a>
                    
                @endif
            
        </div>

        @if(Request::is('user/*') || Request::is('notice/*'))
        <ul class="nav">
            <li class="{{Request::is('user/dashboard')? "active" : ""}}">
                <a href="/user/dashboard">
                    <i class="ti-panel"></i>
                    <p>Dashboard</p>
                </a>
            </li>
            <li class="{{Request::is('user/profile')? "active" : ""}}">
                <a href="/user/profile">
                    <i class="ti-user"></i>
                    <p>User Profile</p>
                </a>
            </li>
            <li class="{{Request::is('notice/*')? "active" : ""}}">
                <a href="/user/notices">
                    <i class="ti-view-list-alt"></i>
                    <p>All Notices</p>
                </a>
            </li>
            <li class="{{Request::is('user/contact')? "active" : ""}}">
                <a href="/user/contact">
                    <i class="ti-text"></i>
                    <p>Contact Admin</p>
                </a>
            </li>
        </ul>

        @else
        <ul class="nav">
            <li class="{{Request::is('admin/post')|| Request::is('admin/post/*')? "active" : ""}} ">
                <a href="/admin/post">
                    <i class="ti-panel"></i>
                    <p>Dashboard</p>
                </a>
            </li>
            <li class="{{Request::is('admin/applicants')? "active" : ""}}">
                <a href="/admin/applicants">
                    <i class="ti-user"></i>
                    <p>Applicants</p>
                </a>
            </li>
            <li class="{{Request::is('admin/administrators')? "active" : ""}}">
                <a href="/admin/administrators">
                    <i class="ti-crown"></i>
                    <p>Admins</p>
                </a>
            </li>
            
            <li class="{{Request::is('admin/add/user')? "active" : ""}}">
                <a href="/admin/add/user">
                    <i class="ti-user"></i>
                    <p>Add TNP User</p>
                </a>
            </li>

            <li class="{{Request::is('admin/delete/user')? "active" : ""}}">
                <a href="/admin/delete/user">
                    <i class="ti-user"></i>
                    <p>Delete TNP User</p>
                </a>
            </li>

            <li class="{{Request::is('notice/*')? "active" : ""}}">
                <a href="/user/notices">
                    <i class="ti-view-list-alt"></i>
                    <p>All Notices</p>
                </a>
            </li>

            <li class="{{Request::is('admin/import')? "current" : ""}}">
                <a href="/admin/import">
                    <i class="ti-import"></i> 
                    <p>IMPORT</p>
                </a>
            </li>

            <li class="{{Request::is('admin/standalone')? "current" : ""}}">
                <a href="/admin/standalone">
                    <i class="ti-bolt"></i> 
                    <p>Standalone Mode</p>
                </a>
            </li>

            <li class="{{Request::is('admin/sendgroupemail')? "current" : ""}}">
                <a href="/admin/sendgroupemail">
                    <i class="ti-email"></i> 
                    <p>Send Bulk Mail</p>
                </a>
            </li>

            <li class="active-pro {{Request::is('admin/settings')? "current" : ""}}">
                <a href="/admin/settings">
                    <i class="ti-settings"></i>
                    <p>Site Settings</p>
                </a>
            </li>

        </ul>
        @endif

    </div>
</div>

    