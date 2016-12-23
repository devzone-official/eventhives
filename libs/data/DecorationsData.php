<?hh
class DecorationsData extends ServicesData{
  public User $user;
  public int $page;
  public function __construct(User $user){
    parent::__construct($user);
    $this->user = $user;
    $this->page = 1;
  }
  public function getDecorations(): Vector<Map<string,string>>{
    $db = new Database();
    $offset = 6 * ($this->page - 1);
    $limit = 6;
    $query = "SELECT * FROM decoration LIMIT $limit OFFSET $offset";
    $result = \HH\Asio\join($db->makeQuery($query));
    $productCount = $result->numRows();
    $block = $result->mapRows();
    return $block;
  }
}
