<?php
namespace CViniciusSDias\GoogleCrawler;

/**
 * Class that represents a search term and makes sure that no spaces are used
 *
 * @package CViniciusSDias\GoogleCrawler
 * @author Vinicius Dias
 */
class SearchTerm
{
    /** @var string $searchTerm */
    protected $searchTerm;

    /**
     * Initializes the search term
     *
     * @param string $searchTerm
     */
    public function __construct(string $searchTerm)
    {
        $searchTerm = $this->normalize($searchTerm);
        $this->searchTerm = $searchTerm;
    }

    /**
     * Returns the normalized search term
     *
     * @return string
     */
    public function __toString(): string
    {
        return $this->searchTerm;
    }

    /**
     * Normalizes the search term removing its spaces
     *
     * @param $searchTerm
     * @return string
     * @todo Escape all the url special characters
     */
    protected function normalize($searchTerm): string
    {
        return preg_replace('/\s/', '+', $searchTerm);
    }
}