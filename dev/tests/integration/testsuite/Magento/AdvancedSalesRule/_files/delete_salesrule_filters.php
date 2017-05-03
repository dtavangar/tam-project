<?php
/**
 * Copyright © 2013-2017 Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

/** @var \Magento\AdvancedSalesRule\Model\ResourceModel\Rule\Condition\Filter $filter */
$filter = \Magento\TestFramework\Helper\Bootstrap::getObjectManager()->create(
    'Magento\AdvancedSalesRule\Model\ResourceModel\Rule\Condition\Filter'
);

$connection = $filter->getConnection();
$filtersSelect = $connection->select()
->from(['e' => $filter->getMainTable()]);
$sql = $filtersSelect->deleteFromSelect('e');
$connection->query($sql);
