<?php
    class News extends Controller{
        function index(){
            $layout = $this->view("layouts/application", ["page"=>"application/News/index", "header"=>"shared/header", "footer"=>"shared/footer"]);
            echo $layout;
        }
        
        function blog($id){
            switch ($id) {
                case 1:
                    $layout = $this->view("layouts/application", ["page"=>"application/News/page-blog-1", "header"=>"shared/header", "footer"=>"shared/footer"]);
                    break;
                case 2:
                    $layout = $this->view("layouts/application", ["page"=>"application/News/page-blog-2", "header"=>"shared/header", "footer"=>"shared/footer"]);
                    break;
                case 3:
                    $layout = $this->view("layouts/application", ["page"=>"application/News/page-blog-3", "header"=>"shared/header", "footer"=>"shared/footer"]);
                    break;
                default:
                    
                    break;
            }
            echo $layout;

        }
    }
