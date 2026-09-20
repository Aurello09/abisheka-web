<?php
// Wait for the database to become available, then run migrations.
// Usage: php scripts/wait-for-db.php

declare(strict_types=1);

// Try only once in this deployment-run to avoid restart loops.
$maxAttempts = 1;
$attempt = 0;
$sleepSeconds = 0;

fwrite(STDOUT, "Waiting for database (host=" . getenv('DB_HOST') . ")...\n");
while ($attempt < $maxAttempts) {
    try {
        $host = getenv('DB_HOST') ?: '127.0.0.1';
        $port = getenv('DB_PORT') ?: '3306';
        $db   = getenv('DB_DATABASE') ?: '';
        $user = getenv('DB_USERNAME') ?: '';
        $pass = getenv('DB_PASSWORD') ?: '';

        $dsn = sprintf('mysql:host=%s;port=%s;dbname=%s', $host, $port, $db);
        $opts = [
            PDO::ATTR_TIMEOUT => 3,
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        ];

        $pdo = new PDO($dsn, $user, $pass, $opts);
        fwrite(STDOUT, "Database reachable\n");
        break;
    } catch (Throwable $e) {
        $attempt++;
        $msg = $e->getMessage();
        $class = get_class($e);
        // Capture last exception for later reporting
        $lastException = $e;
        fwrite(STDOUT, sprintf("Attempt %d/%d: failed - %s: %s\n", $attempt, $maxAttempts, $class, $msg));
        if ($sleepSeconds > 0) {
            sleep($sleepSeconds);
        }
    }
}

if ($attempt >= $maxAttempts) {
    fwrite(STDERR, "Database did not become available after {$maxAttempts} attempt(s)\n");
    if (isset($lastException) && $lastException instanceof Throwable) {
        fwrite(STDERR, "Last error: (" . get_class($lastException) . ") " . $lastException->getMessage() . "\n");
    }
    exit(1);
}

fwrite(STDOUT, "Running migrations...\n");
// Run migrations via artisan process and forward exit code.
passthru(PHP_BINARY . ' artisan migrate --force', $exitCode);
if ($exitCode !== 0) {
    fwrite(STDERR, "Migrations failed with exit code {$exitCode}\n");
}
exit($exitCode);
