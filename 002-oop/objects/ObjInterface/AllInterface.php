<?php
declare(strict_types=1);

//namespace objects\ObjInterface;
namespace objects\Personal;
interface LeadInterface
{
    public function moreInfo() : string;
}

interface ApplicationCreatorInterface
{
    public function moreInfo() : string;
}

interface WebinarSpeakerInterface
{
    public function moreInfo() : string;
}