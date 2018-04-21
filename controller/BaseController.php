<?
class BaseController {

  public $title;
  public $keywords;
  public $description;

  public $view = 'index';

  function __construct(){
    $this->title = Config::get('sitename');
  }
  
  public function index($data){
    return [];
  }

}
?>