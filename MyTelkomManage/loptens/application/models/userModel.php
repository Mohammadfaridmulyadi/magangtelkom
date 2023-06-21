<?php
class UserModel extends CI_Model {

    public function getUserById($userId) {
        return $this->db->get_where('user', ['id_user' => $userId])->row();
    }

}
?>