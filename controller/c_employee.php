<?php
$data = array();
flexible_function($data);

function flexible_function(&$data)
{ // Main action to start the system process
    $function = 'login';
    if (isset($_GET['action']))
    {
        $action = $_GET['action'];
        $function = $action; // Get function name from action variable
    }

  echo  $function($data);        // call function name($data);
}

function view(&$data)
{
    $data['employee_data'] = m_get_data();// ter ka rak sa tok data in variable 'employee_data' derm 3 tok use in view
    $data['page'] = "employee/view";
}

function add(&$data)
{   
    $add_data['add_data'] = m_add_employee();
    $data['page'] = "employee/add";
}

function update(&$data)
{
  $data['data_employee'] =  m_employee_detail();
  $data['page']="employee/update";
}
function detail(&$data){

    $data['page']="employee/detail";
}
function delete(&$data) 
{
   $data_delete= m_delete_employee();
   if($data_delete){
    header('Location:index.php?action=view');
   }else{
       echo "cannot";
   }
   
}
function login(&$data){
    $data['page']='login';
}
function loginValidation(&$data){
    validateFromDb();
}
function logout(&$data){
    logoutForm();
}
function registerForm1(&$data){
    registerFormDb();
}
function register(&$data){
    $data['page']='registerForm';
}

function registerForm(&$data){
    formRegister();
}



