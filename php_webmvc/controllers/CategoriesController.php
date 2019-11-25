
<?php
    
    include '../config/database.php';
    include '../helpers/format.php';
    

?>  
<?php
    class CategoriesController  
    {   
        private $db ;
        private $fm ;
        function __construct(){
            $this->db = new Database();
            $this->fm = new Format();
        }

        public function insertCat($cateName){
           
            $cateName = $this->fm->validation($cateName);  
            

            $cateName = mysqli_real_escape_string($this->db->link,$cateName);
            

            if(empty($cateName)){
                $alert = "Category empty";
                return $alert;
            }else {
                $query ="INSERT INTO tbl_category(ct_name) values('$cateName')";
                $result = $this->db->insert($query);
                if($result){
                    $alert = "thanh cong"; 
                    return $alert; 
                }
                else {
                    $alert = "that bai"; 
                    return $alert; 
                }
            }
        }

        public function showCategory(){
            $query ="SELECT * FROM tbl_category  order by ct_id desc";
            $result = $this->db->select($query);    
            return   $result;
            
        }
    }
    

?>