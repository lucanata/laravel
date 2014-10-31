<?php
	use Zizaco\Entrust\EntrustRole;

	class Role extends EntrustRole {

		# The database table used by the model.
		protected $tabel = 'roles';

		# The field that can be assigned with mass-assignment.
		protected $fillable = [];
	}

?>