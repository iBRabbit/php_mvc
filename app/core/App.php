<?php  

class App {

    protected $controller = 'Home';
    protected $method = 'index';
    protected $params = [];

    public function __construct()
    {
        $url = $this -> parseURL();
        
        // Masukkan value ke controlller
        if(file_exists('../app/controllers/' . $url[0] . '.php')) { // ada gak x.php di controller?
            $this -> controller = $url[0];
            unset($url[0]); // ilangin index controller
        }

        require_once '../app/controllers/' . $this -> controller . '.php'; 
        $this -> controller = new $this -> controller; // di inisiasi biar bisa dipake methodnya

        // Masukkan value ke method
        if(isset($url[1])) { 
            if(method_exists($this -> controller, $url[1])) { // ada gak methodnya?
                $this -> method = $url[1];
                unset($url[1]);
            } 
        }

        if(!empty($url)) 
            $this -> params = array_values($url);

        // Jalankan controller & method, kirim params jika ada
        call_user_func_array([$this -> controller, $this -> method], $this -> params);

    }

    public function parseURL() {
        if(isset($_GET['url'])) {
            $url = rtrim($_GET['url'], '/'); 
            $url = filter_var($url, FILTER_SANITIZE_URL); // supaya url bersih dari karakter aneh
            $url = explode('/', $url);
            return $url;
        }
    }

}