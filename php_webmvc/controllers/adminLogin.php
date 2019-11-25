
<?php
    include '../config/session.php';
    Session::checkLogin(); 
    include '../config/database.php';
    include '../helpers/format.php';
    

?>  
<?php
    class adminLogin  
    {   
        private $db ;
        private $fm ;
        function __construct(){
            $this->db = new Database();
            $this->fm = new Format();
        }

        public function login_admin($adminUser, $adminPass){
           
            $adminUser = $this->fm->validation($adminUser);  
            $adminPass = $this->fm->validation($adminPass);

            $adminUser = mysqli_real_escape_string($this->db->link,$adminUser);
            $adminPass = mysqli_real_escape_string($this->db->link,$adminPass);

            if(empty($adminUser)||empty($adminPass)){
                $alert = "User or pass empty";
                return $alert;
            }else {
                $query ="SELECT * FROM tbl_admin WHERE ad_user = '$adminUser' and admin_pass ='$adminPass' limit 1";
                $result = $this->db->select($query);
                if($result != false){
                    $value = $result->fetch_assoc();
                    Session::set('login', true);
                    Session::set('adminID', $value['ad_id']);
                    Session::set('adminUser', $value['ad_user']);
                    Session::set('adminName', $value['ad_name']);
                    //Session::set('adminID', $value['ad_id']);
                    header('Location:index.php');
                }else {
                    $alert ="User or pass not match";
                    return $alert;
                }
            }
        }
    }
    

?>