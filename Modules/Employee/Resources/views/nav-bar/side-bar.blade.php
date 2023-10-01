<div class="sidebar sidebar-hide-to-small sidebar-shrink sidebar-gestures">
    <div class="nano">
        <div class="nano-content">
            <ul>
                <li>
                    <a href="{{ route('home') }}">Main Site</a>
                </li>
                <li>
                    <a href="{{ route('employee.jobapply.index') }}">All Jobes</a>
                </li>
                <li><a class="sidebar-sub-toggle"><i class="ti-layout"></i>User Profile<span
                            class="sidebar-collapse-icon ti-angle-down"></span></a>
                    <ul>
                        <li><a href="{{ route('employee.profile.create') }}">Profile Create</a></li>
                        <li><a href="{{ route('employee.profile.index') }}">General Profile</a></li>
                    </ul>
                </li>
                <li><a class="sidebar-sub-toggle"><i class="ti-layout"></i>User Qualification<span
                            class="sidebar-collapse-icon ti-angle-down"></span></a>
                    <ul>
                        <li><a href="{{ route('employee.qualification.create') }}">qualification Create</a></li>
                        <li><a href="{{ route('employee.qualification.index') }}">General qualification</a></li>
                    </ul>
                </li>
                <li><a class="sidebar-sub-toggle"><i class="ti-layout"></i>User Skills<span
                            class="sidebar-collapse-icon ti-angle-down"></span></a>
                    <ul>
                        <li><a href="{{ route('employee.qualification.create') }}">qualification Create</a></li>
                        <li><a href="{{ route('employee.qualification.index') }}">General qualification</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>
