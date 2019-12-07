<?php

class TypedProperties
{
	public int $id;
	public int $rolId;
	public string $email;

	public function __construct(int $id, int $rolId, string $email) {
		$this->id = $id;
		$this->rolId = $rolId;
		$this->email = $email;
	}
}

$typedProperties = new TypedProperties(1, 2, 'jjrb6@hotmail.com');

echo "Id: {$typedProperties->id}\nRolId: {$typedProperties->rolId}\nEmail: {$typedProperties->email}";