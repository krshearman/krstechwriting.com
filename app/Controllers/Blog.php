<?php

namespace App\Controllers;


use App\Models\BlogModel;
class Blog extends BaseController
{

    public function post($slug = null)
    {
        $sess = session();
        $sess->start();

        $slug = $_GET["name"];

        $model = new BlogModel();
        $data['news'] = $model->getPost($slug);

        echo view('templates/stdheader', $data);
        echo view('blog/post');
        echo view('templates/stdfooter');
    }

}