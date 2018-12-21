<?php
class Role
{
    public $role;
    public function __construct($role)
    {
        $this->role = $role;
    }
    function getRole($role)
    {
        return $role();
    }
}
$role = new Role(function ()
{
    return 'Hoc lap trinh PHP';
});
$data = $role->role;
echo $data();
echo $role->getRole(function ()
{
    return 'Hoc lap trinh Nodejs';
});
?>