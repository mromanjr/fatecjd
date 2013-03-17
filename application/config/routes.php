<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	http://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There area two reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router what URI segments to use if those provided
| in the URL cannot be matched to a valid route.
|
*/

//rotas site
$route['default_controller'] = "principal";
$route['404_override'] = 'Errors/error_404.tpl';
$route['noticias'] = 'noticias';
$route['noticias/(:any)'] = 'noticias/verNoticia/$1';

$route['(:any)'] = 'principal/paginas/$1';


//rotas admin
$route['admin'] = 'admin';
$route['admin/logar'] = 'login/logar';

$route['admin/noticias'] = 'admin/noticias';
$route['admin/paginas'] = 'admin/paginas';
$route['admin/usuarios'] = 'admin/usuarios';

$route['admin/noticias/(:num)'] = 'admin/paginacao';


//rotas alunos
$route['alunos'] = 'alunos';


//rotas professores
$route['professores'] = 'professores';
$route['professores/logar'] = 'login/logar';




//rota login/logout
$route['login/logar'] = 'login/logar';
$route['sair'] = 'login/logar';




/* End of file routes.php */
/* Location: ./application/config/routes.php */
