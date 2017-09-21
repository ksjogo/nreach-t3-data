<?php
namespace Nreach\T3Data\Controller;

use TYPO3\CMS\Core\Utility\GeneralUtility;
use Nreach\T3Data\Domain\Repository\EntityRepository;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Nreach\T3Data\Utility;

class SingleController
{
    public function indexAction(ServerRequestInterface $request, ResponseInterface $response)
    {
        xdebug_break();

        $text = "{}";

        $uid = $request->getQueryParams()['uid'];

        if (!empty($uid))
            $text = Utility::textForEntities($uid, false);

        $response = $response->withHeader('Content-Type', 'application/json+ld');
        $response = $response->withHeader('Content-DIsposition', sprintf('%s.json', $uid));
        $response->getBody()->write($text);
        return $response;
    }
}
