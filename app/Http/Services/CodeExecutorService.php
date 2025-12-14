<?php

namespace App\Http\Services;

use Illuminate\Http\JsonResponse;

class CodeExecutorService
{
    public function execute(string $version, string $code): JsonResponse
    {
        // Implementation for executing the PHP code based on version
        // This is a placeholder for the actual execution logic
        $sandbox = storage_path("sandbox"); ///php{$version}
        
        // Write code to a temp file
        $file = $sandbox . '/input_' . uniqid() . '.php';

        $code = "<?php\n" . $code . "\n?>";
        /*echo 'file:'. */file_put_contents($file, $code);
        //die();
        // Execute using correct PHP binary
        /*echo*/ $phpExecutionPath = $this->phpBinaryPath($version);
        //die();
        $start = microtime(true);
        $cmd = escapeshellcmd("$phpExecutionPath $file 2>&1");
        $end = microtime(true);
        /*echo*/ $output = shell_exec($cmd);
        //die();

        unlink($file);

        return response()->json([
            'output' => $output,
            'execution_time' => ($end - $start) * 1000 // in milliseconds,
        ]);
    }

    private function phpBinaryPath($versionWithPath)
    {
        //It will return from .env file
        //return "/usr/bin/php{$version}"; 
        return env( strtoupper($versionWithPath), 'D:\php-8.3\php.exe' );
        //die();
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