<?php

class BranchModel {

    public $branchCode;
    public $branchName;

    public function getAllBranches($cn) {
        
        $res = $cn->query("select * from branch");
        
        return $res;
    }


}

