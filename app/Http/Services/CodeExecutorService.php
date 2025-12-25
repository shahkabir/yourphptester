<?php

namespace App\Http\Services;

use Illuminate\Http\JsonResponse;

class CodeExecutorService
{
    public function execute(string $version, string $code): JsonResponse
    {
        try{
                // Implementation for executing the PHP code based on version
                // This is a placeholder for the actual execution logic
                $sandbox = storage_path("sandbox"); ///php{$version}
                
                // Write code to a temp file
                $file = $sandbox . '\input_' . uniqid() . '.php';
                $code = $this->sanitizeCode($code);
                //dd($code);
                //dd($file);

                /*$code = "<?php\n" . $code . "\n?>";*/
                /*echo 'file:'.*/ file_put_contents($file, $code);
                //die();
                // Execute using correct PHP binary
                /*echo*/ $phpExecutionPath = $this->phpBinaryPath($version);
                //die();

                $start = microtime(true);

                $cmd = escapeshellcmd($phpExecutionPath) . ' ' . escapeshellarg($file);
                //dd($cmd);
                
                $descriptors = [
                    1 => ['pipe', 'w'], // stdout
                    2 => ['pipe', 'w'], // stderr
                ];

                $output = '';
                $exitCode = null;

                try {
                    $process = proc_open($cmd, $descriptors, $pipes);

                    if (!is_resource($process)) {
                        throw new \RuntimeException('Failed to start PHP process');
                    }

                    $stdout = stream_get_contents($pipes[1]);
                    fclose($pipes[1]);

                    $stderr = stream_get_contents($pipes[2]);
                    fclose($pipes[2]);

                    $exitCode = proc_close($process);

                    $output = $stdout;
                    if (!empty($stderr)) {
                        $output .= "\n" . $stderr;
                    }
                } finally {
                    if (file_exists($file)) {
                        @unlink($file);
                    }
                }

                $end = microtime(true);

                return response()->json([
                    'output' => $output,
                    'exit_code' => $exitCode,
                    'success' => $exitCode === 0,
                    'execution_time' => ($end - $start) * 1000, // in milliseconds
                ]);

        }catch(\Exception $e){
            return response()->json([
                'output' => 'Error: '.$e->getMessage(),
                'execution_time' => 0
            ]);
        }
    }

    private function sanitizeCode($code)
    {
        // Basic sanitization to prevent dangerous functions
        $dangerousFunctions = [
            'exec', 'system', 'passthru', 'proc_open', 'popen',
            'curl_exec', 'curl_multi_exec', 'parse_ini_file', 'show_source',
            'file_put_contents', 'file_get_contents', 'fopen', 'fwrite',
            'unlink', 'rmdir', 'mkdir', 'copy', 'move_uploaded_file',
            'phpinfo()'
        ];

        foreach ($dangerousFunctions as $function) {
            $code = str_ireplace($function, '', $code);
        }

        //Check if php tags are present
        if (stripos($code, '<?php') === false) {
            $code = "<?php\n" . $code;
        }

        //Check if closing tag is present
        if (stripos($code, '?>') === false) {
            $code .= "\n?>";
        }

        //dd($code);
        return $code;
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