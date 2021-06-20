<?php
declare(strict_types=1);

namespace objects\Interface;

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