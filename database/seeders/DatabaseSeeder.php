<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    
    public function run()
    {
        
        $this->call(RegionSeeder::class);
        $this->call(ProvinceSeeder::class);
        $this->call(UrbanSeeder::class);
        $this->call(InformationSeeder::class);
        $this->call(PaymentMethodSeeder::class);
        $this->call(OrderStatusSeeder::class);
        $this->call(BannerSeeder::class);
        $this->call(PartnerSeeder::class);
        $this->call(UserTableSeeder::class);
        $this->call(RoleSeeder::class);
                $this->call(RouteShipSeeder::class);
                $this->call(ServiceShipSeeder::class);

        $this->call(ProfileSeeder::class);
        $this->call(CategorySeeder::class);
        $this->call(BrandSeeder::class);
        $this->call(TypeProductSeeder::class);
        $this->call(ColorSeeder::class);
        $this->call(ProductSeeder::class);
        $this->call(PriceListSeeder::class);
        $this->call(PriceListDetailSeeder::class);
        $this->call(PriceListFormatSeeder::class);
        $this->call(SupplierSeeder::class);
        $this->call(ReceiptCategorySeeder::class);
        $this->call(ReceiptStockSeeder::class);
        $this->call(ReceiptStockDetailSeeder::class);
        
       
        // $this->call(ProductReviewSeeder::class);
        // $this->call(PriceRangeSeeder::class);
         $this->call(OrderSeeder::class);
        $this->call(OrderDetailSeeder::class);
        $this->call(ShippingSeeder::class);
        $this->call(NotificationSeeder::class);
        // $this->call(DebtSeeder::class);
        // $this->call(CashflowSeeder::class);
        // $this->call(PageSeeder::class);
        // $this->call(SlugSeeder::class);
                    // $this->call(PersonelSeeder::class);



    }
}
