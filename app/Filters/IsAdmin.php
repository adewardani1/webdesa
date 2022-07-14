<?php

namespace App\Filters;

use CodeIgniter\Filters\FilterInterface;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;

class IsAdmin implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {

        $session = session();
        if ($session->get('level') === 'Admin') {
            $session->setFlashdata('akses', true);
            return redirect()->to('sides');
        }
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // Do something here
    }
}
