<?php
class ShareModel extends Model{
    public function Index() {
        $this->query('SELECT shares.id, userId, title, body, link,createDate, Name FROM shares JOIN users on shares.userId = users.id ORDER BY createDate DESC');
        $rows = $this->resultSet();
        return $rows;
    }
    
    public function add(){
        //Sanitize POST
        $post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
        
        if($post['submit']){
            //Insert into mysql
            $this->query('INSERT INTO shares(title, body, link, userId) VALUES (:title, :body, :link, :userId)');
            $this->bind(':title', $post['title']);
            $this->bind(':body', $post['body']);
            $this->bind(':link', $post['link']);
            $this->bind(':userId', $_SESSION['userData']['id']);
            $this->execute();
            
            //Verify
            if($this->lastInsertId()){
                header('Location: '.ROOT_URL.'shares');
            }
            return;

        }
    }
}