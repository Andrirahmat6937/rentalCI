<!-- extend ke main.php di folder view layout -->
<?= $this->extend('template/main') ?>


<?= $this->section('menu'); ?>

<li class="menu-header small text-uppercase">
    <span class="menu-header-text">Master</span>
</li>
<li class="menu-item active open">
    <a href="javascript:void(0);" class="menu-link">
        <i class="menu-icon tf-icons bx bx-home-circle"></i>
        <div data-i18n="Dashboards">Dashboards</div>
        <div class="badge bg-danger rounded-pill ms-auto">5</div>
    </a>
</li>

<!-- Barang -->
<li class="menu-item">
    <a href="javascript:void(0);" class="menu-link">
        <i class="menu-icon tf-icons bx bxs-component"></i>
        <div data-i18n="Layouts">Barang</div>
    </a>
</li>

<!-- kategori -->
<li class="menu-item">
    <a href="javascript:void(0);" class="menu-link">
        <i class="menu-icon tf-icons bx bx-list-ul"></i>
        <div data-i18n="Layouts">Kategori</div>
    </a>
</li>

<!-- member -->
<li class="menu-item">
    <a href="javascript:void(0);" class="menu-link">
        <i class="menu-icon tf-icons bx bxs-user-detail"></i>
        <div data-i18n="Layouts">Member</div>
    </a>
</li>

<!-- Toko -->
<li class="menu-item">
    <a href="javascript:void(0);" class="menu-link">
        <i class="menu-icon tf-icons bx bx-store-alt"></i>
        <div data-i18n="Layouts">Toko</div>
    </a>
</li>

<!-- User -->
<li class="menu-item">
    <a href="javascript:void(0);" class="menu-link">
        <i class="menu-icon tf-icons bx bxs-user-account"></i>
        <div data-i18n="Layouts">User</div>
    </a>
</li>

<!-- <li class="menu-header small text-uppercase">
    <span class="menu-header-text">Apps &amp; Pages</span>
</li> -->
<li class="menu-header small text-uppercase">
    <span class="menu-header-text">Transaksi</span>
</li>

<!-- Transaksi -->
<li class="menu-item">
    <a href="javascript:void(0);" class="menu-link">
        <i class="menu-icon tf-icons bx bx-cart-add"></i>
        <div data-i18n="Layouts">Sewa</div>
    </a>
</li>

<!-- Laporan -->
<li class="menu-header small text-uppercase"><span class="menu-header-text">Laporan</span></li>
<!-- Laporan Barang -->
<li class="menu-item">
    <a href="cards-basic.html" class="menu-link">
        <i class="menu-icon tf-icons bx bxs-book"></i>
        <div data-i18n="Basic">Inventory</div>
    </a>
</li>

<!-- Laporan Sewa -->
<li class="menu-item">
    <a href="cards-basic.html" class="menu-link">
        <i class="menu-icon tf-icons bx bxs-cart-download"></i>
        <div data-i18n="Basic">Sewa</div>
    </a>
</li>

<!-- Laba Rugi -->
<li class="menu-item">
    <a href="cards-basic.html" class="menu-link">
        <i class="menu-icon tf-icons bx bx-money"></i>
        <div data-i18n="Basic">Laba Rugi</div>
    </a>
</li>

<?= $this->endSection(); ?>