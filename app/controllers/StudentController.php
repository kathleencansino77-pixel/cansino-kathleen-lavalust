<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class StudentController extends Controller
{
    public function index()
{
    if (session_status() !== PHP_SESSION_ACTIVE) {
        session_start();
    }

    $_SESSION['student_access'] = true;
    $data['title'] = 'Student Dashboard';
    $this->call->view('home', $data);
}

    public function profile()
    {
        $student = [
            'student_id'  => 'MCC2024 - 00041',
            'name'        => 'Kathleen M. Cansino',
            'course'      => 'BS Information Technology',
            'year'        => '3rd Year',
            'section'     => 'F1',
            'email'       => 'kathleencansino77@gmail.com',
            'address'     => 'Masipit, Calapan City',
            'contact'     => '0991-085-0962',
            'skills'      => 'web development, cooking',
            'hobbies'     => 'watching, reading, coffee',
            'description' => 'Dedicated, passionate, and very KIND person.',
            'facebook'    => 'https://www.facebook.com/itz.katlinn',
            'instagram'   => 'https://www.instagram.com/ka1h.ztx_/',
            'github'      => 'https://github.com/kathleencansino77-pixel'
        ];

        $this->call->view('profile', $student);
    }
}