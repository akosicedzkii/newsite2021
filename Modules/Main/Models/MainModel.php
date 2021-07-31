<?php

namespace App\Models;
use CodeIgniter\Model;

class MainModel extends Model
{
    protected $table = 'site_settings';
    protected $primaryKey = 'id';
    protected $allowedFields = ["site_name","site_logo","company_address","contact_number","fax_number","contact_us_email_address","facebook_url","instagram_url","twitter_url","franchise_email_address","contact_us_subject_reply","careers_email_address","contact_us_body_reply","franchise_body_reply","careers_body_reply","franchise_subject_reply","careers_subject_reply","site_icon","franchise_video","franchise_video_poster","careers_attachment","franchise_officer","mid_banner_image","paypal_button"];
}