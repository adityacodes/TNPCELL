<div class="nav-tabs-navigation" data-background-color="orange">
    <div class="nav-tabs-wrapper">
    <ul id="tabs" class="nav nav-tabs" data-tabs="tabs">
        <li class="{{Request::is('admin/settings/options-general')? 'active' : '' }}">
            <a href="{{route('admin.settings')}}"><i class="ti-home"></i> Home</a>
        </li>

        <li class="{{Request::is('admin/alumni') || Request::is('admin/alumni/*')? 'active' : '' }}">
        	<a href="{{route('admin.alumni.index')}}"><i class="ti-user"></i> Alumni Section</a>
        </li>

        <li class="{{Request::is('admin/mainnotices') || Request::is('admin/mainnotices/*') ? 'active' : '' }}">
            <a href="{{route('admin.mainnotices.index')}}"><i class="ti-pencil-alt"></i> Main News/ Notices</a>
        </li>
        <li class="{{Request::is('admin/mainevents') || Request::is('admin/mainevents/*') ? 'active' : '' }}">
            <a href="{{route('admin.mainevents.index')}}"><i class="ti-pin-alt"></i> Main Events</a>
        </li>
        <li class="{{Request::is('admin/branches') || Request::is('admin/branches/*') ? 'active' : '' }}">
            <a href="{{route('admin.branches.index')}}"><i class="ti-shield"></i> Branches</a>
        </li>
        <li class="{{Request::is('admin/officer') || Request::is('admin/officer/*') ? 'active' : '' }}">
            <a href="{{route('admin.officer.index')}}"><i class="ti-pin-alt"></i> Officers</a>
        </li>

        <li class="{{Request::is('admin/slider') || Request::is('admin/slider/*') ? 'active' : '' }}">
            <a href="{{route('admin.slider.index')}}"><i class="ti-layout-accordion-separated"></i> Sliders</a>
        </li>

        <li class="{{Request::is('admin/link') || Request::is('admin/link/*') ? 'active' : '' }}">
            <a href="{{route('admin.link.index')}}"><i class="ti-layout-tab-v"></i> Links</a>
        </li>
        <li class="{{Request::is('admin/fest') || Request::is('admin/fest/*') ? 'active' : '' }}">
            <a href="{{route('admin.fest.index')}}"><i class="ti-pin-alt"></i> Fests</a>
        </li>
    </ul>
    </div>
</div>