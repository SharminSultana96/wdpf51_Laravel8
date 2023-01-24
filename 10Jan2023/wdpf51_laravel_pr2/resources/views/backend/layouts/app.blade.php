@include("backend.layouts.header")
            <!-- sidebar @s -->
    @include("backend.layouts.left_sidebar")
    <!-- sidebar @e -->
    <!-- wrap @s -->
    <div class="nk-wrap ">
    <!-- main header @s -->
    @include("backend.layouts.topbar")
    <!-- main header @e -->
    <!-- content @s -->
    <div class="nk-content ">
    <div class="container-fluid">
        <div class="nk-content-inner">
           @yield('content');
        </div>
    </div>
</div>
<!-- content @e -->
<!-- footer @s -->
@include("backend.layouts.footer")