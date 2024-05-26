SELECT tmatakuliah.NamaMatakuliah, AVG(tnilai.Grade) AS RataRataNilai
FROM tmahasiswa
JOIN tnilai ON tmahasiswa.NIRM = tnilai.NIRM
JOIN tmatakuliah ON tnilai.KodeMK = tmatakuliah.KodeMK
GROUP BY tmatakuliah.NamaMatakuliah
HAVING AVG(tnilai.Grade) > 75;
