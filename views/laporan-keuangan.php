<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>CAKEP</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

   <!-- Favicon -->
   <link href="../assets/img/favicon.ico" rel="icon">

   <!-- Google Web Fonts -->
   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500&family=Jost:wght@500;600;700&display=swap" rel="stylesheet"> 

   <!-- Icon Font Stylesheet -->
   <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

   <!-- Libraries Stylesheet -->
   <link href="../assets/lib/animate/animate.min.css" rel="stylesheet">
   <link href="../assets/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
   <link href="../assets/lib/lightbox/css/lightbox.min.css" rel="stylesheet">

   <!-- Customized Bootstrap Stylesheet -->
   <link href="../assets/css/bootstrap.min.css" rel="stylesheet"> 

   <!-- Template Stylesheet -->
   <link href="../assets/css/style.css" rel="stylesheet">
</head>

<body>
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-grow text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Navbar & Hero Start -->
        <div class="container-xxl position-relative p-0">
            <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
                <a href="" class="navbar-brand p-0">
                    <h1 class="m-0">CAKEP</h1>
                    <!-- <img src="img/logo.png" alt="Logo"> -->
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav mx-auto py-0">
                        <a href="./home.php" class="nav-item nav-link">Home</a>
                        <a href="./transaksi.php" class="nav-item nav-link">Transaksi</a>
                        <a href="./laporan-keuangan.php" class="nav-item nav-link active">Laporan Keuangan</a>
                        <a href="project.html" class="nav-item nav-link">Managemen Kategori</a>
                        <!-- <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                            <div class="dropdown-menu m-0">
                                <a href="team.html" class="dropdown-item">Our Team</a>
                                <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                                <a href="404.html" class="dropdown-item">404 Page</a>
                            </div>
                        </div>
                        <a href="contact.html" class="nav-item nav-link">Contact</a> -->
                    </div>
                    <!-- <a href="" class="btn rounded-pill py-2 px-4 ms-3 d-none d-lg-block">Get Started</a> -->
                </div>
            </nav>

         </div>
         <div class="container-xxl py-5 bg-primary hero-header">
             <div class="container my-5 py-5 px-lg-5">
                 <div class="row g-5 py-5">
                     <div class="col-12 text-center">
                         <h1 class="text-white animated slideInDown">Laporan Keuangan</h1>
                         <hr class="bg-white mx-auto mt-0" style="width: 90px;">
                     </div>
                 </div>
             </div>
         </div>
        <!-- Navbar & Hero End -->

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div>
                        <table id="myTable" class="table table-hover border border-2  rounded">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Barang</th>
                                    <th>Harga Barang</th>
                                    <th>Keterangan</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody id="dTable">
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th></th>
                                    <th>Total Pengeluaran</th>
                                    <th id="totalPengeluaran"></th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>

            <div class="modal fade" id="editModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content" style="background-color: #6222CC !important;">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5 text-white" id="editModalLabel">Edit Data</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body text-white">
                        <form id="edit">
                            <input type="hidden" name="id" id="id_ed">
                            <div>
                                <label for="namabarang_ed" class="form-label">Nama Barang</label>
                                <input type="text" name="nama_barang" id="namabarang_ed" class="form-control" style="background-color: #E9FFC2; !important">
                            </div>
                            <div class="mb-2">
                                <label for="hargabarang_ed" class="form-label">Harga Barang</label>
                                <input type="text" name="harga_barang" id="hargabarang_ed" class="form-control" style="background-color: #E9FFC2; !important">
                            </div>
                            <div class="mb-2">
                                <label for="keterangan_ed" class="form-label">Keterangan</label>
                                <input type="text" name="keterangan" id="keterangan_ed" class="form-control" style="background-color: #E9FFC2; !important">
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" id="btnEdit" class="btn btn-primary">Save</button>
                    </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Footer Start -->
        <div class="container-fluid bg-primary text-light footer wow fadeIn" data-wow-delay="0.1s">
            <div class="container py-5 px-lg-5">
                <div class="row g-5">
                    <div class="col-md-6 col-lg-3">
                        <p class="section-title text-white h5 mb-4">Address<span></span></p>
                        <p><i class="fa fa-map-marker-alt me-3"></i>123 Street, New York, USA</p>
                        <p><i class="fa fa-phone-alt me-3"></i>+012 345 67890</p>
                        <p><i class="fa fa-envelope me-3"></i>info@example.com</p>
                        <div class="d-flex pt-2">
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-instagram"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <p class="section-title text-white h5 mb-4">Quick Link<span></span></p>
                        <a class="btn btn-link" href="">About Us</a>
                        <a class="btn btn-link" href="">Contact Us</a>
                        <a class="btn btn-link" href="">Privacy Policy</a>
                        <a class="btn btn-link" href="">Terms & Condition</a>
                        <a class="btn btn-link" href="">Career</a>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <p class="section-title text-white h5 mb-4">Gallery<span></span></p>
                        <div class="row g-2">
                            <div class="col-4">
                                <img class="img-fluid" src="img/portfolio-1.jpg" alt="Image">
                            </div>
                            <div class="col-4">
                                <img class="img-fluid" src="img/portfolio-2.jpg" alt="Image">
                            </div>
                            <div class="col-4">
                                <img class="img-fluid" src="img/portfolio-3.jpg" alt="Image">
                            </div>
                            <div class="col-4">
                                <img class="img-fluid" src="img/portfolio-4.jpg" alt="Image">
                            </div>
                            <div class="col-4">
                                <img class="img-fluid" src="img/portfolio-5.jpg" alt="Image">
                            </div>
                            <div class="col-4">
                                <img class="img-fluid" src="img/portfolio-6.jpg" alt="Image">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <p class="section-title text-white h5 mb-4">Newsletter<span></span></p>
                        <p>Lorem ipsum dolor sit amet elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulpu</p>
                        <div class="position-relative w-100 mt-3">
                            <input class="form-control border-0 rounded-pill w-100 ps-4 pe-5" type="text" placeholder="Your Email" style="height: 48px;">
                            <button type="button" class="btn shadow-none position-absolute top-0 end-0 mt-1 me-2"><i class="fa fa-paper-plane text-primary fs-4"></i></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container px-lg-5">
                <div class="copyright">
                    <div class="row">
                        <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                            &copy; <a class="border-bottom" href="#">Your Site Name</a>, All Right Reserved. 
							
							<!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
							Designed By <a class="border-bottom" href="https://htmlcodex.com">HTML Codex</a>
                        </div>
                        <div class="col-md-6 text-center text-md-end">
                            <div class="footer-menu">
                                <a href="">Home</a>
                                <a href="">Cookies</a>
                                <a href="">Help</a>
                                <a href="">FQAs</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-secondary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="../assets/lib/wow/wow.min.js"></script>
    <script src="../assets/lib/easing/easing.min.js"></script>
    <script src="../assets/lib/waypoints/waypoints.min.js"></script>
    <script src="../assets/lib/counterup/counterup.min.js"></script>
    <script src="../assets/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="../assets/lib/isotope/isotope.pkgd.min.js"></script>
    <script src="../assets/lib/lightbox/js/lightbox.min.js"></script>

    <!-- Template Javascript -->
    <script src="../assets/js/main.js"></script>
