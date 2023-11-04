# LOMBA HACKATHON: LETS CONNECTED

NAMA	: [APP NAME] – LET’S CONNECT

TUJUAN	: “Menjadi jembatan untuk menghubungkan sesama komunitas relevan dalam satu lingkup wilayah.”

## Latar Belakang Masalah:
1. Sejalan dengan misi dari Komunitas Kafekoding, kami berencana menjalin hubungan dan silaturahmi antara komunitas relevan se-kota Padang, atau lebih luas di-tingkat Sumatra Barat.
2. Komunitas memiliki kecenderungan untuk berkegiatan sendiri-sendiri, bukan karena menutup diri, tetapi karena kurangnya jalur komunikasi yang menghubungkan antara satu komunitas dengan komunitas lain.
3. Komunitas (khususnya Kafekoding) terkadang memiliki sumber daya terbatas, maka dari itu kami menginginkan untuk adanya pertukaran sumber daya dengan kesepakatan yang saling menguntungkan, sebagai contoh mengadakan sharing session dengan mengambil pembicara (mentor) dari komunitas lain.
4. Diharapkan menjadi jembatan untuk terbentuknya komunitas yang lebih besar dengan penyatuan antara beberapa komunitas.

## Solusi:
1. Memberikan kesempatan untuk setiap komunitas memperkenalkan profil komunitas nya (dengan basis kategori dan wilayah).
2. Mempersilahkan komunitas untuk membagikan aktivitas, rencana kegiatan (event), mengadakan pertemuan (diskusi) atau hal-hal lainnya.
3. Memberikan komunitas untuk menjalin komunikasi secara langsung (connect). [seperti di linkedin].

## Tambahan:
1. Memberikan kesempatan bagi penggunan non-komunitas untuk mendapatkan informasi mengenai komunitas yang tersedia berdasarkan ketegori dan wilayah.

## Target
Komunitas dan Pengguna Umum 

## Fitur:
1. Komunitas bisa, 
    - Mengelola Halaman Profil Komunitas.
    - Mempublikasikan kegiatan, event atau lainnya (postingan) dalam basis teks dan gambar. 
    - Menjalin komunikasi (connect) dengan komunitas lain, seperti dengan perpesanan dan sebagainya.
    - Melakukan pencarian mengenai komunitas relevan di dalam satu wilayah tertentu, misalnya komunitas IT di Kota Padang.
2. Publik bisa
    - Mendaftarkan komunitas baru.
    - Mencari informasi mengenai komunitas (baik secara kategori maupun wilyaah beroperasi)
    - Mengajukan permohonan bergabung ke komunitas yang disesuaikan dengan ketentuan dari komunitas.


## Kebutuhan Teknis

### End-Users (ROLE):	
1. Komunitas
2. Publik / Pengguna Umum (masyarakan, mahasiswa, pekerja dan sebagainya)

### Spesifikasi

#### Contract

1. CommunityInterface
```php
/**
 * Dipergunakan untuk melakukan interaksi antar komunitas dengan komunitas lain
 * 
 */
interface CommunityInterface
{
    public function connect(Community $from, Community $target): bool;

    public function disconnect(Community $from, Community $target): bool;

    public function acceptConnection(Community $me, Community $target): bool;

    public function rejectConnection(Community $me, Community $target): bool;

    public function addNewMember(Community $community, User $user): bool;

    public function rejectNewMember(Community $community, User $user): bool;

    public function kickMember(Community $community, User $user): bool;
}

```

2. ActivityInterface
```php
/**
 * Pengelolaan Aktifitas dari komunitas 
 * 
 */
interface ActivityInterface 
{
    public function getActivities(Community $community): array;

    public function postActivity(Community $community, Activity $activity): bool;

    public function updateActivity(Community $community, Activity $activity, array $data): bool;
    
    public function removeActivity(Community $community, Activity $activity): bool;
}
```

3. CommentInterface
```php
/**
 * mengirim dan menerima pesan dari sesama komunitas
 */
interface MessageInterface
{
    public function sendMessage(Community $sender, Post $currentPost, string $message): bool;
} 
```

4. ProfilInterface
```php
/**
 * pengelolaan profil dari komunitas
 */
interface ProfilInterface
{
    public function getProfilDetail(Community $community): Community;
}
```

5. PublicUserInterface
```php
/**
 * interaksi dari user publik ke platform
 */
interface PublicUserInterface
{
    public function joinToCommunity(User $user, Community $community): bool;

    public function RegisterMyCommunity(User $user, Community $community): bool;
}
```

2. Database Diagram


