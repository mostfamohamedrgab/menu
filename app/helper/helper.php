<?php



function uplode_img($file)
{
  $fileNamae = rand(1,100000000).'-'.$file->getClientOriginalName();
  $file->move(public_path('storage/imgs'), $fileNamae);
  return $fileNamae;
}

function imgs_path($file)
{
    return asset('public/storage/imgs/'. $file);
}


function delete_img($img)
{
  \Storage::disk('imgs')->delete($img);
}
