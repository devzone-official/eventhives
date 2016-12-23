<?hh
class Database{
	private static string $host = "localhost";
	private static int $port = 3306;
	private static string $dbname = "eventhives";
	private static string $user = "root";
	private static string $password = "";
	public function __construct() {

  }
	public static async function connect(): Awaitable<AsyncMysqlConnection>{
		return await AsyncMysqlClient::connect(Database::$host, Database::$port, Database::$dbname, Database::$user, Database::$password);
	}
	public async function makeQuery(string $query): Awaitable<AsyncMysqlQueryResult>{
		$conn = await Database::connect();
		$result = await $conn->query($query);
		$conn->close();
		return $result;
	}
}
