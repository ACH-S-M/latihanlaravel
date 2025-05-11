show databases;
use penjualanonline;
show tables;
select * from pelanggan;
select * from produk;
select * from pesanan;
select * from pembayaran;
 select pelanggan.nama_pelanggan,
        pesanan.total_harga,
        produk.nama_produk,
        pembayaran.No_pembayaran,
        pembayaran.metode_pembayaran
from pembayaran 
INNER JOIN 
    pesanan on pembayaran.No_pesanan = pesanan.no_pesanan
INNER JOIN 
   pelanggan ON pesanan.Id_pelanggan = pelanggan.id_Pelanggan
INNER JOIN 
    detail_produk dp on pesanan.no_pesanan = dp.No_pesanan
INNER JOIN 
    produk on dp.id_produk = produk.id_produk;

-- create view pesanan_dipesan as 
-- select 
-- pelanggan.nama_pelanggan,
-- pelanggan.alamat,
-- pesanan.no_pesanan,
-- pesanan.total_harga,
-- pesanan.total_barang,
-- produk.nama_produk,
-- produk.harga_produk,
-- pesanan.waktu_pemesanan 
-- from pesanan 
-- inner join pelanggan on pesanan.id_pelanggan = pelanggan.id_Pelanggan
-- INNER JOIN detail_produk dp on pesanan.no_pesanan = dp.No_pesanan
-- INNER JOIN produk on dp.id_produk = produk.id_produk;
