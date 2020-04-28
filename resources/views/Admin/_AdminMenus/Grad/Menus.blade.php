{\rtf1}<ul class="page-sidebar-menu  page-header-fixed " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200" style="padding-top: 20px">
    <!-- DOC: To remove the sidebar toggler from the sidebar you just need to completely remove the below "sidebar-toggler-wrapper" LI element -->
    <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
    <li class="sidebar-toggler-wrapper hide">
        <div class="sidebar-toggler">
            <span></span>
        </div>
    </li>
    <!-- END SIDEBAR TOGGLER BUTTON -->
    <!-- DOC: To remove the search box from the sidebar you just need to completely remove the below "sidebar-search-wrapper" LI element -->
    <p></p>
    <li class="nav-item start ">
        <a href="{{ asset($lang) }}/admin" class="nav-link nav-toggle">
            <i class="icon-home"></i>
            <span class="title bpg_caps f14 gray_font">საწყისი გვერდი</span>
            <span class="arrow"></span>
        </a>
    </li>
    <li class="nav-item start ">
        <a href="{{ asset($lang) }}/admin/build_menu" class="nav-link nav-toggle">
            <i class="icon-list"></i>
            <span class="title bpg_caps f14 gray_font">მენიუს მართვა</span>
            <span class="arrow"></span>
        </a>
    </li>
    <li class="nav-item start ">
        <a href="{{ asset($lang) }}/admin/slider_module/list/1" class="nav-link nav-toggle">
            <i class="fa fa-television"></i>
            <span class="title bpg_caps f14 gray_font">სლაიდერის მართვა</span>
            <span class="arrow"></span>
        </a>
    </li>

    {{--დამხმარე ბლოკები--}}
    <li class="nav-item">
        <a href="javascript:;" class="nav-link nav-toggle">
            <i class="icon-settings"></i>
            <span class="title bpg_caps f14 gray_font">სპეციალური ბლოკები</span>
            <span class="arrow"></span>
        </a>
        <ul class="sub-menu">
            <li class="nav-item">
                <a href="{{ asset($lang) }}/admin/about_us" class="nav-link ">
                    <span class="title bpg_caps f14 gray_font">ჩვენს შესახებ</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ asset($lang) }}/admin/services_item/1" class="nav-link ">
                    <span class="title bpg_caps f14 gray_font">სერვისები</span>
                </a>
            </li>
        </ul>
    </li>
    {{--დამხმარე ბლოკები--}}

    <li class="nav-item start ">
        <a href="{{ asset($lang) }}/admin/translations" class="nav-link nav-toggle">
            <i class="fa fa-files-o"></i>
            <span class="title bpg_caps f14 gray_font">თარგმანი</span>
            <span class="arrow"></span>
        </a>
    </li>
    <li class="nav-item start ">
        <a href="{{ asset($lang) }}/admin/settings" class="nav-link nav-toggle">
            <i class="fa fa-cogs"></i>
            <span class="title bpg_caps f14 gray_font">სეთინგების მართვა</span>
            <span class="arrow"></span>
        </a>
    </li>
    <li class="nav-item start ">
        <a href="{{ asset('/logout') }}" class="nav-link nav-toggle">
            <i class="icon-logout"></i>
            <span class="title bpg_caps f14 gray_font">გასვლა</span>
            <span class="arrow"></span>
        </a>
    </li>

    <li class="heading">
        <h3 class="uppercase  bpg_arial">მთავარი ადმინისტრატორი</h3>
    </li>
</ul>