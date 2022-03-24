<?php
class admin {


    function __construct($admin_nom,$admin_email,$admin_mdp,$role){
        $this->admin_email=$admin_email;
        $this->role=$role;
        $this->admin_nom=$admin_nom;
        $this->admin_mdp=$admin_mdp;
                echo "<script type='text/javascript'>alert('trmmm');</script>";

    }




    /**
     * PROPDESCRIPTION
     * 
     * @access public
     * @var PROPTYPE
     */
    public $admin_id;

    /**
     * PROPDESCRIPTION
     * 
     * @access public
     * @var PROPTYPE
     */
    public $admin_nom;

    /**
     * PROPDESCRIPTION
     * 
     * @access public
     * @var PROPTYPE
     */
    public $admin_mdp;

    /**
     * PROPDESCRIPTION
     * 
     * @access public
     * @var PROPTYPE
     */
    public $admin_email;

    /**
     * PROPDESCRIPTION
     * 
     * @access public
     * @var PROPTYPE
     */
    public $role;

    /**
     * PROPDESCRIPTION
     * 
     * @access public
     * @var PROPTYPE
     */
    public $last_access;

    /**
     * METHODDESCRIPTION
     * 
     * @access public
     * @return RETURNTYPE RETURNDESCRIPTION
     */
    public function getAdminId() {
        return $this->admin_id;
    }

    /**
     * METHODDESCRIPTION
     * 
     * @access public
     * @param ARGTYPE $adminId ARGDESCRIPTION
     */
    public function setAdminId($adminId) {
        $this->admin_id = $adminId;
    }

    /**
     * METHODDESCRIPTION
     * 
     * @access public
     * @return RETURNTYPE RETURNDESCRIPTION
     */
    public function getadmin_nom() {
        return $this->admin_nom;
    }

    /**
     * METHODDESCRIPTION
     * 
     * @access public
     * @param ARGTYPE $admin_nom ARGDESCRIPTION
     */
    public function setadmin_nom($admin_nom) {
        $this->admin_nom = $admin_nom;
    }

    /**
     * METHODDESCRIPTION
     * 
     * @access public
     * @return RETURNTYPE RETURNDESCRIPTION
     */
    public function getadmin_mdp() {
        return $this->admin_mdp;
    }

    /**
     * METHODDESCRIPTION
     * 
     * @access public
     * @param ARGTYPE $admin_mdp ARGDESCRIPTION
     */
    public function setadmin_mdp($admin_mdp) {
        $this->admin_mdp = $admin_mdp;
    }

    /**
     * METHODDESCRIPTION
     * 
     * @access public
     * @return RETURNTYPE RETURNDESCRIPTION
     */
    public function getadmin_email() {
        return $this->admin_email;
    }

    /**
     * METHODDESCRIPTION
     * 
     * @access public
     * @param ARGTYPE $admin_email ARGDESCRIPTION
     */
    public function setadmin_email($admin_email) {
        $this->admin_email = $admin_email;
    }

    /**
     * METHODDESCRIPTION
     * 
     * @access public
     * @return RETURNTYPE RETURNDESCRIPTION
     */
    public function getRole() {
        return $this->role;
    }

    /**
     * METHODDESCRIPTION
     * 
     * @access public
     * @param ARGTYPE $role ARGDESCRIPTION
     */
    public function setRole($role) {
        $this->role = $role;
    }

    /**
     * METHODDESCRIPTION
     * 
     * @access public
     * @return RETURNTYPE RETURNDESCRIPTION
     */
    public function getLastAccess() {
        return $this->last_access;
    }

    /**
     * METHODDESCRIPTION
     * 
     * @access public
     * @param ARGTYPE $lastAccess ARGDESCRIPTION
     */
    public function setLastAccess($lastAccess) {
        $this->last_access = $lastAccess;
    }
}