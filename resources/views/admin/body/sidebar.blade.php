<div class="sidebar-wrapper" data-simplebar="true">
    <div class="sidebar-header">
        <div>
            <img src="{{ asset('logo/court.png') }}" class="logo-icon" alt="logo icon">
        </div>
        <div>
            <h4 class="logo-text">Pattaya Legal</h4>
        </div>
        <div class="toggle-icon ms-auto"><i class='bx bx-arrow-to-left'></i>
        </div>
    </div>
    <!--navigation-->
    <ul class="metismenu" id="menu">

        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="bx bx-category"></i>
                </div>
                <div class="menu-title">Application</div>
            </a>
            <ul>
                <li> <a href="{{ route('dashboard') }}"><i class="bx bx-right-arrow-alt"></i>Dashboard</a>
                </li>
                <li> <a href="{{ route('all.messages') }}"><i class="bx bx-right-arrow-alt"></i>All Messages</a>
                </li>
                <li> <a href="{{ route('all.blog') }}"><i class="bx bx-right-arrow-alt"></i>All Blogs</a>
                </li>
                <li> <a href="{{ route('all.blog.category') }}"><i class="bx bx-right-arrow-alt"></i>Blog Category</a>
                </li>
                <li> <a href="{{ route('home.header') }}"><i class="bx bx-right-arrow-alt"></i>Home Header</a>
                </li>
                <li> <a href="{{ route('home.service') }}"><i class="bx bx-right-arrow-alt"></i>Home Service</a>
                </li>
                <li> <a href="{{ route('home.vision') }}"><i class="bx bx-right-arrow-alt"></i>About Page</a>
                </li>
                <li> <a href="{{ route('home.message') }}"><i class="bx bx-right-arrow-alt"></i>Contact Page</a>
                </li>
                <li> <a href="{{ route('home.footer') }}"><i class="bx bx-right-arrow-alt"></i>Footer</a>
                </li>


            </ul>
        </li>



    </ul>
    <!--end navigation-->
</div>