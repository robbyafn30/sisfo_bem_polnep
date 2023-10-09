<nav class="navbar navbar-header navbar-expand-lg" data-background-color="blue2">
				
    <div class="container-fluid">
        <ul class="navbar-nav topbar-nav ml-md-auto align-items-center">
            <div class="dropdown-item-user">
                <div class="container-online">
                        <p><i class="fa-solid fa-circle mx-3"></i>{{ Auth::user()-> name}}</p>
                </div>
            </div>
        </ul>
    </div>
</nav>