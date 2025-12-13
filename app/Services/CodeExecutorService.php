<?php

namespace App\Http\Services;

class CodeExecutorService
{
    public function execute(string $version, string $code): array
    {
        // Implementation for executing the PHP code based on version
        // This is a placeholder for the actual execution logic
        $sandbox = storage_path("sandbox/php{$version}");

        // Write code to a temp file
        $file = $sandbox . '/input_' . uniqid() . '.php';
        file_put_contents($file, $code);

        // Execute using correct PHP binary
        $binary = $this->phpBinaryPath($version);

        $cmd = escapeshellcmd("$binary $file 2>&1");
        $output = shell_exec($cmd);

        unlink($file);

        return response()->json([
            'output' => $output
        ])->toArray();
    }

    private function phpBinaryPath($versionWithPath)
    {
        //It will return from .env file
        //return "/usr/bin/php{$version}"; 
        return env( strtoupper($versionWithPath) );
        // You will adjust depending on Hostinger's environment

        // switch ($version) {
        //     case '74':
        //         return '/usr/bin/php7.4';
        //     case '80':
        //         return '/usr/bin/php8.0';
        //     case '81':
        //         return '/usr/bin/php8.1';
        //     case '82':
        //         return '/usr/bin/php8.2';
        //     default:
        //         throw new \InvalidArgumentException("Unsupported PHP version: $version");
        // }
    }
}

?>