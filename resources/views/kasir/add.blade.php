<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Aplikasi Kasir</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="/assets/images/favicon.png">
    <!-- Custom Stylesheet -->
    <link href="/assets/plugins/tables/css/datatable/dataTables.bootstrap4.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/vendor/adminlte') }}/plugins/fontawesome-free/css/all.min.css">

    <link href="/assets/css/style.css" rel="stylesheet">

</head>

<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="loader">
            <svg class="circular" viewBox="25 25 50 50">
                <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="3" stroke-miterlimit="10" />
            </svg>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->


    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
            <div class="brand-logo">
                <a href="index.html">
                    <b class="logo-abbr"><img src="" alt=""> <svg xmlns="http://www.w3.org/2000/svg" height="25" width="25" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path fill="#ffffff" d="M186.1 343.3c-9.7 9.7-9.7 25.3 0 34.9 9.7 9.7 25.3 9.7 34.9 0L378.2 221.1c19.3-19.3 50.6-19.3 69.9 0s19.3 50.6 0 69.9L294 445.1c19.3 19.3 50.5 19.3 69.8 0l0 0 119.3-119.2c38.6-38.6 38.6-101.1 0-139.7-38.6-38.6-101.2-38.6-139.7 0l-157.2 157.2zm244.5-104.8c-9.7-9.7-25.3-9.7-34.9 0l-157.2 157.2c-19.3 19.3-50.5 19.3-69.8 .1l-.1-.1c-9.6-9.6-25.3-9.7-34.9 0l0 0c-9.7 9.6-9.7 25.3 0 34.9l0 0c38.6 38.6 101.1 38.6 139.7 0l157.2-157.2c9.7-9.7 9.7-25.3 0-34.9zm-262 87.3l157.2-157.2c9.6-9.7 9.6-25.3 0-34.9-9.6-9.6-25.3-9.6-34.9 0L133.7 290.9c-19.3 19.3-50.6 19.3-69.9 0l0 0c-19.3-19.3-19.3-50.5 0-69.8l0 0L218 66.9c-19.3-19.3-50.6-19.3-69.9 0l0 0L28.9 186.1c-38.6 38.6-38.6 101.1 0 139.7 38.6 38.6 101.1 38.6 139.7 0zm-87.3-52.4c9.6 9.6 25.3 9.6 34.9 0l157.2-157.2c19.3-19.3 50.6-19.3 69.8 0l0 0c9.7 9.7 25.3 9.7 34.9 0 9.7-9.7 9.7-25.3 0-34.9-38.6-38.6-101.1-38.6-139.7 0L81.3 238.5c-9.7 9.6-9.7 25.3 0 34.9h0z"/></svg></b>
                    <span class="brand-title">
                        <h1 class="text-white">A.B Kasir</h1>
                    </span>
                </a>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->

        <!--**********************************
            Header start
        ***********************************-->
        <div class="header">
            <div class="header-content clearfix">

                <div class="nav-control">
                    <div class="hamburger">
                        <span class="toggle-icon"><i class="icon-menu"></i></span>
                    </div>
                </div>
                <div class="header-left">
                </div>
                <div class="header-right">
                    <ul class="clearfix">
                        <li class="icons dropdown">
                            <div class="user-img c-pointer position-relative"   data-toggle="dropdown">
                                <span class="activity active"></span>
                                <img src="/assets/images/user/1.png" height="40" width="40" alt="">
                            </div>
                            <div class="drop-down dropdown-profile   dropdown-menu">
                                <div class="dropdown-content-body">
                                    <ul>
                                        <li>
                                            <a href="/kasir/profile"><i class="icon-user"></i> <span>Profile</span></a>
                                        </li>
                                        <hr class="my-2">
                                        <li><a href="/logout"><i class="icon-logout"></i> <span>Logout</span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        <div class="nk-sidebar">
            <div class="nk-nav-scroll">
                <ul class="metismenu" id="menu">
                    <li class="nav-label">Dashboard</li>
                    <li>
                        <a href="#" aria-expanded="false">
                            <i class="icon-home menu-icon"></i><span class="nav-text">Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a href="/transaksi" aria-expanded="false">
                            <i class="fa fa-shopping-cart"></i><span class="nav-text">Data Transaksi</span>
                        </a>
                    </li>
                    <li>
                        <a href="/transaksi/create" aria-expanded="false">
                            <i class="fa fa-cart-plus"></i><span class="nav-text">Buat Transaksi</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <!--**********************************
            Sidebar end
        ***********************************-->

        <!--**********************************
            Content body start
        ***********************************-->

        <div class="content-body">
            <div class="row page-titles mx-0">
                <div class="col p-md-0">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">{{ $title }}</a></li>
                    </ol>
                </div>
            </div>
            <!-- row -->

            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="d-flex align-item-center">
                                    <h4 class="card-title">{{ $title }}</h4>
                                </div>
                            </div>
                                <div class="card-body">
                                    <form action="/transaksi/store" method="post">
                                        @csrf
                                        <div class="row">
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                  <label for="id_barang">Daftar Barang</label>
                                                  <select class="form-control"  id="id_barang">
                                                    @foreach ($barang as $barang)
                                                        <option value="{{ $barang->id }}" data-nama="{{$barang->nama_barang}}" data-harga="{{$barang->harga}}" data-id="{{$barang->id}}">{{$barang->nama_barang}} Rp. {{number_format($barang->harga)}}</option>
                                                    @endforeach
                                                  </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                  <label for="">&nbsp;</label>
                                                  <button type="button" class="btn btn-primary d-block" onclick="tambahitem()">Tambah Item</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12 table-responsive">
                                                <table class="table table-hover table-bordered">
                                                    <thead>
                                                        <tr>
                                                            <th>No</th>
                                                            <th>Nama</th>
                                                            <th>Quantity</th>
                                                            <th>Harga</th>
                                                            <th>#</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody class="transaksiItem">

                                                    </tbody>
                                                    <tfoot>
                                                        <tr>
                                                            <th colspan="2">Jumlah</th>
                                                            <th class="quantity">0</th>
                                                            <th class="totalharga">0</th>
                                                            <th></th>
                                                        </tr>
                                                    </tfoot>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <input type="hidden" name="total_harga" value="0">
                                                <button type="submit" class="btn btn-md btn-success">Simpan Transaksi</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
            <!-- #/ container -->
        </div>

        <!--**********************************
            Content body end
        ***********************************-->


        <!--**********************************
            Footer start
        ***********************************-->
        <div class="footer">
            <div class="copyright">
                <p>Copyright &copy; Designed & Developed by <a href="#">Abdulloh</a> 2023</p>
            </div>
        </div>
        <!--**********************************
            Footer end
        ***********************************-->
    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <script>
        var totalharga = 0;
        var quantity = 0;
        var listItem = [];

        function tambahitem(){
            updateTotalHarga(parseInt($('#id_barang').find(':selected').data('harga')))
            var item = listItem.filter((el) => el.id_barang === $('#id_barang').find(':selected').data('id'));
            console.log(item)
            if(item.length > 0){
                item[0].quantity += 1
            } else {
                var item = {
                    id_barang: $('#id_barang').find(':selected').data('id'),
                    nama: $('#id_barang').find(':selected').data('nama'),
                    harga: $('#id_barang').find(':selected').data('harga'),
                    quantity: 1,
                }
                listItem.push(item)
            }
            updateQuantity(1)
            updateTable()
        }

        function updateTable(){
            var html = '';
            listItem.map((el,index) => {
                var harga = formatRupiah(el.harga.toString())
                var quantity = formatRupiah(el.quantity.toString())
                html += `
                <tr>
                    <td>${index + 1}</td>
                    <td>${el.nama}</td>
                    <td>${quantity}</td>
                    <td>${harga}</td>
                    <td>
                        <input type="hidden" name="id_barang[]" value="${el.id_barang}">
                        <input type="hidden" name="quantity[]" value="${el.quantity}">
                        <button type="button" onclick="deleteItem(${index})" class="btn btn-link">
                            <i class="fas fa-fw fa-trash text-danger"></i>
                        </button>
                    </td>
                </tr>
                `
            })
            $('.transaksiItem').html(html)
        }

        function deleteItem(index){
            var item = listItem[index]
            if(item.quantity > 1){
                listItem[index].quantity -= 1;
                updateTotalHarga(-(item.harga))
                updateQuantity(-1)
            } else {
                listItem.splice(index,1)
                updateTotalHarga(-(item.harga * item.quantity))
                updateQuantity(-(item.quantity))
            }
            updateTable()
        }

        function updateTotalHarga(nom){
            totalharga += nom;
            $('[name=total_harga]').val(totalharga)
            $('.totalharga').html(formatRupiah(totalharga.toString()))
        }

        function updateQuantity(nom){
            quantity += nom;
            $('[name=total_harga]').val(totalharga)
            $('.quantity').html(formatRupiah(quantity.toString()))
        }

        function formatRupiah(angka, prefix){
			var number_string = angka.replace(/[^,\d]/g, '').toString(),
			split   		= number_string.split(','),
			sisa     		= split[0].length % 3,
			rupiah     		= split[0].substr(0, sisa),
			ribuan     		= split[0].substr(sisa).match(/\d{3}/gi);

			// tambahkan titik jika yang di input sudah menjadi angka ribuan
			if(ribuan){
				separator = sisa ? '.' : '';
				rupiah += separator + ribuan.join('.');
			}

			rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
			return prefix == undefined ? rupiah : (rupiah ? 'Rp. ' + rupiah : '');
		}
    </script>
    <script src="/assets/plugins/common/common.min.js"></script>
    <script src="/assets/js/custom.min.js"></script>
    <script src="/assets/js/settings.js"></script>
    <script src="/assets/js/gleek.js"></script>
    <script src="/assets/js/styleSwitcher.js"></script>
    <script src="/assets/plugins/tables/js/jquery.dataTables.min.js"></script>
    <script src="/assets/plugins/tables/js/datatable/dataTables.bootstrap4.min.js"></script>
    <script src="/assets/plugins/tables/js/datatable-init/datatable-basic.min.js"></script>

</body>

</html>






