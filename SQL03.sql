SELECT tmahasiswa.NamaMahasiswa
FROM tmahasiswa
JOIN tnilai ON tmahasiswa.NIRM = tnilai.NIRM
JOIN tmatakuliah ON tnilai.KodeMK = tmatakuliah
WHERE tmatakuliah.NamaMatakuliah IN ('Matematika', 'Aljabar')
GROUP BY tmahasiswa.NamaMahasiswa
HAVING COUNT(DISTINCT tmatakuliah.NamaMatakuliah) = 2;
