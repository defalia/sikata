<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['default_controller'] = 'home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['get_nim'] = 'home/get_nim';
$route['login'] = 'login/index';
$route['login/action_login'] = 'login/action_login';

$route['home/surat/(:any)'] = 'home/surat/$1';
$route['home/surat_ta(:any)'] = 'home/surat_ta/$1';

$route['registrasi'] = 'home';
$route['registrasi/add'] = 'registrasi/add'; //pkl
$route['registrasi/action_add'] = 'registrasi/action_add'; //pkl
$route['registrasi/add_ta'] = 'registrasi/add_ta'; //ta
$route['registrasi/action_add_ta'] = 'registrasi/action_add_ta'; //ta
$route['registrasi/perpanjangan_pkl'] = 'registrasi/perpanjangan_pkl'; //pkl
$route['registrasi/action_pp_pkl'] = 'registrasi/action_pp_pkl'; //pkl
$route['registrasi/(:any)'] = 'home';


$route['keuangan'] = 'keuangan/index'; //pkl
$route['keuangan/pkl'] = 'keuangan/index_pkl'; //pkl
$route['keuangan/ta'] = 'keuangan/index_ta'; //ta
$route['keuangan/verif_keu'] = 'keuangan/verif_keu'; //pkl
$route['keuangan/verif_keu_ta'] = 'keuangan/verif_keu_ta'; //pkl
$route['keuangan/rekap_pkl'] = 'keuangan/rekap_keu'; //pkl
$route['keuangan/rekap_ta'] = 'keuangan/rekap_keu_ta'; //ta
$route['keuangan/batal_keu'] = 'keuangan/batal_keu'; //pkl
$route['keuangan/batal_keu_ta'] = 'keuangan/batal_keu_ta'; //ta
$route['keuangan/login'] = 'keuangan/login';
$route['keuangan/action_login'] = 'keuangan/action_login';
$route['keuangan/prodi_pkl/(:any)'] = 'keuangan/prodi_pkl/$1';
$route['keuangan/prodi_ta/(:any)'] = 'keuangan/prodi_ta/$1';
$route['keuangan/register'] = 'keuangan/register';
$route['keuangan/register_action'] = 'keuangan/register_action';
$route['keuangan/index'] = 'keuangan/index_acc';
$route['keuangan/delete/(:any)'] = 'keuangan/delete/$1';
$route['keuangan/edit/(:any)'] = 'keuangan/edit/$1';
$route['keuangan/cetak_ta'] = 'keuangan/cetak_ta';
$route['keuangan/cetak_pkl'] = 'keuangan/cetak_pkl';

$route['kaprodi'] = 'kaprodi/index'; //pkl
$route['kaprodi/pkl'] = 'kaprodi/index_pkl'; //pkl
$route['kaprodi/ta'] = 'kaprodi/index_ta'; //pkl
$route['kaprodi/verif_kap'] = 'kaprodi/verif_kap'; //pkl
$route['kaprodi/rekap_pkl'] = 'kaprodi/rekap_kap'; //pkl
$route['kaprodi/batal_kap'] = 'kaprodi/batal_kap'; //pkl
$route['kaprodi/batal_kap_ta'] = 'kaprodi/batal_kap_ta'; //pkl
$route['kaprodi/verif_kap_ta'] = 'kaprodi/verif_kap_ta'; //pkl
$route['kaprodi/rekap_ta'] = 'kaprodi/rekap_ta_kap'; //pkl
$route['kaprodi/prodi_pkl/(:any)'] = 'kaprodi/prodi_pkl/$1';
$route['kaprodi/prodi_ta/(:any)'] = 'kaprodi/prodi_ta/$1';
$route['kaprodi/login'] = 'kaprodi/login';
$route['kaprodi/action_login'] = 'kaprodi/action_login';
$route['kaprodi/index'] = 'kaprodi/index_acc';
$route['kaprodi/register'] = 'kaprodi/register';
$route['kaprodi/register_action'] = 'kaprodi/register_action';
$route['kaprodi/delete/(:any)'] = 'kaprodi/delete/$1';
$route['kaprodi/edit/(:any)'] = 'kaprodi/edit/$1';
$route['kaprodi/cetak_ta'] = 'kaprodi/cetak_ta';
$route['kaprodi/cetak_pkl'] = 'kaprodi/cetak_pkl';

$route['kaprodi/prodi_1'] = 'kaprodi/prodi_1'; //pkl

$route['dekanat'] = 'dekanat/index';
$route['dekanat/pkl'] = 'dekanat/index_pkl'; //pkl
$route['dekanat/ta'] = 'dekanat/index_ta'; //pkl
$route['dekanat/verif_dek'] = 'dekanat/verif_dek'; //pkl
$route['dekanat/verif_ta'] = 'dekanat/verif_dek_ta'; //pkl
$route['dekanat/rekap_pkl'] = 'dekanat/rekap_pkl'; //pkl
$route['dekanat/rekap_ta'] = 'dekanat/rekap_ta'; //ta
$route['dekanat/login'] = 'dekanat/login';
$route['dekanat/action_login'] = 'dekanat/action_login';
$route['dekanat/index'] = 'dekanat/index_acc';
$route['dekanat/register'] = 'dekanat/register';
$route['dekanat/register_action'] = 'dekanat/register_action';
$route['dekanat/delete/(:any)'] = 'dekanat/delete/$1';
$route['dekanat/edit/(:any)'] = 'dekanat/edit/$1';

$route['admin'] = 'admin/index';
$route['admin/login'] = 'admin/login';
$route['admin/action_login'] = 'admin/action_login';
$route['admin/tabel_keuangan'] = 'admin/keuangan';
$route['admin/tabel_kaprodi'] = 'admin/kaprodi';
$route['admin/tabel_dekanat'] = 'admin/dekanat';
$route['admin/keuangan'] = 'admin/u_keuangan';
$route['admin/kaprodi'] = 'admin/u_kaprodi';
$route['admin/dekanat'] = 'admin/u_dekanat';