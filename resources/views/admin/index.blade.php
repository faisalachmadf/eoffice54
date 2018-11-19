<!DOCTYPE html>
<html>

<head>
    <!-- Head -->
   @include('admin.bagan.head')
</head>

<body class="theme-red">
    <!-- Page Loader -->
     @include('admin.bagan.loader')
    <!-- #END# Page Loader -->

    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->

    <!-- Search Bar -->
    @include('admin.bagan.search')
    <!-- #END# Search Bar -->

    <!-- Top Bar -->
    <nav class="navbar">
      @include('admin.bagan.navbar')  
    </nav>
    <!-- #Top Bar -->

    <section>
        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
            <!-- User Info -->
            <div class="user-info">
               @include('admin.bagan.profil') 
            </div>
            <!-- #User Info -->

            <!-- Menu -->
            <div class="menu">

               @include('admin.bagan.menu')
            </div>
            <!-- #Menu -->
            <!-- Footer -->
            <div class="legal">
                <div class="copyright">
                    &copy; 2018<br/><a href="javascript:void(0);">Biro Pemerintahan dan Kerja Sama</a>.
                </div>
                <div class="version">
                    <b>Version: </b> 1.0.0
                </div>
            </div>
            <!-- #Footer -->
        </aside>

        <!-- #END# Left Sidebar -->

        <!-- Right Sidebar -->
        <aside id="rightsidebar" class="right-sidebar">
            @include('admin.bagan.tampilan_warna')
        </aside>
        <!-- #END# Right Sidebar -->
    </section>

    <section class="content">        
      @yield('content')
    </section>

    @include('admin.bagan.script')
</body>

</html>
