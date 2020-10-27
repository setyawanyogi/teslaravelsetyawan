<div id="layoutSidenav_nav">
 <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
  <div class="sb-sidenav-menu">
   <div class="nav">
    
    <a class="mt-3 nav-link " href="{{ route('dashboard') }}">
     <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
     Dashboard
    </a>

    @can('isAdmin')
    <div class="sb-sidenav-menu-heading">Master</div>
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
     <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
     Buku
     <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
    </a>
    <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
     <nav class="sb-sidenav-menu-nested nav">
      <a class="nav-link" href="{{ route('daftarkategori') }}">Kategori</a>
      <a class="nav-link" href="{{ route('daftarbuku') }}">Buku</a>
     </nav>
    </div>


    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
     <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
     Member
     <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
    </a>
    <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-parent="#sidenavAccordion">
     <nav class="sb-sidenav-menu-nested nav">
      <a class="nav-link" href="{{ route('daftarmember') }}">Member</a>
     </nav>
    </div>

    
    <div class="sb-sidenav-menu-heading">Transaksi</div>
    <a class="nav-link" href="{{ route('daftarpinjam') }}">
     <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
     Peminjaman
    </a>
    <a class="nav-link" href="{{ route('daftarpengembalian') }}">
     <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
     Pengembalian
    </a>
    @endcan
    
    @can('isUser')
    <a class="nav-link" href="{{ route('daftarpinjam') }}">
       <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
       Profil
    </a>
    <a class="nav-link" href="{{ route('daftarpinjam') }}">
       <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
       Peminjaman
    </a>
    @endcan
   </div>
  </div>
 </nav>
</div>