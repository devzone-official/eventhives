<?hh

class Session{
	public User $user;
	public string $id;
	public function __construct(User $user){
		$this->user = $user;
		$this->id = $this->getId();
	}
	private function getId(): string{
		return SessionServer::get($this->user->type);
	}
	public function stop(): void{
		$this->user->id = "guest";
	}
	public function check(): bool{
		return SessionServer::check($this->user->type);
	}
	public function login(): void{
		SessionServer::set($this->user->type, $this->user->id);
	}
	public function logout(): void{
		SessionServer::delete($this->user->type);
	}
	public function status(): bool{
		if($this->check()){
			$this->user->status = true;
			return true;
		}
		else {
			$this->user->status = false;
			return false;
		}
	}
}
