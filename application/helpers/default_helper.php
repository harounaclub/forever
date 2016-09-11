<?php



// ------------------------------------------------------------------------

/**
 * Check admin is login or not
 *
 * 
 * 
 *
 * @access	public
 * @param	string
 * @return	bool
 */
if (!function_exists('is_admin')) {

    function is_admin() {

        $object = &get_instance();

        if ($object->session->userdata('is_admin_login') != true) {
            redirect(base_url(), 'refresh');
        }
    }

}
// ------------------------------------------------------------------------

/**
 * Check admin is login or not
 *
 * 
 * 
 *
 * @access	public
 * @param	string
 * @return	bool
 */
if (!function_exists('logged_in')) {

    function logged_in() {

        $object = &get_instance();

        if ($object->session->userdata('utilisateur_id') == false) {
            redirect('utilisateur/login', 'refresh');
        }
    }

}

if (!function_exists('youtube_embed')) {

    function youtube_embed($lien) {

        $object = &get_instance();
        $strArray = explode('=', $lien);
        return $strArray[1];

    }

}

if (!function_exists('publicite1')) {

    function publicite1() {
        $CI = &get_instance();
        $CI->db->select('*');
        $CI->db->from('publicite');
        $CI->db->join('client','client.client_id = publicite.client_id');
        $CI->db->join('pub_position','pub_position.pub_position_id = publicite.position_id');
        $CI->db->where('pub_position.pub_position_nom','TOP BANNER');
        $CI->db->where('publicite.publicite_status','1');
        $q = $CI->db->get();
        return $q->result();
    }

}