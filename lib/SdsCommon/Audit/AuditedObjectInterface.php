<?php

namespace SdsCommon\Audit;

interface AuditedObjectInterface{

    public function addAudit(AuditInterface $audit);
    
    public function getAudits();
}
