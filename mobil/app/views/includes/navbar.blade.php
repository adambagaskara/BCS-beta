<header>
	<nav class="navigation-bar dark default fixed-top">
		<nav class="navigation-bar-content">
			 <a href="{{URL::to("dashboard")}}" class="element"><span class="icon-grid-view"></span> BCS <sup>BETA 1.0</sup></a>
             <span class="element-divider"></span>
			 <a class="pull-menu" href="#"></a>
                    <ul class="element-menu no-desktop">
                        {{--<li><a href="{{URL::to("dashboard")}}">Galera</a></li>--}}
					</ul>                    
                    
                    <ul class="element-menu">
                        <li><a href="{{URL::to("dashboard")}}">Dashboard</a></li>
                          <li>
                            <a class="dropdown-toggle" href="#">Beli Mobil</a>
                            <ul class="dropdown-menu " data-role="dropdown">
                                <li><a href="{{URL::to("beli1/create")}}">Metode Cash</a></li>
                                <li><a href="{{URL::to("beli2/create")}}">Metode Kredit</a></li>
                            </ul>
                        </li>
                        <li>
                            <a class="dropdown-toggle" href="#">Data-Data</a>
                            <ul class="dropdown-menu " data-role="dropdown">
                                <li><a href="{{URL::to("mobil2")}}">Data Mobil</a></li>
                                <li><a href="{{URL::to("pembeli2")}}">Data Pembeli</a></li>
                                <li><a href="{{URL::to("cash")}}">Data Pembelian Cash</a></li>
                                <li><a href="{{URL::to("kredit")}}">Data Pembelian Kredit</a></li>
                                <li><a href="{{URL::to("paket2")}}">Data Paket Kredit</a></li>
                                <li><a href="{{URL::to("cicilan")}}">Data Bayar Cicilan</a></li>
                            </ul>
                        </li>
						<li><a href="{{URL::to("panduan")}}">Panduan</a></li>
					</ul>
                        
					<div class="no-tablet-portrait">
					<div class="element place-right">
                            <a class="dropdown-toggle" href="#">
                                <span class="icon-cog"></span>
                            </a>
                            <ul class="dropdown-menu place-right" data-role="dropdown">
                                <li><a href="{{URL::to("login")}}">Keluar</a></li>
                            </ul>
                        </div>
                        <span class="element-divider place-right"></span>
					</div>
		</nav>
	</nav>
	</header>