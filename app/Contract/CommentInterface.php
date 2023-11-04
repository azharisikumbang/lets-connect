<?php

namespace App\Contract;

/**
 * mengirim dan menerima pesan dari sesama komunitas
 */
interface MessageInterface
{
    public function sendMessage(Community $sender, Post $currentPost, string $message): bool;
} 