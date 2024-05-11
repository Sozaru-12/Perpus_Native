<?php
if($_POST){
     $id_kelas=$_POST['id_kelas'];
     $kelas=$_POST['Kelas']
    

        if(empty($id_kelas)){
            $update=mysqli_query($conn,"update kelas set nama_kelas='".$nama_kelas."',nama_kelas='', kelompok='".$kelompok."', id_kelas='".$id_kelas."' where id_kelas = '".$id_kelas."' ") or die(mysqli_error($conn));
            if($update){
                echo "<script>alert('Sukses update Kelas');location.href='tampil_kelas.php';</script>";
            } else {
                echo "<script>alert('Gagal update Kelas');location.href='ubah_siswa.php?id_siswa=".$id_siswa."';</script>";
            }
        } else {
            $update=mysqli_query($conn,"update kelas set nama_kelas='".$nama_kelas."',nama_kelas='', kelompok='".$kelompok."', id_kelas='".$id_kelas."' where id_kelas = '".$id_kelas."' ") or die(mysqli_error($conn));
                echo "<script>alert('Sukses update kelas');location.href='tampil_kelas.php';</script>";
            } else {
                echo "<script>alert('Gagal update kelas');location.href='ubah_kelas.php?id_kelas=".$id_kelas."';</script>";
            }
            
        }
        
     

?>
