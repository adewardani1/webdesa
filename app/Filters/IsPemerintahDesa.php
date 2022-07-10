<?php

namespace App\Filters;

use CodeIgniter\Filters\FilterInterface;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;

class IsPemerintahDesa implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {

        $session = session();
        if (!$session->get('isPemerintahDesa')) {
            $session->setFlashdata('back', true);
            return redirect()->to('sides/pemerintah-desa');
        }
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // Do something here
    }
}
