<?php
/**
 * Class Application
 * @package Core
 * @author Ruan viviers
 *
 */

namespace App\Core;

class Application
{

    public static string $ROOT_DIR;

    public string $userClass;
    public Router $router;
    public Request $request;
    public Response $response;
    public Database $db;
    public Session $session;
    public static Controller $controller;
    public static Application $app;
    public ?DbModel $user;

    public function __construct($rootPath, array $config)
    {
        $this->userClass = $config['userClass'];
        self::$app = $this;
        self::$ROOT_DIR = $rootPath;
        $this->request = new Request();
        $this->response = new Response();
        $this->router = new Router($this->request, $this->response);
        $this->session = new Session();

        $this->db = new Database($config['db']);

        $primaryValue = $this->session->get('user');
        if ($primaryValue) {
            $primaryKey = $this->userClass::primaryKey();
            $this->user = $this->userClass::findOne([$primaryKey => $primaryValue]);
        }
        else {
            $this->user = null;
        }

        $this->userClass::findOne(['id' => $primaryValue]);
    }

    /**
     * @return Controller
     */
    public static function getController(): Controller
    {
        return self::$controller;
    }

    /**
     * @param Controller $controller
     */
    public static function setController(Controller $controller): void
    {
        self::$controller = $controller;
    }

    public static function isGuest(): bool
    {
        return !self::$app->user;
    }

    public function run(): void
    {
        echo $this->router->resolve();
    }

    public function login(DbModel $user): bool
    {
        $this->user = $user;
        $primaryKey = $user->primaryKey();
        $primaryKeyValue = $user->{$primaryKey};
        $this->session->set('user', $primaryKeyValue);
        return true;
    }

    public function logout(): void
    {
        $this->user = null;
        $this->session->remove('user');

    }


}

