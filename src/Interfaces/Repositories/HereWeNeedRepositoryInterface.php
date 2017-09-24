<?php
namespace CodeandoMexico\Sismomx\Core\Interfaces\Repositories;

/**
 * Interface HereWeNeedRepositoryInterface
 * @package CodeandoMexico\Sismomx\Core\Interfaces\Repositories
 */
interface HereWeNeedRepositoryInterface
{
    /**
     * @param int $styleSheetId
     * @param string $range
     * @param string $dimension
     * @return array
     */
    public function findAllByRange($styleSheetId, $range, $dimension = 'ROWS');
}
