<?php

namespace APP\Controllers;

/**
 * Class Auth
 *
 * @property Ion_auth|Ion_auth_model $ion_auth      The ION Auth spark
 * @package  CodeIgniter-Ion-Auth
 * @author   Ben Edmunds <ben.edmunds@gmail.com>
 * @author   Benoit VRIGNAUD <benoit.vrignaud@zaclys.net>
 * @license  https://opensource.org/licenses/MIT	MIT License
 */
class Auth extends \IonAuth\Controllers\Auth
{

    /**
     * Validation list template.
     *
     * @var string
     * @see https://bcit-ci.github.io/CodeIgniter4/libraries/validation.html#configuration
     */
    protected $validationListTemplate = 'list';

    /**
     * Views folder
     * Set it to 'auth' if your views files are in the standard application/Views/auth
     *
     * @var string
     */
    protected $viewsFolder = 'auth';
}