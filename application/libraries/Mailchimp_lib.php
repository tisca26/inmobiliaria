<?php

include('mailchimp/mailchimp.php');

use \DrewM\MailChimp\MailChimp;

class Mailchimp_lib
{
    protected $CI;
    private $api_key;
    private $default_list;

    public function __construct()
    {
        $this->CI =& get_instance();
        $this->api_key = "d9d9c28af089947c2a48e163a2c7a2f6-us16";
        $this->default_list = "a8a4da30d9";
    }

    public function alta_en_lista_json($list_id = '', $mail = '', $fname = '', $lname = '')
    {
        $MailChimp = new MailChimp($this->api_key);
        $list_id = ($list_id != '')? $list_id : $this->default_list;
        $result = $MailChimp->post('lists/' . $list_id . '/members', array(
            'email_address' => $mail,
            'merge_fields'  => array('FNAME'=>$fname, 'LNAME'=>$lname), // Step 3 (Optional) - Vars - More Information - http://kb.mailchimp.com/merge-tags/using/getting-started-with-merge-tags
            'status' 		=> 'subscribed'
        ));

        log_message('debug', $mail . ' aqui ' . $fname);
        log_message('debug', $result['detail'] . ' aqui2 ');
        if ($result['id'] != '') {
            $arrResult = array('response'=>'success');
        } else {
            $arrResult = array('response'=>'error','message'=>$result['detail']);
        }

        echo json_encode($arrResult);
    }
}