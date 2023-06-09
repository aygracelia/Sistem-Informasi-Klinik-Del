<?php

namespace Database\Seeders;

use App\Models\Medicine;
use App\Models\MedicineInOut;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class MedicineSeeder extends Seeder
{
    public function run()
    {
        $medicine = array(
            [
                'name' => 'RANITIDINE',
                'type' => 'TABLET',
                'quantity' => '70',
                'category' => 'Asam Lambung',
            ],
            [
                'name' => 'DIAFORM',
                'type' => 'TABLET',
                'quantity' => '500',
                'category' => 'Diare',
            ],
            [
                'name' => 'ZINK TABLE',
                'type' => 'TABLET',
                'quantity' => '300',
                'category' => 'Diare',
            ],
            [
                'name' => 'KASA STERIL',
                'type' => 'BOX',
                'quantity' => '10',
                'category' => 'Pembalut Luka',
            ],
            [
                'name' => 'AMOXICILLIN TABLET',
                'type' => 'TABLET',
                'quantity' => '0',
                'category' => 'Antibiotik',
            ],
            [
                'name' => 'NEO-PROTIFED',
                'type' => 'TABLET',
                'quantity' => '60',
                'category' => 'Alergi',
            ],
            [
                'name' => 'NATRIUM DIKLOFENAK/SODIUM DIKLOFENAK',
                'type' => 'TABLET',
                'quantity' => '0',
                'category' => 'Meredakan Nyeri',
            ],
            [
                'name' => 'ANTASIDA TABLET',
                'type' => 'TABLET',
                'quantity' => '0',
                'category' => 'Asam Lambung',
            ],
            [
                'name' => 'LACTO B',
                'type' => 'PCS',
                'quantity' => '10',
                'category' => 'Diare',
            ],
            [
                'name' => 'METHYLPREDNISOLONE',
                'type' => 'TABLET',
                'quantity' => '10',
                'category' => 'Asma',
            ],
            [
                'name' => 'FARSIFEN PLUS',
                'type' => 'TABLET',
                'quantity' => '50',
                'category' => 'Meredakan Nyeri',
            ],
            [
                'name' => 'MEFENAMIC ACID ',
                'type' => 'TABLET',
                'quantity' => '30',
                'category' => 'Meredakan Nyeri',
            ],
            [
                'name' => 'VALSARTAN 80MG',
                'type' => 'TABLET',
                'quantity' => '10',
                'category' => 'Hipertensi',
            ],
            [
                'name' => 'ZEGAVIT',
                'type' => 'TABLET',
                'quantity' => '0',
                'category' => 'Multivitamin',
            ],
            [
                'name' => 'SAMCORBEX',
                'type' => 'TABLET',
                'quantity' => '0',
                'category' => 'Multivitamin',
            ],
            [
                'name' => 'SCOPMA PLUS',
                'type' => 'TABLET',
                'quantity' => '0',
                'category' => 'Meredakan Nyeri',
            ],
            [
                'name' => 'NEURALGIN ',
                'type' => 'TABLET',
                'quantity' => '0',
                'category' => 'Meredakan Nyeri',
            ],
            [
                'name' => 'OMEGTAMINE',
                'type' => 'TABLET',
                'quantity' => '50',
                'category' => 'Alergi',
            ],
            [
                'name' => 'NEUROBION PUTIH',
                'type' => 'TABLET',
                'quantity' => '100',
                'category' => 'Suplemen',
            ],
            [
                'name' => 'NEUROBION FORTE/PINK',
                'type' => 'TABLET',
                'quantity' => '50',
                'category' => 'Suplemen B6',
            ],
            [
                'name' => 'MELOXICAM',
                'type' => 'TABLET',
                'quantity' => '30',
                'category' => 'Meredakan Nyeri',
            ],
            [
                'name' => 'LANSOPRAZOLE',
                'type' => 'TABLET',
                'quantity' => '80',
                'category' => 'Asam Lambung',
            ],
            [
                'name' => 'OSFIT',
                'type' => 'TABLET',
                'quantity' => '0',
                'category' => 'Suplemen',
            ],
            [
                'name' => 'IMBOOST TABLET',
                'type' => 'TABLET',
                'quantity' => '20',
                'category' => 'Suplemen',
            ],
            [
                'name' => 'HEVIT-C 1000 MG',
                'type' => 'TABLET',
                'quantity' => '50',
                'category' => 'Vitamin C',
            ],
            [
                'name' => 'HEVIT-500 MG',
                'type' => 'TABLET',
                'quantity' => '30',
                'category' => 'Vitamin C',
            ],
            [
                'name' => 'VITAMIN-D',
                'type' => 'POT',
                'quantity' => '4',
                'category' => 'Vitamin D',
            ],
            [
                'name' => 'VITAMIN-B COMP',
                'type' => 'POT',
                'quantity' => '3',
                'category' => 'Vitamin B',
            ],
            [
                'name' => 'PARACETAMOL TABLET',
                'type' => 'TABLET',
                'quantity' => '50',
                'category' => 'Demam',
            ],
            [
                'name' => 'PARACETAMOL POT',
                'type' => 'POT',
                'quantity' => '2',
                'category' => 'Flu',
            ],
            [
                'name' => 'CTM POT',
                'type' => 'POT',
                'quantity' => '1',
                'category' => 'Mual dan Muntah',
            ],
            [
                'name' => 'DOMPERIDONE TABLET',
                'type' => 'TABLET',
                'quantity' => '100',
                'category' => 'Flu',
            ],
            [
                'name' => 'CALORTUSIN',
                'type' => 'TABLET',
                'quantity' => '350',
                'category' => 'Anemia',
            ],
            [
                'name' => 'SANGOBION',
                'type' => 'TABLET',
                'quantity' => '0',
                'category' => 'Flu',
            ],
            [
                'name' => 'TRAMENZA',
                'type' => 'TABLET',
                'quantity' => '100',
                'category' => 'Hipertensi',
            ],
            [
                'name' => 'AMLODIPINE 5 MG',
                'type' => 'TABLET',
                'quantity' => '150',
                'category' => 'Jantung',
            ],
            [
                'name' => 'BISOPROROL',
                'type' => 'TABLET',
                'quantity' => '40',
                'category' => 'Bakteri Tenggorokan',
            ],
            [
                'name' => 'CEFADROXIL TABLET',
                'type' => 'TABLET',
                'quantity' => '230',
                'category' => 'Infeksi Bakteri',
            ],
            [
                'name' => 'OMEPRAZOLE',
                'type' => 'TABLET',
                'quantity' => '480',
                'category' => 'Lambung',
            ],
            [
                'name' => 'METRONIDAZOLE',
                'type' => 'TABLET',
                'quantity' => '50',
                'category' => 'Antibiotik',
            ],
            [
                'name' => 'DEXAMETHASONE',
                'type' => 'TABLET',
                'quantity' => '120',
                'category' => 'Flu',
            ],
            [
                'name' => 'CETIRIZINE',
                'type' => 'TABLET',
                'quantity' => '350',
                'category' => 'Diare',
            ],
            [
                'name' => 'ORALITE',
                'type' => 'Sachet',
                'quantity' => '90',
                'category' => 'Alergi',
            ],
            [
                'name' => 'RHINOS',
                'type' => 'TABLET',
                'quantity' => '20',
                'category' => 'Meredakan Nyeri',
            ],
            [
                'name' => 'FLUTAMOL',
                'type' => 'TABLET',
                'quantity' => '250',
                'category' => 'Hipertensi',
            ],
            [
                'name' => 'CAPTOPRIL',
                'type' => 'TABLET',
                'quantity' => '70',
                'category' => 'Antibiotik',
            ],
            [
                'name' => 'AZITROMICYN TABLET',
                'type' => 'TABLET',
                'quantity' => '100',
                'category' => 'Alergi',
            ],
            [
                'name' => 'DULCOLAX TABLET',
                'type' => 'BOX',
                'quantity' => '3',
                'category' => 'Mengurangi Rasa Sakit',
            ],
            [
                'name' => 'IBUPROFEN',
                'type' => 'TABLET',
                'quantity' => '30',
                'category' => 'Antibiotik',
            ],
            [
                'name' => 'CIPROLAXIN',
                'type' => 'TABLET',
                'quantity' => '130',
                'category' => 'Infeksi Bakteri',
            ],
            [
                'name' => 'ERYTHROMYCIN TABLET',
                'type' => 'TABLET',
                'quantity' => '120',
                'category' => 'Antibiotik',
            ],
            [
                'name' => 'VICEE 500 MG',
                'type' => 'TABLET',
                'quantity' => '200',
                'category' => 'Vitamin C',
            ],
            [
                'name' => 'FG TROCES',
                'type' => 'TABLET',
                'quantity' => '150',
                'category' => 'Tenggorokan',
            ],
            [
                'name' => 'AMBROXOL TABLET',
                'type' => 'TABLET',
                'quantity' => '800',
                'category' => 'Batuk',
            ],
            [
                'name' => 'ANTASIDA POT',
                'type' => 'POT',
                'quantity' => '2',
                'category' => 'Asam Lambung',
            ],
            [
                'name' => 'TRANSAMIN',
                'type' => 'TABLET',
                'quantity' => '50',
                'category' => 'Menghentikan Pendarahan',
            ],
            [
                'name' => 'ACYCLOVIR',
                'type' => 'TABLET',
                'quantity' => '150',
                'category' => 'Herpes',
            ],
            [
                'name' => 'SALBUTAMOL',
                'type' => 'TABLET',
                'quantity' => '80',
                'category' => 'Sesak Nafas',
            ],
            [
                'name' => 'SIMVASTATIN',
                'type' => 'TABLET',
                'quantity' => '100',
                'category' => 'Penurun Kolestrol',
            ],
            [
                'name' => 'MICROLAX',
                'type' => 'PCS',
                'quantity' => '3',
                'category' => 'Sembelit',
            ],
            [
                'name' => 'BENOSON-G',
                'type' => 'TUBE',
                'quantity' => '2',
                'category' => 'Alergi Kulit',
            ],
            [
                'name' => 'BENOSON-M',
                'type' => 'TUBE',
                'quantity' => '3',
                'category' => 'Penyakit Kulit',
            ],
            [
                'name' => 'INERSONE SALEP',
                'type' => 'TUBE',
                'quantity' => '3',
                'category' => 'Radang',
            ],
            [
                'name' => 'HYDROCORTISONE',
                'type' => 'TUBE',
                'quantity' => '24',
                'category' => 'Alergi',
            ],
            [
                'name' => 'KETOCONAZOLE',
                'type' => 'TUBE',
                'quantity' => '3',
                'category' => 'Panu',
            ],
            [
                'name' => 'ERLAMICETIN TETES TELINGA',
                'type' => 'PCS',
                'quantity' => '8',
                'category' => 'Obat Tetes Telinga',
            ],
            [
                'name' => 'ERLAMICETIN TETES MATA',
                'type' => 'PCS',
                'quantity' => '2',
                'category' => 'Obat Tetes Mata',
            ],
            [
                'name' => 'ICHITIOL ZALP',
                'type' => 'PCS',
                'quantity' => '5',
                'category' => 'Bisul',
            ],
            [
                'name' => 'SERBUK BUBUK PK',
                'type' => 'PCS',
                'quantity' => '1',
                'category' => 'Pembersih Borok dan Koreng',
            ],
            [
                'name' => 'SALEB 88',
                'type' => 'PCS',
                'quantity' => '2',
                'category' => 'Panu',
            ],
            [
                'name' => 'BETADINE KUMUR',
                'type' => 'PCS',
                'quantity' => '0',
                'category' => 'Obat Kumur',
            ],
            [
                'name' => 'BEDAK SALISYL',
                'type' => 'PCS',
                'quantity' => '0',
                'category' => 'Mengurangi Gatal pada Badan',
            ],
            [
                'name' => 'CENDOXITROL TETES MATA STERIL',
                'type' => 'PCS',
                'quantity' => '4',
                'category' => 'Obat Tetes Mata',
            ],
            [
                'name' => 'GENTAMICYN SALEP',
                'type' => 'TUBE',
                'quantity' => '3',
                'category' => 'Infeksi Bakteri',
            ],
            [
                'name' => 'BIOPLACENTON',
                'type' => 'TABLET',
                'quantity' => '0',
                'category' => 'Obat Luka Bakar',
            ],
            [
                'name' => 'TROMBOPOP',
                'type' => 'TABLET',
                'quantity' => '0',
                'category' => 'Obat Memar',
            ],
            [
                'name' => 'HOT IN DCL',
                'type' => 'PCS',
                'quantity' => '0',
                'category' => 'Mengurangi Peradangan',
            ],
            [
                'name' => 'HUFABETHAMINE SIRUP',
                'type' => 'BOTOL',
                'quantity' => '1',
                'category' => 'Alergi',
            ],
            [
                'name' => 'PROMEDEX SIRUP',
                'type' => 'BOTOL',
                'quantity' => '1',
                'category' => 'Meredakan Batuk',
            ],
            [
                'name' => 'LASAL EXPECTORANT',
                'type' => 'BOTOL',
                'quantity' => '3',
                'category' => 'Asma',
            ],
            [
                'name' => 'LASAL SIRUP',
                'type' => 'BOTOL',
                'quantity' => '3',
                'category' => 'Asma',
            ],
            [
                'name' => 'AMOXCICILIN SIRUP',
                'type' => 'BOTOL',
                'quantity' => '7',
                'category' => 'Antibiotik',
            ],
            [
                'name' => 'SILADEX HIJAU',
                'type' => 'BOTOL',
                'quantity' => '4',
                'category' => 'Batuk Berdahak',
            ],
            [
                'name' => 'SILADEX ATTITUSIVE',
                'type' => 'BOTOL',
                'quantity' => '10',
                'category' => 'Batuk Kering',
            ],
            [
                'name' => 'HUFAGRIP KUNING',
                'type' => 'BOTOL',
                'quantity' => '10',
                'category' => 'Flu',
            ],
            [
                'name' => 'HUFAGRIP BIRU',
                'type' => 'BOTOL',
                'quantity' => '12',
                'category' => 'Flu dan Pilek',
            ],
            [
                'name' => 'HUFAGRIP BP HIJAU',
                'type' => 'BOTOL',
                'quantity' => '6',
                'category' => 'Batuk dan Pilek',
            ],
            [
                'name' => 'PLANTACYD SIRUP',
                'type' => 'BOTOL',
                'quantity' => '0',
                'category' => 'Obat Pereda Mual dan Muntah',
            ],
            [
                'name' => 'DOMPERIDONE SIRUP',
                'type' => 'BOTOL',
                'quantity' => '78',
                'category' => 'Obat Pereda Mual dan Muntah',
            ],
            [
                'name' => 'STIMUNO SIRUP',
                'type' => 'BOTOL',
                'quantity' => '0',
                'category' => 'Peningkat Daya Tahan Tubuh',
            ],
            [
                'name' => 'IMBOOST SIRUP',
                'type' => 'BOTOL',
                'quantity' => '2',
                'category' => 'Suplemen Menjaga Daya Tahan Tubuh',
            ],
            [
                'name' => 'AMBROXOL SIRUP',
                'type' => 'BOTOL',
                'quantity' => '8',
                'category' => 'Batuk',
            ],
            [
                'name' => 'LERZIN SIRUP',
                'type' => 'BOTOL',
                'quantity' => '6',
                'category' => 'Batuk',
            ],
            [
                'name' => 'PAMOL SIRUP',
                'type' => 'BOTOL',
                'quantity' => '1',
                'category' => 'Demam',
            ],
            [
                'name' => 'ORADEX SIRUP',
                'type' => 'BOTOL',
                'quantity' => '8',
                'category' => 'Batuk',
            ],
            [
                'name' => 'COTRIM SIRUP',
                'type' => 'BOTOL',
                'quantity' => '16',
                'category' => 'Infeksi Bakteri',
            ],
            [
                'name' => 'FARSIFEN PLUS SIRUP',
                'type' => 'BOTOL',
                'quantity' => '7',
                'category' => 'Demam',
            ],
            [
                'name' => 'COMBATHRINE ANAK',
                'type' => 'BOTOL',
                'quantity' => '8',
                'category' => 'Obat Cacing',
            ],
            [
                'name' => 'COMBATHRINE TABLET',
                'type' => 'TABLET',
                'quantity' => '300',
                'category' => 'Obat Cacing',
            ],
            [
                'name' => 'ZINK SIRUP',
                'type' => 'BOTOL',
                'quantity' => '10',
                'category' => 'Suplemen',
            ],
            [
                'name' => 'METRONIDAZOLE SIRUP',
                'type' => 'BOTOL',
                'quantity' => '7',
                'category' => 'Antibiotik',
            ],
            [
                'name' => 'ERYTHROMYCIN SIRUP',
                'type' => 'BOTOL',
                'quantity' => '3',
                'category' => 'Antibiotik',
            ],
            [
                'name' => 'CEFADROXIL SIRUP',
                'type' => 'BOTOL',
                'quantity' => '8',
                'category' => 'Infeksi Bakteri',
            ],
            [
                'name' => 'GRANTUSIF TABLET',
                'type' => 'TABLET',
                'quantity' => '550',
                'category' => 'Pilek',
            ],
            [
                'name' => 'METFORMINE TABLET',
                'type' => 'TABLET',
                'quantity' => '150',
                'category' => 'Diabetes',
            ],
            [
                'name' => 'AMLODIPINE 10 MG',
                'type' => 'TABLET',
                'quantity' => '700',
                'category' => 'Hipertensi',
            ],
            [
                'name' => 'BENOSON-N',
                'type' => 'TUBE',
                'quantity' => '4',
                'category' => 'Meredakan Peradangan',
            ],
            [
                'name' => 'ACYCLOVIR SALEB',
                'type' => 'TUBE',
                'quantity' => '25',
                'category' => 'Herpes',
            ]
        );
        foreach ($medicine as $med) {
            Medicine::create($med);
            MedicineInOut::create([
                'medicine_id' => Medicine::where('name', $med['name'])->first()->id,
                'quantity_in' => $med['quantity'],
                'quantity_out' => 0,
                'quantity_remaining' => $med['quantity'],
            ]);
        }
    }
}
