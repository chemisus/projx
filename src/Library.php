<?php

interface Library
{
    /**
     * @return string
     */
    public function name();

    /**
     * @return string
     */
    public function version();

    /**
     * @return string
     */
    public function repository();
}
