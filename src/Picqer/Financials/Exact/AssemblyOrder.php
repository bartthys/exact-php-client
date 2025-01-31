<?php

namespace Picqer\Financials\Exact;

/**
 * Class AssemblyOrder.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=InventoryAssemblyOrders
 *
 * @property string $ID A guid that is the unique identifier of the assembly order
 * @property string $AssemblyDate Planned date for assembly of the item
 * @property string $Description Description of assembly order
 * @property int $Division Division code
 * @property float $FinishedQuantity Quantity of items that have actually been assembled
 * @property string $Item Reference to assembled item
 * @property string $ItemCode Assembled item code
 * @property string $ItemDescription Description of assembled item
 * @property string $Notes Notes of the assembly order
 * @property string $OrderDate Date of the assembly order is initiated
 * @property int $OrderNumber Assembly order number
 * @property int $OrderStatus Assembly order status: 20 = Open, 30 = Partial, 50 = Complete
 * @property PartItem[] $PartItems Collection of part items for assembly order
 * @property float $PlannedQuantity Planned quantity of the item to be assembled
 * @property string $StorageLocation Reference to storage location
 * @property string $StorageLocationCode Storage location code
 * @property string $StorageLocationDescription Storage location description
 * @property string $Unit The standard unit of the assembled item
 * @property string $UnitCode Code of Unit
 * @property string $UnitDescription Description of Unit
 * @property string $Warehouse Warehouse
 * @property string $WarehouseCode Code of Warehouse
 * @property string $WarehouseDescription Description of Warehouse
 */
class AssemblyOrder extends Model
{
    use Query\Findable;

    protected $fillable = [
        'ID',
        'AssemblyDate',
        'Description',
        'Division',
        'FinishedQuantity',
        'Item',
        'ItemCode',
        'ItemDescription',
        'Notes',
        'OrderDate',
        'OrderNumber',
        'OrderStatus',
        'PartItems',
        'PlannedQuantity',
        'StorageLocation',
        'StorageLocationCode',
        'StorageLocationDescription',
        'Unit',
        'UnitCode',
        'UnitDescription',
        'Warehouse',
        'WarehouseCode',
        'WarehouseDescription',
    ];

    protected $url = 'inventory/AssemblyOrders';
}
