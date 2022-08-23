<?php
 function storeImage($folder, $file_name, $is_file = null)
    {
        if ($is_file) {
            $file = $file_name;
        } else {
            if (!request()->hasFile($file_name)) return null;

            $file = request()->file($file_name);
        }
        return Storage::disk('public')->put($folder, $file);
    }

?>
