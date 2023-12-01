# kriptografi_otp

One Time Pad

<table>
<th>Nama</th>
<th>kelas</th>
<tr>
<th>Zhafira Abadiningrum Ks</th>
<th>TI.21.A1</th>
</tr>
</table>

## Alur Algoritma
1.	Tentukan plainteks
2.	Tentukan kunci
   ```
plaintext = input("Plaintext: ")
key = input("kunci: ")
```
3.	Ubahk plainteks ke ascii
4.	Ubah kunci ke ascii
```
asci = konversiascii(text)
key_A = konversiascii(key)
```  
5.	Ubah planinteks ascii (Desimal) ke biner
6.	Ubah Kunci ascii (Desimal) ke biner
```
textb = konversibiner(asci)
keyb = konversibiner(key_A)
```
7.	Lakukan Xor hasil biner Plainteks dan Kunci
    ```
    result = xor_biner(textb, keyb)
    ```
12.	Hasil XOR kembalikan ke decimal
13.	Desimal hasil Xor ambil kode asciinya jadilah Eckeripsi OTP

```
decrypted_result = xor_biner(result, keyb)
hasil_deskripsi_karakter = [kodeascii(biner_ke_desimal(biner)) for biner in decrypted_result]
decimal_results = [biner_ke_desimal(b) for b in result]
ascii_results = [kodeascii(d) for d in decimal_results]
```
## Hasil
<img width="670" alt="py" src="https://github.com/zhafiraak/kriptografi_otp/assets/92495285/bb1b249b-9ff1-406a-8430-d337a435682f">

### TERIMAKASIH
