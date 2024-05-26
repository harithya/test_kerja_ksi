SELECT
  tmahasiswa.NamaMahasiswa,
  tmatakuliah.NamaMatakuliah,
  tnilai.Grade
FROM tmahasiswa
JOIN tnilai ON tmahasiswa.NIRM = tnilai.NIRM
JOIN tmatakuliah ON tnilai.KodeMK = tmatakuliah.KodeMK
WHERE YEAR(CURDATE()) - YEAR(tmahasiswa.TglLahir) > 25 AND tnilai.Grade < 60;
