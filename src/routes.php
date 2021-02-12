<?php

Route::post('/chargebee/webhook', \Jakebooy2\LaravelChargebee\Http\Controllers\WebhookController::class . '@handleWebhook');
