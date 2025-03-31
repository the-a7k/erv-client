<?php

namespace ErvClient\Type;

class DocumentData
{
    /**
     * @var null | mixed
     */
    private mixed $fileContents = null;

    /**
     * @var null | string
     */
    private ?string $fileName = null;

    /**
     * @var null | int
     */
    private ?int $fileSize = null;

    /**
     * @var null | string
     */
    private ?string $mimeType = null;

    /**
     * @return null | mixed
     */
    public function getFileContents() : mixed
    {
        return $this->fileContents;
    }

    /**
     * @param null | mixed $fileContents
     * @return static
     */
    public function withFileContents(mixed $fileContents) : static
    {
        $new = clone $this;
        $new->fileContents = $fileContents;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getFileName() : ?string
    {
        return $this->fileName;
    }

    /**
     * @param null | string $fileName
     * @return static
     */
    public function withFileName(?string $fileName) : static
    {
        $new = clone $this;
        $new->fileName = $fileName;

        return $new;
    }

    /**
     * @return null | int
     */
    public function getFileSize() : ?int
    {
        return $this->fileSize;
    }

    /**
     * @param null | int $fileSize
     * @return static
     */
    public function withFileSize(?int $fileSize) : static
    {
        $new = clone $this;
        $new->fileSize = $fileSize;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getMimeType() : ?string
    {
        return $this->mimeType;
    }

    /**
     * @param null | string $mimeType
     * @return static
     */
    public function withMimeType(?string $mimeType) : static
    {
        $new = clone $this;
        $new->mimeType = $mimeType;

        return $new;
    }
}

