<?php

namespace App\Actions\Social;

use App\Models\Joke;

interface SendInterface
{
    public function send(Joke $joke);

}