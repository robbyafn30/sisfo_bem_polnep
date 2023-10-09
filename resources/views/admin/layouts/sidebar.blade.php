<div class="sidebar sidebar-style-2">
			
    <div class="sidebar-wrapper scrollbar scrollbar-inner">
        <div class="sidebar-content">
            <ul class="nav nav-primary">
                <li class="nav-item {{ request()->routeIs('Dashboard') ? 'active' : '' }}">
                    <a href="/admin/beranda">
                        <i class="fas fa-home"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                
                <li class="nav-section">
                    <span class="sidebar-mini-icon">
                        <i class="fa fa-ellipsis-h"></i>
                    </span>
                    <h4 class="text-section">AKUN</h4>
                </li>

                @if( auth()->user()->role_id == "1")
                <li class="nav-item {{ request()->routeIs('Data-User') ? 'active' : '' }}">
                    <a href="/admin/data-user">
                        <i class="fa-solid fa-user-gear"></i>
                        <p>Data User</p>
                    </a>
                </li>
                @endif

                @if(auth()->user()->role_id == "2" || auth()->user()->role_id == "3" || auth()->user()->role_id == "4" || auth()->user()->role_id == "5")
                <li class="nav-item {{ request()->routeIs('Ubah-Password') ? 'active' : '' }}">
                    <a href="/admin/ubah-password">
                        <i class="fa-solid fa-lock"></i>                        
                        <p>Ubah Password</p>
                    </a>
                </li>
                @endif

                @if(auth()->user()->role_id == "2" || auth()->user()->role_id == "1")
                <li class="nav-section">
                    <span class="sidebar-mini-icon">
                        <i class="fa fa-ellipsis-h"></i>
                    </span>
                    <h4 class="text-section">KEMENKOSEK</h4>
                </li>
                <li class="nav-item {{ request()->routeIs('Surat-*') ? 'active' : '' }}">
                    <a data-toggle="collapse" class="" href="#surat">
                        <i class="fa-solid fa-book"></i>
                        <p>Data Surat</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse {{ request()->routeIs('Surat-*') ? 'show' : '' }}" id="surat">
                        <ul class="nav nav-collapse">
                            <li class="{{ request()->routeIs('Surat-Masuk') ? 'active' : '' }}">
                                <a href="/admin/data-surat/surat-masuk">
                                    <span class="sub-item">Surat Masuk</span>
                                </a>
                            </li>
                            <li class="{{ request()->routeIs('Surat-Keluar') ? 'active' : '' }}">
                                <a href="/admin/data-surat/surat-keluar">
                                    <span class="sub-item">Surat Keluar</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item {{ request()->routeIs('Data-Barang') ? 'active' : '' }}">
                    <a href="/admin/inventaris">
                        <i class="fa-solid fa-briefcase"></i>
                        <p>Inventaris</p>
                    </a>
                </li>
                @endif

                @if(auth()->user()->role_id == "3" || auth()->user()->role_id == "1")
                <li class="nav-section">
                    <span class="sidebar-mini-icon">
                        <i class="fa fa-ellipsis-h"></i>
                    </span>
                    <h4 class="text-section">KEMENKOKEU</h4>
                </li>
                <li class="nav-item {{ request()->routeIs('Laporan-*') ? 'active' : '' }}">
                    <a data-toggle="collapse" href="#keuangan">
                        <i class="fa-solid fa-wallet"></i>
                        <p>Laporan Keuangan</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse {{ request()->routeIs('Laporan-*') ? 'show' : '' }}" id="keuangan">
                        <ul class="nav nav-collapse">  
                            <li class="{{ request()->routeIs('Laporan-Pemasukan') ? 'active' : '' }}">
                                <a href="/admin/laporan-keuangan/pemasukan">
                                    <span class="sub-item">Pemasukan</span>
                                </a>
                            </li>
                            <li class="{{ request()->routeIs('Laporan-Pengeluaran') ? 'active' : '' }}">
                                <a href="/admin/laporan-keuangan/pengeluaran">
                                    <span class="sub-item">Pengeluaran</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                @endif

                @if(auth()->user()->role_id == "4" || auth()->user()->role_id == "1")
                <li class="nav-section">
                    <span class="sidebar-mini-icon">
                        <i class="fa fa-ellipsis-h"></i>
                    </span>
                    <h4 class="text-section">KOMINFO</h4>
                </li>
                <li class="nav-item {{ request()->routeIs('Dokumentasi-Kegiatan','Instagram') ? 'active' : '' }}">
                    <a data-toggle="collapse" href="#base">
                        <i class="fa-solid fa-earth-asia"></i>
                        <p>Beranda</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse {{ request()->routeIs('Dokumentasi-Kegiatan','Instagram') ? 'show' : '' }}" id="base">
                        <ul class="nav nav-collapse">
                            <li class="{{ request()->routeIs('Dokumentasi-Kegiatan') ? 'active' : '' }}">
                                <a href="/admin/beranda/dokumentasi-kegiatan">
                                    <span class="sub-item">Dokumentasi Kegiatan</span>
                                </a>
                            </li>
                            <li class="{{ request()->routeIs('Instagram') ? 'active' : '' }}">
                                <a href="/admin/beranda/instagram">
                                    <span class="sub-item">Instagram</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item {{ request()->routeIs('Berita-Terkini') ? 'active' : '' }}">
                    <a href="/admin/berita-terkini">
                        <i class="fa-solid fa-square-rss"></i>
                        <p>Berita Terkini</p>
                    </a>
                </li>
                <li class="nav-item {{ request()->routeIs('Arsipan-Kajian') ? 'active' : '' }}">
                    <a href="/admin/arsipan-kajian">
                        <i class="fa-solid fa-file-circle-exclamation"></i>
                        <p>Arsipan Kajian</p>
                    </a>
                </li>
                @endif
        

                @if(auth()->user()->role_id == "5" || auth()->user()->role_id == "1")
                <li class="nav-section">
                    <span class="sidebar-mini-icon">
                        <i class="fa fa-ellipsis-h"></i>
                    </span>
                    <h4 class="text-section">KEMENPSDM</h4>
                </li>
                <li class="nav-item {{ request()->routeIs('Data-Pengurus') ? 'active' : '' }}">
                    <a href="/admin/data-pengurus">
                        <i class="fa-solid fa-file-circle-exclamation"></i>
                        <p>Data Pengurus</p>
                    </a>
                </li>
                <li class="nav-item {{ request()->routeIs('Admin-LaporJak','Admin-TanyaJak','Admin-KritikSaran') ? 'active' : '' }}">
                    <a data-toggle="collapse" href="#psdm">
                        <i class="fa-solid fa-list"></i>
                        <p>Layanan</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse {{ request()->routeIs('Admin-LaporJak','Admin-TanyaJak','Admin-KritikSaran') ? 'show' : '' }}" id="psdm">
                        <ul class="nav nav-collapse">
                            <li class="{{ request()->routeIs('Admin-LaporJak') ? 'active' : '' }}">
                                <a href="/admin/layanan/laporjak">
                                    <span class="sub-item">LaporJak</span>
                                </a>
                            </li>
                            <li class="{{ request()->routeIs('Admin-TanyaJak') ? 'active' : '' }}">
                                <a href="/admin/layanan/tanyajak">
                                    <span class="sub-item">TanyaJak</span>
                                </a>
                            </li>
                            <li class="{{ request()->routeIs('Admin-KritikSaran') ? 'active' : '' }}">
                                <a href="/admin/layanan/kritik-saran">
                                    <span class="sub-item">Kritik & Saran</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                @endif

                <li class="nav-item mt-4 text-white">
                    <div class="nav-danger">
                      <a href="/logout" id="logout-link">
                        <i class="fa-solid fa-arrow-right-from-bracket"></i>
                        <p>Keluar</p>
                      </a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>