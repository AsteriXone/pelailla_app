# pelailla_app
Proyecto

# Structura y archivos
/pelailla_app/.
│── /app/.
│   ├── /controllers/.
│   │   ├── HomeController.php.
│   │   ├── UserController.php
│   ├── /models/
│   │   ├── User.php
│   ├── /views/
│   │   ├── home.php
│   │   ├── login.php
│   │   ├── register.php
│── /public/
│   ├── index.php
│── /core/
│   ├── Router.php
│   ├── Controller.php
│   ├── Model.php
│── .htaccess
│── config.php
│── db.sql


# /* Estructura base del proyecto PHP con MVC */

## 1. ARCHIVO PRINCIPAL (public/index.php)

require_once '../core/Router.php';
require_once '../core/Controller.php';
require_once '../core/Model.php';
require_once '../config.php';

$router = new Router();
$router->run();

## 2. CONFIGURACIÓN BASE DE DATOS (config.php)

define('DB_HOST', 'localhost');
define('DB_NAME', 'mi_app');
define('DB_USER', 'root');
define('DB_PASS', '');

## 3. RUTEO BÁSICO (core/Router.php)

class Router {
    public function run() {
        $url = isset($_GET['url']) ? $_GET['url'] : 'home';
        $url = rtrim($url, '/');
        $url = filter_var($url, FILTER_SANITIZE_URL);
        $parts = explode('/', $url);
        
        $controllerName = ucfirst($parts[0]) . 'Controller';
        $method = isset($parts[1]) ? $parts[1] : 'index';
        
        require_once "../app/controllers/$controllerName.php";
        $controller = new $controllerName();
        $controller->$method();
    }
}

## 4. CONTROLADOR BASE (core/Controller.php)

class Controller {
    public function view($view, $data = []) {
        extract($data);
        require_once "../app/views/$view.php";
    }
}

## 5. MODELO BASE (core/Model.php)

class Model {
    protected $db;
    public function __construct() {
        $this->db = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME, DB_USER, DB_PASS);
    }
}

## 6. CONTROLADOR HOME (app/controllers/HomeController.php)

class HomeController extends Controller {
    public function index() {
        $this->view('home');
    }
}

## 7. CONTROLADOR USUARIO (app/controllers/UserController.php)

require_once '../app/models/User.php';

class UserController extends Controller {
    public function login() {
        $this->view('login');
    }
    public function authenticate() {
        session_start();
        $user = new User();
        if ($user->checkLogin($_POST['email'], $_POST['password'])) {
            $_SESSION['user'] = $_POST['email'];
            header('Location: /home');
        } else {
            echo "<p>Error en login</p>";
        }
    }
    public function logout() {
        session_start();
        session_destroy();
        header('Location: /');
    }
}

## 8. MODELO USUARIO (app/models/User.php)

class User extends Model {
    public function checkLogin($email, $password) {
        $stmt = $this->db->prepare("SELECT * FROM users WHERE email = ? AND password = ?");
        $stmt->execute([$email, md5($password)]);
        return $stmt->fetch();
    }
}

## 9. VISTA HOME (app/views/home.php)

<!DOCTYPE html>
<html>
<head><title>Inicio</title></head>
<body>
    <h1>Bienvenido</h1>
    <a href="/user/login">Login</a>
</body>
</html>

## 10. VISTA LOGIN (app/views/login.php)

<!DOCTYPE html>
<html>
<head><title>Login</title></head>
<body>
    <h1>Iniciar sesión</h1>
    <form action="/user/authenticate" method="POST">
        <input type="email" name="email" placeholder="Email" required>
        <input type="password" name="password" placeholder="Contraseña" required>
        <button type="submit">Entrar</button>
    </form>
</body>
</html>

# Primera prueba
http://localhost/pelailla_app/public/
