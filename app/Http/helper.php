<?php
function checkRole($role)
{
    if (auth()->user()->role_id == $role || auth()->user()->role_id == "1") {
        return true;
    } else {
        return false;
    }
}

// ============================= //
// FUNGSI UNTUK MENGHAPUS FILE
// Cara Penggunaan  : deleteFile("path_folder", "nama_file")
// Contoh           : deleteFile("assets/img/default/", "foto.png")
// Output           : file foto.png pada assets/img/default akan terhapus
if (!function_exists('deleteFile')) {
    function deleteFile($path, $file)
    {
        if (file_exists(public_path($path . '/' . $file)) && !is_dir(public_path($path . '/' . $file)))
            return unlink(public_path($path . '/' . $file));
        else return;
    }
}
// ============================= //