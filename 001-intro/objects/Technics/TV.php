<?php


namespace TVs;

class TV {
    public string $channeName1;
    public string $channeName2;

    public function __construct(string $channel, string $channel2) {
        $this->channelName1 = $channel;
        $this->channelName2 = $channel2;
    }

    public function nextChannel(): void {
        echo ("Now you see $this->channelName2" .PHP_EOL);
    }

    public function previousChannel(): void {
        echo ("Now you see $this->channelName1" .PHP_EOL);
    }

}