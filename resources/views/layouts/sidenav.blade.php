{{-- <link rel="stylesheet" href="{{asset('css/sidebar.css')}}"> --}}
<style>
    .dashboard-nav-item {
    min-height: 56px;
    padding: 8px 20px 8px 70px;
    display: flex;
    -webkit-box-align: center;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center;
    letter-spacing: 0.02em;
    transition: ease-out 0.5s;
}
.dashboard-nav-item i {
    width: 36px;
    font-size: 19px;
    margin-left: -40px;
}



</style>
{{-- sidebar --}}
<div class='dashboard d-flex mh-100'>
    <div class="dashboard-nav bg-dark position-fixed top-0  left-0 right-0 overflow-auto" style="min-width: 250px; bottom: 0;">
       {{-- logo header --}}
        <header class="pt-3 ps-1 d-flex justify-content-center" style="min-height: 84px;">
            <a href="#!" class="menu-toggle d-none mx-auto">
                <i class="fas fa-bars"></i>
            </a>
            <a href="#" class="brand-logo d-flex justify-content-center mt-3 fw-bold" style="font-family: Nunito, sans-serif; font-size: 20px; color: #515151;">
                <i class="fas fa-anchor" style=" font-size: 27px; margin-right: 10px;"></i> <span>BRAND</span>
            </a>
        </header>
        {{-- nav list --}}
        <nav class="dashboard-nav-list d-flex flex-column">
            <a href="#" class="dashboard-nav-item"><i class="fas fa-home"></i>Home</a>
            <a href="#" class="dashboard-nav-item active bg-dark"><i class="fas fa-tachometer-alt"></i> dashboard </a>
            <a href="#" class="dashboard-nav-item"><i class="fas fa-file-upload"></i> Upload</a>
            {{-- media drop down --}}
            <div class='dashboard-nav-dropdown d-flex flex-column'>
                <a href="#" class="dashboard-nav-item " data-toggle="collapse" data-target="#group-1">
                    <i class="fas fa-photo-video"></i> Media
                </a>

                    <div class='dashboard-nav-dropdown-menu d-none flex-column list-group collapse in' id="group-1" >
                        <a href="#"class="dashboard-nav-dropdown-item d-flex">All</a>
                        <a href="#" class="dashboard-nav-dropdown-item d-flex">Recent</a>
                        <a href="#" class="dashboard-nav-dropdown-item d-flex">Images</a>
                        <a href="#" class="dashboard-nav-dropdown-item d-flex">Video</a>
                    </div>

            </div>

            {{-- user drop down --}}
            <div class='dashboard-nav-dropdown'>
                <a href="#!" class="dashboard-nav-item "><i class="fas fa-users"></i> Users</a>
                <div class='dashboard-nav-dropdown-menu d-none flex-column '>
                    <a href="#" class="dashboard-nav-dropdown-item">All</a>
                    <a href="#" class="dashboard-nav-dropdown-item">Subscribed</a>
                    <a href="#" class="dashboard-nav-dropdown-item">Non-subscribed</a>
                    <a href="#" class="dashboard-nav-dropdown-item">Banned</a>
                    <a href="#" class="dashboard-nav-dropdown-item">New</a>
                </div>
            </div>
            {{-- payment drop down --}}
            <div class='dashboard-nav-dropdown'>
                <a href="#!" class="dashboard-nav-item "><i class="fas fa-money-check-alt"></i> Payments </a>
                <div class='dashboard-nav-dropdown-menu d-none flex-column '>
                    <a href="#"class="dashboard-nav-dropdown-item">All</a>
                    <a href="#" class="dashboard-nav-dropdown-item">Recent</a>
                    <a href="#" class="dashboard-nav-dropdown-item"> Projections</a>
                </div>
            </div>

            <a href="#" class="dashboard-nav-item"><i class="fas fa-cogs"></i> Settings </a>
            <a href="#" class="dashboard-nav-item"><i class="fas fa-user"></i> Profile </a>
            {{-- <div class="nav-item-divider"></div> --}}
            {{-- logout section --}}
            <hr class="" >
          <a href="#" class="dashboard-nav-item"><i class="fas fa-sign-out-alt"></i> Logout </a>
        </nav>
    </div>

</div>
