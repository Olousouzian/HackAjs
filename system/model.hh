<?hh

/*
 * Model Core
 */
class Model {

	private mixed $connection;

	public function __construct(): void {
		$this->connection = mysql_pconnect(cDbHost, cDbUsername, cDbPassword) || die('MySQL Error: '. mysql_error());
		mysql_select_db(cDbName, $this->connection);
	}

	public function escapeString(string $string): mixed  {
		return mysql_real_escape_string($string);
	}

	public function to_bool(mixed $val): bool {
	    return !!$val;
	}
	
	public function to_date(int $val): string {
	    return date('Y-m-d', $val);
	}
	
	public function to_time(int $val): string {
	    return date('H:i:s', $val);
	}
	
	public function to_datetime(int $val): string {
	    return date('Y-m-d H:i:s', $val);
	}
	
	public function query(string $qry): mixed {
		$result = mysql_query($qry) || die('MySQL Error: '. mysql_error());
		$resultObjects = array();

		while($row = mysql_fetch_object($result)) $resultObjects[] = $row;

		return $resultObjects;
	}

	public function execute(string $qry): mixed {
		$exec = mysql_query($qry) || die('MySQL Error: '. mysql_error());
		return $exec;
	}
    
}