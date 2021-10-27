<aside id="sidebar-wrapper">
  <div class="sidebar-brand">
    <a href="{{ route('dashboard') }}">{{ env('APP_NAME') }}</a>
  </div>
  <div class="sidebar-brand sidebar-brand-sm">
    <a href="index.html">St</a>
  </div>
  <ul class="sidebar-menu">
      <li class="menu-header">Dashboard</li>
      <li class="{{ Request::route()->getName() == 'dashboard' ? ' active' : '' }}"><a class="nav-link" href="{{ route('dashboard') }}"><i class="fas fa-columns"></i> <span>Dashboard</span></a></li>
      <li class="menu-header">Data</li>
      <li class="{{ Request::route()->getName() == 'admin.users' ? ' active' : '' }}"><a class="nav-link" href="{{ route('admin.users') }}"><i class="fas fa-users"></i> <span>Users</span></a></li>
      <li class="{{ Request::route()->getName() == 'admin.profil' ? ' active' : '' }}"><a class="nav-link" href="{{ route('admin.profil') }}"><i class="fas fa-school"></i> <span>Profil Sekolah</span></a></li>
      <li class="{{ Request::route()->getName() == 'admin.siswa' ? ' active' : '' }}"><a class="nav-link" href="{{ route('admin.siswa') }}"><i class="fas fa-user-graduate"></i> <span>Siswa</span></a></li>
      <li class="{{ Request::route()->getName() == 'admin.kelas' ? ' active' : '' }}"><a class="nav-link" href="{{ route('admin.kelas') }}"><i class="fas fa-chalkboard-teacher"></i> <span>Kelas</span></a></li>
    </ul>
</aside>
