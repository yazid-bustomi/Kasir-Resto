<?php

namespace Database\Seeders;

use App\Models\Produk;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class ProdukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $produk1 = Produk::create([
            'nama_produks' => 'Garang Gesing Panna Cotta', 
            'kode_produks' => 'DE1', 
            'kategori_produks' => 1, 
            'harga_produks' => 33000, 
            'stok_produks' => 50, 
            'deskripsi_produks' => 'Layered Caranggesing and rich coconut panna cota, crumble', 
            'gambar_produks' => '1482302358.jpg'
        ]);
        
        $produk2 = Produk::create([
            'nama_produks' => 'Au Lait Italian Tiramisu', 
            'kode_produks' => 'DE2', 
            'kategori_produks' => 1, 
            'harga_produks' => 40000, 
            'stok_produks' => 50, 
            'deskripsi_produks' => 'Poured Tiramisu with mascarpone cheese, fresh milk', 
            'gambar_produks' => '499053501.jpg'
        ]);
        
        $produk3 = Produk::create([
            'nama_produks' => 'Truffle Churros', 
            'kode_produks' => 'DE3', 
            'kategori_produks' => 1, 
            'harga_produks' => 39000, 
            'stok_produks' => 50, 
            'deskripsi_produks' => 'Truffle Churros served with crumble and vanilla ice cream', 
            'gambar_produks' => '1601369772.jpg'
        ]);
        
        $produk4 = Produk::create([
            'nama_produks' => 'Creme Brulle', 
            'kode_produks' => 'DE4', 
            'kategori_produks' => 1, 
            'harga_produks' => 33000, 
            'stok_produks' => 50, 
            'deskripsi_produks' => 'Classic Creme Brulle with fresh fruit', 
            'gambar_produks' => '1802203432.jpg'
        ]);
        
        $produk5 = Produk::create([
            'nama_produks' => 'Banana Waffle Nutella', 
            'kode_produks' => 'DE5', 
            'kategori_produks' => 1, 
            'harga_produks' => 42000, 
            'stok_produks' => 50, 
            'deskripsi_produks' => 'Belgian sweet waffle, Nutella caramelized banana, caramel crumble and ice cream', 
            'gambar_produks' => '1387242715.jpg'
        ]);
        
        $produk6 = Produk::create([
            'nama_produks' => 'Chocolate Fondant', 
            'kode_produks' => 'DE6', 
            'kategori_produks' => 1, 
            'harga_produks' => 35000, 
            'stok_produks' => 50, 
            'deskripsi_produks' => 'Choco lava cake with caramel crumble, fresh fruit and ice cream', 
            'gambar_produks' => '920149739.jpg'
        ]);
        
        $produk7 = Produk::create([
            'nama_produks' => 'Banana Epe', 
            'kode_produks' => 'DE7', 
            'kategori_produks' => 1, 
            'harga_produks' => 37000, 
            'stok_produks' => 50, 
            'deskripsi_produks' => 'Grilled banana with jackfruit', 
            'gambar_produks' => '340260035.jpg'
        ]);
        
        $produk8 = Produk::create([
            'nama_produks' => 'Banana Split', 
            'kode_produks' => 'DE8', 
            'kategori_produks' => 1, 
            'harga_produks' => 41000, 
            'stok_produks' => 50, 
            'deskripsi_produks' => 'Fresh honey banana with ice cream cookies', 
            'gambar_produks' => '1485153965.jpg'
        ]);
        
        $produk9 = Produk::create([
            'nama_produks' => 'Moccaffogato', 
            'kode_produks' => 'DE9', 
            'kategori_produks' => 1, 
            'harga_produks' => 38000, 
            'stok_produks' => 50, 
            'deskripsi_produks' => 'Espresso mix choco with ice cream, granola and cookies', 
            'gambar_produks' => '1279725845.jpg'
        ]);
        
        $produk10 = Produk::create([
            'nama_produks' => 'Panacotta', 
            'kode_produks' => 'DE10', 
            'kategori_produks' => 1, 
            'harga_produks' => 36000, 
            'stok_produks' => 50, 
            'deskripsi_produks' => 'Vanilla panacotta with strawberry sauce', 
            'gambar_produks' => '1808450805.jpg'
        ]);
        
        $produk11 = Produk::create([
            'nama_produks' => 'Hollymoon Kiss', 
            'kode_produks' => 'DE11', 
            'kategori_produks' => 1, 
            'harga_produks' => 36000, 
            'stok_produks' => 50, 
            'deskripsi_produks' => 'Strawberry jam with ice cream and kiwi slice', 
            'gambar_produks' => '2016853802.jpg'
        ]);
        
        $produk12 = Produk::create([
            'nama_produks' => 'Sacher Cake', 
            'kode_produks' => 'DE12', 
            'kategori_produks' => 1, 
            'harga_produks' => 43000, 
            'stok_produks' => 50, 
            'deskripsi_produks' => 'Chocolate cake topped with very rich dark chocolate', 
            'gambar_produks' => '193739841.jpg'
        ]);
        
        $produk13 = Produk::create([
            'nama_produks' => 'Peanutbutter Oat Choco', 
            'kode_produks' => 'DR1', 
            'kategori_produks' => 2, 
            'harga_produks' => 31000, 
            'stok_produks' => 50, 
            'deskripsi_produks' => 'Peanut sauce mix oatmilk and chocolate', 
            'gambar_produks' => '900640671.jpg'
        ]);
        
        $produk14 = Produk::create([
            'nama_produks' => 'Pinacolada', 
            'kode_produks' => 'DR2', 
            'kategori_produks' => 2, 
            'harga_produks' => 40000, 
            'stok_produks' => 50, 
            'deskripsi_produks' => 'Pineapple and coconut water blend', 
            'gambar_produks' => '975442692.jpg'
        ]);
        
        $produk15 = Produk::create([
            'nama_produks' => 'Sweet Cream Strawberry', 
            'kode_produks' => 'DR3', 
            'kategori_produks' => 2, 
            'harga_produks' => 31000, 
            'stok_produks' => 50, 
            'deskripsi_produks' => 'Creamy strawberry Smoothies', 
            'gambar_produks' => '1256281793.jpg'
        ]);
        
        $produk16 = Produk::create([
            'nama_produks' => 'Sweet Melody', 
            'kode_produks' => 'DR4', 
            'kategori_produks' => 2, 
            'harga_produks' => 35000, 
            'stok_produks' => 50, 
            'deskripsi_produks' => 'Creamy coffee with apple and cinnamon flavor', 
            'gambar_produks' => '1081053433.jpg'
        ]);
        
        $produk17 = Produk::create([
            'nama_produks' => 'Pinacoco', 
            'kode_produks' => 'DR5', 
            'kategori_produks' => 2, 
            'harga_produks' => 32000, 
            'stok_produks' => 50, 
            'deskripsi_produks' => 'Mix coconut pineapple juice and lemon', 
            'gambar_produks' => '1560980480.jpg'
        ]);
        
        $produk18 = Produk::create([
            'nama_produks' => 'Snow Blue', 
            'kode_produks' => 'DR6', 
            'kategori_produks' => 2, 
            'harga_produks' => 39000, 
            'stok_produks' => 50, 
            'deskripsi_produks' => 'Creamy sweet and sour', 
            'gambar_produks' => '711229474.jpg'
        ]);

        $produk19 = Produk::create([
            'nama_produks' => 'Green Canyon', 
            'kode_produks' => 'DR7', 
            'kategori_produks' => 2, 
            'harga_produks' => 35000, 
            'stok_produks' => 50, 
            'deskripsi_produks' => 'Fresh vegetable with pineapple juice', 
            'gambar_produks' => '634836966.jpg'
        ]);
        
        $produk20 = Produk::create([
            'nama_produks' => 'Brew Gimont', 
            'kode_produks' => 'DR8', 
            'kategori_produks' => 2, 
            'harga_produks' => 35000, 
            'stok_produks' => 50, 
            'deskripsi_produks' => 'Mix cold brew, Ginger flavor and lemon juice', 
            'gambar_produks' => '297688323.jpg'
        ]);
        
        $produk21 = Produk::create([
            'nama_produks' => 'Coconut Mojito', 
            'kode_produks' => 'DR9', 
            'kategori_produks' => 2, 
            'harga_produks' => 32000, 
            'stok_produks' => 50, 
            'deskripsi_produks' => 'Sparkling coconut water and mint', 
            'gambar_produks' => '1991055822.jpg'
        ]);
        
        $produk22 = Produk::create([
            'nama_produks' => 'Tropical Honey Fruit', 
            'kode_produks' => 'DR10', 
            'kategori_produks' => 2, 
            'harga_produks' => 37000, 
            'stok_produks' => 50, 
            'deskripsi_produks' => 'Fresh sweet fruit and tropical fruit', 
            'gambar_produks' => '1323953647.jpg'
        ]);
        
        $produk23 = Produk::create([
            'nama_produks' => 'Tropical Fresh Fruit Bowl', 
            'kode_produks' => 'DR11', 
            'kategori_produks' => 2, 
            'harga_produks' => 33000, 
            'stok_produks' => 50, 
            'deskripsi_produks' => 'Fresh sour with coconut water, and tropical fruit', 
            'gambar_produks' => '1382438287.jpg'
        ]);
        
        $produk24 = Produk::create([
            'nama_produks' => 'Avocado Honey Bowl', 
            'kode_produks' => 'DR12', 
            'kategori_produks' => 2, 
            'harga_produks' => 33000, 
            'stok_produks' => 50, 
            'deskripsi_produks' => 'Avocado Honey Bowl', 
            'gambar_produks' => '1570648537.jpg'
        ]);
        
        $produk25 = Produk::create([
            'nama_produks' => 'Char Grilled Wagyu Maranggi', 
            'kode_produks' => 'MA2', 
            'kategori_produks' => 3, 
            'harga_produks' => 130000, 
            'stok_produks' => 50, 
            'deskripsi_produks' => 'Grilled beef wagyu maranggi and choice of side dish', 
            'gambar_produks' => '318353948.jpg'
        ]);
        
        $produk26 = Produk::create([
            'nama_produks' => 'Chicken Cordon Bleu', 
            'kode_produks' => 'MA1', 
            'kategori_produks' => 3, 
            'harga_produks' => 75000, 
            'stok_produks' => 50, 
            'deskripsi_produks' => 'Classic chicken cordon blue served with lyonnese potato and mushroom', 
            'gambar_produks' => '1044437302.jpg'
        ]);
        
        $produk27 = Produk::create([
            'nama_produks' => 'Beef Stroganof', 
            'kode_produks' => 'MA3', 
            'kategori_produks' => 3, 
            'harga_produks' => 98000, 
            'stok_produks' => 50, 
            'deskripsi_produks' => 'Slow-cooked beef in creamy sauce and mushroom served with choice of side dish', 
            'gambar_produks' => '902265994.jpg'
        ]);
        
        $produk28 = Produk::create([
            'nama_produks' => 'Pan Seared Norwegian Salmon', 
            'kode_produks' => 'MA4', 
            'kategori_produks' => 3, 
            'harga_produks' => 115000, 
            'stok_produks' => 50, 
            'deskripsi_produks' => 'Grilled Norwegian salmon with garlic lemon butter sauce and choice of side dish', 
            'gambar_produks' => '396115353.jpg'
        ]);
        
        $produk29 = Produk::create([
            'nama_produks' => 'Salmon Mentai', 
            'kode_produks' => 'MA5', 
            'kategori_produks' => 3, 
            'harga_produks' => 85000, 
            'stok_produks' => 50, 
            'deskripsi_produks' => 'Grilled salmon served with fragrant jasmine rice, mentai sauce, scramble egg, and seaweed', 
            'gambar_produks' => '1993259127.jpg'
        ]);
        
        $produk30 = Produk::create([
            'nama_produks' => 'Pas Thai Seafood', 
            'kode_produks' => 'MA6', 
            'kategori_produks' => 3, 
            'harga_produks' => 89000, 
            'stok_produks' => 50, 
            'deskripsi_produks' => 'Pad Thai with seafood, vegie, chilli flake, and crackers', 
            'gambar_produks' => '1277462382.jpg'
        ]);

        $produk31 = Produk::create([
            'nama_produks' => 'Chicken Hainan Char Siu', 
            'kode_produks' => 'MA7', 
            'kategori_produks' => 3, 
            'harga_produks' => 74000, 
            'stok_produks' => 50, 
            'deskripsi_produks' => 'Chinese BBQ Chicken, Hainan rice, and Hainan Broth', 
            'gambar_produks' => '1577525036.jpg'
        ]);
        
        $produk32 = Produk::create([
            'nama_produks' => 'Wagyu Beef Fried Rice', 
            'kode_produks' => 'MA8', 
            'kategori_produks' => 3, 
            'harga_produks' => 76000, 
            'stok_produks' => 50, 
            'deskripsi_produks' => 'Ejo fried rice with wagyu, acar, and crackers', 
            'gambar_produks' => '1268915161.jpg'
        ]);
        
        $produk33 = Produk::create([
            'nama_produks' => 'Striploin Angus', 
            'kode_produks' => 'MA9', 
            'kategori_produks' => 3, 
            'harga_produks' => 125000, 
            'stok_produks' => 50, 
            'deskripsi_produks' => 'Served with mashed potato, sautéed spinach, and chickpeas', 
            'gambar_produks' => '200416766.jpg'
        ]);
        
        $produk34 = Produk::create([
            'nama_produks' => 'Meat and Prawn', 
            'kode_produks' => 'MA10', 
            'kategori_produks' => 3, 
            'harga_produks' => 158000, 
            'stok_produks' => 50, 
            'deskripsi_produks' => 'Grilled US top blade, grilled prawn, potato mozzarella braised shortplate, and pepper sauce', 
            'gambar_produks' => '1952687587.jpg'
        ]);
        
        $produk35 = Produk::create([
            'nama_produks' => 'Aglio Salmon Belly', 
            'kode_produks' => 'MA11', 
            'kategori_produks' => 3, 
            'harga_produks' => 98000, 
            'stok_produks' => 50, 
            'deskripsi_produks' => 'Spicy pasta with salmon belly and kemangi tuile', 
            'gambar_produks' => '1408087414.jpg'
        ]);
        
        $produk36 = Produk::create([
            'nama_produks' => 'Australian Healthy Brunch', 
            'kode_produks' => 'MA12', 
            'kategori_produks' => 3, 
            'harga_produks' => 88000, 
            'stok_produks' => 50, 
            'deskripsi_produks' => 'Vegetable and scramble egg, served with chickpea, slice avocado, brown, and sautéed mushroom', 
            'gambar_produks' => '520189218.jpg'
        ]);
        
        $produk37 = Produk::create([
            'nama_produks' => 'Onion Rings', 
            'kode_produks' => 'SN1', 
            'kategori_produks' => 4, 
            'harga_produks' => 25000, 
            'stok_produks' => 50, 
            'deskripsi_produks' => 'Crispy onion rings with tartar sauce', 
            'gambar_produks' => '1103706762.jpg'
        ]);
        
        $produk38 = Produk::create([
            'nama_produks' => 'French Fries', 
            'kode_produks' => 'SN2', 
            'kategori_produks' => 4, 
            'harga_produks' => 22000, 
            'stok_produks' => 50, 
            'deskripsi_produks' => 'Original french fries', 
            'gambar_produks' => '1635586368.jpg'
        ]);
        
        $produk39 = Produk::create([
            'nama_produks' => 'Caramel Butter Crispy Banana', 
            'kode_produks' => 'SN3', 
            'kategori_produks' => 4, 
            'harga_produks' => 32000, 
            'stok_produks' => 50, 
            'deskripsi_produks' => 'Honey butter crispy banana, caramel sauce, and vanilla ice cream', 
            'gambar_produks' => '662250236.jpg'
        ]);
        
        $produk40 = Produk::create([
            'nama_produks' => 'Crispy Salt and Pepper Tofu', 
            'kode_produks' => 'SN4', 
            'kategori_produks' => 4, 
            'harga_produks' => 22000, 
            'stok_produks' => 50, 
            'deskripsi_produks' => 'Crispy tofu with savory seasoning', 
            'gambar_produks' => '1419651279.jpg'
        ]);
        
        $produk41 = Produk::create([
            'nama_produks' => 'Savory Cheese Cassava', 
            'kode_produks' => 'SN5', 
            'kategori_produks' => 4, 
            'harga_produks' => 30000, 
            'stok_produks' => 50, 
            'deskripsi_produks' => 'Tender fried cassava with cheese sauce', 
            'gambar_produks' => '1964402749.jpg'
        ]);
        
        $produk42 = Produk::create([
            'nama_produks' => 'Seafood Fritters of Twisted Dough', 
            'kode_produks' => 'SN6', 
            'kategori_produks' => 4, 
            'harga_produks' => 28000, 
            'stok_produks' => 50, 
            'deskripsi_produks' => 'Seafood twisted dough, creamy mayonnaise, sesame sauce, and katsuboushi', 
            'gambar_produks' => '429308850.jpg'
        ]);
        
        $produk43 = Produk::create([
            'nama_produks' => 'Garlic Parmesan Chicken Wings', 
            'kode_produks' => 'SN7', 
            'kategori_produks' => 4, 
            'harga_produks' => 37000, 
            'stok_produks' => 50, 
            'deskripsi_produks' => 'Crispy chicken wings garlic parmesan', 
            'gambar_produks' => '1627769077.jpg'
        ]);
        
        $produk44 = Produk::create([
            'nama_produks' => 'Potato Wedges', 
            'kode_produks' => 'SN8', 
            'kategori_produks' => 4, 
            'harga_produks' => 28000, 
            'stok_produks' => 50, 
            'deskripsi_produks' => '150g potato wedges in spicy seasoning and tartar sauce', 
            'gambar_produks' => '704125606.jpg'
        ]);
        
        $produk45 = Produk::create([
            'nama_produks' => 'Mozzarella Stick', 
            'kode_produks' => 'SN9', 
            'kategori_produks' => 4, 
            'harga_produks' => 31000, 
            'stok_produks' => 50, 
            'deskripsi_produks' => 'Melted mozzarella with in and out sauce', 
            'gambar_produks' => '1797181532.jpg'
        ]);
        
        $produk46 = Produk::create([
            'nama_produks' => 'Calamari Rings', 
            'kode_produks' => 'SN10', 
            'kategori_produks' => 4, 
            'harga_produks' => 29000, 
            'stok_produks' => 50, 
            'deskripsi_produks' => 'Crispy calamari rings with tartar sauce', 
            'gambar_produks' => '1751648732.jpg'
        ]);
        
        $produk47 = Produk::create([
            'nama_produks' => 'Fish and Chips', 
            'kode_produks' => 'SN11', 
            'kategori_produks' => 4, 
            'harga_produks' => 40000, 
            'stok_produks' => 50, 
            'deskripsi_produks' => 'Crispy fried fish, fries, and tartar sauce', 
            'gambar_produks' => '97477903.jpg'
        ]);
        
        $produk48 = Produk::create([
            'nama_produks' => 'Honey Chicken Wings', 
            'kode_produks' => 'SN12', 
            'kategori_produks' => 4, 
            'harga_produks' => 37000, 
            'stok_produks' => 50, 
            'deskripsi_produks' => 'Crispy chicken wings honey BBQ with bell pepper aioli sauce', 
            'gambar_produks' => '393701110.jpg'
        ]);
        
    }
}
