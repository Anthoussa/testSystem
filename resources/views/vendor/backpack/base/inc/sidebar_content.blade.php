<!-- This file is used to store sidebar items, starting with Backpack\Base 0.9.0 -->
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('dashboard') }}"><i class="fa fa-dashboard nav-icon"></i> {{ trans('backpack::base.dashboard') }}</a></li>
<!--<li class=nav-item><a class=nav-link href="{{ backpack_url('elfinder') }}"><i class="nav-icon fa fa-files-o"></i> <span>{{ trans('backpack::crud.file_manager') }}</span></a></li>-->
<!--<li class=nav-item><a class=nav-link href="{{ backpack_url('elfinder') }}"><i class="nav-icon fa fa-files-o"></i> <span>{{ trans('backpack::crud.file_manager') }}</span></a></li>-->

<li class='nav-item'><a class='nav-link' href='{{ backpack_url('subject') }}'><i class='nav-icon fa fa-book'></i> Subjects</a></li>
<li class='nav-item'><a class='nav-link' href='{{ backpack_url('teacher') }}'><i class='nav-icon fa fa-user'></i> Teachers</a></li>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('logout') }}"><i class="nav-icon fa fa-sign-out"></i> Logout</a></li>
