<div class="sidebar">
    <nav class="sidebar-nav">
        <ul class="nav">
            <li class="nav-item">
                <a class="nav-link" href="{{route('dashboard.index')}}"><i class="icon-speedometer"></i> {{ __('words.dashboard') }}
                </a>
            </li>




            <li class="nav-item nav-dropdown">
                <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-puzzle"></i>
                 </a>
                <ul class="nav-dropdown-items">
                    <li class="nav-item">
                        @can('view', $setting)
                            <a class="nav-link" href=""><i
                                    class="icon-user-follow"></i> </a>
                        @endcan
                        <a class="nav-link" href=""><i
                                class="icon-people"></i>
                           </a>
                    </li>
                </ul>
            </li>


            <li class="nav-item nav-dropdown">
                <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-puzzle"></i>
                 </a>
                <ul class="nav-dropdown-items">
                    <li class="nav-item">
                        <a class="nav-link" href=" "><i
                                class="icon-user-follow"></i>  </a>
                        <a class="nav-link" href=" "><i
                                class="icon-people"></i>
                            </a>
                    </li>
                </ul>
            </li>

            @can('view', $setting)
                <li class="nav-item nav-dropdown">
                    <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-puzzle"></i>
                        {{ __('words.users') }}</a>
                    <ul class="nav-dropdown-items">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('dashboard.users.create') }}"><i
                                    class="icon-user-follow"></i>{{ __('words.add user') }}</a>
                            <a class="nav-link" href="{{ route('dashboard.users.index') }}"><i
                                    class="icon-people"></i>
                                {{ __('words.users') }}</a>
                        </li>
                    </ul>
                </li>





                <li class="nav-item">
                    <a class="nav-link" href="{{ route('dashboard.settings') }}"><i class="icon-people"></i>
                        {{ trans('words.settings') }}</a>
                </li>
            @endcan
        </ul>
    </nav>
</div>
