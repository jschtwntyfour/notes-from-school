<?php
include 'fungsi.php';
function hapus($data){
    $query = "DELETE FROM keranjang WHERE id_buah = '$data' ";
    mysqli_query(db(), $query);
}
hapus(cek_data("id_buah"));
?>
<script>
    alert("Data telah dihapus!");
    location.href="index.php";
</script>
<?php





?>