<?php
use App\Models\about;
use App\Models\contact;
use App\Models\cover;
use App\Models\hobi;
use App\Models\kemahiran;
use App\Models\pendidikan;
use App\Models\projects;
use App\Models\riwayat;
use App\Models\skill;
use App\Models\socialmedia;

//get function
function get_about_value()
{
    return about::first();
}
function get_cover_value(){
    return cover::first();
}
function get_contact_value(){
    return contact::first();
}
function get_hobi_value()
{
    return hobi::all();
}
function get_kemahiran_value(){
    return kemahiran::all();
}
function get_pendidikan_value(){
    return pendidikan::all();
}
function get_project_value(){
    return projects::all();
}
function get_riwayat_value(){
    return riwayat::first();
}
function get_skill_value(){
    return skill::all();
}
function get_sosmed_value($Jenis_Social_Media){
    $data = socialmedia::where('Jenis_Social_Media',$Jenis_Social_Media)->first();
    if(isset($data->Link_Social_Media)){
        return $data->Link_Social_Media;
    } else{
        return 'empty';
    }
}

//update function
function update_about_value($data)
{
    $about = about::first();
    $about->update($data);
}

function update_cover_value($data)
{
    $about = cover::first();
    $about->update($data);
}