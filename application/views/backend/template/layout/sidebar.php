<?php
$uri1 = $this->uri->segment(1);
$uri2 = $this->uri->segment(2);
?>
<div class="sidebar-wrapper sidebar-theme">
	<nav id="sidebar">
		<div class="shadow-bottom"></div>
		<ul class="list-unstyled menu-categories ps ps--active-y" id="accordionExample">
			<li class="menu">
				<a href="<?= site_url('admin') ?>" data-active="<?= $uri2 == null ? 'true' : 'false' ?>" aria-expanded="<?= $uri2 == null ? 'true' : 'false' ?>" class="dropdown-toggle">
					<div class="">
						<i data-feather="home"></i>
						<span>Dashboard</span>
					</div>
				</a>
			</li>

			<?php if (is_admin()) : ?>
				<li class="menu">
					<a href="#produk" data-toggle="collapse" aria-expanded="<?= ($uri2 == 'produk') ? 'true' : 'false' ?>" data-active="<?= ($uri2 == 'produk') ? 'true' : 'false' ?>" class="dropdown-toggle">
						<div class="">
							<i data-feather="package"></i>
							<span>Produk</span>
						</div>
						<div>
							<i data-feather="chevron-right"></i>
						</div>
					</a>
					<ul class="collapse submenu list-unstyled <?= ($uri2 == 'produk') ? 'show' : '' ?>" id="produk" data-parent="#accordionExample">
						<li class="<?= $uri2 == 'produk' ? 'active' : '' ?>">
							<a href="<?= base_url('admin/produk') ?>"> List Produk </a>
						</li>
					</ul>
				</li>

				<li class="menu">
					<a href="#transaksi" data-toggle="collapse" aria-expanded="<?= ($uri2 == 'penjualan' || $uri2 == 'pembelian' || $uri2 == 'produksi') ? 'true' : 'false' ?>" data-active="<?= ($uri2 == 'penjualan' || $uri2 == 'pembelian' || $uri2 == 'produksi') ? 'true' : 'false' ?>" class="dropdown-toggle">
						<div class="">
							<i data-feather="package"></i>
							<span>Transaksi</span>
						</div>
						<div>
							<i data-feather="chevron-right"></i>
						</div>
					</a>
					<ul class="collapse submenu list-unstyled <?= ($uri2 == 'penjualan' || $uri2 == 'pembelian' || $uri2 == 'produksi') ? 'show' : '' ?>" id="transaksi" data-parent="#accordionExample">
						<li class="<?= $uri2 == 'penjualan' ? 'active' : '' ?>">
							<a href="<?= base_url('admin/penjualan') ?>"> Penjualan </a>
						</li>
						<li class="<?= $uri2 == 'pembelian' ? 'active' : '' ?>">
							<a href="<?= base_url('admin/pembelian') ?>"> Pembelian </a>
						</li>
						<li class="<?= $uri2 == 'produksi' ? 'active' : '' ?>">
							<a href="<?= base_url('admin/produksi') ?>"> Produksi </a>
						</li>
					</ul>
				</li>

				<li class="menu">
					<a href="#laporan" data-toggle="collapse" data-active="<?= ($uri2 == 'lap_penjualan' || $uri2 == 'lap_pembelian') ? 'true' : 'false' ?>" aria-expanded="<?= ($uri2 == 'lap_penjualan' || $uri2 == 'lap_pembelian') ? 'true' : 'false' ?>" class="dropdown-toggle">
						<div class="">
							<i data-feather="file-text"></i>
							<span>Laporan</span>
						</div>
						<div>
							<i data-feather="chevron-right"></i>
						</div>
					</a>
					<ul id="laporan" class="collapse submenu list-unstyled <?= ($uri2 == 'lap_penjualan' || $uri2 == 'lap_pembelian') ? 'show' : '' ?>" data-parent="#accordionExample">
						<li class="<?= $uri2 == 'lap_penjualan' ? 'active' : '' ?>">
							<a href="<?= base_url('admin/lap_penjualan') ?>"> Penjualan </a>
						</li>
						<li class="<?= $uri2 == 'lap_pembelian' ? 'active' : '' ?>">
							<a href="<?= base_url('admin/lap_pembelian') ?>"> Pembelian </a>
						</li>
						<li class="<?= $uri2 == 'stok_bahan_baku' ? 'active' : '' ?>">
							<a href="<?= base_url('admin/stok_bahan_baku') ?>"> Stok Bahan Baku </a>
						</li>
						<li class="<?= $uri2 == 'stok_produk' ? 'active' : '' ?>">
							<a href="<?= base_url('admin/stok_produk') ?>"> Stok Produk </a>
						</li>
					</ul>
				</li>

				<li class="menu">
					<a href="#data-master" data-toggle="collapse" data-active="<?= ($uri2 == 'kategori' || $uri2 == 'jenis' || $uri2 == 'supplier' || $uri2 == 'stok_bahanbaku' || $uri2 == 'laporan' || $uri2 == 'bahan_baku') ? 'true' : 'false' ?>" aria-expanded="<?= ($uri2 == 'kategori' || $uri2 == 'jenis' || $uri2 == 'supplier' || $uri2 == 'stok_bahanbaku' || $uri2 == 'laporan' || $uri2 == 'bahan_baku') ? 'true' : '' ?>" class="dropdown-toggle">
						<div class="">
							<i data-feather="tool"></i>
							<span>Data Master</span>
						</div>
						<div>
							<i data-feather="chevron-right"></i>
						</div>
					</a>
					<ul id="data-master" class="collapse submenu list-unstyled <?= ($uri2 == 'kategori' || $uri2 == 'jenis' || $uri2 == 'supplier' || $uri2 == 'stok_bahan_baku' || $uri2 == 'laporan' || $uri2 == 'bahan_baku' || $uri2 == 'satuan') ? 'show' : '' ?>" data-parent="#accordionExample">
						<li class="<?= ($uri2 == 'kategori' || $uri2 == 'jenis' || $uri2 == 'supplier') ? 'active' : '' ?>">
							<a href="#sm2" data-toggle="collapse" aria-expanded="<?= ($uri2 == 'kategori' || $uri2 == 'jenis') ? 'true' : 'false' ?>" class="dropdown-toggle">
								Kode Barang
								<i data-feather="chevron-right"></i>
							</a>
							<ul class="collapse list-unstyled sub-submenu <?= ($uri2 == 'kategori' || $uri2 == 'jenis' || $uri2 == 'supplier') ? 'show' : '' ?>" id="sm2" data-parent="#data-master">
								<li class="<?= $uri2 == 'kategori' ? 'active' : '' ?>">
									<a href="<?= site_url('admin/kategori') ?>"> Kategori </a>
								</li>
								<li class="<?= $uri2 == 'jenis' ? 'active' : '' ?>">
									<a href="<?= site_url('admin/jenis') ?>"> Jenis </a>
								</li>
								<li class="<?= $uri2 == 'supplier' ? 'active' : '' ?>">
									<a href="<?= site_url('admin/supplier') ?>"> Supplier </a>
								</li>
							</ul>
						</li>
						<li class="<?= $uri2 == 'bahan_baku' ? 'active' : '' ?>">
							<a href="<?= base_url('admin/bahan_baku') ?>"> Bahan Baku </a>
						</li>
						<li class="<?= $uri2 == 'satuan' ? 'active' : '' ?>">
							<a href="<?= base_url('admin/satuan') ?>"> Satuan </a>
						</li>
					</ul>
				</li>
				<li class="menu">
					<a href="#users" data-toggle="collapse" aria-expanded="<?= ($uri2 == 'karyawan' || $uri2 == 'level') ? 'true' : 'false' ?>" data-active="<?= ($uri2 == 'karyawan' || $uri2 == 'level') ? 'true' : 'false' ?>" class="dropdown-toggle">
						<div class="">
							<i data-feather="users"></i>
							<span>Manajemen User</span>
						</div>
						<div>
							<i data-feather="chevron-right"></i>
						</div>
					</a>
					<ul class="collapse submenu list-unstyled <?= ($uri2 == 'karyawan' || $uri2 == 'level') ? 'show' : '' ?>" id="users" data-parent="#accordionExample">
						<li class="<?= $uri2 == 'userakses' ? 'active' : '' ?>">
							<a href="<?= base_url('admin/userakses') ?>"> User Akses </a>
						</li>
						<li class="<?= $uri2 == 'level' ? 'active' : '' ?>">
							<a href="<?= base_url('admin/level') ?>"> level </a>
						</li>
						<li class="<?= $uri2 == 'karyawan' ? 'active' : '' ?>">
							<a href="<?= base_url('admin/karyawan') ?>"> Karyawan </a>
						</li>
					</ul>
				</li>
			<?php endif; ?>
			<li class="menu">
				<a href="<?= site_url('login/logout') ?>" aria-expanded="false" class="dropdown-toggle">
					<div class="">
						<i data-feather="unlock"></i>
						<span>Logout</span>
					</div>
				</a>
			</li>
		</ul>
	</nav>
</div>
