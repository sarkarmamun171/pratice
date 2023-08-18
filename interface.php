<?php



interface Logger {
    public function log($message);
}

// Implement file logging
class FileLogger implements Logger {
    private $filename;

    public function __construct($filename) {
        $this->filename = $filename;
    }

    public function log($message) {
        $formattedMessage = "[" . date("Y-m-d H:i:s") . "] " . $message . "\n";
        file_put_contents($this->filename, $formattedMessage, FILE_APPEND);
    }
}

// Implement console logging
class ConsoleLogger implements Logger {
    public function log($message) {
        echo "[" . date("Y-m-d H:i:s") . "] " . $message . "\n";
    }
}

// Usage
$fileLogger = new FileLogger("log.txt");
$fileLogger->log("This is a log message from FileLogger.");

$consoleLogger = new ConsoleLogger();
$consoleLogger->log("This is a log message from ConsoleLogger.");

?>