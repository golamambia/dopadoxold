<?php

namespace App\Admin;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Headefooter extends Authenticatable
{

   protected $table = "footer_details";
    protected $primaryKey = "fd_id";
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        "fd_id",
        "fd_about",
        "fd_address_title",
        "fd_address_icon",
        "fd_address_details",
        "fd_facebook",
        "fd_facebook_icon",
        "fd_instagram",
        "fd_instagram_icon",
        "fd_linkedin",
        "fd_linkedin_icon",
        "fd_email",
        "fd_email_icon",
        "fd_contact",
        "fd_contact_icon",
        
    ];
}
