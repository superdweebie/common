<?php

namespace SdsCommon\Audit;

interface AuditInterface{

    public function __construct($oldValue, $newValue, $changedOn, $changedBy);
    
    public function getOldValue();

    public function getNewValue();

    public function getChangedOn();

    public function getChangedBy();
}
