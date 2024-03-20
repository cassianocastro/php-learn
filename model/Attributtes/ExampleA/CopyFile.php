<?php
declare(strict_types=1);

namespace Model\Attributes\ExampleA;

use RuntimeException;

/**
 *
 */
class CopyFile implements ActionHandler
{

    private string $fileName;
    private string $targetDir;

    public function __construct(string $fileName, string $targetDir)
    {
        $this->fileName  = $fileName;
        $this->targetDir = $targetDir;
    }

    #[SetUp]
    public function fileExists(): void
    {
        if ( ! file_exists($this->fileName) ) {
            throw new RuntimeException("File does not exist");
        }
    }

    #[SetUp]
    public function targetDirectoryExists(): void
    {
        if ( ! file_exists($this->targetDir) ) {
            mkdir($this->targetDir);
        } elseif ( ! is_dir($this->targetDir) ) {
            throw new RuntimeException("Target directory {$this->targetDir} is not a directory");
        }
    }

    public function execute(): void
    {
        copy($this->fileName, $this->targetDir . '/' . basename($this->fileName));
    }
}