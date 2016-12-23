<?hh

class Error extends Action{
  public function __construct(){
    parent::__construct();
  }
  public function do(): void{
    echo "Page Error";
  }
}
