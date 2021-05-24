<?php
declare(strict_types = 1);

abstract class Logger
{

    /**
     * Bitmask flags for severity.
     */
    const NONE = 0;
    const INFO = 0b000001;
    const DEBUG = 0b000010;
    const WARNING = 0b000100;
    const ERROR = 0b001000;
    const FUNCTIONAL_MESSAGE = 0b010000;
    const FUNCTIONAL_ERROR = 0b100000;
    const ALL = 0b111111;

    /** @var int A bitmask flag from this class. */
    protected $logMask;

    /** @var \Logger|null An optional next logger to handle the message */
    protected $next = null;

    /**
     * Logger constructor.
     *
     * @param int $mask
     *   A bitmask flag from this class.
     */
    public function __construct(int $mask)
    {
        $this->logMask = $mask;
    }

    /**
     * Set next responsible logger in the chain.
     *
     * @param \Logger $nextLogger
     *   Next responsible logger.
     *
     * @return \Logger
     *    Logger: Next responsible logger.
     */
    public function setNext(Logger $nextLogger): Logger
    {
        $this->next = $nextLogger;

        return $nextLogger;
    }

    /**
     * Message writer handler.
     *
     * @param string $msg
     *   Message string.
     * @param int $severity
     *   Severity of message as a bitmask flag from this class.
     *
     * @return $this
     */
    public function message(string $msg, int $severity): Logger
    {
        if ($severity & $this->logMask) {
            $this->writeMessage($msg);
        }
        if ($this->next !== null) {
            $this->next->message($msg, $severity);
        }

        return $this;
    }

    /**
     * Abstract method to write a message
     *
     * @param string $msg
     *   Message string.
     */
    abstract protected function writeMessage(string $msg);
}
?>