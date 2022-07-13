<?php

namespace App\Filters;

use CodeIgniter\Filters\FilterInterface;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;

class IsVisiMisi implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {

        $session = session();
        if ($session->get('isVisiMisi')) {
            $session->setFlashdata('back', true);
            return redirect()->to('sides/visimisi');
        }
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // Do something here
    }
}
