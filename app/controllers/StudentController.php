<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class StudentController extends Controller
{
    // =========================
    // PUBLIC HOME
    // =========================
    public function index()
    {
        $data['title'] = 'Student Home';

        $this->call->view('home', $data);
    }


    // =========================
    // LOGIN PAGE
    // =========================
    public function login()
    {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }

        // Kapag naka-login na, diretso profile
        if (
            isset($_SESSION['student_access']) &&
            $_SESSION['student_access'] === true
        ) {
            redirect('student/profile');
            exit;
        }

        $this->call->view('login');
    }


    // =========================
    // PROCESS LOGIN
    // =========================
    public function authenticate()
    {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }

        $username = $this->io->post('username');
        $password = $this->io->post('password');

        // LOGIN CREDENTIALS
        if ($username === 'student' && $password === '12345') {

            $_SESSION['student_access'] = true;

            redirect('student/profile');
            exit;

        } else {

            $data['error'] = 'Invalid username or password.';

            $this->call->view('login', $data);
        }
    }


    // =========================
    // LOGOUT
    // =========================
    public function logout()
    {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }

        // Remove student login session
        unset($_SESSION['student_access']);

        // Back to PUBLIC HOME
        redirect('student');
        exit;
    }


    // =========================
    // PROTECTED PROFILE
    // =========================
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