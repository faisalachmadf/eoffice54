            <ul class="list">
                    <li class="header">MAIN NAVIGATION</li>
                  
                    <li class="{{ request()->segment(2) == 'dashboard' ? 'active' : '' }}"> 
                        <a href="{{ route('dashboard') }}">
                            <i class="material-icons">home</i>
                            <span>Dashboard</span>
                        </a>
                    </li>
                    <li class="{{ request()->segment(2) == 'agenda' ? 'active' : '' }}">
                        <a href="{{ route('agenda.index') }}">
                            <i class="material-icons">date_range</i>
                            <span>Jadwal Agenda</span>
                        </a>
                    </li>
                    <li class="{{ request()->segment(2) == 'laporan_harian' ? 'active' : '' }}">
                        <a href="#">
                            <i class="material-icons">assignment</i>
                            <span>Laporan harian</span>
                        </a>
                    </li>
                    <li>
                         <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">layers</i>
                            <span>Surat</span>
                        </a>
                        <ul class="ml-menu">
                            <li class="{{ request()->segment(3) == 'surat_masuk' ? 'active' : '' }}">
                                <a href="#">
                                    <span>Surat Masuk</span>
                                </a>
                            </li>
                            <li class="{{ request()->segment(3) == 'surat_keluar' ? 'active' : '' }}">
                                <a href="#">
                                    <span>Surat Keluar</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    
                    
                </ul>