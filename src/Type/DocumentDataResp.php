<?php

namespace ErvClient\Type;

class DocumentDataResp
{
    /**
     * @var null | \ErvClient\Type\RespError
     */
    private ?\ErvClient\Type\RespError $error = null;

    /**
     * @var null | \ErvClient\Type\DocumentData
     */
    private ?\ErvClient\Type\DocumentData $documentData = null;

    /**
     * @return null | \ErvClient\Type\RespError
     */
    public function getError() : ?\ErvClient\Type\RespError
    {
        return $this->error;
    }

    /**
     * @param null | \ErvClient\Type\RespError $error
     * @return static
     */
    public function withError(?\ErvClient\Type\RespError $error) : static
    {
        $new = clone $this;
        $new->error = $error;

        return $new;
    }

    /**
     * @return null | \ErvClient\Type\DocumentData
     */
    public function getDocumentData() : ?\ErvClient\Type\DocumentData
    {
        return $this->documentData;
    }

    /**
     * @param null | \ErvClient\Type\DocumentData $documentData
     * @return static
     */
    public function withDocumentData(?\ErvClient\Type\DocumentData $documentData) : static
    {
        $new = clone $this;
        $new->documentData = $documentData;

        return $new;
    }
}

