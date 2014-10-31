<?php

use Zizaco\Entrust\EntrustPermission;

class Permission extends EntrustPermission
{

	# The database table used by the model.
	protected $tabel = 'permissions';

	# The field that can be assigned with mass-assignment.
	protected $fillable = [];
}

?>