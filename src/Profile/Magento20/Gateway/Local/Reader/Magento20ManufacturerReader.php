<?php declare(strict_types=1);
/*
 * (c) shopware AG <info@shopware.com>
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Swag\MigrationMagento\Profile\Magento20\Gateway\Local\Reader;

use Swag\MigrationMagento\Profile\Magento\Gateway\Local\Reader\ManufacturerReader;
use Swag\MigrationMagento\Profile\Magento20\Gateway\Local\Magento20LocalGateway;
use Swag\MigrationMagento\Profile\Magento20\Magento20Profile;
use SwagMigrationAssistant\Migration\DataSelection\DefaultEntities;
use SwagMigrationAssistant\Migration\MigrationContextInterface;

class Magento20ManufacturerReader extends ManufacturerReader
{
    public function supports(MigrationContextInterface $migrationContext): bool
    {
        return $migrationContext->getProfile() instanceof Magento20Profile
            && $migrationContext->getGateway()->getName() === Magento20LocalGateway::GATEWAY_NAME
            && $migrationContext->getDataSet()::getEntity() === DefaultEntities::PRODUCT_MANUFACTURER;
    }
}
