struktur 

app/model
app/http/controler(controler)
app/filament
app/livewire(mounted render view)
public(css/image)
database/migration(buat bikin db)
database/seeder
resourc/view(view)
routes(link)



string('footer');

baut php artisan make:model Product -ms


'name' => 'Sepatu',
'deskription' => 'Adidas',
'image' => '',


$
copy product seeder ke database dan berikan 
$this->call([
    ProductSeeder::class
])

kalo sudah balik ke terminal
php artisan migrate
php artisan db:migrate

masuk ke model/product


php artisan make:filament-widget product 

stst
admin panel