</body>

</html>

<script>
   $(document).ready(function () {
      // alert('aa')
      data();
   });

   function data() {
      $.ajax({
         type: 'post',
         url: '../function/ajax_lapkeuangan.php',
         dataType: 'JSON',
         success: function (response) {
            // alert('yes');
            // console.log(response.HARGA_BARANG);
            var html = '';
            var totalHarga = 0;
            $.each(response, function (i,v) {
               totalHarga += parseFloat(v.HARGA_BARANG);
               // console.log(v.HARGA_BARANG);
               html += `
                  <tr>
                     <td>${i+1}</td>
                     <td>${v.NAMA_BARANG}</td>
                     <td>${formatRupiah(v.HARGA_BARANG)}</td>
                     <td>${v.KETERANGAN}</td>
                     <td>
                        <div class="d-inline p-2">
                           <button class="btn update" title="Update" data-bs-toggle="modal" data-bs-target="#editModal" data-id="${v.ID}" data-namabarang="${v.NAMA_BARANG}" data-hargabarang="${v.HARGA_BARANG}" data-keterangan="${v.KETERANGAN}">
                              <i class="bi bi-pencil-square" style="font-size: 25px; background-color: palegreen; color: green; padding: 3px; border-radius: 10px;"></i>
                           </button>
                           <button class="btn delete" title="Delete" data-id="${v.ID}">
                              <i class="bi bi-trash" style="font-size: 25px; background-color: bisque; color: red; padding: 3px; border-radius: 10px;"></i>
                           </button>
                        </div>
                     </td>
                  </tr>
               `;
            });

            $('#dTable').html('');
            $('#dTable').append(html);

            $('#totalPengeluaran').text(formatRupiah(totalHarga));
         },
         error: function (err) {
            console.log(err);
         }
      });
   }

   function formatRupiah(angka) {
      var number_string = angka.toString().replace(/[^,\d]/g, '');
      var split = number_string.split(',');
      var sisa = split[0].length % 3;
      var rupiah = split[0].substr(0, sisa);
      var ribuan = split[0].substr(sisa).match(/\d{3}/gi);

      if (ribuan) {
         separator = sisa ? '.' : '';
         rupiah += separator + ribuan.join('.');
      }

      rupiah = split[1] !== undefined ? rupiah + ',' + split[1] : rupiah;
      return rupiah;
   }

   $('#myTable').on('click', '.update', function () {
      var id = $(this).data('id');
      var namabarang = $(this).data('namabarang');
      var hargabarang = $(this).data('hargabarang');
      var keterangan = $(this).data('keterangan');

      $('#id_ed').val(id);
      $('#namabarang_ed').val(namabarang);
      $('#hargabarang_ed').val(hargabarang);
      $('#keterangan_ed').val(keterangan);
   })

   $('#btnEdit').click(function() {
      var data = $('#edit').serialize();
      console.log(data);

      $.ajax({
         type: 'post',
         url: '../function/edit_transaksi.php',
         data: data,
         success: function (res) {
            // console.log(res);
            Swal.fire({
               title: 'Success!',
               text: 'Edit Success',
               icon: 'success',
               confirmButtonText: 'OK'
            });
         },
         error: function (err) {
            // console.log(err);
            Swal.fire({
               title: 'Error!',
               text: 'Edit Failed',
               icon: 'error',
               confirmButtonText: 'Try Again'
            });
         },
         complete: function (result) {
            $('#btnEdit').hide();
            setTimeout(function() {
               location.reload();
            }, 3000);
         }
      });
   })

   $('#myTable').on('click', '.delete', function() {
      var data_id = $(this).data('id');
      // console.log(data_id);
      
      const swalWithBootstrapButtons = Swal.mixin({
         customClass: {
            confirmButton: "btn btn-success mr-2",
            cancelButton: "btn btn-danger"
         },
         buttonsStyling: false
      });
      swalWithBootstrapButtons.fire({
         title: "Are you sure?",
         text: "You won't be able to revert this!",
         icon: "warning",
         showCancelButton: true,
         confirmButtonText: "Yes, delete it!",
         cancelButtonText: "No, cancel!",
         reverseButtons: true
      }).then((result) => {
         if (result.isConfirmed) {
            $.ajax({
               type: 'post',
               url: '../function/delete_transaksi.php',
               data: { id : data_id },
               success: function (res) {
                  // console.log(res);
                  swalWithBootstrapButtons.fire({
                     title: "Deleted!",
                     text: "Data has been deleted.",
                     icon: "success"
                  });
               },
               error: function (err) {
                  // console.log(err);
                  // Swal.fire({
                  //    title: 'Error!',
                  //    text: 'Delete Failed',
                  //    icon: 'error',
                  //    confirmButtonText: 'Try Again'
                  // });
               },
               complete: function (result) {
                  // $('#btnAdd').hide();
                  setTimeout(function() {
                     location.reload();
                  }, 3000);
               }
            });
         } else if (
            /* Read more about handling dismissals below */
            result.dismiss === Swal.DismissReason.cancel
         ) {
            swalWithBootstrapButtons.fire({
               title: "Cancelled",
               text: "Data is safe :)",
               icon: "error"
            });
         }
      });
   });
</script>