<?php
    $voters = new Datavoters();
    if(isset($_GET['query'])){
        $voters->$_GET['voters']();
    }
    class Datavoters {
        
        function __construct(){
            if(!isset($_SESSION['v_id'])){
                header('location:../../');   
            }
        }
        
        //get all student info
        function getvoters($search){
            $query = "SELECT * FROM voters where VPN like '%$search%' or prec like '$search'or name like '%$search%' order by name,prec,VPN";
            $result = mysql_query($query);
            
            return $result;
        }
        
        //get class by ID
        function getvotersbyvpn($VPN){
            $query = "SELECT * FROM voters where VPN=$VPN";
            $result = mysql_query($query);
            
            return $result;
        }
	}
?>