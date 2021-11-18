<?php

declare(strict_types=1);

namespace Zorachka\Framework\Logger;

final class LoggerConfig
{
    private string $name;
    private bool $debug;
    private ?string $file;
    private bool $stderr;

    private function __construct(
        string $name,
        bool $debug,
        ?string $file,
        bool $stderr,
    ) {
        $this->name = $name;
        $this->debug = $debug;
        $this->file = $file;
        $this->stderr = $stderr;
    }

    public static function withDefaults(
        string $name = '',
        bool $debug = false,
        ?string $file = null,
        bool $stderr = true,
    ): self {
        return new self(
            $name, $debug, $file, $stderr
        );
    }

    /**
     * @return string
     */
    public function name(): string
    {
        return $this->name;
    }

    public function withName(string $name): self
    {
        $new = clone $this;
        $new->name = $name;

        return $new;
    }

    /**
     * @return bool
     */
    public function debug(): bool
    {
        return $this->debug;
    }

    /**
     * @return string
     */
    public function file(): string
    {
        return $this->file;
    }

    /**
     * @return bool
     */
    public function stderr(): bool
    {
        return $this->stderr;
    }
}
