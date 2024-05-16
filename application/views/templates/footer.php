<script>
$(document).ready(function(){
  $("#btn-search").click(function(){ // Ketika tombol simpan di klik
    // Ubah text tombol search menjadi SEARCHING... 
    // Dan tambahkan atribut disable pada tombol nya agar tidak bisa diklik lagi
    $(this).html("SEARCHING...").attr("disabled", "disabled");
    
    $.ajax({
      url: baseurl + 'siswa/search', // File tujuan
      type: 'POST', // Tentukan type nya POST atau GET
      data: {keyword: $("#keyword").val()}, // Set data yang akan dikirim
      dataType: "json",
      beforeSend: function(e) {
        if(e && e.overrideMimeType) {
          e.overrideMimeType("application/json;charset=UTF-8");
        }
      },
      success: function(response){ // Ketika proses pengiriman berhasil
        // Ubah kembali text button search menjadi SEARCH
        // Dan hapus atribut disabled untuk meng-enable kembali button search nya
        $("#btn-search").html("SEARCH").removeAttr("disabled");
        
        // Ganti isi dari div view dengan view yang diambil dari controller siswa function search
        $("#view").html(response.hasil);
      },
      error: function (xhr, ajaxOptions, thrownError) { // Ketika terjadi error
        alert(xhr.responseText); // munculkan alert
      }
    });
  });
});
</script>
  <!-- Bootstrap core JavaScript-->
  <script src="<?php echo base_url()?>assets/vendor/jquery/jquery.min.js"></script>
  <script src="<?php echo base_url()?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?php echo base_url()?>assets/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="<?php echo base_url()?>assets/js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="<?php echo base_url()?>assets/vendor/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="<?php echo base_url()?>assets/js/demo/chart-area-demo.js"></script>
  <script src="<?php echo base_url()?>assets/js/demo/chart-pie-demo.js"></script>

</body>

</html>
