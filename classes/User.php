<?php
session_start();
require_once('DB.php');
class User{
    private $db;

    public function login($user, $password)
    {
        // $password = md5($password);
        // $type = substr($user,0,1);
        $db = new DB();
        $con = $db->getConnection();
        $password = md5($password);
        $sql = "SELECT * FROM user WHERE username=:username AND password=:password";
        $stm = $con->prepare($sql);

        $stm->bindParam(':password', $password, PDO::PARAM_STR);
        $stm->bindParam(':username', $user, PDO::PARAM_STR);
        $stm->execute();
        $count = $stm->rowCount();
        $stmt = $stm ->fetchObject();
        if($count  > 0){
            $_SESSION['user_id'] = $stmt ->user_id;
            $_SESSION['username'] = $stmt ->username;
            $_SESSION['access_level'] = $stmt ->access_level;
            
            return 1;                   
        }else
            return -1;
    }
    public function register($username, $password,$fullname,$phone,$email)
    {
        // $password = md5($password);
        // $type = substr($user,0,1);
        $db = new DB();
        $con = $db->getConnection();
        $sql = "SELECT * FROM user WHERE username=:username";
        $stm = $con->prepare($sql);

        $stm->bindParam(':username', $username, PDO::PARAM_STR);
        $stm->execute();
        $count = $stm->rowCount();
        $stmt = $stm ->fetchObject();
        if($count  > 0){
            // $_SESSION['login_id'] = $stmt ->login_id;
            // $_SESSION['username'] = $stmt ->jamb_no;
            // $_SESSION['access_level'] = $stmt ->role;
            
            return "Error! Username already exist.";         
        }else{
            $sql = "INSERT INTO user (username,email,name,phone,password)
                    VALUE (:username,:email,:fullname,:phone,:password)";
            $stm = $con->prepare($sql);
            $password = md5($password);
            $stm->bindParam(':password', $password, PDO::PARAM_STR);
            $stm->bindParam(':username', $username, PDO::PARAM_STR);
            $stm->bindParam(':email', $email, PDO::PARAM_STR);
            $stm->bindParam(':phone', $phone, PDO::PARAM_STR);
            $stm->bindParam(':fullname', $fullname, PDO::PARAM_STR);
            $stm->execute();
            $count = $stm->rowCount();
            // $id = $stm->lastInsertId();
            // $stmt = $stm ->fetchObject();
            if ($stm) {               
                
                return "Success! Account successfully created.";
            }else
                return "Error! Cannot create account, contact system admin";
        }
    }
    public function fuzzy($an,$n,$d,$f,$j,$w,$e,$h,$v,$jp,$la)
    {
        // 001
        if ($an ==2 && $n  ==3 && $d==3 && $f==4 && $j ==3 && $w ==3 
            && $e == 3 && $h==3 && $v==3 && $jp ==3 && $la==3    
        ) {
            return 4;
        }
        //002
        elseif ($an ==2 && $n  ==1 && $d==3 && $f==3 && $j ==1 && $w ==3 
            && $e == 1 && $h==2 && $v==1 && $jp ==1 && $la==3    
        ) {
            return 3;
        }
        // 003
        elseif ($an ==2 && $n ==1 && $d==3 && $f==2 && $j ==1 && $w ==3 
            && $e == 1 && $h==1 && $v==1 && $jp ==1 && $la==2   
        ) {
            return 2;
        }
        // 004
        elseif ($an ==1 && $n  ==1 && $d==3 && $f==1 && $j ==1 && $w ==1 
            && $e == 1 && $h==1 && $v==1 && $jp ==2 && $la==1  
        ) {
            return 1;
        }
        // 005
        elseif ($an ==2 && $n  ==2 && $d==4 && $f==1 && $j ==1 && $w ==2
            && $e == 2 && $h==4 && $v==2 && $jp ==1 && $la==1    
        ) {
            return 4;
        }
        // 006 
        elseif ($an ==2 && $n  ==1 && $d==2 && $f==2 && $j ==1 && $w ==2 
            && $e == 1 && $h==1 && $v==2 && $jp ==2 && $la==1   
        ) {
            return 2;
        }
        // 007
        elseif ($an ==1 && $n  ==2 && $d==1 && $f==1 && $j ==1 && $w ==2
            && $e == 2 && $h==1 && $v==2 && $jp ==1 && $la==1 
        ) {
            return 1;
        }
        // 008
        elseif ($an ==2 && $n  ==2 && $d==2 && $f==2 && $j ==1 && $w ==2 
            && $e == 1 && $h==2 && $v==2 && $jp ==2 && $la==2   
        ) {
            return 2;
        }
        // 009
        elseif ($an ==2 && $n  ==2 && $d==2 && $f==1 && $j ==1 && $w ==3
            && $e == 1 && $h==2 && $v==1 && $jp ==2 && $la==2   
        ) {
            return 3;
        }
        // 010 
        elseif ($an ==2 && $n  ==2 && $d==2 && $f==2 && $j ==2 && $w ==2
            && $e == 2 && $h==2 && $v==2 && $jp ==2 && $la==2    
        ) {
            return 4;
        }
        // 011
        elseif ($an ==1 && $n  ==2 && $d==1 && $f==1 && $j ==1 && $w ==1
            && $e == 2 && $h==1 && $v==2 && $jp ==1 && $la==2   
        ) {
            return 1;
        }
        // 012
        elseif ($an ==3 && $n  ==4 && $d==4 && $f==2 && $j ==3 && $w ==3 
            && $e == 3 && $h==4 && $v==1 && $jp ==2 && $la==3    
        ) {
            return 4;
        }
        // 013
        elseif ($an ==2 && $n  ==2 && $d==4 && $f==1 && $j ==1 && $w ==2 
            && $e == 2 && $h==4 && $v==2 && $jp ==1 && $la==1 
        ) {
            return 4;
        }
        // 014
        elseif ($an ==2 && $n  ==1 && $d==3 && $f==4 && $j ==3 && $w ==4
            && $e == 2 && $h==2 && $v==2 && $jp ==1 && $la==1    
        ) {
            return 4;
        }
        // 015
        elseif ($an ==2 && $n  ==1 && $d==1 && $f==1 && $j ==1 && $w ==3 
            && $e == 1 && $h==1 && $v==2 && $jp ==1 && $la==3    
        ) {
            return 3;
        }
        // 016
        elseif ($an ==3 && $n  ==2 && $d==2 && $f==3 && $j ==3 && $w ==3 
            && $e == 3 && $h==3 && $v==3 && $jp ==3 && $la==2  
        ) {
            return 4;
        }
        // 017
        elseif ($an ==2 && $n  ==1 && $d==1 && $f==1 && $j ==1 && $w ==2
            && $e == 1 && $h==2 && $v==2 && $jp ==1 && $la==2  
        ) {
            return 2;
        }
        // 018
        elseif ($an ==2 && $n  ==2 && $d==1 && $f==1 && $j ==2 && $w ==3 
            && $e == 3 && $h==3 && $v==3 && $jp ==2 && $la==2  
        ) {
            return 3;
        }
        // 019
        elseif ($an ==2 && $n  ==3 && $d==3 && $f==3 && $j ==3 && $w ==3 
            && $e == 3 && $h==3 && $v==3 && $jp ==3 && $la==3 
        ) {
            return 4;
        }
        // 020
        elseif ($an ==2 && $n  ==2 && $d==3 && $f==2 && $j ==1 && $w ==2
            && $e == 3 && $h==2 && $v==2 && $jp ==2 && $la==2   
        ) {
            return 2;
        }
        
        
        
        else {
            return 0;
        }
        
    }
    public function getFuzzy($an,$n,$d,$f,$j,$w,$e,$h,$v,$jp,$la)
    {
        // $password = md5($password);
        // $type = substr($user,0,1);
        $user_id = $_SESSION['user_id'];
        $db = new DB();
        $con = $db->getConnection();
        $sql = "SELECT * FROM knowledge_base WHERE anemia='$an' AND nausea='$n' AND dizziness='$d'
                AND fever='$f' AND jaundice='$j' AND body_weekness='$w' AND liver_enlarge='$e'
                AND headache='$h' AND joint_pain='$jp' AND vomitting='$v' AND appatite_loss='$la'
        ";
        $stm = $con->prepare($sql);
        $stm->execute();
        $count = $stm->rowCount();
        // $stmt = $stm ->fetchObject();
        if($count  > 0){
            $row = $stm->fetchObject();
            $sql2 = "INSERT INTO history (user_id,anemia,nausea,dizziness,fever, jaundice, body_weekness, liver_enlarge,
             headache, vomitting,joint_pain, appatite_loss,result) VALUES ('$user_id', '$an','$n','$d',
                '$f','$j','$w','$e',
                '$h','$v','$jp','$la','$row->result')
            ";
            $stm2 = $con->prepare($sql2);
            $stm2->execute();
                return $row;         
            }else{
                // $row = $stm->fetchObject();
                $sql2 = "INSERT INTO history (user_id,anemia,nausea,dizziness,fever, jaundice, body_weekness, liver_enlarge,
                headache, vomitting, joint_pain, appatite_loss,result) VALUES ('$user_id', '$an','$n','$d','$f','$j','$w','$e','$h','$v','$jp','$la','Normal')
                ";
                $stm2 = $con->prepare($sql2);
                $stm2->execute();
                return $this->fuzzy($an,$n,$d,$f,$j,$w,$e,$h,$v,$jp,$la); 
            }
    }
    public function getResult($var)
    {
        if ($var ==4) {
            return "Very High";
        }elseif($var ==3){
            return "High";

        }
        elseif($var ==2){
            return "Average";
        }elseif($var ==1){
            return "Low";
        }else{
                return "Normal";    
        }
    }
    
    public function getHistory($id)
    {
        // $password = md5($password);
        // $type = substr($user,0,1);
        // $user_id = $_SESSION['user_id'];
        $db = new DB();
        $con = $db->getConnection();
        $sql = "SELECT * FROM `history` h INNER JOIN user u ON h.user_id = u.user_id
        WHERE u.user_id = '$id'";
        $stm = $con->prepare($sql);
        $stm->execute();
        $count = $stm->rowCount();
        // $stmt = $stm ->fetchObject();
        $r = '';
        $sn =0;
        if($count  > 0){
            while ($row = $stm->fetch(PDO::FETCH_ASSOC)) {
                $sn++;
                $r .='
                    <tr>
                        <td>'.$sn.'</td>
                        <td>'.$row['name'].'</td>
                        <td>'.$row['date'].'</td>
                        <td>'.$this->getResult($row['result']).'</td>
                    </tr>
                ';
            } 
            return $r;

            }else{
                return ' <tr>
                <td>No records found.</td>                
            </tr>'; 
            }
    }
    public function getKnowledge()
    {
        // $password = md5($password);
        // $type = substr($user,0,1);
        // $user_id = $_SESSION['user_id'];
        $db = new DB();
        $con = $db->getConnection();
        $sql = "SELECT * FROM knowledge_base";
        $stm = $con->prepare($sql);
        $stm->execute();
        $count = $stm->rowCount();
        // $stmt = $stm ->fetchObject();
        $r = '';
        $sn =0;
        if($count  > 0){
            while ($row = $stm->fetch(PDO::FETCH_ASSOC)) {
                $sn++;
                $r .='
                    <tr>
                        <td>'.$sn.'</td>
                        <td>
                            Anemia ('.$this->getResult($row['anemia']).'), 
                            Nausea ('.$this->getResult($row['nausea']).'), 
                            Dizziness ('.$this->getResult($row['dizziness']).'), 
                            Fever ('.$this->getResult($row['fever']).'), 
                            Body Weakness ('.$this->getResult($row['body_weekness']).'), 
                            Enlarge Liver ('.$this->getResult($row['liver_enlarge']).'), 
                            Headache ('.$this->getResult($row['headache']).'), 
                            Vomitting ('.$this->getResult($row['vomitting']).'), 
                            Joint pain ('.$this->getResult($row['joint_pain']).'), 
                            Loss of Appatite ('.$this->getResult($row['appatite_loss']).'), 
                        </td>
                        <td>'.$this->getResult($row['result']).'</td>
                        <td>'.$row['prescription'].'</td>
                        <td>
                            <a href="editKnowledge.php?knowledge='.$row['knowledge_id'].'" class="text-info">Edit</a>
                            <a href="deleteKnowledge.php?knowledge='.$row['knowledge_id'].'" class="text-danger">Delete</a>
                        </td>

                    </tr>
                ';
            } 
            return $r;

            }else{
                return ' <tr>
                <td>No records found.</td>                
            </tr>'; 
            }
    }
    public function getDiagnosisHistory()
    {
        // $password = md5($password);
        // $type = substr($user,0,1);
        // $user_id = $_SESSION['user_id'];
        $db = new DB();
        $con = $db->getConnection();
        $sql = "SELECT * FROM `history` h INNER JOIN user u ON h.user_id = u.user_id ORDER BY date DESC";
        $stm = $con->prepare($sql);
        $stm->execute();
        $count = $stm->rowCount();
        // $stmt = $stm ->fetchObject();
        $r = '';
        $sn =0;
        if($count  > 0){
            while ($row = $stm->fetch(PDO::FETCH_ASSOC)) {
                $sn++;
                $r .='
                    <tr>
                        <td>'.$sn.'</td>
                        <td>'.$row['name'].'</td>
                        <td>
                            Anemia ('.$this->getResult($row['anemia']).'), 
                            Nausea ('.$this->getResult($row['nausea']).'), 
                            Dizziness ('.$this->getResult($row['dizziness']).'), 
                            Fever ('.$this->getResult($row['fever']).'), 
                            Body Weakness ('.$this->getResult($row['body_weekness']).'), 
                            Enlarge Liver ('.$this->getResult($row['liver_enlarge']).'), 
                            Headache ('.$this->getResult($row['headache']).'), 
                            Vomitting ('.$this->getResult($row['vomitting']).'), 
                            Joint pain ('.$this->getResult($row['joint_pain']).'), 
                            Loss of Appatite ('.$this->getResult($row['appatite_loss']).'), 
                        </td>
                        <td>'.$row['prescription'].'</td>
                        <td>'.$row['date'].'</td>
                        
                    </tr>
                ';
            } 
            return $r;

            }else{
                return ' <tr>
                <td>No records found.</td>                
            </tr>'; 
            }
    }

    public function dropDownLevel($var)
    {
        # code...
        $r = '';
        if ($var == 4) {
            $r .= '
                <option value="1">Low</option>
                <option value="2">Average</option>
                <option value="3">High</option>
                <option value="4" selected>Very high</option>
            ';
        }elseif ($var == 3) {
            # code...
            $r .= '
                <option value="1">Low</option>
                <option value="2">Average</option>
                <option value="3" selected>High</option>
                <option value="4" >Very high</option>
            ';
        }
        elseif ($var == 2) {
            # code...
            $r .= '
                <option value="1">Low</option>
                <option value="2" selected>Average</option>
                <option value="3" >High</option>
                <option value="4" >Very high</option>
            ';
        }
        elseif ($var == 3) {
            # code...
            $r .= '
                <option value="1" selected>Low</option>
                <option value="2">Average</option>
                <option value="3">High</option>
                <option value="4">Very high</option>
            ';
        }else{
            $r .= '
                <option value="1" >Low</option>
                <option value="2">Average</option>
                <option value="3">High</option>
                <option value="4">Very high</option>
            ';
        }
        return $r;
    }
    public function saveKnowledge($an,$n,$d,$f,$j,$w,$e,$h,$v,$jp,$la,$result,$prescription)
    {
        // $password = md5($password);
        // $type = substr($user,0,1);
        // $user_id = $_SESSION['user_id'];
        $db = new DB();
        $con = $db->getConnection();
        
        $sql2 = "INSERT INTO knowledge_base (anemia,nausea,dizziness,fever, jaundice, body_weekness,
         liver_enlarge,headache, vomitting,joint_pain, 
             appatite_loss,result,prescription) VALUES ('$an','$n','$d',
                '$f','$j','$w','$e',
                '$h','$v','$jp','$la','$result','$prescription')
            ";
            $stm2 = $con->prepare($sql2);
            $stm2->execute();
            if ($stm2) {
                return 1;
            }else{
                return -1;
            }
            
                
    }
    public function getKnowledgeArray($id)
    {
        // $password = md5($password);
        // $type = substr($user,0,1);
        // $user_id = $_SESSION['user_id'];
        // echo $id;
        $db = new DB();
        $con = $db->getConnection();
        $sql = "SELECT * FROM knowledge_base WHERE knowledge_id='$id'";
        $stm = $con->prepare($sql);
        $stm->execute();
        $count = $stm->rowCount();
        // $stmt = $stm ->fetchObject();
        $r = '';
        $sn =0;
        if($count  > 0){
            $row = $stm->fetch(PDO::FETCH_ASSOC);
            return $row;
        }
        else{
            return $id;
        }
            
    }
    public function updateKnowledge($knowledge,$an,$n,$d,$f,$j,$w,$e,$h,$v,$jp,$la,$result,$prescription)
    {
        // $password = md5($password);
        // $type = substr($user,0,1);
        // $user_id = $_SESSION['user_id'];
        $db = new DB();
        $con = $db->getConnection();
        $sql2 = "UPDATE knowledge_base SET anemia='$an',nausea='$n',dizziness='$d',fever='$f',
         jaundice='$j', body_weekness='$w',liver_enlarge ='$e',headache='$h', vomitting='$v',
         joint_pain='$jp', appatite_loss='$la',result='$result',prescription='$prescription'
            WHERE knowledge_id = '$knowledge'
            ";
            $stm2 = $con->prepare($sql2);
            $stm2->execute();
            //  $knowledge;
            // echo $stm2->rowCount();
            if ($stm2) {
                return 1;
            }else{
                return -1;
            }
            // return $knowledge;
                
    }
    public function deleteKnowledge($knowledge)
    {
        // $password = md5($password);
        // $type = substr($user,0,1);
        // $user_id = $_SESSION['user_id'];
        $db = new DB();
        $con = $db->getConnection();
        $sql2 = "DELETE FROM knowledge_base 
            WHERE knowledge_id = '$knowledge'
            ";
            $stm2 = $con->prepare($sql2);
            $stm2->execute();
            //  $knowledge;
            // echo $stm2->rowCount();
            if ($stm2) {
                return 1;
            }else{
                return -1;
            }
            // return $knowledge;
                
    }
    public static function is_authenticated() {
        if(isset($_SESSION) && isset($_SESSION['username'])){
            return true;
        }
        else{
            header('location: logout.php');
        }
    }

    public static function isAdmin() {
        if (isset($_SESSION['access_level']) && $_SESSION['access_level'] == 1) {
            return true;
        }else {
            header('location:logout.php');
        }
    }
    public static function isPatient() {
        if (isset($_SESSION['access_level']) && $_SESSION['access_level'] == 0) {
            return true;
        }else {
            header('location:logout.php');
        }
    }
    
    
}


