SELECT tmatakuliah.NamaMatakuliah, COUNT(tmahasiswa.NIRM) AS JumlahMahasiswa
FROM tmahasiswa
JOIN tnilai ON tmahasiswa.NIRM = tnilai.NIRM
JOIN tmatakuliah ON tnilai.KodeMK = tmatakuliah.KodeMK
GROUP BY tmatakuliah.NamaMatakuliah
ORDER BY COUNT(tmahasiswa.NIRM) DESC
LIMIT 1;
